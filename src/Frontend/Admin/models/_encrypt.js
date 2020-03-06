const crypto = require('crypto');
const algorithm = 'aes-256-ctr';
const password = process.env.MIX_APP_KEY;

export const encrypt = function (text) {
    var cipher = crypto.createCipher(algorithm,password)
    var crypted = cipher.update(text,'utf8','hex')
    crypted += cipher.final('hex');
    return crypted;
}

export const decrypt = function (text) {
    var decipher = crypto.createDecipher(algorithm,password)
    var dec = decipher.update(text,'hex','utf8')
    dec += decipher.final('utf8');
    return dec;
}
