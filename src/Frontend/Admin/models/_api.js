import axios from 'axios'
import {getHeader} from './_config.js';

export default class {

    /**
     * Send GET Request
     * @param  {string} url
     * @return {Promise}
     */
    get(url) {
        return axios.get(url, {headers: getHeader()});
    }

    /**
     * Send FIND Request
     * @param  {string} url
     * @return {Promise}
     */
    find(url) {
        return axios.get(url, {headers: getHeader()});
    }

    /**
     * Send POST Request
     * @param  {string} url
     * @param  {object} payload Data object to send
     * @return {Promise}
     */
    create(url, payload) {
        return axios.post(url, payload, {headers: getHeader()})
    }

    /**
     * Send PATCH Request
     * @param  {string} url
     * @param  {object} payload Data Object to send
     * @return {Promise}
     */
    update(url, payload) {
        return axios.patch(url, payload, {headers: getHeader()})
    }

    /**
     * Send DELETE Request
     * @param  {string} url
     * @return {Promise}
     */
    delete(url) {
        return axios.delete(url, {headers: getHeader()});
    }

}
