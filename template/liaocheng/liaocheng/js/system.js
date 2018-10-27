var is_ie=(navigator.userAgent.toLowerCase().indexOf("msie")!=-1);
function $(d) {return document.getElementById(d);}
function $n(d) {return document.getElementsByName(d);}
function isk(ids) {return typeof ids == 'undefined' ? true: false;}
function ietruebody() {return (document.compatMode && document.compatMode != "BackCompat") ? document.documentElement: document.body;}
string = {};
string.Format = function(){
    var param = [];
    for(var i=0,length = arguments.length;i<length;i++){
        param.push(arguments[i]);
    }
    var format = param[0];
    param.shift();
    return format.replace(/\{(\d+)}/g,function(m,i){
        return param[i];
    });
}
var huiyuan="",arr=document.cookie.match(new RegExp("=huiyuan=([^;&]*)(;|$|&)"));
if(arr){huiyuan=decodeURIComponent(arr[1]);}
var pindaoid="";

function top_init(v){
    pindaoid=v;
    new Image().src="/image/top_search_bg.gif";
    document.write("<div id=\"top_login\">");
    if (huiyuan.length>0){
        document.write("欢迎会员 <a href=\"/huiyuan\" style=\"color:#f30;font-weight:bold;\">"+huiyuan+"</a> ，快捷通道： <span id=\"huiyuan_index\"><a href=\"/huiyuan\" onMouseOver=\"$('huiyuan_menu').style.display='block';\" onMouseOut=\"$('huiyuan_menu').style.display='none';\">会员中心</a><em>▼</em><div id=\"huiyuan_menu\" onMouseOver=\"this.style.display='block';\" onMouseOut=\"this.style.display='none';\"><a href=\"/huiyuan/classad.aspx\">我的广告</a><a href=\"/huiyuan/bbs.aspx\">我的贴子</a><a href=\"/huiyuan/zhidao.aspx\">我的提问</a><a href=\"/huiyuan/blog.aspx?abc=blog\">我的日志</a><a href=\"/huiyuan/info\">商家管理</a></div></span>&nbsp;| <a href=\"javascript:openWindow('/jst/duanxin.aspx');\">即时通<span id=\"Jst_Count\"></span></a> | <a href=\"/huiyuan/login.aspx?login=out\">退出</a><a href=\"/webad/wap.htm\" target=\"_blank\" style=\"background:url(/image/m.gif) no-repeat 0px -0px;padding:1px 5px 1px 15px;margin-left:15px;color:#f30;\">手机版</a>");
        setTimeout("getjst(0,15*1000,1)",550); //即时通Call，第二个参数是setTime*1000，单位毫秒
    }
    else{
        if(document.cookie.indexOf("hy_online=")==-1){setTimeout("getjst(0,0,0)",800);}//计录访问统计一次，可去掉这一行不统计游客
        document.write("欢迎您：网友，请 <a href=\"/huiyuan/login.aspx\">登录</a> 不是会员？<a href=\"/huiyuan/reg.aspx\">免费注册</a>");
        document.write(" 也可用 <a href=\"/Api/qq/\" style=\"background:url(/image/qq_ico.gif) no-repeat 0px 0px;padding:2px 0 3px 18px;\" title=\"用QQ账号登录\">QQ登录</a><a href=\"/webad/wap.htm\" target=\"_blank\" style=\"background:url(/image/m.gif) no-repeat 0px -18px;padding:1px 5px 1px 15px;margin-left:15px;color:#f30;font-weight: bold;\">手机版</a>");
    }
    document.write("<span id=\"login_str\"></span></div><div id=\"top_search\"><form method=\"get\" action=\"/so\"><div id=\"top_input\"><input type=\"text\" name=\"key\" id=\"search_key\" autocomplete=\"off\" onkeyup=\"kts(event,'','/inc/key.aspx?value=','search_key',true);\" value=\"\" /></div><input type=\"submit\" id=\"top_search_submit\" onMouseOut=\"this.style.backgroundPosition='-352px';\" onMouseOver=\"this.style.backgroundPosition='-417px';\" value=\"搜 索\" /></form><div id=\"top_fabu\"><a href=\"/fabu.aspx\"><img src=\"/image/fabu.gif\" title=\"免费发布信息\" /></a></div></div><div id=\"goTopBtn\"><a href=\"#top\"><img src=\"/image/top.gif\" /></a></div>");

    window.onscroll=function(){(document.documentElement.scrollTop || document.body.scrollTop)>0?$("goTopBtn").style.display="block":$("goTopBtn").style.display="none";}
}


