$(function (){
	try {
		//横向滚动
		var speed=30;
		if ($id('caseMarX').offsetWidth<$id('caseMarX1').offsetWidth){
			$id('caseMarX2').innerHTML=$id('caseMarX1').innerHTML;
			$id('caseMarX3').innerHTML=$id('caseMarX1').innerHTML;
		}
		function Marquee(){
			if($id('caseMarX2').offsetWidth-$id('caseMarX').scrollLeft<=0){
				$id('caseMarX').scrollLeft-=$id('caseMarX1').offsetWidth;
			}else{
				$id('caseMarX').scrollLeft+=1.8;
			}
		}
		var MyMar=setInterval(Marquee,speed)
		$id('caseMarX').onmouseover=function() { clearInterval(MyMar); }
		$id('caseMarX').onmouseout=function() { MyMar=setInterval(Marquee,speed); }
		
	}catch (e) {}
});

// 投票表单
function CheckVoteForm(formID){
	var isSel=false;
	for (var i=0; i<$name('voteItem'+ formID).length; i++){
		if ($name('voteItem'+ formID)[i].checked){
			isSel = true;
		}
	}
	if (isSel==false){
		alert('请先选择你要投票的选项');return false;
	}

	AjaxPostDeal("voteForm"+ formID);
	return false;
}

// 投票结果
function ReadVoteResult(formID){
	var ajax=new AJAXRequest();
	ajax.encode = function(str) { 
		return encodeURI(str); 
	} 

	ajax.get(
		"deal.asp?mudi=voteResult&dataID="+ formID,
		// 回调函数，注意，是回调函数名，不要带括号
		function(obj) {
			if (obj.responseText.length<50){
				eval(obj.responseText);
			}else{
				document.getElementById('voteResultBox'+ formID).innerHTML = obj.responseText;
				$id('voteResultBox'+ formID).style.display="";
				$id('voteBox'+ formID).style.display="none";
			}
		}
	);
	return false;

}

// 关闭投票结果
function CloseVoteResult(formID){
	$id('voteResultBox'+ formID).style.display="none";
	$id('voteBox'+ formID).style.display="";

}

