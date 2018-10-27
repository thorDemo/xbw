<?php if(!defined('IN_TXTCMS')){define('IN_TXTCMS',true);} ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $this->_var['toptitle']; ?></title>
<meta name="keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="description" content="<?php echo $this->_var['description']; ?>" />
<link  rel="stylesheet" href="<?php echo $this->_var['theme_path']; ?>/style/style.css" type="text/css" />
<script type="text/javascript" src="<?php echo $this->_var['theme_path']; ?>/style/js/jquery1.42.min.js"></script>
<script type="text/javascript" src="<?php echo $this->_var['theme_path']; ?>/style/js/jquery.SuperSlide.2.1.1.js"></script>
<script type="text/javascript" src="<?php echo $this->_var['theme_path']; ?>/style/js/gotoTop.js"></script>
<script type="text/javascript">
$(function(){
	$(".backToTop").goToTop();
	$(window).bind('scroll resize',function(){
		$(".backToTop").goToTop({
			pageWidth:960,
			duration:0
		});
	});
});
</script>
</head>
<body>
<?php echo $this->fetch('head.html'); ?>
<div class="weizhi-1">当前位置：<a href="/">首页</a> > <a href="<?php echo $this->_var['typeurl']; ?>"><?php echo $this->_var['typename']; ?></a> > <a href="<?php echo $this->_var['thisurl']; ?>"><?php echo $this->_var['title']; ?></a></div>
<div class="main1">
	<div class="left-3 fl">
    	<div class="g-con">
            <h1 class="u-5"><?php echo $this->_var['title']; ?></h1> 
            <div class="info"><?php echo $this->_var['postdate']; ?>  <?php $this->_tags_data=$this->tag_block_loop(array('type'=>'typename','row'=>'1',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?><a href="<?php echo $this->_var['vo']['typeurl']; ?>" target="_blank">[<?php echo $this->_var['vo']['typename']; ?>]</a><?php }} ?>  来源：<a href="<?php echo $this->_var['web_url']; ?>"><?php echo $this->_var['web_name']; ?></a> </div>
            <div class="b-box11">
            	<?php echo $this->_var['body']; ?>
            <p style="text-align:right;">(责任编辑：<?php echo $this->tag_function_typename(array( 'type'=>"name", )); ?>)</p>
            </div>
            <div class="dede_pagess">
               <ul class="pagelist">
                <?php $this->_tags_data=$this->tag_block_loop(array('type'=>'arclist','row'=>'10',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?><a href="<?php echo $this->_var['vo']['url']; ?>">[<?php echo ($this->_var['k']+1); ?>]</a><?php }} ?>
               </ul>
              </div>
            <div class="g-box10">
            	<div class="t-2">相关内容</div>
                <ul class="b-box12">
                	<?php $this->_tags_data=$this->tag_block_loop(array('type'=>'arclist','row'=>'5','image'=>'1','fan'=>'1',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
                    <li ><a href='<?php echo $this->_var['vo']['url']; ?>' target="_blank"><img src="<?php echo $this->_var['vo']['pic']; ?>" alt="<?php echo $this->_var['vo']['title']; ?>"  /><?php echo $this->_var['vo']['title']; ?></a></li>
                    <?php }} ?>
                </ul>
                <ul class="b-box13">
                	<?php $this->_tags_data=$this->tag_block_loop(array('type'=>'arclist','row'=>'8',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
                    <li ><a href='<?php echo $this->_var['vo']['url']; ?>' target="_blank"><?php echo $this->_var['vo']['title']; ?></a></li>
                    <?php }} ?>
                    <div class="cl"></div>
                </ul>
            </div>
            
        </div>
    </div>
    <div class="right-1 fr">
    	<div class="g-box8">
            <div class="t-2">推荐文章</div>
            <ul>
            	<?php $this->_tags_data=$this->tag_block_loop(array('type'=>'arclist','row'=>'10','image'=>'1','info'=>'1','fan'=>'1',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
                <li >
                    <p ><a href="<?php echo $this->_var['vo']['url']; ?>" target="_blank"><?php echo $this->_var['vo']['title']; ?></a></p>
                    <div class="dis_pi">
                        <a href="<?php echo $this->_var['vo']['url']; ?>" target="_blank"><img src="<?php echo $this->_var['vo']['pic']; ?>" alt="<?php echo $this->_var['vo']['title']; ?>" /></a>
                        <span class="pic_r"><?php echo $this->_var['vo']['info']; ?>...<a href="<?php echo $this->_var['vo']['url']; ?>">[详细]</a></span>
                    </div>
                </li>
                <?php }} ?>
            </ul>
        </div>
        <script type="text/javascript">jQuery(".g-box8").slide({ titCell:"li",triggerTime:0 });	</script>
        <div class="g-box3 u-3">
        	<div class="t-1">热点阅读</div>
            <ul class="b-box2">
            	<?php $this->_tags_data=$this->tag_block_loop(array('type'=>'link','row'=>'10',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
                <li ><a href="<?php echo $this->_var['vo']['url']; ?>" target="_blank"><?php echo $this->_var['vo']['title']; ?></a></li>
                <?php }} ?>
            </ul>
        </div>
        <div class="g-box9">
        	<div class="t-2">随机内容</div>
            <ul class="b-box10">
                <?php $this->_tags_data=$this->tag_block_loop(array('type'=>'arclist','row'=>'2','image'=>'1',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
                <li ><p ><a href="<?php echo $this->_var['vo']['url']; ?>" target="_blank"><?php echo $this->_var['vo']['title']; ?></a></p><a href="<?php echo $this->_var['vo']['url']; ?>" target="_blank"><img src="<?php echo $this->_var['vo']['pic']; ?>" alt="<?php echo $this->_var['vo']['title']; ?>" /></a></li>
                <?php }} ?>
                <div class="cl"></div>
            </ul>
            <ul class="b-box7">
            	<?php $this->_tags_data=$this->tag_block_loop(array('type'=>'arclist','row'=>'7',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
                <li ><a href="<?php echo $this->_var['vo']['url']; ?>" target="_blank"><?php echo $this->_var['vo']['title']; ?></a></li>
                <?php }} ?>
            </ul>
        </div>
    </div>
	<div class="cl"></div>
</div>
<?php echo $this->fetch('footer.html'); ?>
</body>
</html>
