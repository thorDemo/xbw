var _t1 = 0; //打开页面时等待图片载入的时间，单位为秒，可以设置为0
var _t2 = 6; //图片轮转的间隔时间
var _tnum = 4; //焦点图个数
var _tn = 1;//当前焦点
var _tl =null;
var t;
if (typeof(Jnum) != 'undefined' ){_tnum=Jnum;}
if(document.getElementById("jdt").innerHTML.length<30){
document.getElementById("jdt").innerHTML="加载中...";
Ajax("/123/jdt.ashx",function(o){
	var j=eval('('+ unescape(o)+')'),str="";
//str="<div id=\"jdt_1\"><a href=\"webad/adServer.htm\" target=\"_blank\"><img src=\"/tp/2010/03/29/011212343.gif\" /><br />黄金广告位招商</a></div>"
if(j.length>0){
	for(i=0;i<(j.length>_tnum?_tnum:j.length);i++){
		str+=string.Format("<div id=\"jdt_{0}\"{4}><a href=\"/123/?u={1}\" target=\"_blank\"><img src=\"{2}\" /><p>{3}</p></a></div>",(i+1),j[i].url,j[i].tp,j[i].bt,i>0?" style=\"display:none;\"":"");
	  }		  
   document.getElementById("jdt").innerHTML=str+"<div id=\"jdt_page\"></div>";
xsp(1);
t= setTimeout('change_img()',_t1*1000);}
	});
}else{document.getElementById('jdt_1').style.display='block';
xsp(1);
t= setTimeout('change_img()',_t1*1000);
}

function change_img(){
setFocus(_tn);
t = setTimeout('change_img()',_t2*1000);
}

function setFocus(i){
if(i>_tnum){_tn=1;i=1;}
_tl?document.getElementById('jdt_'+_tl).style.display='none':'';
document.getElementById('jdt_'+i).style.display='block';
document.getElementById('jdt_'+i).onmouseover=function(){clearTimeout(t);}; //鼠标移上时静止
document.getElementById('jdt_'+i).onmouseout=function(){_tn=i;t= setTimeout('change_img()',_t2*1000);};
xsp(i);
_tl=i;
_tn++;
}

function xsp(i){
var str="";
for (ii=1;ii<=_tnum;ii++){
if (ii==i){
    str+="<strong>"+ii+"</strong>";}
else{
    str+="<a href=\"javascript:setFocus("+ii+");\" target=\"_self\">"+ii+"</a>";}
document.getElementById("jdt_page").innerHTML=str;}
}