<template>
<div> 
    <h1>home</h1>  
    <router-link  to="/Axios" >go  axios</router-link> 
    <router-link  to="/Video" >go  video</router-link>  
  </div>
</template>

<script> 
    export default {
        data() {
            return { 
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
            console.log("0000");

            // $http.get('/user?ID=12345')
            //   .then(function (response) {
            //     console.log(response);
            //   })
            //   .catch(function (error) {
            //     console.log(error);
            //   });
        }
    }