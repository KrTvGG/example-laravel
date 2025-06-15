import axios from 'axios';
// import $ from 'jquery';
// window.$ = window.jQuery = $;
// import { createPopper } from '@popperjs/core';
// import '..//scss/style.scss';
// import * as bootstrap from 'bootstrap'
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
