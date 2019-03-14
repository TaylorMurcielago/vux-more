# iview-more

> for extend

## Build Setup

``` bash
# install dependencies
npm install

# serve with hot reload at localhost:8080
npm run dev

# build for production with minification
npm run build

# build for production and view the bundle analyzer report
npm run build --report
```

For a detailed explanation on how things work, check out the [guide](http://vuejs-templates.github.io/webpack/) and [docs for vue-loader](http://vuejs.github.io/vue-loader).


安装vue-cli，vue-resource,vuex

npm install vue-resource 

npm install vuex --save

vux插件库:

npm install vux --save

npm install vux-loader --save-dev

npm install less less-loader --save-dev

npm install yaml-loader --save-dev

配置project-folder:
方便自定义创建打包文件夹，无需修改约定好的服务器目录，修改config/config-folder/中projectFolder即可。

##### 

#20190227
 
import JSMpeg from 'jsmpeg-player'
video.vue添加JSMPEG：
解决中：

适应安卓，ios，video视频分批处理成图片，可在手机端自由缩放尺寸大小
功能：开始暂停。。。
补充相关资料链接可做参考：
// Full screen video

// Video / Canvas capture ?

// https://github.com/phoboslab/jsmpeg
// https://github.com/cycdpo/jsmpeg-player

// iOS no audio
// https://github.com/phoboslab/jsmpeg/issues/151


// https://k8w.io/post/51 

// chunk TS
// https://github.com/phoboslab/jsmpeg/pull/205/files

//px to viewport
########## 


日期：20190220
添加尺寸适配     vw单位
#########


日期：20190228
设计尺寸: 
       
        ===============================
        iPhone 6, 7, 8 微信
        -------------------------------
        Layout 设计 尺寸: 750x1206
        开发 尺寸: 375x603
        开发 尺寸 在ios微信 带白色地步bar(不包括使用href.replace()): 375x555

        Browser 尺寸: 375x603
        Browser 尺寸 在ios微信 带白色地步bar(不包括使用href.replace()): 375x555
        设备 尺寸: 750x1206
        设备 尺寸 在ios微信 带白色地步bar(不包括使用href.replace()): 750x1110
        设备 全屏 尺寸: 750x1334


        iPhone 6 plus, 7 plus, 8 plus 微信
        -------------------------------
        Layout 设计 尺寸: 750x1220
        开发 尺寸: 375x610
        开发 尺寸 在ios微信 带白色地步bar(不包括使用href.replace()): 375x600

        Browser 尺寸: 414x673
        Browser 尺寸 在ios微信 带白色地步bar(不包括使用href.replace()): 414x662
        设备 尺寸: 1080x1756
        设备 尺寸 在ios微信 带白色地步bar(不包括使用href.replace()): 1080x1727
        设备 全屏 尺寸: 1080x1920


        iPhone X, Xs 微信
        -------------------------------
        Layout 设计 尺寸: 750x1450
        开发 尺寸: 375x725
        开发 尺寸 在ios微信 带白色地步bar(不包括使用href.replace()): 375x642

        Browser 尺寸: 375x725
        Browser 尺寸 在ios微信 带白色地步bar(不包括使用href.replace()): 375x642
        设备 尺寸: 1125x2175
        设备 尺寸 在ios微信 带白色地步bar(不包括使用href.replace()): 1125x1926
        设备 全屏 尺寸: 1125x2436


        iPhone XR 微信
        -------------------------------
        Layout 设计 尺寸: 750x1466
        开发 尺寸: 375x733
        开发 尺寸 在ios微信 带白色地步bar(不包括使用href.replace()): 375x800

        Browser 尺寸: 414x809
        Browser 尺寸 在ios微信 带白色地步bar(不包括使用href.replace()): 414x725
        设备 尺寸: 828x1618
        设备 尺寸 在ios微信 带白色地步bar(不包括使用href.replace()): 828x1450
        设备 全屏 尺寸: 828x1792


        iPhone Xs Max 微信
        -------------------------------
        Layout 设计 尺寸: 750x1466
        开发 尺寸: 375x733
        开发 尺寸 在ios微信 带白色地步bar(不包括使用href.replace()): 375x800

        Browser 尺寸: 414x809
        Browser 尺寸 在ios微信 带白色地步bar(不包括使用href.replace()): 414x725
        设备 尺寸: 1242x2427
        设备 尺寸 在ios微信 带白色地步bar(不包括使用href.replace()): 1242x2175
        设备 全屏 尺寸: 1242x2688 
########


日期：20190312
修改jsmpeg-player可能导致的bug。
#########


日期：20190313

添加videoToTs文件，使用ffmpeg做视频转换ts。

已知bug，转换ts经过ffmpeg-player，有些视频会出现噪点，待解决。

#########

日期:20190314
添加axios模块，处理跨域问题，添加拦截器，
修改打包路径，添加xheader

##########

添加gsap  js timelinemax 动画模块，执行js动画操作
