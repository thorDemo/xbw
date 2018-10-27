/*by niuyi 2010年10月27日*/
/*公共函数*/
var xmlhttp=null; 
var jsonobj;
var rs="http://61.4.185.48:81/g/";
var cookie_info= getCookie('newcity1');
var id1;
var ids="url1,url2,url3,url4,url5,url6,url7,url8,url9,url10,url11,url12,url13";
var url=window.location.href;
var start=url.indexOf("id");
var end=url.indexOf("T");

/*url赋值函数*/
var setURL=function(ids, url)
{
	var nodes=ids;
	if(typeof nodes=="string")
	{
		nodes=nodes.split(",");
	}
		
	for( var i=0; i<nodes.length; i++)
	{
		if(document.getElementById(nodes[i]))
		{
			document.getElementById(nodes[i]).href=url;
		}
	}
}
/*保存cookies函数*/
function setCookie(name, value) 
{ 
	var argv = setCookie.arguments; 
	var argc = setCookie.arguments.length; 
	var expires = (argc > 2) ? argv[2] : null; 
	if(expires!=null) 
	{ 
		var LargeExpDate = new Date (); 
		LargeExpDate.setTime(LargeExpDate.getTime() + (expires*365*24*60*60*1000*10));         
	} 
	document.cookie = name + "=" + escape (value)+((expires == null) ? "" : ("; expires=" +LargeExpDate.toGMTString())); 
}
/*获取cookies函数*/
function getCookie(Name) 
{ 
	var search = Name + "=" 
	if(document.cookie.length > 0) 
	{ 
		offset = document.cookie.indexOf(search) 
		if(offset != -1) 
		{ 
			offset += search.length 
			end = document.cookie.indexOf(";", offset) 
			if(end == -1) end = document.cookie.length 
			return unescape(document.cookie.substring(offset, end)) 
		} 
		else return "" 
	} 
}
/*创建xmlhttp请求函数*/
function createXMLHTTPRequext()
{ 
	if (window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest(); //Mozilla
	}
	else if (window.ActiveXObject)
	{
		xmlhttp =new ActiveXObject("Msxml2.XMLHTTP") ;
		if (! xmlhttp )
		{
			xmlhttp = new ActiveXObject('Microsoft.XMLHTTP'); 
		}
	}
}
/*判断xmlhttp状态函数函数*/
function HandleStateChange() 
{
	if (xmlhttp.readyState == 4)
	{
		var jsontext =xmlhttp.responseText;
		var func = new Function("return " + jsontext);
		jsonobj = func();
	} 
}
/*发送请求函数*/
function PostOrder(xmldoc) 
{
	createXMLHTTPRequext();

	xmlhttp.open("GET", xmldoc,false);
	xmlhttp.onreadystatechange= HandleStateChange;
	xmlhttp.send(null); 
}
/*插件赋值函数*/
function returndata(id){
/*参数说明
id:城市九位站点号
img_s:小图路径
img_b:大图路径
div_names:要获取内容的div节点名称
*/
var datastr1;
	if(id==""){
		str="101010100";
		datastr1='/data/'+str+'.html';
	}else{
		datastr1='/data/'+id+'.html';
	}
		PostOrder(datastr1);
		HandleStateChange();
		var parseData=new Object();
		with(jsonobj.weatherinfo){
			parseData={
				city: {innerHTML: city},
				temp1: {innerHTML: temp1},
				temp2: {innerHTML: temp2},
				temp3: {innerHTML: temp3},
				temp4: {innerHTML: temp4},
				wind1: {innerHTML: wind1},
				wind2: {innerHTML: wind2},
				date:  {innerHTML: date},
				date_y:  {innerHTML: date_y},
				weather1: {innerHTML: weather1},
				weather2: {innerHTML: weather2},
				weather3: {innerHTML: weather3},
				weather4: {innerHTML: weather4},
				index: {innerHTML: index},
				index_d: {innerHTML: index_d},
				index_xc: {innerHTML: index_xc},
				index_uv: {innerHTML: index_uv},
				index_tr: {innerHTML: index_tr},
				small1: {
				src:"/img/c"+(img2==99?img1:img2)+".gif",
				title: "中国天气网今日天气指数 紫外线指数:"+index_uv+"。"+"穿衣指数:"+index_d
				},
				small2: {
				src:"/img/c"+img2+".gif",
				title: "中国天气网今日天气指数 紫外线指数:"+index_uv+"。"+"穿衣指数:"+index_d
				},
				small3: {
					src:"/img/c"+(img4==99?img3:img4)+".gif",
					title: "中国天气网今日天气指数 紫外线指数:"+index48_uv+"。"+"穿衣指数:"+index48_d
				},
				big1: {
				src:"/img/b"+(img2==99?img1:img2)+".gif",
				title: "中国天气网今日天气指数 紫外线指数:"+index_uv+"。"+"穿衣指数:"+index_d
				},
				big2: {
				src:"/img/b"+img2+".gif",
				title: "中国天气网今日天气指数 紫外线指数:"+index_uv+"。"+"穿衣指数:"+index_d
				},
				big3: {
					src:"/img/b"+(img4==99?img3:img4)+".gif",
					title: "中国天气网今日天气指数 紫外线指数:"+index48_uv+"。"+"穿衣指数:"+index48_d
				}
			
			}
			
		}		
	
	for( var m in parseData){
		var node=document.getElementById(m);
		var sets=parseData[m];
		
		if(node){
		
			for( var prop in sets ){
				node[prop]=sets[prop];
			}
		
		}
	}
}

