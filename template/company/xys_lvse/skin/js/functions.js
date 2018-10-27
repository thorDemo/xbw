if (typeof Object.create !== "function") {
    Object.create = function (obj) {
        function F() {}
        F.prototype = obj;
        return new F();
    };
}
/* IE版本 */
function versionIE(){
    if(navigator.appName=="Microsoft Internet Explorer"){
        var b_version=navigator.appVersion,
            version=b_version.split(";"),
            trim_Version=version[1].replace(/[ ]/g,"");
        if(trim_Version=="MSIE8.0"){
            return 'IE8';
        }else if(trim_Version=="MSIE7.0"){
            return 'IE7';
        }else if(trim_Version=="MSIE6.0"){
            return 'IE6';
        }
        return true;
    }
    return false;
}
/* 消息对话框 */
var msgTimer;
var bodyOverflow;
function msgDialog(options){
    if(document.getElementById("msgDialog")){
        msgClose();
    }
    var defaults = {
                text : "",
                time : 0,
                type : "success",
                callback : function(){}
            },
            opts = $.extend(defaults,options),
            style = "display:block;float:left;font-size:40px;line-height:1;",
            html = "";
    html += "<div class=\"msgLock\" id=\"msgLock\" style=\"position:fixed; top:0; left:0; width:100%; height:100%; background:#000; z-index:9998; filter:Alpha(Opacity=80); opacity:.8;\"></div><div class=\"msgDialog\" id=\"msgDialog\" style=\" border-radius:5px;position:fixed; z-index:9999; width:80%; max-width:360px; background:#fff; box-shadow:0 0 6px #000; font-size:14px; color:#333;\"><div style=\"overflow:hidden;margin:20px;\">";
    switch(opts.type){
        case 'success':
            html += "<i class=\"icon-ok-sign fa-check-circle success\" style=\"color:#37ac13;"+style+"\"></i>";
        break;
        case 'error':
            html += "<i class=\"icon-remove-sign fa-times-circle error\" style=\"color:#c00;"+style+"\"></i>";
        break;
        case 'warning':
            html += "<i class=\"icon-warning-sign fa-exclamation-circle warning\" style=\"color:#e9b912;"+style+"\"></i>";
        break;
        case 'loading':
            html += "<i class=\"loading\" style=\"color:#666;"+style+"\"><img src=\"/images/loading_35_1.gif\"></i>";
        break;
        case 'confirm':
            html += "<i class=\"icon-exclamation-sign fa-question-circle confirm\" style=\"color:#e9d632;"+style+"\"></i>";
        break;
    }
    html += "<div style=\"margin-left:50px;\">"+opts.text+"</div></div>";
    var strStyle = " cursor:pointer; padding:4px 15px; margin-right:20px; background:#0084e9; color:#fff; border-radius:3px; border:1px solid #0078d4;";
    if(opts.type == "confirm"){
        html += "<div class=\"msgBtns\" style=\"text-align:right;margin-bottom:20px;\"><button class=\"msgBtn\" rel=\"true\" style=\""+strStyle+"\">确定</button><button class=\"msgBtn\" rel=\"false\" autofocus=\"autofocus\" style=\""+strStyle+"\">取消</button></div>";
    }else if(opts.type != "loading" && opts.type != "success"){
        html += "<div class=\"msgBtns\" style=\"text-align:right;margin-bottom:20px;\"><button class=\"msgBtn\" rel=\"false\" autofocus=\"autofocus\" style=\""+strStyle+"\">确定</button></div>";
    }
    html += "</div>";
    var $body = $(document.body);
    bodyOverflow = $body.css("overflow");
    if(!$body.hasClass("bodyOverflowHiddenByMsg")){
        $body.addClass("bodyOverflowHiddenByMsg");
    }
    $body.append(html);
    var msgDialog = $("#msgDialog");
    var divCenter = function (){
        var windowWidth  = $(window).width();
        var windowHeight = $(window).height();
        var popupHeight  = msgDialog.height();
        var popupWidth   = msgDialog.width();
        msgDialog.css({
            "top": (windowHeight-popupHeight)/2,
            "left": (windowWidth-popupWidth)/2
        });
    }
    divCenter();
    if(opts.time>0){
        msgTimer = setTimeout(msgClose,opts.time) ;
    }
    $(".msgBtns .msgBtn").on("click",function(){
        msgClose();
        if($(this).attr("rel")=="true"){
            opts.callback();
        }
    });
}
/* 关闭对话框 */
function msgClose(){
    clearTimeout(msgTimer);
    $("#msgLock").remove();
    $('#msgDialog').remove();
    $(document.body).removeClass("bodyOverflowHiddenByMsg");
}
/* 错误框 */
function msgError(tip){
    msgDialog({text:tip,type:'error'});
}
/* 警告框 */
function msgAlter(tip){
    msgDialog({text:tip,type:'warning'});
}
/* 加载，等待 */
function msgLoading(tip){
    msgDialog({text:tip,type:'loading'});
}
/* 成功 */
function msgSuccess(tip){
    msgDialog({text:tip,type:'success',time:1600});
}
/* 选择对话框 */
function msgConfirm(tip,callback){
    msgDialog({text:tip,type:'confirm',callback:callback});
}
/* 低版本浏览器提醒 */
function lowBrowser() {
    var lowVersion = versionIE();
    var lowBrowserHtml = '有部分功能您的浏览器不支持，请更换高级浏览器，建议使用<a href="http://www.firefox.com" target="_blank" title="下载firefox浏览器">firefox</a>,<a href="https://www.google.com/intl/en/chrome/browser/" target="_blank" title="下载chrome浏览器">chrome</a>或<a href="http://windows.microsoft.com/zh-cn/internet-explorer/download-ie" target="_blank" title="下载IE10浏览器">IE10及以上</a>';
    
    if(lowVersion == 'IE7' || lowVersion == 'IE6'){
        msgAlter(lowBrowserHtml);
    }

};

