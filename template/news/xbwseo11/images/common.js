// 获取元素id
function $id(str){
	return document.getElementById(str);
}

// 获取元素name
function $name(str){
	return document.getElementsByName(str);
}

// 把Option的text值覆盖toID文本框
// 应用例子 onchange="OptionTextTo('labItemID','labItemName');"
function OptionTextTo(sourceID,toID){
	document.getElementById(toID).value=document.getElementById(sourceID).options[document.getElementById(sourceID).selectedIndex].text;
}


// 计算字符串的字节数
/*function Str_Byte(str){
	strLen = str.length;
	//str=str.replace(/[^\w\u4E00-\u9FA5]/g, '')
	str=str.replace(/[^\x00-\xff]/g, '');
	strLen2 = str.length;
	strTotalLen = strLen2 + (strLen - strLen2) * 2;
	return strTotalLen;
}*/

// 判断是否含特殊符号
function Str_IsSign(str){
	var txt=new RegExp("[ ,\\`,\\~,\\!,\\@,\#,\\$,\\%,\\^,\\+,\\*,\\&,\\\\,\\/,\\?,\\|,\\:,\\.,\\<,\\>,\\{,\\},\\(,\\),\\',\\;,\\=,\"]");
    //特殊字符正则表达式
    if (txt.test(str)){
        return true;
    }else{
		return false;
	}
}


// 计算字符串的字节数
function Str_Byte(str){
	var newStr = 0;
	newStr=str.replace(/[^\u0000-\u00ff]/g, '***');
	return newStr.length;
}

// 检测邮箱的合法性。不合法，返回-1
function IsMail(str){
	if (str.search(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/)!=-1){
		return true;
	}else{
		return false;
	}
}

// 检测文件框是否为图片文件
function IsImgFile(fileValue){
	var re = new RegExp("\.(gif|jpg|jpeg|png|bmp)","ig");
	return re.test(fileValue)
}


// 过滤字符串
// 应用例子 onkeyup="if (this.value!=FiltChar(this.value)){this.value=FiltChar(this.value)}"
// 应用例子 onkeyup="this.value=FiltChar(this.value)"
function FiltChar(str){
	return str.replace(/[^\w\u4E00-\u9FA5]/g, '');
}


// 过滤小数
// 应用例子 onkeyup="if (this.value!=FiltDecimal(this.value)){this.value=FiltDecimal(this.value)}"
// 应用例子 onkeyup="this.value=FiltDecimal(this.value)"
function FiltDecimal(str){
	return str.replace(/[^\d*\.?\d{0,2}$]/g,'')
}

// 过滤整数
// 应用例子 onkeyup="if (this.value!=FiltInt(this.value)){this.value=FiltInt(this.value)}"
// 应用例子 onkeyup="this.value=FiltInt(this.value)"
function FiltInt(str){
	return str.replace(/\D/g,'')
}

// 下拉框内容载入数组变量
function SelectOptionArr(selectName){
	var SelectOptionArray = new Array();

	for (soi=0; soi<document.getElementById(selectName).options.length; soi++){
		SelectOptionArray[document.getElementById(selectName).options[soi].value] = document.getElementById(selectName).options[soi].text;
	}
	return SelectOptionArray;
}

// 下拉框内容检索
function SelectOptionSearch(sourceID,selectName,arrObj){
	document.getElementById(selectName).options.length=0;
	for (var key in arrObj){
		if (arrObj[key].lastIndexOf(document.getElementById(sourceID).value)>=0){
			document.getElementById(selectName).options.add(new Option(arrObj[key],key));
		}
	}
}

// 清理下拉框内容
function SelectOptionClear(selectName,defText){
	document.getElementById(selectName).options.length=0; 
	document.getElementById(selectName).options.add(new Option(defText,""));
	document.getElementById(selectName).value = "";
}


// 改变验证码
function ChangeCode(){
	$id("showcode").src="inc/VerCode.asp?mudi="+ Math.random();
	$id("verCode").value = "";
	$id("verCode").focus();

}

// 点击验证码框获取验证码
function GetVerCode(str){
	if ($id("showVerCode").innerHTML.lastIndexOf('VerCode')==-1){
		$id("showVerCode").innerHTML = "<img id='showcode' src='inc/VerCode.asp?mudi="+ Math.random() +"' align='top' style='cursor:pointer;' height='29' onclick='ChangeCode()' alt='点击更换' />";	
	}else if (str == "change"){
		ChangeCode();
	}
}


// Ajax导航链接
function AjaxNavHref(){
	var outputID = arguments[0] ? arguments[0] : "";
	var urlStr = arguments[1] ? arguments[1] : "";
	var pageNum = arguments[2] ? arguments[2] : "";

	if (outputID==""){ outputID="dialogBody"; }
	if (urlStr==""){ urlStr=document.location.href; }
	if (! isNaN(parseInt(pageNum))){ pageNum="&page="+ pageNum; }else{ pageNum=""; }

	document.getElementById(outputID).innerHTML="<br /><br /><center style='font-size:14px;'><img src='inc_img/onload.gif' style='margin-right:5px;' />数据加载中...</center><br /><br />";
	var ajax=new AJAXRequest();
	ajax.get(
		// 请求的地址
		urlStr + pageNum,
		// 回调函数，注意，是回调函数名，不要带括号
		function(obj) {
			document.getElementById(outputID).innerHTML=obj.responseText;
		}
	);
}