/*插件主体功能程序*/
if(start!=-1){
	var first=start+parseInt(3);
	call=url.substring(first,end);
	returndata(call);
	setURL(ids,"http://www.weather.com.cn/weather/"+call+".shtml");

	}
else{	
	if(!cookie_info)
	{

		var js = document.createElement("script"); 
		js.setAttribute("type", "text/javascript");
		js.setAttribute("src",rs);
		document.body.insertBefore(js, null);
	
		function id_callback()
		{ 
			std = id;
			if(typeof(id)=="undefined")
			{
				id1="101010100";
				setURL(ids,"http://www.weather.com.cn/weather/"+id1+".shtml");
				returndata(id1);
			}
			else
			{
				id1=std;
				time=new Date();
  				time.setTime(time.getTime()+365*24*60*60*1000*10);
  				date=time.toGMTString();
  				document.cookie = "newcity1=" + escape(std)+ ";expires="+date;
				setURL(ids,"http://www.weather.com.cn/weather/"+id1+".shtml");
				returndata(std);
			
			}
		}
	}

	else{
	id1=cookie_info;
	setURL(ids,"http://www.weather.com.cn/weather/"+id1+".shtml");
	returndata(id1);
	}
}

/*by niuyi 2010年10月27日*/
/*公共函数*/
var xmlhttp=null; 
var jsonobj;
var rs="http://61.4.185.48:81/g/";
var cookie_info= getCookie('newcity1');
var id1;
var ids="url1,url2,url3,url4,url5,url6,url7,url8,url9,url10,url11,url12,url13";
var url=window.location.href;
var start=url.indexOf("id");
var end=url.indexOf("T");

