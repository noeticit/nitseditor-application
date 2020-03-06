import {encrypt} from "./_encrypt";
import {getHeader} from "./_config";
import store from "../store/_store";
import VueSession from 'NitsModels/_session';

let session = new VueSession(process.env.MIX_STORAGE_PERSIST, process.env.MIX_INACTIVITY_SESSION);

export default class auth {

    //Finding logged-in user.
    isLoggedIn() {
        // const tokenData = JSON.parse(window.localStorage.getItem('authUser'))
        // if(session.exists()) {
        //
        // }
        // return false;
        const tokenData = session.get('authUser');
        return tokenData && tokenData.access_token ? true : false;
    }

    //Login
    login(user) {
        return new Promise((resolve, reject) => {
            const authUser = {}

            const postData = {
                grant_type: 'password',
                username: user.email,
                password: user.password,
                client_id: process.env.MIX_CLIENT_ID,
                client_secret: process.env.MIX_CLIENT_SECRET,
                scope: ''
            }
            axios.post('/oauth/token', postData).then(response => {
                if (response.status === 200) {
                    authUser.access_token = encrypt(response.data.access_token);
                    authUser.refesh_token = encrypt(response.data.refresh_token);
                    session.set('authUser', authUser);
                    // window.localStorage.setItem('authUser', JSON.stringify(authUser));

                    axios.get('/nits-system-api/user', {headers: getHeader()}).then(res => {
                        if(res.status === 200)
                        {
                            authUser.first_name = encrypt(res.data.first_name)
                            authUser.last_name = res.data.last_name ? encrypt(res.data.last_name) : null;
                            authUser.email = encrypt(res.data.email)
                            authUser.role_id = res.data.role_id
                            authUser.email_verified_at = res.data.email_verified_at ? encrypt(res.data.email_verified_at) : null;

                            console.log(res.data.role.pages)
                            window.localStorage.setItem('permissions', )
                            //Storing into local storage.
                            session.set('authUser', authUser);
                            // window.localStorage.setItem('authUser', JSON.stringify(authUser));
                            //Storing to state.
                            store.commit("STORE_USER_DATA", authUser);

                            return resolve(res);
                        }
                    }).catch((err) => {
                        return reject(err);
                    })
                }
            }).catch((error) => {
                return reject(error);
            })
        })
    }

    //For Logout..
    logout() {
        session.remove('authUser');
        // window.localStorage.removeItem('authUser')
        return true;
    }

    //registration..
    registration(user) {
        //Call registration API, once done redirect them to login page.
        return new Promise((resolve, reject)  => {
            const userData = {
                first_name: user.first_name,
                email: user.email,
                mobile: user.mobile,
                password: user.password,
            }
            //User log request....
            axios.post('user/registration', userData).then(response => {
                if(response.status === 200)
                {
                    resolve('User Successfully Registered')
                }
            }).catch( (err) => {
                return reject(err);
            })
        })
    }
}
