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
    background-color:rgb(0,0,0);
} 


</style>