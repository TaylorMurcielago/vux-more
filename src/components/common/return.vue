<template>
    <div>
        <!-- <h1>header in here</h1> -->
        <x-header class="xHeader">{{navContent}}</x-header>
    </div>
</template>
<script>
    export default{
        props:['navContent']
    }
</script>
<style scoped>
.xHeader{
    position:fixed;
    width:100%;
    
    top:0;
    left:0;
    /* display:flex; */
    /* align-items:center; */ ;
    border: 1vw; 
    /* background-color:rgb(0,0,0); */
   background: linear-gradient(90deg, rgb(29, 98, 240), rgb(25, 213, 253)); color: rgb(255, 255, 255)
} 


</style>