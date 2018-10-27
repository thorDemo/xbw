$(function() {
    var sWidth = $("#ifocus_btn").width(); //获取焦点图的宽度（显示面积）
	var len = $("#ifocus_btn ul li").length; //获取焦点图个数
	var index = 0;
	var picTimer;
	
		//为数字按钮添加鼠标滑入事件，以显示相应的内容
	$("#ifocus_btn ul li").mouseenter(function() {
										   
												   
		index = $("#ifocus_btn ul li").index(this);

		showPics(index);
	}).eq(0).trigger("mouseenter");
	
	
	$("#ifocus_piclist ul").css("width",sWidth * (len + 1));
	
	//鼠标滑入某li中的某div里，调整其同辈div元素的透明度，由于li的背景为黑色，所以会有变暗的效果
	$("#ifocus_piclist ul li div").hover(function() {
		$(this).siblings().css("opacity",0.7);
	},function() {
		$("ifocus_piclist ul li div").css("opacity",1);
	});
	
	//鼠标滑上焦点图时停止自动播放，滑出时开始自动播放
	$("#ifocus_piclist").hover(function() {
		clearInterval(picTimer);
	},function() {
		picTimer = setInterval(function() {
			if(index == len) { //如果索引值等于li元素个数，说明最后一张图播放完毕，接下来要显示第一张图，即调用showFirPic()，然后将索引值清零
				showFirPic();
				index = 0;
			} else { //如果索引值不等于li元素个数，按普通状态切换，调用showPics()
				showPics(index);
			}
			index++;
		},9000); //此3000代表自动播放的间隔，单位：毫秒
	}).trigger("mouseleave");
	
	
    function showPics(index) { //普通切换

		var nowLeft = -index*sWidth; //根据index值计算ul元素的left值
		$("#ifocus_piclist ul").stop(true,false).animate({"left":nowLeft}); //通过animate()调整ul元素滚动到计算出的position
        $("#ifocus_btn ul li").removeClass("current");
        $("#ifocus_btn ul li").eq(index).addClass("current");
	  }
	  
	  function showFirPic() { //最后一张图自动切换到第一张图时专用
		$("#ifocus_piclist ul").append($("#ifocus_piclist ul li:first").clone());
		var nowLeft = -len*sWidth; //通过li元素个数计算ul元素的left值，也就是最后一个li元素的右边
		$("#ifocus_piclist ul").stop(true,false).animate({"left":nowLeft},900,function() {
			//通过callback，在动画结束后把ul元素重新定位到起点，然后删除最后一个复制过去的元素
			$("#ifocus_piclist ul").css("left","0");
			 $("#ifocus_btn ul li").removeClass("current");
           $("#ifocus_btn ul li").eq(0).addClass("current");
		}); 
		
	}
	
	});
	
