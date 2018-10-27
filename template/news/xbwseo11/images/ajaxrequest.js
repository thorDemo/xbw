function AJAXRequest(n){var r=[],p=this,c=AJAXRequest.__pool__||(AJAXRequest.__pool__=[]);(function(v){var u=function(){};v=v?v:{};var w=["url","content","method","async","encode","timeout","ontimeout","onrequeststart","onrequestend","oncomplete","onexception"];var s=["","","GET",true,k("UTF-8"),3600000,u,u,u,u,u];var t=w.length;while(t--){p[w[t]]=h(v[w[t]],s[t])}if(!l()){return false}})(n);function h(s,t){return s!=undefined?s:t}function l(){var v,s=[window.XMLHttpRequest,"MSXML2.XMLHTTP","Microsoft.XMLHTTP"];var t;for(t=0;t<c.length;t+=1){if(c[t].readyState===0||c[t].readyState===4){return c[t]}}for(t=0;t<s.length;t+=1){try{v=(s[t]&&typeof(s[t])=="function"?new s[t]:new ActiveXObject(s[t]));break}catch(u){v=false;continue}}if(!v){throw"Cannot init XMLHttpRequest object!"}else{c[c.length]=v;return v}}function d(s){return document.getElementById(s)}function m(s){var t=s*1;return(isNaN(t)?0:t)}function b(s){return(typeof(s)=="string"?(s=d(s))?s:false:s)}function o(){return((new Date)*1)}function e(t,s){r[t+""]=s}function i(s){return(r[s+""])}function f(u,s,v){return(function t(x){x=u(x);for(var w=0,y=s.length;w<y;w+=1){x=x.replace(s[w],v[w])}return(x)})}function k(s){if(s.toUpperCase()=="UTF-8"){return(encodeURIComponent)}else{return(f(escape,[/\+/g],["%2B"]))}}function a(u,s){if(!u.nodeName){return}var v="|"+u.nodeName.toUpperCase()+"|";if("|INPUT|TEXTAREA|OPTION|".indexOf(v)>-1){u.value=s}else{try{u.innerHTML=s}catch(t){}}}function q(s){if(typeof(s)=="function"){return s}else{s=b(s);if(s){return(function(t){a(s,t.responseText)})}else{return p.oncomplete}}}function j(s,x,u){var t=0,w=[];while(t<s.length){w[t]=s[t]?(u[t]?u[t](s[t]):s[t]):x[t];t+=1}while(t<x.length){w[t]=x[t];t+=1}return w}function g(){var z,C=false,E=l();var v=j(arguments,[p.url,p.content,p.oncomplete,p.method,p.async,null],[null,null,q,null,null,null]);var u=v[0],A=v[1],D=v[2],t=v[3],x=v[4],w=v[5];var y=t.toUpperCase()=="POST"?true:false;if(!u){throw"url is null"}var B={url:encodeURI(u),content:A,method:t,params:w};if(!y){u+=(u.indexOf("?")>-1?"&":"?")+"timestamp="+o()}E.open(t,u,x);p.onrequeststart(B);if(y){E.setRequestHeader("Content-Type","application/x-www-form-urlencoded")}E.setRequestHeader("X-Request-With","XMLHttpRequest");z=setTimeout(function(){C=true;E.abort()},p.timeout);var s=function(){if(C){p.ontimeout(B);p.onrequestend(B)}else{if(E.readyState==4){clearTimeout(z);B.status=E.status;try{if(E.status==200){setTimeout(function(){D(E,w)},0)}else{p.onexception(B)}}catch(F){p.onexception(B)}p.onrequestend(B)}}};E.onreadystatechange=s;if(y){E.send(A)}else{E.send("")}if(x===false){s()}return true}this.setcharset=function(s){p.encode=k(s)};this.get=function(t,u,s){return g(t,"",u,"GET",p.async,s)};this.update=function(z,w,u,y,s){u=m(u);y=m(y);if(u<1){y=1}else{if(y<1){y=Number.POSITIVE_INFINITY}}var t=function(){g(w,"",z,"GET",p.async,s)};var v=o();var x=function(A){t();A--;if(A>0){e(v,setTimeout(function(){x(A)},u))}};x(y);return v};this.stopupdate=function(s){clearTimeout(i(s))};this.post=function(t,u,v,s){return g(t,u,v,"POST",p.async,s)};this.postf=function(z,E,w){var v=[],y,C,D,B,x,F=arguments.length,u=arguments;z=z?b(z):false;if(!z||z.nodeName!="FORM"){return false}validfoo=z.getAttribute("onvalidate");validfoo=validfoo?(typeof(validfoo)=="string"?new Function(validfoo):validfoo):null;if(validfoo&&!validfoo()){return false}var t=z.getAttribute("action"),s=z.getAttribute("method");var A=p.formToStr(z);if(A.length===0){return false}if(s.toUpperCase()=="POST"){return g(t,A,E,"POST",true,w)}else{t+=(t.indexOf("?")>-1?"&":"?")+A;return g(t,"",E,"GET",true,w)}};this.formToStr=function(z){var u="",y="",t=z.elements,v,A;for(var x=0;x<t.length;++x){v=t[x];if(v.name!==""){A=undefined;switch(v.type){case"select-one":if(v.selectedIndex>-1){A=v.options[v.selectedIndex].value}else{A=""}break;case"select-multiple":var s=v.options;for(var w=0;w<s.length;++w){if(s[w].selected){u+=y+v.name+"="+p.encode(s[w].value);y="&"}}break;case"checkbox":case"radio":if(v.checked){A=v.value}break;default:A=v.value;break}if(A!=undefined){A=p.encode(A);u+=y+v.name+"="+A;y="&"}}}return u}};


	ajaxDealStr = "数据处理中...";
	ajaxLoadStr = "数据读取中...";
		try {
	ajaxDealStr = lang["ajaxDealStr"];
	ajaxLoadStr = lang["ajaxLoadStr"];	
		}catch (e) {}

