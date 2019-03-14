<template>
  <div class="hello">
     
    {{returnCode}}
  </div>
</template>

<script>
 
export default { 
  data() {
    return {  
      returnCode:"000"
    };
  },
  created() { 
  },
  mounted() {  
    var url = "/return.php"; 
    
      this.$http
        .get(url, { params: { test: 'test20190314' } })
        .then(res => {
          console.log(res.data);
           
          setTimeout(()=>{
            this.returnCode=res.data['a'];
          },1000) 
        })
        .catch(error => {
          console.log(error);
        }); 
    // this.$axios({
    //   method: 'get',
    //   url: this.$host+"return.php"
    // })
    // .then(function (response) {
    //   console.log(response)
    // })
    // .catch(function (error) {
    //   console.log(error)
    // }) 
  },
  methods: {
    // pause: function() { 
    //   console.log(this);
    //   this.player.pause();
    // } 
  }
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
 
</style>
