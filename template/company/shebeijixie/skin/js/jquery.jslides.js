/**
 * jQuery jslides 1.1.0
 *
 * http://www.cactussoft.cn
 *
 * Copyright (c) 2009 - 2013 Jerry
 *
 * Dual licensed under the MIT and GPL licenses:
 *   http://www.opensource.org/licenses/mit-license.php
 *   http://www.gnu.org/licenses/gpl.html
 */
$(function(){
	var numpic = $('#slides li').size()-1;
	var nownow = 0;
	var inout = 0;
	var TT = 0;
	var SPEED = 5000;
    var animatetime = 1000;
var easing = 'easeOutBack';


	$('#slides li').eq(0).siblings('li').css({'display':'none'});
	var ulstart = '<ul id="pagination">',
		ulcontent = '',
		ulend = '</ul>';
	ADDLI();
	var pagination = $('#pagination li');
	var paginationwidth = $('#pagination').width();
//	$('#pagination').css('margin-left',(470-paginationwidth))
	
	pagination.eq(0).addClass('current');
//    $('#slides li').eq(0).find('span').css({'margin-right':"-400px"}).animate({'margin-right':"-550px"});
    $('#slides li').eq(0).find('span').css({'margin-right':"-400px",'opacity':0}).animate({'margin-right':"-550px",'opacity':1},animatetime,easing);

	function ADDLI(){
		//var lilicount = numpic + 1;
		for(var i = 0; i <= numpic; i++){
            if(i==0){
                ulcontent += '<li class="before">' + '<a href="#">' + (i+1) + '</a>' + '</li>';
            }else if(i==numpic){
                ulcontent += '<li class="after">' + '<a href="#">' + (i+1) + '</a>' + '</li>';
            }else{
                ulcontent += '<li>' + '<a href="#">' + (i+1) + '</a>' + '</li>';
            }
		}

		$('#slides').after(ulstart + ulcontent + ulend);	
	}

	pagination.on('click',DOTCHANGE)
	
	function DOTCHANGE(){

		var changenow = $(this).index();

        if(changenow==nownow){return false;}

        clearTimeout(TT);
        TT = setTimeout(GOGO, SPEED);
//        $('#slides li').stop();
//		$('#slides li').eq(nownow).css('z-index','0');
//		$('#slides li').eq(changenow).css({'z-index':'1'}).show();
//        $('#slides li').removeClass('active');
//        $('#slides li').eq(changenow).addClass('active');
//		pagination.eq(changenow).addClass('current').siblings('li').removeClass('current');
//        $('#slides li').eq(changenow).css('opacity','0').fadeIn();
//        $('#slides li').eq(changenow);

//		$('#slides li').eq(nownow).fadeOut(400,function(){$('#slides li').eq(changenow).fadeIn(500);});



        $('#slides li').css('z-index',0);
        $('#slides li').eq(nownow).css('z-index',1);
        $('#slides li').eq(changenow).css('z-index',2);

        pagination.eq(changenow).addClass('current').siblings('li').removeClass('current');
//
//        $('#slides li').removeClass('active');
//        $('#slides li').eq(changenow).addClass('active');
        $('#slides li').eq(changenow).fadeTo(0,0).fadeTo(500,1);
//        $('#slides li').find('span').css({'margin-right':"-400px"})
        $('#slides li').eq(changenow).find('span').css({'margin-right':"-400px",'opacity':0}).animate({'margin-right':"-550px",'opacity':1},animatetime,easing);




		nownow = changenow;
	}
	pagination.mouseenter(function(){
		inout = 1;
	})
	
	pagination.mouseleave(function(){
		inout = 0;
	})
	
	function GOGO(){
		
		var NN = nownow+1;
		
		if( inout == 1 ){
			} else {
			if(nownow < numpic){


//
//			$('#slides li').eq(nownow).css('z-index','1');
//			$('#slides li').eq(NN).css({'z-index':'0'}).show();
//                $('#slides li').removeClass('active');
//                $('#slides li').eq(NN).addClass('active');
//
//			pagination.eq(NN).addClass('current').siblings('li').removeClass('current');
//			$('#slides li').eq(nownow).fadeOut(400,function(){$('#slides li').eq(NN).fadeIn(500);});


                $('#slides li').css('z-index',0);
                $('#slides li').eq(nownow).css('z-index',1);
                $('#slides li').eq(NN).css('z-index',2);
                pagination.eq(NN).addClass('current').siblings('li').removeClass('current');
                $('#slides li').eq(NN).fadeTo(0,0).fadeTo(500,1);
                $('#slides li').eq(NN).find('span').css({'margin-right':"-400px",'opacity':0}).animate({'margin-right':"-550px",'opacity':1},animatetime,easing);


			nownow += 1;
		}else{
			NN = 0;
//			$('#slides li').eq(nownow).css('z-index','1');
//			$('#slides li').eq(NN).stop(true,true).css({'z-index':'0'}).show();
//
//                $('#slides li').removeClass('active');
//                $('#slides li').eq(NN).addClass('active');
//
//			$('#slides li').eq(nownow).fadeOut(400,function(){$('#slides li').eq(0).fadeIn(500);});
//			pagination.eq(NN).addClass('current').siblings('li').removeClass('current');

                $('#slides li').css('z-index',0);
                $('#slides li').eq(nownow).css('z-index',1);
                $('#slides li').eq(NN).css('z-index',2);
                pagination.eq(NN).addClass('current').siblings('li').removeClass('current');
                $('#slides li').eq(NN).fadeTo(0,0).fadeTo(500,1);
                $('#slides li').eq(NN).find('span').css({'margin-right':"-400px",'opacity':0}).animate({'margin-right':"-550px",'opacity':1},animatetime,easing);

			nownow=0;

			}
		}
		TT = setTimeout(GOGO, SPEED);
	}
	
	TT = setTimeout(GOGO, SPEED);
})