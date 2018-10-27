var imgwidth=620;
function $(id){return document.getElementById(id);}
function show(o){document.getElementById(o).style.display="block";}
function hide(o){document.getElementById(o).style.display="none";}
function geturl(url,id){
var http=false;
$(id).innerHTML='<span class="loading">&nbsp;&nbsp;</span>';
if(window.XMLHttpRequest){http=new XMLHttpRequest();if(http.overrideMimeType){http.overrideMimeType('text/plain');}}else if(window.ActiveXObject){try{http=new ActiveXObject("Msxml2.XMLHTTP");}catch(e){try{http=new ActiveXObject("Microsoft.XMLHTTP");}catch(e){}}}
if(!http){alert('Cannot send an XMLHTTP request');return false;}
http.onreadystatechange=function(){if(http.readyState==4){$(id).innerHTML=http.responseText;}}
http.open("get", url, true);
http.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
http.send(null);
}
function imgsize(){
	var img=document.getElementById("news").getElementsByTagName("img");
	for(var i=0; i<img.length;i++){
		if(img[i].width>imgwidth){img[i].width=imgwidth;img[i].style.width=imgwidth;img[i].title="点击在新窗口打开大图";img[i].style.cursor="pointer";img[i].border=0;img[i].onclick=function(e){window.open(this.src);}}
	}
}

function runCode()  //定义一个运行代码的函数，
{
  var code=event.srcElement.parentElement.children[0].value;//即要运行的代码。
  var newwin=window.open('','','');  //打开一个窗口并赋给变量newwin。
  newwin.opener = null // 防止代码对页面修改
  newwin.document.write(code);  //向这个打开的窗口中写入代码code，这样就实现了运行代码功能。
  newwin.document.close();
}
function CopyCode(ID) { 
	if (document.all){
		 var textRange = event.srcElement.parentElement.children[0].createTextRange(); 
		 textRange.execCommand("Copy"); 
	}
	else{
		 alert("此功能只能在IE上有效")
	}
}

function doZoom(size){
	document.getElementById('news').style.fontSize=size+'px'
}