/**
 * AJAX表单提交共用方法
 **/
function saveFeedbackForm(formId){
    formId = formId || "feedbackFrm";
    var $form  = $("#"+formId);
    
    var options = {
        dataType: "json",
        beforeSubmit: function() {
            msgLoading('数据保存中，请稍候...');
        },
        success: function(data, statusText) {
            if(data.success==false){
                msgError("失败，原因是"+data.info+"!");
            }else{
                msgSuccess("数据保存成功!");
                $form[0].reset();
            }
        },
        error: function(responseText, statusText) {
            msgError("保存失败，原因参考如下："+responseText);
        }
    };
    if(true){
        msgAlter("此处填写表单验证");
        return false;
    }
    $form.ajaxSubmit(options);
}

// 多列下拉菜单 三级菜单
function dropMenuMultiCol(name){
    var $box = $(name);
    $("li",$box).hover(function(){
        var $this = $(this),
            dd = $box.find(".dropdown"),
            dc = dd.children(":eq("+$this.index()+")");
        $this.children().addClass('active');
        if(dc.height()>0){
            dd.css({"visibility":"visible","height":(dc.height()+15)+"px"});
        }
        dc.addClass("on");
    },function(){
        var $this = $(this),
            dd = $box.find(".dropdown");
        $this.children().removeClass('active');
        dd.css({"visibility":"hidden","height":0});
        dd.children(":eq("+$this.index()+")").removeClass("on");
    });

    $(".dd-row",$box).hover(function(){
        var $this = $(this);
        $this.addClass('on');
        if($this.height()>0){
            $this.parent().css({"visibility":"visible","height":($this.height()+15)+"px"});
        }
        $box.find(".ul-one").children(":eq("+$this.index()+")").children().addClass("active");
    },function(){
        var $this = $(this);
        $this.removeClass('on');
        $this.parent().css({"visibility":"hidden","height":0});
        $box.find(".ul-one").children(":eq("+$this.index()+")").children().removeClass("active");
    });
}

function jsPlaceholder(){
    if(!('placeholder' in document.createElement('input'))){
        var $elements = $("input[type=text],textarea");
        for(var i=0,len=$elements.length;i<len;i++){
            var $this = $($elements[i]);
            $this.val($this.attr("placeholder"));
        }
        $elements.on("focus",function(){
            var $this = $(this);
            if($this.val() == $this.attr("placeholder")){
                $this.val("");
            }
        });
        $elements.on("blur",function(){
            var $this = $(this);
            if($this.val() == ""){
                $this.val($this.attr("placeholder"));
            }
        });
    }
}

