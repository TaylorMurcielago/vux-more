<template>
  <div class="hello"> 
  
   <div>{{testNull}}</div>
 
    <flexbox class="vux-flexbox vux-flex-row">

        <flexbox-item class="weui-btn vux-x-button-no-border weui-btn_default" style="margin-left: 8px;">
             <div class="flex-demo">  <x-button @click.native="goVideo" class="weui-btn vux-x-button-no-border weui-btn_default" style="background: linear-gradient(90deg, rgb(29, 98, 240), rgb(25, 213, 253)); color: rgb(255, 255, 255);" >goTo Video</x-button> 
             </div>
        </flexbox-item>
         <flexbox-item class="weui-btn vux-x-button-no-border weui-btn_default" style="margin-left: 8px;">
             <div class="flex-demo"> <x-button @click.native="goAxios" class="weui-btn vux-x-button-no-border weui-btn_default"  style="background: linear-gradient(90deg, rgb(29, 98, 240), rgb(25, 213, 253)); color: rgb(255, 255, 255);">goTo Axios</x-button>
             </div>
         </flexbox-item> 
    </flexbox>
     <flexbox class="vux-flexbox vux-flex-row">

        <flexbox-item class="weui-btn vux-x-button-no-border weui-btn_default" style="margin-left: 8px;">
             <div class="flex-demo">  <x-button @click.native="goTimeLine" class="weui-btn vux-x-button-no-border weui-btn_default"  style="background: linear-gradient(90deg, rgb(29, 98, 240), rgb(25, 213, 253)); color: rgb(255, 255, 255);">goTo TimelineMax</x-button> 
             </div>
        </flexbox-item>
         <flexbox-item class="weui-btn vux-x-button-no-border weui-btn_default" style="margin-left: 8px;">
             <div class="flex-demo"> <x-button @click.native="goForm" class="weui-btn vux-x-button-no-border weui-btn_default"  style="background: linear-gradient(90deg, rgb(29, 98, 240), rgb(25, 213, 253)); color: rgb(255, 255, 255);">goTo Form</x-button>
             </div>
         </flexbox-item> 
    </flexbox>
     <flexbox class="vux-flexbox vux-flex-row">

        <flexbox-item class="weui-btn vux-x-button-no-border weui-btn_default" style="margin-left: 8px;">
             <div class="flex-demo">  <x-button @click.native="goWechatLogin" class="weui-btn vux-x-button-no-border weui-btn_default"  style="background: linear-gradient(90deg, rgb(29, 98, 240), rgb(25, 213, 253)); color: rgb(255, 255, 255);">goTo WechatLogin</x-button> 
             </div>
        </flexbox-item>
         <flexbox-item class="weui-btn vux-x-button-no-border weui-btn_default" style="margin-left: 8px;">
             <div class="flex-demo"> <x-button @click.native="goWechatShare" class="weui-btn vux-x-button-no-border weui-btn_default" style="background: linear-gradient(90deg, rgb(29, 98, 240), rgb(25, 213, 253)); color: rgb(255, 255, 255);" >goTo WechatShare</x-button>
             </div>
         </flexbox-item> 
    </flexbox>
     <flexbox class="vux-flexbox vux-flex-row">

        <flexbox-item class="weui-btn vux-x-button-no-border weui-btn_default" style="margin-left: 8px;">
             <div class="flex-demo">  <x-button @click.native="goBackgroundMusic" class="weui-btn vux-x-button-no-border weui-btn_default"  style="background: linear-gradient(90deg, rgb(29, 98, 240), rgb(25, 213, 253)); color: rgb(255, 255, 255);">goTo BackgroundMusic</x-button> 
             </div>
        </flexbox-item>
         <flexbox-item class="weui-btn vux-x-button-no-border weui-btn_default" style="margin-left: 8px;">
             <div class="flex-demo"> <x-button @click.native="goDragPic" class="weui-btn vux-x-button-no-border weui-btn_default"  style="background: linear-gradient(90deg, rgb(29, 98, 240), rgb(25, 213, 253)); color: rgb(255, 255, 255);">goTo DragPic</x-button>
             </div>
         </flexbox-item> 
    </flexbox>
     <flexbox class="vux-flexbox vux-flex-row">

        <flexbox-item class="weui-btn vux-x-button-no-border weui-btn_default" style="margin-left: 8px;">
             <div class="flex-demo">  <x-button @click.native="goBackgroundMusic" class="weui-btn vux-x-button-no-border weui-btn_default"  style="background: linear-gradient(90deg, rgb(29, 98, 240), rgb(25, 213, 253)); color: rgb(255, 255, 255);">goTo VR360</x-button> 
             </div>
        </flexbox-item>
         <flexbox-item class="weui-btn vux-x-button-no-border weui-btn_default" style="margin-left: 8px;">
             <div class="flex-demo"> <x-button @click.native="goDragPic" class="weui-btn vux-x-button-no-border weui-btn_default"  style="background: linear-gradient(90deg, rgb(29, 98, 240), rgb(25, 213, 253)); color: rgb(255, 255, 255);">goTo Html2Canvas</x-button>
             </div>
         </flexbox-item> 
    </flexbox>
  </div>
</template>
 
<script>
    export default {
        data() {
            return {
                testNull:''

            };
        },
         
        created() {},
        mounted() {

        },
        methods: {
            goVideo: function() {

                this.$router.push({
                    path: '/Video'
                })
            },
            goAxios: function() {

                this.$router.push({
                    path: '/Axios'
                })
            },
            goTimeLine:function(){
                this.$router.push({
                    path: '/TimeLine'
                })
            }

        }
    };
</script>
<style>
.vux-flexbox{
    margin-top:15vw;
}
</style>