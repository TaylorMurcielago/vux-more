// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import router from './router'


import { Divider, Group, Cell } from 'vux'
Vue.component('divider', Divider)
Vue.component('group', Group)
Vue.component('cell', Cell)
Vue.config.productionTip = false
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