/* JQueryUI datepicker */
function uiDatepicker(id){
    $.getScript("public/js/jquery-ui.datepicker.min.js",function(){
        $("#"+id).datepicker({
            prevText: "上一月",
            nextText: "下一月",
            currentText: "今天",
            changeMonth:true,
            changeYear:true,
            monthNames:["一月","二月","三月","四月","五月","六月","七月","八月","九月","十月","十一月","十二月"],
            monthNamesShort:["一月","二月","三月","四月","五月","六月","七月","八月","九月","十月","十一月","十二月"],
            dayNames:['','','','','','',''],
            dayNamesMin:["一","二","三","四","五","六","日"],
            dateFormat:"yy-mm-dd"
        });
    });
}

function sideMenu(areaId,ambit){
    var $window = $(window),
        ambit = ambit || 960,
        menu = $('#plugin_'+areaId).find('.menu-list'),
        els = menu.children();
    if($window.width()<=ambit){
        for(var i=0,l=els.length;i<l;i++){
            var $this = $(els[i]),cname=$this.attr('class');
            cname=cname.replace(/mod-/i,'mb-');
            $this.attr('class',cname);
        }
        menu.addClass("small");
    }
    $window.resize(function(){
        if($window.width()>ambit){
            if(menu.hasClass("small")){
                for(var i=0,l=els.length;i<l;i++){
                    var $this = $(els[i]),cname=$this.attr('class');
                    cname=cname.replace(/mb-/i,'mod-');
                    $this.attr('class',cname);
                }
                menu.removeClass("small");
            }
        }else{
            if(!menu.hasClass("small")){
                for(var i=0,l=els.length;i<l;i++){
                    var $this = $(els[i]),cname=$this.attr('class');
                    cname=cname.replace(/mod-/i,'mb-');
                    $this.attr('class',cname);
                }
                menu.addClass("small");
            }
        }
    });
}

/* 分享 */
(function ($,window) {

    var Share = {
        init : function (options, el) {
            var base = this;
            base.$elem = $(el);
            base.options = $.extend({}, $.fn.lmShare.options, base.$elem.data(), options);
            base.$elem.children("a").on("click",function(e){
                var shareCode = $(this).data("code");
                if(shareCode == "weixin"){
                    if($("#js_qrcode").length){
                        return false;
                    }else{
                        var html = "<div id=\"share_qrcode\" style=\"position:fixed;left:50%;top:50%;margin-left:-103px;background:#fff;"+
                            "padding:0 15px 15px;line-height:1;margin-top:-110px;z-index:300;border:8px solid #ddd;border-radius:4px;\">"+
                            "<div id=\"share_qrcode_close\" style=\"cursor:pointer;text-align:right;padding:5px 0;font-family:Arial;font-size:18px;\">"+
                            "&times;</div><div id=\"js_qrcode\"></div></div>";
                        $("body").append(html);
                        var render = base.versionIE() ? "table" : "canvas";
                        $("#js_qrcode").qrcode({
                            render:render,
                            width:160,
                            height:160,
                            text: base.options.url
                        });
                        $("#share_qrcode_close").on("click",function(){
                            $(this).parent().remove();
                        })
                    }
                }else{
                    var su = base.options.media[shareCode];
                    su = su.replace("{url}",encodeURIComponent(base.options.url));
                    su = su.replace("{title}",encodeURIComponent(base.options.title));
                    su = su.replace("{summary}",encodeURIComponent(base.options.summary));
                    su = su.replace("{desc}",encodeURIComponent(base.options.desc));
                    su = su.replace("{pic}",encodeURIComponent(base.options.pic));
                    window.open(su,"_blank");
                }
            });
        },
        versionIE: function(){
            if(navigator.appName=="Microsoft Internet Explorer"){
                var b_version=navigator.appVersion,
                    version=b_version.split(";"),
                    trim_Version=version[1].replace(/[ ]/g,"");
                if(trim_Version=="MSIE8.0"){
                    return true;
                }else if(trim_Version=="MSIE7.0"){
                    return true;
                }else if(trim_Version=="MSIE6.0"){
                    return true;
                }
            }
            return false;
        }
    };

    $.fn.lmShare = function (options) {
        return this.each(function () {
            if ($(this).data("lm-init") === true) {
                return false;
            }
            $(this).data("lm-init", true);
            var share = Object.create(Share);
            share.init(options, this);
            $.data(this, "lmShare", share);
        });
    };

    $.fn.lmShare.options = {
        url: window.location.href,
        title: document.title,
        summary: document.querySelector('meta[name="description"]').getAttribute('content'),
        desc: "",
        pic: "",
        media: {
            "qqim": "http://connect.qq.com/widget/shareqq/index.html?url={url}&desc={desc}&title={title}&summary={summary}&pics={pic}",
            "qzone": "http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url={url}&desc={desc}&summary={summary}&title={title}&pics={pic}&otype=share",
            "qqmb": "http://share.v.t.qq.com/index.php?c=share&a=index&url={url}&title={summary}&appkey=801cf76d3cfc44ada52ec13114e84a96&pic={pic}",
            "tsina": "http://service.weibo.com/share/share.php?url={url}&title={summary}&appkey=1343713053&pic={pic}&searchPic=false"
        }
    };

})(jQuery,window);

