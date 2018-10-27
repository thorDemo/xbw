function bbsEdit(){
    document.write("<div class=\"mainbox\"><h3><a href=\"#top\">↑返回顶部</a> * 快速发表贴子</h3>");
    if (zt==2 || (huiyuan.length==0 &&ykfa==0)){
        document.write("<div id=hf><div id=hf_l><b>发言前须知：</b><br /> &nbsp; 1、请对您的言行负责，并遵守中华人民共和国有关法律法规，尊重网上道德。<br /> &nbsp; 2、各栏目的版主有权保留、修改、转移或删除其管辖版面中的任意内容。</div><div id=hf_r>");
        if (id>0){document.write("<form action=hf.aspx?abc=hf&lbid=" + lbid + "&id=" + id + " method=post name=edit_form id=edit_form onsubmit='javascript:return jc(this)'>");}
        else{document.write("<form action=fa.aspx?abc=tj&lbid=" + lbid + " method=post name=edit_form id=edit_form onsubmit='javascript:return jc(this)'>标 题：<input name=bt id=bt type=text size=48 maxlength=35 style=\"margin-bottom:4px;width:350px;height:15px;border:1px solid #888;\"> <font color=red>*</font>");}
        document.write("<div id=\"editor\"><div id=\"em_menu\" style=\"display: none;\"></div><a href=\"javascript:tj('[b]','[/b]');\" title=\"加粗\" class=\"e_b\">B</a><a href=\"javascript:tj('[i]','[/i]');\" title=\"斜体\" class=\"e_i\">I</a><a href=\"javascript:tj('[u]','[/u]');\" title=\"下划线\" class=\"e_u\">U</a><a href=\"javascript:em();\" title=\"插入表情\" class=\"e_Smilies\">em</a><a href=\"javascript:tj('[img]','[/img]');\" title=\"插入图片\" class=\"e_img\">Image</a><a href=\"javascript:tj('[url]','[/url]');\" title=\"插入链接\" class=\"e_link\">Link</a><a href=\"javascript:tj('[quote]','[/quote]');\" title=\"插入引用\" class=\"e_quote\">Quote</a><textarea onkeydown='if(event.keyCode==13 && event.ctrlKey ) document.edit_form.Submit1.click();' name='nr' style='padding-top:2px;width:473px;height:70px;border:0;border-top:1px solid #888;word-break:break-all;background:White url(/tp/image/bg_logo.gif) no-repeat center;overflow:auto;' Title='按 Ctrl+Enter 直接发送' onclick=\"this.style.height='150px'\"");
        if (huiyuan.length==0){if (ykfa>0){document.write(" onFocus=\"javascript:setYzm();\"></textarea></div><p style=\"margin-top:4px;\">会员账号：<input name=\"temp_huiyuan\" type=\"text\" style=\"width:75px;height:15px;border:1px solid #888;\" maxlength=\"16\"> 密码：<input name=\"temp_password\" type=\"password\" style=\"width:75px;height:15px;border:1px solid #888;font-size:11px;\" maxlength=\"16\"> 验证码：<input name=\"yz\" type=\"text\" maxlength=\"4\" style=\"margin-top:4px;width:40px;height:15px;border:1px solid #888;\" onFocus=\"setYzm();\"> <span style=\"padding:0 3px;\" id=\"yzmLine\"></span><a href=\"/huiyuan/reg.aspx\">注册新会员</a></p>");}else{document.write(" onFocus=\"javascript:setYzm();\"></textarea></div>验证码：<input name=\"yz\" type=\"text\" maxlength=\"4\" style=\"margin-top:4px;width:40px;height:15px;border:1px solid #888;\" onFocus=\"setYzm();\"><span style=\"padding:0 3px;\" id=\"yzmLine\"></span>推荐先 <a href=\"/huiyuan/reg.aspx\">注册</a> | <a href=\"/huiyuan/login.aspx\">登陆</a><br />");}}else{document.write("></textarea></div>");}

        if (id>0){document.write("<input name=Submit1 type=submit class=btn value='回复贴子'> <input name=Submit3 type=button class=btn value='高级模式' onclick=\"window.location='hf.aspx?lbid=" + lbid + "&id=" + id + "'\">");}
        else{document.write("<input name=Submit1 type=submit class=btn value='发表话题'> <input name=Submit3 type=button class=btn value='高级模式' onclick=\"window.location='fa.aspx?lbid=" + lbid + "'\">");}
//if (huiyuan.length>0){document.write(" &nbsp; 发言人：<span id=\"fa_huiyuan\">" + huiyuan + "</span><!-- &nbsp;[<a href=\"javascript:openWindow('/inc/majia.aspx','换马甲',280,320);\">换马甲</a>]--><input type=\"hidden\" id=\"majia_huiyuan\" name=\"majia_huiyuan\" value=\"\" />");}
        document.write("</form></div></div>");
    }else
    {
        if(huiyuan.length>0){document.write("<div style=\"margin:15px;\">提示：发贴前，请先通过手机验证。点击 [<a href='/huiyuan/sms.aspx?ts=%b7%a2%cc%f9%c7%b0%a3%ac%c7%eb%cf%c8%cd%a8%b9%fd%ca%d6%bb%fa%d1%e9%d6%a4'>验证手机</a>]</div>");}else{document.write("<div style=\"margin:15px;\">提示：您尚未注册或登录。会员请 [<a href=/huiyuan/login.aspx>登录</a>] ,不是会员？ [<a href=/huiyuan/reg.aspx>免费注册</a>]</div>");}
    }
    document.write("</div>");
//为ie6增加表格移动显亮，从1开始计
    var dls = document.body.getElementsByTagName("dl");for (var i=1;i<dls.length;i++){dls(i).onmouseover=function(){this.style.backgroundColor="#E8F3FD";};dls(i).onmouseout=function(){this.style.backgroundColor="";};}
}
function jc(aa){
    if (id==0){if(aa.bt.value.length<3){alert('标题不能少于3字符！');aa.bt.focus();return false;}}
    if(aa.nr.value==''){
        alert('贴子内容不能为空!');
        return false;}
    if(aa.nr.value.length>50000){
        alert('贴子内容不能超过50000字!');
        return false;}
    if(/^(\s*\[em[a-z0-9\/]{1,5}\]\s*){1,}$/.test(aa.nr.value)){
        alert('内容不能为仅表情符号!');
        return false;}
    if (huiyuan.length==0){if (ykfa>0){if(aa.temp_huiyuan.value=='' || aa.temp_password.value==''){alert('请输入会员账号和密码！');return false;}}if(aa.yz.value==''){alert('请输入验证码！');return false;}}
    aa.Submit1.disabled=true;
    return true;}
