const HOST = window.location.hostname;
// console.log(HOST)
const Configs = {
    // API_URL: HOST === 'localhost' ? 'https://api.soulbeautyclub.com/' : 'http://localhost:3000/soul/core/',
    API_URL: HOST === 'localhost' ? 'http://localhost/automation' : HOST === 'golvash.org' ? "https://" + HOST : 'http://192.168.30.11',
    FILE_URL: HOST === 'localhost' ? 'http://localhost/automation' : HOST === 'golvash.org' ? "https://" + HOST : 'http://192.168.30.11',
    WS: '',
    IS_PRODUCTION: HOST === '',
    DEFAULT_LANG: 'EN'
};