/* 自定义模态对话框 */
function modalDialog(options){
    var defaults = {
            isTitle: true,
            title: "对话框",
            maxWidth: 600,
            maxHeight: 400,
            data: {
                    type: "html",
                    content: ""
                },
            ok: {
                    text: "确认",
                    func: function() {}
                },
            cancel: {
                    text: "取消",
                    func: function() {}
                }
        },
        opts = $.extend(defaults,options),
        $body = $("body"),
        bodyDialogOverflow,
        dId = "",
        dEl,
        dLk,
        setSize = function(){
            var $size = {
                    width : $(window).width()*0.8,
                    height : $(window).height()*0.8
                };
            if($size.width > opts.maxWidth){
                $size.width = opts.maxWidth;
            }
            if($size.height > opts.maxHeight){
                $size.height = opts.maxHeight;
            } 
            dEl.css({width:$size.width, height:$size.height});
            dEl.find(".dialogMain").css({height:$size.height-80});
            return $size;
        },
        showCenter = function (){
            var $size = setSize(),
                $left = ($(window).width()-$size.width)/2,
                $top = ($(window).height()-$size.height)/2 + $(document).scrollTop(),
                $zIndex = $(".modalDialog").length*2 + 600;
            dEl.css({top:$top, left:$left, zIndex:$zIndex+1});
            dLk.css({zIndex:$zIndex});
        },
        loadData = function(){
            switch(opts.data.type){
                case "url":
                    $.ajax({
                        type: "get",
                        url: opts.data.content,
                        dataType:"html", 
                        beforeSend: function(){
                            dEl.find(".dialogMain").html("<div class=\"dialogLoader\"></div>");
                        },
                        success: function(html){
                            dEl.find(".dialogMain").html(html);
                        }
                    });
                break;
                case "html":
                    dEl.find(".dialogMain").html(opts.data.content);
                break;
            }
        },
        init = function(){
            for(var i = 0; i < 4; i++){
                dId = parseInt(Math.random()*(900-100)+100)+"";
            }
            var $html = "<div class=\"dialogLockScreen anim-fadeIn\" id=\"ls_"+dId+"\"></div><div class=\"modalDialog anim-moveFromUp\" id=\"md_"+dId+"\">";
            if(opts.isTitle){
                $html += "<div class=\"dialogTitle\">"+opts.title+"</div>";
            }
            $html += "<div class=\"dialogMain\"></div><div class=\"dialogButtons\">";
            $html += "<span role=\"ok\">"+opts.ok.text+"</span>";
            $html += "<span role=\"cancel\">"+opts.cancel.text+"</span>";
            $html += "</div></div>";
            bodyDialogOverflow = $body.css("overflow");
            if(!$body.hasClass("bodyOverflowHidden")){
                $body.addClass("bodyOverflowHidden");
            }
            $body.append($html);

            dEl = $("#md_"+dId);
            dLk = $("#ls_"+dId);
            dEl.find(".dialogButtons").children().on("click",function(){
                switch($(this).attr("role")){
                    case "ok":
                        var result = opts.ok.func();
                        if(result) return false;
                    break;
                    case "cancel":
                        var result = opts.cancel.func();
                        if(result) return false;
                    break;
                }
                colse();
            });

            showCenter();
            loadData();
        },
        colse = function(){
            if($(".modalDialog").length==1){
                $body.removeClass("bodyOverflowHidden");
            }
            dEl.remove();
            dLk.remove();  
        };

    init();

    return dEl;
};