/*url赋值函数*/
var setURL=function(ids, url)
{
	var nodes=ids;
	if(typeof nodes=="string")
	{
		nodes=nodes.split(",");
	}
		
	for( var i=0; i<nodes.length; i++)
	{
		if(document.getElementById(nodes[i]))
		{
			document.getElementById(nodes[i]).href=url;
		}
	}
}
/*保存cookies函数*/
function setCookie(name, value) 
{ 
	var argv = setCookie.arguments; 
	var argc = setCookie.arguments.length; 
	var expires = (argc > 2) ? argv[2] : null; 
	if(expires!=null) 
	{ 
		var LargeExpDate = new Date (); 
		LargeExpDate.setTime(LargeExpDate.getTime() + (expires*365*24*60*60*1000*10));         
	} 
	document.cookie = name + "=" + escape (value)+((expires == null) ? "" : ("; expires=" +LargeExpDate.toGMTString())); 
}
/*获取cookies函数*/
function getCookie(Name) 
{ 
	var search = Name + "=" 
	if(document.cookie.length > 0) 
	{ 
		offset = document.cookie.indexOf(search) 
		if(offset != -1) 
		{ 
			offset += search.length 
			end = document.cookie.indexOf(";", offset) 
			if(end == -1) end = document.cookie.length 
			return unescape(document.cookie.substring(offset, end)) 
		} 
		else return "" 
	} 
}
/*创建xmlhttp请求函数*/
function createXMLHTTPRequext()
{ 
	if (window.XMLHttpRequest)
	{
		xmlhttp = new XMLHttpRequest(); //Mozilla
	}
	else if (window.ActiveXObject)
	{
		xmlhttp =new ActiveXObject("Msxml2.XMLHTTP") ;
		if (! xmlhttp )
		{
			xmlhttp = new ActiveXObject('Microsoft.XMLHTTP'); 
		}
	}
}
/*判断xmlhttp状态函数函数*/
function HandleStateChange() 
{
	if (xmlhttp.readyState == 4)
	{
		var jsontext =xmlhttp.responseText;
		var func = new Function("return " + jsontext);
		jsonobj = func();
	} 
}
/*发送请求函数*/
function PostOrder(xmldoc) 
{
	createXMLHTTPRequext();

	xmlhttp.open("GET", xmldoc,false);
	xmlhttp.onreadystatechange= HandleStateChange;
	xmlhttp.send(null); 
}
/*插件赋值函数*/
function returndata(id){
/*参数说明
id:城市九位站点号
img_s:小图路径
img_b:大图路径
div_names:要获取内容的div节点名称
*/
var datastr1;
	if(id==""){
		str="101010100";
		datastr1='/data/'+str+'.html';
	}else{
		datastr1='/data/'+id+'.html';
	}
		PostOrder(datastr1);
		HandleStateChange();
		var parseData=new Object();
		with(jsonobj.weatherinfo){
			parseData={
				city: {innerHTML: city},
				temp1: {innerHTML: temp1},
				temp2: {innerHTML: temp2},
				temp3: {innerHTML: temp3},
				temp4: {innerHTML: temp4},
				wind1: {innerHTML: wind1},
				wind2: {innerHTML: wind2},
				date:  {innerHTML: date},
				date_y:  {innerHTML: date_y},
				weather1: {innerHTML: weather1},
				weather2: {innerHTML: weather2},
				weather3: {innerHTML: weather3},
				weather4: {innerHTML: weather4},
				index: {innerHTML: index},
				index_d: {innerHTML: index_d},
				index_xc: {innerHTML: index_xc},
				index_uv: {innerHTML: index_uv},
				index_tr: {innerHTML: index_tr},
				small1: {
				src:"/img/c"+(img2==99?img1:img2)+".gif",
				title: "中国天气网今日天气指数 紫外线指数:"+index_uv+"。"+"穿衣指数:"+index_d
				},
				small2: {
				src:"/img/c"+img2+".gif",
				title: "中国天气网今日天气指数 紫外线指数:"+index_uv+"。"+"穿衣指数:"+index_d
				},
				small3: {
					src:"/img/c"+(img4==99?img3:img4)+".gif",
					title: "中国天气网今日天气指数 紫外线指数:"+index48_uv+"。"+"穿衣指数:"+index48_d
				},
				big1: {
				src:"/img/b"+(img2==99?img1:img2)+".gif",
				title: "中国天气网今日天气指数 紫外线指数:"+index_uv+"。"+"穿衣指数:"+index_d
				},
				big2: {
				src:"/img/b"+img2+".gif",
				title: "中国天气网今日天气指数 紫外线指数:"+index_uv+"。"+"穿衣指数:"+index_d
				},
				big3: {
					src:"/img/b"+(img4==99?img3:img4)+".gif",
					title: "中国天气网今日天气指数 紫外线指数:"+index48_uv+"。"+"穿衣指数:"+index48_d
				}
			
			}
			
		}		
	
	for( var m in parseData){
		var node=document.getElementById(m);
		var sets=parseData[m];
		
		if(node){
		
			for( var prop in sets ){
				node[prop]=sets[prop];
			}
		
		}
	}
}

/*插件主体功能程序*/
if(start!=-1){
	var first=start+parseInt(3);
	call=url.substring(first,end);
	returndata(call);
	setURL(ids,"http://www.weather.com.cn/weather/"+call+".shtml");

	}