function tj(str1,str2){document.edit_form.nr.focus();if(typeof(document.selection) != 'undefined') {var range= document.selection.createRange();range.text= str1 + range.text + str2;}else{document.edit_form.nr.value+=str1+str2;}em_close();}
function em(){
    var em_div="<div><div style='position:absolute;width:16px;height:16px;margin:0px 0 0 220px;background:url(/edit/ubb/EditorIcons.gif) no-repeat -324px 0px;border:0;cursor:pointer;' onclick='em_close();' title='关闭'></div><iframe id='em_ifram' width='240px' height='180px' src='/edit/ubb/em.htm?id=miubb' frameborder='0' scrolling='no'></iframe></div>";
    var emlst=$("em_menu");emlst.style.display="";emlst.innerHTML=em_div;
    if(navigator.userAgent.toLowerCase().indexOf('msie') != -1)
        document.edit_form.nr.attachEvent("onclick",em_close);else
        document.edit_form.nr.addEventListener("click",em_close,false);}
function em_close(){$("em_menu").style.display="none";}
function em_insert(str){document.edit_form.nr.focus();document.edit_form.nr.value+="[em"+str+"]";document.edit_form.nr.focus();em_close();}
function setYzm(){if($("yzmLine").innerHTML.length==0){$("yzmLine").innerHTML = "<img src='/inc/yzm.aspx?abc=str&t=" + Math.random() + "' onclick=\"this.src=this.src+'?'\" align=absmiddle>";}}

function btfy(id,js,pagesize,hz){var fystr="";var fypage,fy;js=parseInt(js+1);if(js%pagesize>0){fypage=parseInt(js/pagesize)+1}else{fypage=js/pagesize}if(fypage>1){fystr="<span class=\"bt_page\">";if(fypage<=5){for(fy=2;fy<fypage+1;fy++){fystr+="<a href=\""+id+"-p"+fy+"."+hz+"\" target=\"_blank\">"+fy+"</a>"}}else{for(fy=2;fy<5;fy++){fystr+="<a href=\""+id+"-p"+fy+"."+hz+"\" target=\"_blank\">"+fy+"</a>"}fystr+="...<a href=\""+id+"-p"+fypage+"."+hz+"\" target=\"_blank\">"+fypage+"</a>"}fystr+="</span>"}document.write(fystr)}function bbspage(rscount,pagesize,page,canshu,hz){var str="";var PageCount=parseInt(rscount/pagesize);if(pagesize*PageCount!=rscount){PageCount=parseInt(PageCount+1)}var beginpage=1,endpage=PageCount;if(PageCount>=9){if(page>=5){beginpage=page-4;if(page<=(PageCount-4)){endpage=page+4}else{endpage=PageCount;beginpage=PageCount-4}}else{beginpage=1;endpage=9}}if(PageCount>5&&page>5){str+=string.Format("<a href=\"{0}-r{1}-p{2}.{3}\">&lt;</a>",canshu,rscount,page-1,hz)}for(var jj=beginpage;jj<=endpage;jj++){if(jj==page){str+=string.Format("<span>{0}</span>",jj)}else{str+=string.Format("<a href=\"{0}-r{1}-p{2}.{3}\">{2}</a>",canshu,rscount,jj,hz)}}if(PageCount>5&&page<PageCount){str+=string.Format("<a href=\"{0}-r{1}-p{2}.{3}\">&gt;</a>",canshu,rscount,page+1,hz)}document.write(str)}