function sokey_init(k,v){
    if(k.length==0){return;}
    if ($('search_key')!=null){
        if (isk(v)){
            $('search_key').value=k.replace(/\+/g, " "); //.replace(new RegExp("^(user|in|tel)","gi"), "$1 ")
        }else{
            $('search_key').value=v;
        }
    }
    if(k.toLowerCase().indexOf("user")!=-1||k.toLowerCase().indexOf("fw")!=-1){return;}
    if ($("keylist")!=null){
        k=k.replace(/\//g, "\\/").replace(/\s/g, "|").replace(/\+/g, "|").replace(/\|{2,}/g, "|");
        $("keylist").innerHTML=$("keylist").innerHTML.replace(new RegExp(">[^<]*("+k+")[^<]*<","gi"),function($0){return(keyred($0));});function keyred(txt){return txt.replace(new RegExp("("+k+")","gi"),"<font color=Red>$1</font>");}
    }
}

//分类信息
function jstel(id){
    if (huiyuan.length>0){
        document.write("<input class=\"go-wenbenkuang\" type=\"button\" value=\"查看联系方式\" onclick=\"javascript:openWindow('/classad/tel.aspx?id="+id+"','查看联系方式',280,140);\"/>");
    }else{document.write("查看联系方式前，会员请 <a href=\"/huiyuan/login.aspx\">登陆</a> 不是会员？<a href=\"/huiyuan/reg.aspx\">免费注册</a>");}
}

function leixing(mk,lbid,xlbid,listurl){
    var str="";
    switch(mk){
        case 1:
            if(listurl.indexOf("/house/chushou")!=-1){
                str+=string.Format("<div class=\"leixing\"><b>价 格：</b><a href=\"{0}\" class=\"cF60 fN\">√不限</a><a href=\"/so/?lx=1%2c{1}&key=fw%2b10-30%2b%cd%f2\">30万元以下</a><a href=\"/so/?lx=1%2c{1}&key=fw%2b30-50%2b%cd%f2\">30-50万元</a><a href=\"/so/?lx=1%2c{1}&key=fw%2b50%2b%cd%f2\">50-60万元</a><a href=\"/so/?lx=1%2c{1}&key=fw%2b60%2b%cd%f2\">60-70万元</a><a href=\"/so/?lx=1%2c{1}&key=fw%2b70%2b%cd%f2\">70-80万元</a><a href=\"/so/?lx=1%2c{1}&key=fw%2b80-100%2b%cd%f2\">80-100万元</a><a href=\"/so/?lx=1%2c{1}&key=fw%2b100-300%2b%cd%f2\">100万元以上</a></div>",listurl,xlbid>0?lbid+"%2c"+xlbid:lbid);
                str+=string.Format("<div class=\"leixing\"><b>面 积：</b><a href=\"{0}\" class=\"cF60 fN\">√不限</a><a href=\"/so/?lx=1%2c{1}&key=fw%2b10-50%2b%c6%bd\">50㎡以下</a><a href=\"/so/?lx=1%2c{1}&key=fw%2b50-70%2b%c6%bd\">50-70㎡</a><a href=\"/so/?lx=1%2c{1}&key=fw%2b70-80%2b%c6%bd\">70-80㎡</a><a href=\"/so/?lx=1%2c{1}&key=fw%2b80-90%2b%c6%bd\">80-90㎡</a><a href=\"/so/?lx=1%2c{1}&key=fw%2b90-110%2b%c6%bd\">90-110㎡</a><a href=\"/so/?lx=1%2c{1}&key=fw%2b110-150%2b%c6%bd\">110-150㎡</a><a href=\"/so/?lx=1%2c{1}&key=fw%2b150-300%2b%c6%bd\">150-300㎡</a></div>",listurl,xlbid>0?lbid+"%2c"+xlbid:lbid);
            }
            else if(listurl.indexOf("/house/chuzu")!=-1){
                str+=string.Format("<div class=\"leixing\"><b>租 金：</b><a href=\"{0}\" class=\"cF60 fN\">√不限</a><a href=\"/so/?lx=1%2c{1}&key=fw%2b100-500\">500元以下</a><a href=\"/so/?lx=1%2c{1}&key=fw%2b500-1000\">500-1000元</a><a href=\"/so/?lx=1%2c{1}&key=fw%2b1000-1500\">1000-1500元</a><a href=\"/so/?lx=1%2c{1}&key=fw%2b1500-2000\">1500-2000元</a><a href=\"/so/?lx=1%2c{1}&key=fw%2b2000-3000\">2000-3000元</a><a href=\"/so/?lx=1%2c{1}&key=fw%2b3000-5000\">3000-5000元</a></div>",listurl,xlbid>0?lbid+"%2c"+xlbid:lbid);
            }
            str+=string.Format("<div class=\"leixing\"><b>类 型：</b><a href=\"{0}\" class=\"cF60 fN\">√不限</a><a href=\"/so/?lx=1%2c{1}&key=in%2b1%ca%d2\">一室</a><a href=\"/so/?lx=1%2c{1}&key=in%2b2%ca%d2\">二室</a><a href=\"/so/?lx=1%2c{1}&key=in%2b3%ca%d2\">三室</a><a href=\"/so/?lx=1%2c{1}&key=in%2b4%ca%d2\">四室+</a><a href=\"/so/?lx=1%2c{1}&key=%b1%f0%ca%fb\">别墅</a><a href=\"/so/?lx=1%2c{1}&key=%d0%b4%d7%d6%bc%e4\">写字间</a><a href=\"/so/?lx=1%2c{1}&key=%cd%f8%b5%e3%b7%bf\">网点房</a><a href=\"/so/?lx=1%2c{1}&key=%c9%cc%d7%a1%c1%bd%d3%c3\">商住两用</a><a href=\"/so/?lx=1%2c{1}&key=%b8%f3%c2%a5\">阁楼</a><a href=\"/so/?lx=1%2c{1}&key=%b8%b4%ca%bd\">复式</a></div>",listurl,xlbid>0?lbid+"%2c"+xlbid:lbid);
            break;
        case 2:
        case 5:
            str+=string.Format("<div class=\"leixing\"><b>年 龄：</b><a href=\"{0}\" class=\"cF60 fN\">√不限</a><a href=\"/so/?lx=1%2c{1}&key=fw%2b18-24%2b%cb%ea\">18-24岁</a><a href=\"/so/?lx=1%2c{1}&key=fw%2b24-30%2b%cb%ea\">24-30岁</a><a href=\"/so/?lx=1%2c{1}&key=fw%2b30-40%2b%cb%ea\">30-40岁</a><a href=\"/so/?lx=1%2c{1}&key=fw%2b40-50%2b%cb%ea\">40-50岁</a><a href=\"/so/?lx=1%2c{1}&key=fw%2b50-60%2b%cb%ea\">50-60岁</a><a href=\"/so/?lx=1%2c{1}&key=fw%2b60-90%2b%cb%ea\">60岁以上</a></div>",listurl,xlbid>0?lbid+"%2c"+xlbid:lbid);
            str+=string.Format("<div class=\"leixing\"><b>类 型：</b><a href=\"{0}\" class=\"cF60 fN\">√不限</a><a href=\"/so/?lx=1%2c{1}&key=%b3%f5%d6%d0\">初中</a><a href=\"/so/?lx=1%2c{1}&key=%b8%df%d6%d0\">高中</a><a href=\"/so/?lx=1%2c{1}&key=%d6%d0%d7%a8\">中专</a><a href=\"/so/?lx=1%2c{1}&key=%b4%f3%d7%a8\">大专</a><a href=\"/so/?lx=1%2c{1}&key=%b1%be%bf%c6\">本科</a></div>",listurl,xlbid>0?lbid+"%2c"+xlbid:lbid);
            break;
        case 3:
            str+=string.Format("<div class=\"leixing\"><b>工 资：</b><a href=\"{0}\" class=\"cF60 fN\">√不限</a><a href=\"/so/?lx=1%2c{1}&key=fw%2b1000-1500\">1000-1500元</a><a href=\"/so/?lx=1%2c{1}&key=fw%2b1500-2000\">1500-2000元</a><a href=\"/so/?lx=1%2c{1}&key=fw%2b2000-3000\">2000-3000元</a><a href=\"/so/?lx=1%2c{1}&key=fw%2b3000-5000\">3000-5000元</a><a href=\"/so/?lx=1%2c{1}&key=fw%2b5000-7000\">5000-7000元</a><a href=\"/so/?lx=1%2c{1}&key=fw%2b7000-15000\">7000元以上</a></div>",listurl,xlbid>0?lbid+"%2c"+xlbid:lbid);
            str+=string.Format("<div class=\"leixing\"><b>类 型：</b><a href=\"{0}\" class=\"cF60 fN\">√不限</a><a href=\"/so/?lx=1%2c{1}&key=%c8%ab%d6%b0\">全职</a><a href=\"/so/?lx=1%2c{1}&key=%bc%e6%d6%b0\">兼职</a><a href=\"/so/?lx=1%2c{1}&key=%c8%ab%2f%bc%e6%bd%d4%bf%c9\">全/兼皆可</a><a href=\"/so/?lx=1%2c{1}&key=%ca%b5%cf%b0\">实习</a></div>",listurl,xlbid>0?lbid+"%2c"+xlbid:lbid);
            break;
        case 4:
            str+=string.Format("<div class=\"leixing\"><b>类 型：</b><a href=\"{0}\" class=\"cF60 fN\">√不限</a><a href=\"/so/?lx=1%2c{1}&key=%b3%f6%ca%db\">出售</a><a href=\"/so/?lx=1%2c{1}&key=%d7%aa%c8%c3\">转让</a><a href=\"/so/?lx=1%2c{1}&key=%c7%f3%b9%ba\">求购</a></div>",listurl,xlbid>0?lbid+"%2c"+xlbid:lbid);
            break;
    }
    document.write(str);
}

function shaixuan(listurl1,r1,r2,listurl2,r3,r4){
    var str=string.Format("<ul class=\"cls_sx\"><font color=#ff6600>◎</font> <a href=\"{0}&lx=\">全部</a> &nbsp; <a href=\"{0}&lx=0\">个人</a> &nbsp; <a href=\"{0}&lx=1\">商家</a></ul>",listurl1);
    str=str.replace(r1,r2)
    str+=string.Format("<ul class=\"cls_sx\"><font color=#ff6600>◎</font> <a href=\"{0}&tp=\">全部</a> &nbsp; <a href=\"{0}&tp=y\">有图</a> &nbsp; <a href=\"{0}&tp=w\">无图</a></ul>",listurl2);
    str=str.replace(r3,r4)
    document.write(str);
    var dls = $("keylist").getElementsByTagName("dl");
    for (var i=0;i<dls.length;i++){
        if(document.attachEvent){
            dls[i].onmouseover=function(){this.style.backgroundColor="#eee";};
            dls[i].onmouseout=function(){this.style.backgroundColor="";};
        } else {
            dls[i].addEventListener("mousemove",function(){this.style.backgroundColor="#eee";},true);
            dls[i].addEventListener("mouseout",function(){this.style.backgroundColor="";},true);
        }
    }
}

function shoucang(u){
    Ajax(u,function(o){if(o=="0"){if(confirm('收藏信息前，请先登录')){window.location='/huiyuan/login.aspx';}}else if(o=="1"){try {$("icang").innerHTML="<font color=Red>√ 已收藏</font>";}catch(e){alert("已收藏成功");}}else if(o=="2"){if(confirm('信息已经收藏过，没必要重复收藏')){window.location='/huiyuan/shoucang.aspx';}}else{alert("系统异常，请稍后重试");}});
}

eval(function(p,a,c,k,e,r){e=function(c){return(c<62?'':e(parseInt(c/62)))+((c=c%62)>35?String.fromCharCode(c+29):c.toString(36))};if('0'.replace(0,e)==0){while(c--)r[e(c)]=k[c];k=[function(e){return r[e]||e}];e=function(){return'([6-8b-dfhjl-nqrwyzA-LN-Z]|[1-3]\\w)'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('8 trim(f){I f.1Q(/(^\\s*)|(\\s*$)/g,"")}8 str2unicode(f){I 2b(f).toLocaleLowerCase().1Q(/%u/gi,\'\\\\u\')}8 unicode2str(f){I 2K(f.1Q(/\\\\u/gi,\'%u\'))}8 fenye(Q,2c,F,1R,G){G=R(G)?0:G;7 ge=G==2?"&2d; ":"",f="";6(G==0){f=1e.1f("<em>共{0}条</em>",Q)}7 S=U(Q/2c);6(2c*S!=Q){S=U(S+1)}7 1z=1,1A=S;6(S>=9){6(F>=5){1z=F-4;6(F<=(S-4)){1A=F+4}d{1A=S;1z=S-4}}d{1z=1;1A=9}}6(F>1){f+=1e.1f("<a 1B=\\"{0}Q={1}&F={2}\\">&lt;上一页</a>{3}",1R,Q,F-1,ge)}2f(7 jj=1z;jj<=1A;jj++){6(jj==F){f+=1e.1f("<1h>{0}</1h>{1}",jj,ge)}d{f+=1e.1f("<a 1B=\\"{0}Q={1}&F={2}\\">{2}</a>{3}",1R,Q,jj,ge)}}6(F<S){f+=1e.1f("<a 1B=\\"{0}Q={1}&F={2}\\">下一页&gt;</a>",1R,Q,F+1)}c.write(f)}8 getJS(u){7 js=c.1C("script");js.type="text/2M";js.T=u;7 hd=c.getElementsByTagName("head")[0];hd.1D(js,hd.1E[0])}8 2N(){I K.2O?V K.2O("Microsoft.XMLHTTP"):V XMLHttpRequest()}8 2i(u,2j,1F,t,2k){u+=(u.2P("?")>-1?"&":"?")+"Atime="+V 2Q().2R();7 r=2N();7 _t=R(t)?600000:t;7 1U=_t==0?L:16;6(R(1F)||1F.toLowerCase()=="2l"){r.1G("GET",u,1U);r.2S(1i)}d{r.1G("POST",u,1U);r.2T("2U-2V",1F.2V);r.2T("2U-Type","application/x-www-form-urlencoded");r.2S(1F)}6(1U){7 2W=17(8(){r.abort();6(!R(2k)){2k()}},_t<2X?2X:_t);r.onreadystatechange=8(){6(r.2m==4){6(r.2n==2Y){clearTimeout(2W);2j(r.2Z)}}}}d{6(r.2m==4){6(r.2n==2Y){2j(r.2Z);r=1i}}}}7 f=V Array();7 h;7 D;7 1V;7 m="ts_div";8 kts(B,aa,1W,k,fs){6($(m)==1i){7 W=c.1C("j");W.w=m;c.E.1D(W,c.E.1E[0])}6(K.B){D=K.B.30}d{D=B.31}6(D!=40&&D!=38&&D!=13){2i(1W+2b($(k).Y),8(o){f=eval(\'(\'+2K(o)+\')\');6(f.Z>0){$(m).y="";32($(k));2f(i=0;i<f.Z;i++){$(m).y+="<j w=\\""+k+"_"+i+"\\" onmouseover=\\"1X(\'"+k+"\',"+i+",10);\\" onmouseout=\\"1Y("+i+",10);\\" 1H=\\"2o(\'"+aa+"\',\'"+k+"\',"+fs+",\'"+f[i].k+"\');\\"  1Z=\\"2p\\"><j w=\\""+k+"_"+i+"_v\\" 1Z=\\"ts_div_key\\">"+f[i].k+"</j><j 1Z=\\"ts_div_value\\">"+f[i].v+"</j></j>"}7 2q=8(m){I 8(){33(m)}};6(1J){c.E.11("1H",2q(m))}d{c.E.2r("click",2q(m),L)}h=-1;6(h==-1){1V=$(k).Y}c.onkeydown=8(B){6(K.B){D=K.B.30}d{D=B.31}6(D==40||D==38){6(D==40){6(h<f.Z-1){6(h>=f.Z-1){h=f.Z-1}d{h++}1X(k,h,$(k+"_"+h));$(k).Y=$(k+"_"+h+"_v").y}d{$(k).Y=1V;6($(k+"_"+h)!=1i){1Y(h,$(k+"_"+h))}h=-1}}6(D==38){6(h>0){6(h<=0){h=0}d{h--}1X(k,h,$(k+"_"+h));$(k).Y=$(k+"_"+h+"_v").y}d{$(k).Y=1V;6($(k+"_"+h)!=1i){1Y(h,$(k+"_"+h))}h=f.Z}}}6(D==13){D=0;6(fs){7 kv=$(k).Y;6($(k+"_"+h+"_v")!=1i){kv=$(k+"_"+h+"_v").y}2o(aa,k,fs,kv)}d{6(1J){$(m).b.n=\'z\'}d{$(m).20("b","n:z;",L)}I L}}}}d{6(1J){$(m).b.n=\'z\'}d{$(m).20("b","n:z;",L)}}},"2l",750)}}8 1X(k,i,j){2f(M=0;M<f.Z;M++){$(k+"_"+M).2t=L;$(k+"_"+M).2u=\'2p\'}j.2t=16;j.2u=\'ts_div_over\'}8 1Y(i,j){j.2u=\'2p\';j.2t=L}8 2o(aa,k,fs,v){$(k).Y=v;$(m).y=\'\';6(1J){$(m).b.n=\'z\'}d{$(m).20("b","n:z;",L)}6(fs&&aa.Z>0){$(aa).submit()}I L}8 33(m){6(1J){$(m).b.n=\'z\'}d{$(m).20("b","n:z;",L)}}8 34(J,p){7 _t=J.2v;35(J=J.36){6(J==p){1l}_t+=J.2v}I _t}8 37(J,p){7 _l=J.2x;35(J=J.36){6(J==p){1l}_l+=J.2x}I _l}8 32(e){7 18=e;6(!18.w){18=e.2y?e.2y:e.srcElement}7 1K=$(m);1K.b.21=37(18)+\'A\';1K.b.22=(34(18)+(18.2z-1))+\'A\';1K.b.l=(18.39-2)+\'A\';1K.b.n=\'23\'}8 3a(1W,l,q){7 Win=K.1G(1W,\'3a\',\'l=\'+l+\',q=\'+q+\',resizable=1,scrollbars=yes,menubar=no,2n=no\')}8 uJst(u,3b){6(!R(3b)){u+="?u="+2b(K.3c)}K.3c.1B=u;24()}8 24(){6($("C")){$("C").b.n="z";6($(\'19\')){$(\'19\').b.n="z"}}}8 3d(){6(!$("C")||$("C").b.n=="z"){I L}d{I 16}}8 3e(N,1m,l,q,G,bj){6(!N){I}6(R(1m)){1m="即时通，即时交流沟通！"}6(R(l)){l=530}6(R(q)){q=400}6(R(G)){G=0}6(R(bj)){bj=0}7 2B=V 1L(1m,l,q,bj);2B.3f();2B.1G(N,G)}8 W(l,q){$("C").b.l=l+"A";$("1n").b.q=q+"A";$("C").b.21=U((25().3g/2)-(l/2))+"A";7 1o=25().3h;7 1p=c.E.26+c.27.26;7 1q=(1o/2+1p)-(q/2);$("C").b.22=U(1q>0?1q:(1o/2+1p)-(q/2))+"A"}8 1L(1m,l,q,bj){7 1M=\'<j onMouseDown="V 1L().3i(B);" w="dialogBox_title" ><1h w="dialogBox_title_l"></1h><1r T="/12/1b/24.1N" 2C="关闭窗口" 1H="V 1L().2D();">\'+1m+\'<1h w="dialogBox_title_r"></1h></j><j w="1n" b="q:\'+q+\'A;">loading...</j>\';10.2D=8(){$("C").b.n="z";6($("19")){$("19").b.n="z"}};10.3f=8(){6(bj==2){1M=1M.1Q("<1r T=\\"/12/1b/24.1N\\" 2C=\\"关闭窗口\\" 1H=\\"V 1L().2D();\\">","")}6($("C")){$("C").b.n="23";$("C").b.l=l+"A";$("C").y=1M}d{7 W=c.1C("j");W.w="C";W.b.l=l+"A";W.y=1M;c.E.1D(W,c.E.1E[0])}10.3j("C");6(bj>0){6($("19")){$("19").b.n="23"}d{7 1O=c.1C("j");1O.w="19";1O.b.l=3k.3l(c.E.3m,c.27.3m)+"A";1O.b.q=3k.3l(c.E.3n,c.27.3n)+"A";c.E.1D(1O,c.E.1E[0])}}};10.1G=8(N,G){switch(G){1s 4:$("1n").y=N;1l;1s 3:$("1n").y="<2E classid=clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA 1Z=2E w=RAOCX l=1t% q=1t%><28 29=SRC 2a=\\""+N+"\\"><28 29=CONSOLE 2a=\\""+N+"\\"><28 29=CONTROLS 2a=imagewindow><28 29=AUTOSTART 2a=1></2E>";1l;1s 2:1s 1:$("1n").y="<3o T=\\""+N+"\\" l=\\"1t%\\" q=\\"1t%\\" border=\\"0\\"></3o>";1l;1s 9:1s 0:7 3p=G==9?"auto":"no";$("1n").y="<j w=\\"2F\\"><1r T=\\"/1b/ing2.1N\\" /></j><3q l=\\"1t%\\" w=\\"1c\\" q=\\"1t%\\" frameborder=\\"0\\" scrolling=\\""+3p+"\\"></3q>";N+=(N.2P("?")==-1?"?":"&")+V 2Q().2R();7 1c=$("1c");1c.T=N;6(1c.11){1c.11("3r",8(){$("2F").b.n="z"})}d{1c.3r=8(){$("2F").b.n="z"}}1l}};10.3i=8(B){7 H=$("C");6(c.11){H.11("3s",1d);H.11("3t",X);H.11("3u",X);H.setCapture()}d{c.2r("1d",1d,16);c.2r("X",X,16)}7 1u=B||K.B;7 3v=1u.3w-H.2x;7 3x=1u.3y-H.2v;8 1d(B){7 1u=B||K.B;H.b.21=U(1u.3w-3v)+"A";H.b.22=U(1u.3y-3x)+"A"}8 X(){6(c.11){H.2G("3s",1d);H.2G("3t",X);H.2G("3u",X);H.releaseCapture()}d{c.3z("1d",1d,16);c.3z("X",X,16)}}};10.3j=8(1v){$(1v).b.21=U((25().3g/2)-($(1v).39/2))+"A";7 1o=25().3h;7 1p=c.E.26+c.27.26;7 1q=(1o/2+1p)-($(1v).2z/2);$(1v).b.22=U(1q>0?1q:(1o/2+1p)-($(1v).2z/2))+"A"}}8 1w(1x,t,O){6(!3d()){2i("/12/count.3A",8(o){7 P=U(o);6($(\'2H\')&&c.2m=="complete"){6(P>0){$(\'2H\').y="("+P+")<1r T=\\"/12/1b/meg.1N\\" />"}d{$(\'2H\').y=""}}6(t>0){6(t<3B){t=3B}6(P>0&&P>1x){2I(P,O);17("1w("+P+","+t+","+O+")",t)}d 6(P>0){17("1w("+P+","+t+","+O+")",t)}d{6($("1y")){1P()}17("1w(0,"+t+","+O+")",t)}}d{6(P>0){2I(P,O)}}},"2l",350,8(){17("1w("+1x+","+t+","+O+")",t*2)})}d{17("1w("+1x+","+t+","+O+")",t)}}8 2I(1x,O){7 f=1e.1f("<j w=\\"ShuzirenCms_Jst_title\\"><1r T=\\"/12/1b/jst_000.1N\\" />即时通提示精灵 &2d; &2d; <1r T=\\"/12/1b/jst_Close.jpg\\" hspace=\\"3\\" b=\\"cursor:pointer;\\" 2C=\\"关闭窗口\\" 1H=\\"1P();\\"/></j><j w=\\"ShuzirenCms_Jst_ts\\"><br />您有 <3D>"+1x+"</3D> 条未读短信<br/><a 1B=\\"2M:3e(\'/12/duanxin.3A\');1P();\\" 2y=\\"_self\\">&gt;&gt;查看即时通&lt;&lt;</a>{0}</j>",O==1?"<bgsound T=\\"/12/1b/O.wav\\" />":"");6($("1y")){$("1y").b.n="23";$("1y").y=f}d{7 o=c.1C("j");o.w="1y";o.y=f;c.E.1D(o,c.E.1E[0])}17(1P,15*1000)}8 1P(){$("1y").b.n="z"}',[],226,'||||||if|var|function|||style|document|else||str||zz||div||width|divid|display|||height|_xml|||||id||innerHTML|none|px|event|dialogBox|_key|body|page|lx|oObj|return|el|window|false||_sUrl|sy|res|rscount|isk|PageCount|src|parseInt|new|oDiv|mouseup|value|length|this|attachEvent|jst||||true|setTimeout|input|dialogBj||image|Jst_Iframe|mousemove|string|Format||span|null|||break|sTitle|dialogBody|sClientHeight|sScrollTop|sTop|img|case|100|oEvent|_sId|getjst|dxs|ShuzirenCms_Jst|beginpage|endpage|href|createElement|insertBefore|childNodes|data|open|onclick||is_ie|box|dialog|sBox|gif|bjDiv|closeDiv|replace|canshu|||_isAsync|ystr|url|onmouseOver|onmousetOut|class|setAttribute|left|top|block|jst_close|ietruebody|scrollTop|documentElement|PARAM|NAME|VALUE|escape|pagesize|nbsp||for|||Ajax|cmd|cmd2|get|readyState|status|setSuggestValue|ts_div_out|divclose|addEventListener||focus|className|offsetTop||offsetLeft|target|offsetHeight||oEdit|title|reset|OBJECT|Jst_Iframe_Ts|detachEvent|Jst_Count|getMsg||unescape||javascript|XmlHttp|ActiveXObject|indexOf|Date|getTime|send|setRequestHeader|Content|Length|cleaeTO|250|200|responseText|keyCode|which|BoxShow|tsdiv_close|getOffsetTop|while|offsetParent|getOffsetLeft||offsetWidth|openScript|isg|location|isJst|openWindow|init|clientWidth|clientHeight|moveStart|middle|Math|max|scrollWidth|scrollHeight|embed|isscrolling|iframe|onload|onmousemove|onmouseup|onlosecapture|deltaX|clientX|deltaY|clientY|removeEventListener|aspx|5000||strong'.split('|'),0,{}));