/**
 * 图片上专-支持本地图片预览，兼容ie[6-9]、火狐、Chrome17+、Opera11+、Maxthon3
 * fileObj - input[type=file]对象
 * imgPreviewId - 图片容器ID
 * divPreviewId - 预览容器ID
 **/
function PreviewImage(fileObj,imgPreviewId,divPreviewId){
    var imgObj = document.getElementById(imgPreviewId);
    if(fileObj.value == ""){
        imgObj.src="";
        return false;
    }
    var allowExtention=".jpg,jpeg,.bmp,.gif,.png,.ico";//允许上传文件的后缀名document.getElementById("hfAllowPicSuffix").value;
    var extention=fileObj.value.substring(fileObj.value.lastIndexOf(".")+1).toLowerCase();            
    var browserVersion= window.navigator.userAgent.toUpperCase();
    if(allowExtention.indexOf(extention)>-1){ 
            if(fileObj.files){//HTML5实现预览，兼容chrome、火狐7+等
                    if(window.FileReader){
                            var reader = new FileReader(); 
                            reader.onload = function(e){
                                    imgObj.setAttribute("src",e.target.result);
                            }  
                            reader.readAsDataURL(fileObj.files[0]);
                    }else if(browserVersion.indexOf("SAFARI")>-1){
                            alert("不支持Safari6.0以下浏览器的图片预览!");
                    }
            }else if (browserVersion.indexOf("MSIE")>-1){
                    if(browserVersion.indexOf("MSIE 6")>-1){//ie6
                            imgObj.setAttribute("src",fileObj.value);
                    }else{//ie[7-9]
                            fileObj.select();
                            //if(browserVersion.indexOf("MSIE 9")>-1)
                                    fileObj.blur();//不加上document.selection.createRange().text在ie9会拒绝访问
                            var newPreview =document.getElementById(divPreviewId+"New");
                            if(newPreview==null){
                                    newPreview =document.createElement("div");
                                    newPreview.setAttribute("id",divPreviewId+"New");
                                    newPreview.style.width = imgObj.width+"px";
                                    newPreview.style.height = imgObj.height+"px";
                                    newPreview.style.border="solid 1px #d2e2e2";
                            }
                            newPreview.style.filter="progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod='scale',src='" + document.selection.createRange().text + "')";                            
                            var tempDivPreview=document.getElementById(divPreviewId);
                            tempDivPreview.parentNode.insertBefore(newPreview,tempDivPreview);
                            tempDivPreview.style.display="none";                    
                    }
            }else if(browserVersion.indexOf("FIREFOX")>-1){//firefox
                    var firefoxVersion= parseFloat(browserVersion.toLowerCase().match(/firefox\/([\d.]+)/)[1]);
                    if(firefoxVersion<7){//firefox7以下版本
                            imgObj.setAttribute("src",fileObj.files[0].getAsDataURL());
                    }else{//firefox7.0+                    
                            imgObj.setAttribute("src",window.URL.createObjectURL(fileObj.files[0]));
                    }
            }else{
                    imgObj.setAttribute("src",fileObj.value);
            }         
    }else{
            alert("仅支持"+allowExtention+"为后缀名的文件!");
            fileObj.value="";//清空选中文件
            if(browserVersion.indexOf("MSIE")>-1){                        
                    fileObj.select();
                    document.selection.clear();
            }                
            fileObj.outerHTML=fileObj.outerHTML;
    }
}

