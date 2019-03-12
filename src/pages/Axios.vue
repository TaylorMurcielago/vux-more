<template>
  <div class="axios">
    <h1>axios</h1>  
  </div>
</template>

<script>
    // import {  Group,Cell } from 'vux'  
    // const JSMpeg = require('jsmpeg-player');
    //  import JSMpeg from 'jsmpeg-player';

    export default {
        name: 'Video',
        data() {
            return {
                msg: 'Video',
                player: null,

            }
        },
        components: {
            // Group,
            // Cell  
        },
        beforeCreate() {
            console.log("000000000000"); //undefined, undefined
        },
        created() {
            console.log("0000"); // hello Vue, ...
            $http.get('/https://www.lcpww.cn/return.php')
                .then(function(response) {
                    console.log(response);
                })
                .catch(function(error) {
                    console.log(error);
                });

        }
    }