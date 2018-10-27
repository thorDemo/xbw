/*
var flashdns	= '';
var pic_width	= 286;		// 宽
var pic_height	= 237;		// 高
var button_pos	= 4;		// 按扭位置 1左 2右 3上 4下
var stop_time	= 4000;		// 图片停留时间(1000为1秒钟)
var show_text	= 1;		// 是否显示文字标签 1显示 0不显示
var txtcolor	= '000000'; // 文字色
var bgcolor		= 'd5d5d5'; // 背景色
// bcastr_config=0xffffff:文字颜色|2:文字位置|0x004C9A:文字背景颜色|60:文字背景透明度|0xffffff:按键文字颜色|0x004C9A:按键默认颜色|0x000033:按键当前颜色|5:自动播放时间(秒)|2:图片过渡效果|1:是否显示按钮|_blank:打开窗口
var config='0xffffff'+	// 文字颜色
		'|2'+			// 文字位置
		'|0x004C9A'+	// 文字背景颜色
		'|60'+			// 文字背景透明度
		'|0xffffff'+	// 按键文字颜色
		'|0x004C9A'+	// 按键默认颜色
		'|0x000033'+	// 按键当前颜色
		'|4'+			// 自动播放时间(秒)
		'|2'+			// 图片过渡效果
		'|1'+			// 是否显示按钮
		'|_blank'+		// _blank打开窗口
		'';
imgStr	= "201032618375571.jpg|2010326183635157.jpg|2010326183539789.jpg";
hrefSrr	= "./article/39.html|./article/37.html|./article/36.html";
textStr	= "图片轮播示例003|图片轮播示例002|图片轮播示例001";

OT_FlashImgTrun(1);
OT_FlashImgTrun(2);
OT_FlashImgTrun(3);
OT_FlashImgTrun(4);
*/

function OT_FlashImgTrun(num){
	var swf_height	= 0;
	var text_height	= 0;
	if (show_text==1){ 
		text_height=22;
		swf_height= pic_height+text_height;
	}else{
		swf_height= pic_height;
	}

	pics=imgStr;
	links=hrefSrr;
	texts=textStr;
	if (num==1 || num==2 || num==3){
		fvStr = 'pics='+ pics +'&links='+ links +'&texts='+ texts +'&borderwidth='+ pic_width +'&borderheight='+ pic_height +'&textheight='+ text_height +'';
	}else if (num==4){
		fvStr = 'bcastr_file='+ pics +'&bcastr_link='+ links +'&bcastr_title='+ texts +'&bcastr_config='+ config +'';
	}
	
	document.write(''+
	'<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cabversion=6,0,0,0" width="'+ pic_width +'" height="'+ swf_height +'">'+
	'<param name="allowScriptAccess" value="sameDomain">'+
	'<param name="movie" value="'+ flashdns +'imgTrun'+ num +'.swf">'+
	'<param name="quality" value="high">'+
	'<param name="bgcolor" value="'+ bgcolor +'">'+
	'<param name="menu" value="false">'+
	'<param name="wmode" value="opaque">'+
	'<param name="FlashVars" value="'+ fvStr +'">'+
		'<embed src="'+ flashdns +'imgTrun'+ num +'.swf" FlashVars="'+ fvStr +'" quality="high" width="'+ pic_width +'" height="'+ swf_height +'" allowScriptAccess="sameDomain"  wmode="opaque" menu="false" bgcolor="'+ bgcolor +'" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />'+
	'</object>'+
	'');
}