<template>
  <div class="hello"> 
  
   <div>DEMO</div>
 
    <flexbox class="vux-flexbox vux-flex-row">

        <flexbox-item class="vux-flexbox-item" style="margin-left: 8px;">
             <div class="flex-demo">  <x-button @click.native="goVideo" class="weui-btn weui-btn_plain-default"  >goTo Video</x-button> 
             </div>
        </flexbox-item>
         <flexbox-item class="vux-flexbox-item" style="margin-left: 8px;">
             <div class="flex-demo"> <x-button @click.native="goAxios" class="weui-btn weui-btn_plain-default"  >goTo Axios</x-button>
             </div>
         </flexbox-item> 
    </flexbox>
     <flexbox class="vux-flexbox vux-flex-row">

        <flexbox-item class="vux-flexbox-item" style="margin-left: 8px;">
             <div class="flex-demo">  <x-button @click.native="goTimeLine" class="weui-btn weui-btn_plain-default"  >goTo TimelineMax</x-button> 
             </div>
        </flexbox-item>
         <flexbox-item class="vux-flexbox-item" style="margin-left: 8px;">
             <div class="flex-demo"> <x-button @click.native="goForm" class="weui-btn weui-btn_plain-default"  >goTo Form</x-button>
             </div>
         </flexbox-item> 
    </flexbox>
     <flexbox class="vux-flexbox vux-flex-row">

        <flexbox-item class="vux-flexbox-item" style="margin-left: 8px;">
             <div class="flex-demo">  <x-button @click.native="goWechatLogin" class="weui-btn weui-btn_plain-default"  >goTo WechatLogin</x-button> 
             </div>
        </flexbox-item>
         <flexbox-item class="vux-flexbox-item" style="margin-left: 8px;">
             <div class="flex-demo"> <x-button @click.native="goWechatShare" class="weui-btn weui-btn_plain-default"  >goTo WechatShare</x-button>
             </div>
         </flexbox-item> 
    </flexbox>
     <flexbox class="vux-flexbox vux-flex-row">

        <flexbox-item class="vux-flexbox-item" style="margin-left: 8px;">
             <div class="flex-demo">  <x-button @click.native="goBackgroundMusic" class="weui-btn weui-btn_plain-default"  >goTo BackgroundMusic</x-button> 
             </div>
        </flexbox-item>
         <flexbox-item class="vux-flexbox-item" style="margin-left: 8px;">
             <div class="flex-demo"> <x-button @click.native="goDragPic" class="weui-btn weui-btn_plain-default"  >goTo DragPic</x-button>
             </div>
         </flexbox-item> 
    </flexbox>
  </div>
</template>
 
<script>
    export default {
        data() {
            return {

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