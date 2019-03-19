<template>
  <div class="hello">
      <!-- <returnBtn></returnBtn> -->
         <returnBtn navContent="Video"></returnBtn>
      <!-- <x-header :left-options="{backText: ''}" title="首页" style="background:linear-gradient(to right, #447bba  , #7a88bd,  #928dba);"></x-header> -->
    <h2 class="pause"  @click="pause">Pause</h2> 
    <h2 class="play"  @click="play">play</h2> 
     <canvas class="video"></canvas>
  </div>
</template>

<script>
import JSMpeg from "jsmpeg-player";
export default { 
  data() {
    return { 
      player:null
    };
  },
  created() { 
  },
  mounted() { 
     var url = require("@/media/test.ts");
 
    this.player = new JSMpeg.Player(url, {
      canvas: $(".video")[0],
      decodeFirstFrame: true,
      autoplay:true,
      throttled:true,
      progressive:true,
      chunkSize:'1024*1024',
      onPlay: function() {
        //$this.player.currentTime = 10;
      }
    });
  },
  methods: {
    pause: function() { 
      console.log(this);
      this.player.pause();
    },
      play: function() { 
      console.log(this);
      this.player.play();
    }
  }
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.play {
  position: absolute;
  width: 94px;
  top: 30px;
  left: 20%;
}
.pause {
  position: absolute;
  width: 94px;
  top: 30px;
  right: 20%;
}

.video {
  position: absolute;
  width: 750px;
  height: 312px;
  top: 120px;
  left: 0px;
}
</style>