// POST表单AJAX处理
function AjaxPostDeal(formName){
	try {
		document.getElementById("loadingStr").innerHTML = "<span style='font-size:14px;'><img src='inc_img/onload.gif' style='margin-right:5px;' />"+ ajaxDealStr +"</span>";
	}catch (e) {}

	var ajax=new AJAXRequest();
	ajax.encode = function(str) { 
		return escape(str); 
	} 

	ajax.postf(
		formName,
		// 回调函数，注意，是回调函数名，不要带括号
		function(obj) {
			eval((obj.responseText).replace(/<\s*(script[^>]*)>(.[^<]*)<\/\s*script>/gi,"$2"));
			try {
				document.getElementById("loadingStr").innerHTML = "";
			}catch (e) {}
		}
	);
	return false;
}


// GET提交AJAX处理
function AjaxGetDeal(urlStr){
	var ajax=new AJAXRequest();
	ajax.encode = function(str) { 
		return escape(str); 
	} 

	ajax.get(
		urlStr,
		// 回调函数，注意，是回调函数名，不要带括号
		function(obj) { eval((obj.responseText).replace(/<\s*(script[^>]*)>(.[^<]*)<\/\s*script>/gi,"$2")); }
	);
	return false;
}


// GET提交AJAX处理
function AjaxGetDealToAlert(urlStr){
	var ajax=new AJAXRequest();
	ajax.encode = function(str) { 
		return escape(str); 
	} 

	ajax.get(
		urlStr,
		// 回调函数，注意，是回调函数名，不要带括号
		function(obj) { alert((obj.responseText).replace(/<\s*(script[^>]*)>(.[^<]*)<\/\s*script>/gi,"$2")); }
	);
	return false;
}


// GET提交AJAX处理
function AjaxGetDealToId(urlStr,outputID){
	var ajax=new AJAXRequest();
	ajax.encode = function(str) { 
		return escape(str); 
	} 

	ajax.get(
		urlStr,
		// 回调函数，注意，是回调函数名，不要带括号
		function(obj) { document.getElementById(outputID).innerHTML = obj.responseText; }
	);
	return false;
}

// GET提交AJAX处理（允许执行JS）
function AjaxGetDealToIdJs(urlStr,outputID){
	var ajax=new AJAXRequest();
	ajax.encode = function(str) { 
		return escape(str); 
	} 

	ajax.get(
		urlStr,
		// 回调函数，注意，是回调函数名，不要带括号
		function(obj) { set_innerHTML(outputID,obj.responseText);VoteStyle(); }
	);
	return false;
}
