import {decrypt} from './_encrypt.js'
import VueSession from 'NitsModels/_session';

const session = new VueSession(process.env.MIX_STORAGE_PERSIST, process.env.MIX_INACTIVITY_SESSION);

export const getHeader = function () {
    const tokenData = session.get('authUser')
    const headers = {
        'Accept': 'application/json',
        'Authorization': tokenData ? 'Bearer ' + decrypt(tokenData.access_token) : null
    };
    return headers
};

export const clientId = process.env.MIX_CLIENT_ID;

export const clientSecret = process.env.MIX_CLIENT_SECRET;

export const appUrl = process.env.MIX_APP_URL;
