// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import router from './router'
import axios from 'axios'
import { Flexbox, FlexboxItem } from 'vux'
import { TweenMax, TimelineMax, CSSPlugin } from "gsap/TweenMax";

import { XButton } from 'vux'
import { Divider, Group, Cell } from 'vux'
Vue.component('divider', Divider)
Vue.component('group', Group)
Vue.component('cell', Cell)
Vue.component('x-button', XButton)
Vue.component('flexbox', Flexbox)
Vue.component('flexbox-item', FlexboxItem)
Vue.config.productionTip = false
    // Vue.prototype.$axios = axios
Vue.prototype.$host = '/api'
import packedAxios from "./http";
Vue.use(packedAxios); //使用this.$http代替封装好的axios
//移动端延迟配置
const FastClick = require('fastclick')
FastClick.attach(document.body)

/* eslint-disable no-new */
new Vue({
    el: '#app',
    router,
    components: { App },
    template: '<App/>'
})