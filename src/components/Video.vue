<template>
  <div class="video">
    <h1>aa</h1>  
  </div>
</template>

<script>
// import {  Group,Cell } from 'vux'  
// const JSMpeg = require('jsmpeg-player');
 import JSMpeg from 'jsmpeg-player';
  
export default {
  name: 'Video',
  data () {
    return {
      msg: 'Video' ,
      player: null,
      
    }
  },
   components: {
    // Group,
    // Cell  
  },  
   beforeCreate() {
        console.log("---"); //undefined, undefined
    },
    created() {
        console.log("0000"); // hello Vue, ...
    },
  mounted:function() {
    console.log("====")
      //  var url = require("@/media/blade-runner-2049-360p.ts");
      //     var player = new JSMpeg.Player(url, {
      //           canvas: $('.video')[0],
      //           decodeFirstFrame: true,  
      //           onPlay: function() {
      //             //$this.player.currentTime = 10;
      //           }      
      //         });
   },  
}
 
 