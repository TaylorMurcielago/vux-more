import Vue from 'vue'
import Router from 'vue-router'
import HelloWorld from '@/components/HelloWorld'
import Video from '@/components/Video'
import Axios from '@/components/Axios'
import TimeLine from '@/components/TimeLine'
import Home from '@/pages/Home'


Vue.use(Router)

export default new Router({
    routes: [{
            path: '/HelloWorld',
            name: 'HelloWorld',
            component: HelloWorld
        },
        {
            path: '/Video',
            name: 'Video',
            component: Video
        },
        {
            path: '/Axios',
            name: 'Axios',
            component: Axios
        },
        {
            path: '/TimeLine',
            name: 'TimeLine',
            component: TimeLine
        },
        {
            path: '/',
            name: 'Home',
            component: Home
        }
    ]
})