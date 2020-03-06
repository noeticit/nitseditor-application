import {eventBus} from 'NitsModels/_events.js';

export default class session {

    constructor(STORAGE, INACTIVITY_SESSION) {
        this.STORAGE = STORAGE;
        this.INACTIVITY_SESSION = INACTIVITY_SESSION;
        this.key = 'nits-session-key';
    }

    start() {
        let t;
        // DOM Events
        jQuery(document).click(() => {
            this.resetTimer();
        });

        jQuery(document).keypress(() => {
            this.resetTimer();
        });

        var all = this.getAll() ? this.getAll() : {};
        all['session-id'] = 'sess:'+Date.now();

        this.setAll(all);

        clearInterval(t);

        t = setInterval(() => {
            this.getAll();
        }, 1000);
    }

    setAll(all) {
        //Stroe session...
        var timelife = new Date().getTime() + this.INACTIVITY_SESSION * 60 * 1000;
        if(Object.keys(all).length > 0) all['timelife'] = timelife
        window[this.STORAGE].setItem(this.key,JSON.stringify(all));
    }

    getAll() {
        var all = JSON.parse(window[this.STORAGE].getItem(this.key)) ? JSON.parse(window[this.STORAGE].getItem(this.key)) : {};
        if(Object.keys(all).length) {
            var life = all['timelife'];
            if(new Date().getTime() < life){
                return all;
            }else{
                this.clear() ;
                return {};
            }
        }
        else
            return {};
    }

    set(key, value) {
        if(key == 'session-id') return false;
        var all = this.getAll();

        if(!('session-id' in all)){
            this.start();
            all = this.getAll();
        }

        all[key] = value;

        this.setAll(all);
    }

    get(key) {
        var all = this.getAll();
        return all[key];
    }

    renew(sessionId){
        var all = this.getAll();
        all['session-id'] = 'sess:' + sessionId;
        this.setAll(all);
    }

    exists(){
        var all = this.getAll();
        return 'session-id' in all;
    }

    has(key){
        var all = this.getAll();
        return key in all;
    }

    remove(key){
        var all = this.getAll();
        delete all[key];

        this.setAll(all);
    }

    clear(){
        let storage = {};
        storage['session-id'] = 'sess:'+Date.now();
        this.setAll(storage);
    }

    destroy(){
        eventBus.$emit('log-out');
        var all = JSON.parse(window[this.STORAGE].getItem(this.key));
        this.setAll({'session-id': all['session-id'], 'timelife': all['timelife'] });
    }

    id(){
        return this.get('session-id');
    }

    refresh() {
        var all = JSON.parse(window[this.STORAGE].getItem(this.key)) ? JSON.parse(window[this.STORAGE].getItem(this.key)) : {};
        this.setAll(all);
    }

    resetTimer() {
        var off = this.INACTIVITY_SESSION * 60 * 1000;
        var current = new Date().getTime()
        var all = this.getAll();
        var session_init = all['timelife'] + off;
        var t;
        if(session_init > current) this.refresh();
        else this.destroy();
    }
}
