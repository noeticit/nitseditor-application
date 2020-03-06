import {decrypt} from "NitsModels/_encrypt";

const state =  {
    name: '',
    email: '',
    role: ''
}

const mutations = {
    
    STORE_USER_NAME(state, data) {
        state.name = data;
    },
    
    STORE_EMAIL(state, data) {
        state.email = data;
    },
    
    STORE_ROLE(state, role) {
        state.role = data;
    },
    
    STORE_USER_DATA(state, data) {
        state.name = data.name ? decrypt(data.name) : '';
        state.email = data.email ? decrypt(data.email) : '';
        state.role = data.role ? decrypt(data.role) : '';
    },
}

const actions = {
    storeUserData({commit}, userData) {
        const user = {
            name: data.name ? decrypt(data.name) : '',
            email: data.email ? decrypt(data.email) : '',
            role: data.role ? decrypt(data.role) : '',
        }
        commit('STORE_USER_DATA', user)
    }
}

const getters = {
    user_name(state) {
        state.name;
    },

    email(state) {
        state.email;
    },

    role(state) {
        state.role;
    },
}


export default {
    state, mutations, actions, getters
}