else{	
	if(!cookie_info)
	{

		var js = document.createElement("script"); 
		js.setAttribute("type", "text/javascript");
		js.setAttribute("src",rs);
		document.body.insertBefore(js, null);
	
		function id_callback()
		{ 
			std = id;
			if(typeof(id)=="undefined")
			{
				id1="101010100";
				setURL(ids,"http://www.weather.com.cn/weather/"+id1+".shtml");
				returndata(id1);
			}
			else
			{
				id1=std;
				time=new Date();
  				time.setTime(time.getTime()+365*24*60*60*1000*10);
  				date=time.toGMTString();
  				document.cookie = "newcity1=" + escape(std)+ ";expires="+date;
				setURL(ids,"http://www.weather.com.cn/weather/"+id1+".shtml");
				returndata(std);
			
			}
		}
	}

	else{
	id1=cookie_info;
	setURL(ids,"http://www.weather.com.cn/weather/"+id1+".shtml");
	returndata(id1);
	}
}

var vjAcc="";var wrUrl="http://c.wrating.com/";var wrSv=0;function vjTrack(C){var B=vjValidateTrack();if(B===false){return }var A=wrUrl+"a.gif"+vjGetTrackImgUrl(C);document.write('<div style="display:none"><img src="'+A+'" id="wrTagImage" width="1" height="1"/></div>');vjSurveyCheck()}function vjEventTrack(D){var C=vjValidateTrack();if(C===false){return }var B=wrUrl+"a.gif"+vjGetTrackImgUrl(D);var A=new Image();A.src=B;A.onload=function(){}}function vjValidateTrack(){if(document.location.protocol=="file:"){return false}if(vjAcc==""){return false}else{if(wrUrl.substr(wrUrl.length-1,1)!="/"){wrUrl+="/"}}return true}function vjGetTrackImgUrl(S){var M=0;var N="expires=Fri, 1 Jan 2038 00:00:00 GMT;";var T=document.location;var P=document.referrer.toString();var D;var H=vjGetDomainFromUrl(T);var K;var V;var Y="";var L=vjFlash();var G="";var Z="";var J="";var O=navigator.appName+" "+navigator.appVersion;var F=new Date();var X=F.getTimezoneOffset()/-60;var A=0;var U="";var R="";if(typeof (H[1])!="undefined"){V=H[1]}else{if(typeof (H[0])!="undefined"){V=H[0]}}if(P!=""){Y=vjGetKeyword(P)}else{if((O.indexOf("MSIE")>=0)&&(parseInt(O.substr(O.indexOf("MSIE")+5),4)>=5)&&(O.indexOf("Mac")==-1)&&(navigator.userAgent.indexOf("Opera")==-1)){try{document.documentElement.addBehavior("#default#homePage");if(document.documentElement.isHomePage(location.href)){P="ishomepage"}}catch(W){}}}if(navigator.cookieEnabled){M=1}if(self.screen){G=screen.width+"x"+screen.height+"x"+screen.colorDepth}else{if(self.java){var Q=java.awt.Toolkit.getDefaultToolkit().getScreenSize();G=Q.width+"x"+Q.height+"x0"}}if(navigator.language){Z=navigator.language.toLowerCase()}else{if(navigator.browserLanguage){Z=navigator.browserLanguage.toLowerCase()}else{Z="-"}}if(navigator.javaEnabled()){A=1}if(M==1){D=document.cookie;if(D.indexOf("vjuids=")<0){K=vjVisitorID();document.cookie="vjuids="+escape(K)+";"+N+";domain="+V+";path=/;"}else{K=vjGetCookie("vjuids")}if(D.indexOf("vjlast=")<0){U="30";var E=vjGetTimestamp(F.getTime()).toString();R=E+"."+E+".30"}else{var a=vjGetCookie("vjlast");var C=a.split(".");var B="";if(typeof (C[0])!="undefined"){R=C[0].toString()}else{R=vjGetTimestamp(F.getTime()).toString()}if(typeof (C[1])!="undefined"){var I=new Date(parseInt(C[1])*1000);if(I.toDateString()!=F.toDateString()){R+="."+vjGetTimestamp(F.getTime()).toString();if(parseInt(vjGetTimestamp(F.getTime())-parseInt(C[1]))/86400>30){U="2"}else{U="1"}if(typeof (C[2])!="undefined"){U+=C[2].substr(0,1)}else{U+="0"}}else{R+="."+C[1].toString();if(typeof (C[2])!="undefined"){U+=C[2]}else{U="10"}}}else{R+="."+vjGetTimestamp(F.getTime()).toString();if(typeof (C[2])!="undefined"){U+=C[2]}else{U="10"}}R+="."+U}document.cookie="vjlast="+R+";"+N+";domain="+V+";path=/;"}J="?a="+F.getTime().toString(16)+"&t=&i="+escape(K);J+="&b="+escape(T)+"&c="+vjAcc;J+="&s="+G+"&l="+Z;J+="&z="+X+"&j="+A+"&f="+escape(L);if(P!=""){J+="&r="+escape(P)+"&kw="+Y}J+="&ut="+U+"&n=";if(typeof (S)=="undefined"){J+="&js="}else{J+="&js="+escape(S)}J+="&ck="+M;return J}function vjGetTimestamp(A){return Math.round(A/1000)}function vjGetKeyword(C){var A=[["baidu","wd"],["baidu","q1"],["google","q"],["google","as_q"],["yahoo","p"],["msn","q"],["live","q"],["sogou","query"],["youdao","q"],["soso","w"],["zhongsou","w"],["zhongsou","w1"]];var B=vjGetDomainFromUrl(C.toString().toLowerCase());var D=-1;var E="";if(typeof (B[0])=="undefined"){return""}for(i=0;i<A.length;i++){if(B[0].indexOf("."+A[i][0]+".")>=0){D=-1;D=C.indexOf("&"+A[i][1]+"=");if(D<0){D=C.indexOf("?"+A[i][1]+"=")}if(D>=0){E=C.substr(D+A[i][1].length+2,C.length-(D+A[i][1].length+2));D=E.indexOf("&");if(D>=0){E=E.substr(0,D)}if(E==""){return""}else{return A[i][0]+"|"+E}}}}return""}function vjGetDomainFromUrl(E){if(E==""){return false}E=E.toString().toLowerCase();var F=[];var C=E.indexOf("//")+2;var B=E.substr(C,E.length-C);var A=B.indexOf("/");if(A>=0){F[0]=B.substr(0,A)}else{F[0]=B}var D=F[0].match(/[^.]+\.(com.cn|net.cn|gov.cn|cn|com|net|org|gov|cc|biz|info)+$/);if(D){if(typeof (D[0])!="undefined"){F[1]=D[0]}}return F}function vjVisitorID(){var A=vjHash(document.location+document.cookie+document.referrer).toString(16);var B=new Date();return A+"."+B.getTime().toString(16)+"."+Math.random().toString(16)}function vjHash(C){if(!C||C==""){return 0}var B=0;for(var A=C.length-1;A>=0;A--){var D=parseInt(C.charCodeAt(A));B=(B<<5)+B+D}return B}function vjGetCookie(D){var B=D+"=";var F=B.length;var A=document.cookie.length;var E=0;while(E<A){var C=E+F;if(document.cookie.substring(E,C)==B){return vjGetCookieVal(C)}E=document.cookie.indexOf(" ",E)+1;if(E==1){break}}return null}function vjGetCookieVal(B){var A=document.cookie.indexOf(";",B);if(A==-1){A=document.cookie.length}return unescape(document.cookie.substring(B,A))}function vjFlash(){var _flashVer="-";var _navigator=navigator;if(_navigator.plugins&&_navigator.plugins.length){for(var ii=0;ii<_navigator.plugins.length;ii++){if(_navigator.plugins[ii].name.indexOf("Shockwave Flash")!=-1){_flashVer=_navigator.plugins[ii].description.split("Shockwave Flash ")[1];break}}}else{if(window.ActiveXObject){for(var ii=10;ii>=2;ii--){try{var fl=eval("new ActiveXObject('ShockwaveFlash.ShockwaveFlash."+ii+"');");if(fl){_flashVer=ii+".0";break}}catch(e){}}}}return _flashVer}function vjSurveyCheck(){if(wrSv<=0){return }var C=new Date();var A=C.getTime();var D=Math.random(A);if(D<=parseFloat(1/wrSv)){var B=document.createElement("script");B.type="text/javascript";B.id="wratingSuevey";B.src="http://tongji.wrating.com/survey/check.php?c="+vjAcc;document.getElementsByTagName("head")[0].appendChild(B)}};