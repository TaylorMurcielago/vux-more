<template>
  <div class="hello">
    <h1>{{ msg }}</h1> 
     <group>
      <cell title="title" value="value"></cell>
    </group> 
    <!-- <divider class="divider">我是有底线的</divider> -->
    
    <!-- <button @click="goVideo">goVideo</button> -->
    
  </div>
</template>

<script>
import JSMpeg from 'jsmpeg-player';
import $http from 'axios'
import $ from 'jquery'
// import {  Group,Cell } from 'vux'  
export default {
  name: 'HelloWorld',
  data () {
    return {
      msg: 'App' 
      
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
    }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

.video{
  position: absolute;
  width:750px;
  height:312px;
  top:220px;
  left:0px;
}
.divider{
  width: 750px;
}
h1, h2 {
  font-weight: normal;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>