/* 登陆弹窗 */
function popSignin(callback){
    if($(".signin-pop-box").length){ return false;}
    var $popSignin = $('<div class="signin-pop-box"><div class="signin-pop-title">&#30331;&#38470;</div></div>'),
        $close = $('<a class="signin-pop-close" href="javascript:;">&times;</a>').appendTo($popSignin),
        $form = $('<form class="signin-pop-content" method="post" action="/memberInfo_signin.action">'
            +'<div class="sp-row"><input class="signin-pop-ipt" id="username" type="text" name="username" required placeholder="用户名" size="34"></div>'
            +'<div class="sp-row"><input class="signin-pop-ipt" id="password" type="password" name="password" required placeholder="密码" size="34"></div>'
            +'<div class="sp-row"><input class="signin-pop-ipt" id="captcha" type="text" name="auth" maxlength="4" required placeholder="码证码" size="20">'
            +'<img class="signin-pop-cha" src="/image.action" height="34" onclick="javascript:this.src=\'/image.action?math=\'+Math.random();" title="看不清？点击图片更换">'
            +'</div></form>').appendTo($popSignin);
        $btn = $('<button class="signin-pop-btn" type="button">&#30331;&nbsp;&#38470;</button>').appendTo($form);
        $msg = $('<div class="signin-pop-msg"></div>').appendTo($popSignin);
    $("body").append($popSignin);
    $("input[placeholder],textarea[placeholder]",$popSignin).placeholder();
    $close.on("click", function(){
        $popSignin.remove();
    });
    $btn.on("click",function(){
        if(!$btn.hasClass("disabled")){
            $form.ajaxSubmit({
                dataType: "json",
                beforeSubmit: function(){
                    $btn.addClass("disabled").html("&#27491;&#22312;&#30331;&#38470;...");
                },
                success: function(data){
                    $btn.removeClass("disabled").html("&#30331;&nbsp;&#38470;");
                    if(data.success){
                        $msg.html("");
                        if("function" == typeof callback){
                            callback();
                        }
                        $popSignin.remove();
                    }else{
                        $msg.html(data.info);
                    }
                },
                error: function(a,b){
                    $msg.html("&#30331;&#38470;&#22833;&#36133;!");
                    $btn.removeClass("disabled").html("&#30331;&nbsp;&#38470;");
                }
            });
        }
    });
}

jQuery.fn.placeholder = function(){
    var i = document.createElement('input'),
        placeholdersupport = 'placeholder' in i;
    if(!placeholdersupport){
        var inputs = jQuery(this);
        inputs.each(function(){
            var input = jQuery(this),
                text = input.attr('placeholder'),
                height = input.outerHeight(),
                placeholder = jQuery('<span class="phTips">'+text+'</span>');
            if(input[0].tagName == "TEXTAREA"){
                placeholder.css({'left':"10px",'top':"10px",'position':'absolute', 'color':"#999", 'font-size':"12px"});
            }else{
                placeholder.css({'left':"10px",'line-height':height+"px",'position':'absolute', 'color':"#999", 'font-size':"12px"});
            }
            placeholder.on("mousedown", function(){
                input.focus();
            });
            if(input.val() != ""){
                placeholder.css({display:'none'});
            }else{
                placeholder.css({display:'inline'});
            }
            placeholder.insertAfter(input);
            input.on("focus",function(e){
                placeholder.css({display:'none'});
            });
            input.on("blur",function(e){
                if(jQuery(this).val() != ""){
                    placeholder.css({display:'none'});
                }else{
                    placeholder.css({display:'inline'});
                }
            });
        });
    }
    return this;
};

/* jiathis 分享 - 点击弹出 */
function jiathisShare(el){
    var $this = $(el),
        e = window.event||arguments[0];
    e.preventDefault();
    window.$sharebox;
    if($this.data('init')==undefined || $this.data('init') !== true){
        $this.data('init', true);
        var html = '<div class="shd"><span class="lm-close"></span>分享</div><div class="sbd jiathis_style_32x32">'+
            '<a class="jiathis_button_qzone"></a><a class="jiathis_button_tsina"></a>'+
            '<a class="jiathis_button_tqq"></a><a class="jiathis_button_weixin"></a>'+
            '<a class="jiathis_button_renren"></a><a class="jiathis_button_cqq"></a></div>';
        $sharebox = $('<div class="sharebox"></div>').html(html);
        $('body').append($sharebox);
        var jia = document.createElement('script');
        jia.src = 'http://v3.jiathis.com/code/jia.js';
        document.body.appendChild(jia);
        setTimeout(function(){
            $sharebox.addClass('on');
        }, 100);
        $sharebox.find(".lm-close").on("click", function(){
            $sharebox.removeClass('on');
        });
    }else if(!$sharebox.hasClass("on")){
        $sharebox.addClass('on');
    }
}
