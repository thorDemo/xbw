seajs.config({
  paths: {
    'path': website.root+"/js",
    'app': '/public/app'
  },
  alias: {
    "jquery": "http://www.huayukt.com/public/js/jquery-1.11.0.min.js",
    "lazyload": "http://www.huayukt.com/public/js/jquery.lazyload.min.js",
    "jqcookie": "http://www.huayukt.com/public/js/jquery.cookie.min.js",
    "jqform": "http://www.huayukt.com/public/js/jquery.form.min.js",
    "jqjson": "http://www.huayukt.com/public/js/jquery.json.min.js",
    "functions": "http://www.huayukt.com/public/js/functions.js",
    "validator": "http://www.huayukt.com/public/js/jquery.validator.min.js",
    "owlcarousel": "http://www.huayukt.com/public/js/owl.carousel.min.js",
    "owlcarouselcss": "http://www.huayukt.com/public/css/owl.carousel.css",
    "imagesloaded": "http://www.huayukt.com/public/js/jquery.imagesloaded.min.js",
    "fastclick": "http://www.huayukt.com/public/js/fastclick.min.js",
    "datepicker": "http://www.huayukt.com/public/js/jquery-ui.datepicker.min.js",
    "echarts": "http://www.huayukt.com/public/echarts/echarts-all.js",
    "bdmapapi": "http://api.map.baidu.com/getscript?v=1.1&ak=&services=true&t=20130716024058",
    "bdmapcss": "http://api.map.baidu.com/res/11/bmap.css",
    "bdmap": "http://www.huayukt.com/public/js/baidumap.js",
    "signin": "http://www.huayukt.com/public/js/signin.js",
    "singletextscroll": "http://www.huayukt.com/public/js/singleTextScroll.min.js",
    "msgdialog": "http://www.huayukt.com/public/js/lm.msgdialog.min.js",
    "mmenucss": "http://www.huayukt.com/public/mmenu/jquery.mmenu.css",
    "mmenu": "http://www.huayukt.com/public/mmenu/jquery.mmenu.min.js",
    "laypage": "http://www.huayukt.com/public/js/laypage.js",
    "lmselect": "http://www.huayukt.com/public/js/selectBeautify.min.js",
    "scrollreveal": "http://www.huayukt.com/public/js/scrollReveal.min.js",
    "verticalscroll": "http://www.huayukt.com/public/js/lmVerticalScroll.min.js",
    "verticalmenu": "http://www.huayukt.com/public/js/lmVerticalMenu.min.js",
    "swipercss": "http://www.huayukt.com/public/swiper/swiper.min.css",
    "swiperjs": "http://www.huayukt.com/public/swiper/swiper.min.js"
  }
});
seajs.use("path/main");