<template>
  <div class="hello">
     TimeLine 
  </div>
</template>

<script>
 
export default { 
  data() {
    return { 
     
    };
  },
  created() { 
  },
  mounted() { 
    this.animationStart();
  },
  methods: {
    
    animationStart:function(){
      var t1=new TimelineLite();
      t1.to($(".hello"), 0.5, { autoAlpha: 0})
      t1.from($(".hello"), 1, { autoAlpha: 1, repeat: 5,right:'20vw',ease: Power1.easeIn  });
    }
    // pause: function() { 
    //   console.log(this);
    //   this.player.pause();
    // },
    //   play: function() { 
    //   console.log(this);
    //   this.player.play();
    // }
  }
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
 .hello{
   position:absolute;
   width:30vw;
   height:30vw;
   background-Color:red;
   display:flex;
   justify-content: center;
   align-items:center;
 }
</style>
