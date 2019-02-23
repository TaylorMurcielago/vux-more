<template>
  <div class="hello">
    <h1>{{ msg }}</h1>
    
     <group>
      <cell title="title" value="value"></cell>
    </group> 
    <divider>我是有底线的</divider>
 
  </div>
</template>

<script>
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
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
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
