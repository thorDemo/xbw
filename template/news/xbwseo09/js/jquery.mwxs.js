$(document).ready(function(){

//首页幻灯和切换栏目
setFocusSlid('#focus_links', '#focus_img', 680, 'h');
new Rollable('#id_yinyue_part', 680);
new Rollable('#id_meinv_part', 680);
new Rollable('#id_wenzi_part', 680);
new Rollable('#id_qingyinyue_part', 680);
new Rollable('#id_yingwenge_part', 680);
new Rollable('#id_shipin_part', 680);
new Rollable('#id_touxiang_part', 680);
new Rollable('#id_duanpian_part', 680);
new Rollable('#id_youqu_part', 680);

//图片延迟加载
$("img.lazy").lazyload({
	threshold : 500 ,
	effect : "fadeIn" 
}); 
	
});

var msg = function() {
	hh=$(document).height()+"px";
	var st = $(document).scrollTop();
	var winh = $(window).height();
	$("#favMsg").css("right",0);
	(st > 150) ? $("#favMsg").fadeIn() : $("#favMsg").fadeOut();
	if (!window.XMLHttpRequest) {
		 $("#favMsg").css("top", st + winh - 180);
	}
};
//幻灯
function setFocusSlid(linksId, imgId, height, dir){
	var li = $(linksId).find('li');
	var count = li.length;
	var focusIndex = 0;
	var focusInterval;
	var step = 1;
	var slidover = function(){
		var li = $(linksId).find('li');
		li.removeClass('act');
		$(li[focusIndex]).addClass('act');
		$(imgId).stop();
		if(dir=='h'){
			$(imgId).animate({scrollLeft: height * focusIndex}, 300);
		}else{
			$(imgId).animate({scrollTop: height * focusIndex}, 300);
		}
	}
	var slidout = function(){
		focusInterval = setInterval(slidInterval, 5000);
	}
	var slidInterval = function(){
		slidover();
		if(focusIndex == 0){
			step = 1;
		}
		if(focusIndex == count - 1){
			step = -1;
		}
		focusIndex+=step;
	}
	li.each(function(i){
		$(this).hover(function(){
			clearInterval(focusInterval);
			focusIndex = i;
			slidover();
		}, function(){
			slidout();
		});
	});
	focusIndex = 1;
	slidout();
}

function Rollable(id, width) {
	var btns=$(id).find('div.roll a');
	var lbtn=$(btns[0]), rbtn=$(btns[1]);
	var dots=$(id).find('div.roll span');
		var dotscount = dots.length;
	var ldot=$(dots[0]), rdot=$(dots[1]);
	var rollBox=$(id).find('div.roll_box');
	var leftRoll=function() {
		rollBox.animate({scrollLeft: 0 }, 300);
		lbtn.unbind();
		ldot.unbind();
		lbtn.removeClass('lact');
		rdot.removeClass('act');
		ldot.addClass('act');
		rbtn.addClass('ract');
		rbtn.click(rightRoll);
		rdot.click(rightRoll);
	}
	var rightRoll=function() {
		rollBox.animate({scrollLeft: width }, 300);
		rbtn.unbind();
		rdot.unbind();
		rbtn.removeClass('ract');
		ldot.removeClass('act');
		rdot.addClass('act');
		lbtn.addClass('lact');
		lbtn.click(leftRoll);
		ldot.click(leftRoll);
	}
		leftRoll();
}
















