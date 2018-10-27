<?php if(!defined('IN_TXTCMS')){define('IN_TXTCMS',true);} ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $this->_var['toptitle']; ?></title>
<meta name="description" content="<?php echo $this->_var['description']; ?>" />
<meta name="keywords" content="<?php echo $this->_var['keywords']; ?>" />
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
<div class="main1">
	<div class="left-1 fl">
        <div id="slideBox" class="slideBox">
            <div class="hd">
                <ul>
                	<?php $this->_tags_data=$this->tag_block_loop(array('type'=>'arclist','row'=>'5',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
                    <li ></li>
                    <?php }} ?>
                </ul>
            </div>
            <div class="bd">
                <ul>
                	<?php $this->_tags_data=$this->tag_block_loop(array('type'=>'arclist','row'=>'5','image'=>'1',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
                    <li ><p ><a href="<?php echo $this->_var['vo']['url']; ?>"><?php echo $this->_var['vo']['title']; ?></a></p><a href="<?php echo $this->_var['vo']['url']; ?>"><img src="<?php echo $this->_var['vo']['pic']; ?>" alt="<?php echo $this->_var['vo']['title']; ?>" /></a></li>
                    <?php }} ?>
                </ul>
            </div>
        </div>
        <script type="text/javascript">jQuery(".slideBox").slide( { mainCell:".bd ul",effect:"left",autoPlay:true} );</script>
        <div class="g-box1">
        	<div class="t-1">特别推荐</div>
            <ul class="b-box1">
            	<?php $this->_tags_data=$this->tag_block_loop(array('type'=>'arclist','row'=>'7',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
				<li ><a href="<?php echo $this->_var['vo']['url']; ?>"><?php echo $this->_var['vo']['title']; ?></a></li>
                <?php }} ?>
            </ul>
        </div>
	</div>
    <div class="g-box2 fl">
    	<?php $this->_tags_data=$this->tag_block_loop(array('type'=>'typename','row'=>'1',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
    	<h1 ><a href="<?php echo $this->_var['vo']['typeurl']; ?>"><?php echo $this->_var['vo']['typename']; ?></a></h1>
        <?php }} ?>
        <ul class="b-box1">
        	<?php $this->_tags_data=$this->tag_block_loop(array('type'=>'arclist','row'=>'5',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
        	<li ><a href="<?php echo $this->_var['vo']['url']; ?>"><?php echo $this->_var['vo']['title']; ?></a></li>
            <?php }} ?>
        </ul>
      <?php $this->_tags_data=$this->tag_block_loop(array('type'=>'typename','row'=>'1',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
    	<h1 ><a href="<?php echo $this->_var['vo']['typeurl']; ?>"><?php echo $this->_var['vo']['typename']; ?></a></h1>
        <?php }} ?>
        <ul class="b-box1">
            <?php $this->_tags_data=$this->tag_block_loop(array('type'=>'arclist','row'=>'5',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
        	<li ><a href="<?php echo $this->_var['vo']['url']; ?>"><?php echo $this->_var['vo']['title']; ?></a></li>
            <?php }} ?>
        </ul>
       <?php $this->_tags_data=$this->tag_block_loop(array('type'=>'typename','row'=>'1',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
    	<h1 ><a href="<?php echo $this->_var['vo']['typeurl']; ?>"><?php echo $this->_var['vo']['typename']; ?></a></h1>
        <?php }} ?>
        <ul class="b-box1">
        	<?php $this->_tags_data=$this->tag_block_loop(array('type'=>'arclist','row'=>'5',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
        	<li ><a href="<?php echo $this->_var['vo']['url']; ?>"><?php echo $this->_var['vo']['title']; ?></a></li>
            <?php }} ?>
        </ul>
    </div>
    <div class="right-1 fr">
    	<div class="g-box3">
        	<div class="t-1">大家都在看</div>
            <ul class="b-box2">
            	<?php $this->_tags_data=$this->tag_block_loop(array('type'=>'arclist','row'=>'20',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
                <li ><a href="<?php echo $this->_var['vo']['url']; ?>"><?php echo $this->_var['vo']['title']; ?></a></li>
                <?php }} ?>
            </ul>
        </div>
    </div>
	<div class="cl"></div>
</div>
<div class="main1">
	<div class="t-3">
    	<h3 ><?php $this->_tags_data=$this->tag_block_loop(array('type'=>'typename','row'=>'1',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?><a href='<?php echo $this->_var['vo']['typeurl']; ?>'><?php echo $this->_var['vo']['typename']; ?></a><?php }} ?></h3>
    </div>
    <div class="left-2 fl">
    	<div class="b-box3">
        	<?php $this->_tags_data=$this->tag_block_loop(array('type'=>'arclist','row'=>'1','image'=>'1',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
            <p ><a href="<?php echo $this->_var['vo']['url']; ?>"><?php echo $this->_var['vo']['title']; ?></a></p><a href="<?php echo $this->_var['vo']['url']; ?>"><img src="<?php echo $this->_var['vo']['pic']; ?>" alt="<?php echo $this->_var['vo']['title']; ?>" /></a>
            <?php }} ?>
		</div>
        <div class="g-box4">
        	<div class="t-2"><?php $this->_tags_data=$this->tag_block_loop(array('type'=>'typename','row'=>'1',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?><a href='<?php echo $this->_var['vo']['typeurl']; ?>'><?php echo $this->_var['vo']['typename']; ?></a><?php }} ?></div>
            <div class="pic">
            	<?php $this->_tags_data=$this->tag_block_loop(array('type'=>'arclist','row'=>'1','image'=>'1','info'=>'1',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
            	<a href="<?php echo $this->_var['vo']['url']; ?>"><img src="<?php echo $this->_var['vo']['pic']; ?>" alt="<?php echo $this->_var['vo']['title']; ?>" /></a>
                <p ><a href="<?php echo $this->_var['vo']['url']; ?>"><?php echo $this->_var['vo']['title']; ?></a></p>
               <?php echo $this->_var['vo']['info']; ?>...<a href="<?php echo $this->_var['vo']['url']; ?>">[详细]</a>
               <?php }} ?>
            </div>
            <ul class="b-box5">
            	<?php $this->_tags_data=$this->tag_block_loop(array('type'=>'arclist','row'=>'3',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
                <li ><a href="<?php echo $this->_var['vo']['url']; ?>"><?php echo $this->_var['vo']['title']; ?></a></li>
            	<?php }} ?>
            </ul>
        </div>
        <div class="g-box4">
        	<div class="t-2"><?php $this->_tags_data=$this->tag_block_loop(array('type'=>'typename','row'=>'1',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?><a href='<?php echo $this->_var['vo']['typeurl']; ?>'><?php echo $this->_var['vo']['typename']; ?></a><?php }} ?></div>
            <ul class="b-box1">
                <?php $this->_tags_data=$this->tag_block_loop(array('type'=>'arclist','row'=>'5',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
                <li ><a href="<?php echo $this->_var['vo']['url']; ?>"><?php echo $this->_var['vo']['title']; ?></a></li>
            	<?php }} ?>
            </ul>
        </div>
    </div>
    <div class="middle-1 fl">
    	<?php $this->_tags_data=$this->tag_block_loop(array('type'=>'arclist','row'=>'1','info'=>'1',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
    	<h2 ><a href="<?php echo $this->_var['vo']['url']; ?>"><?php echo $this->_var['vo']['title']; ?></a></h2>
        <p ><?php echo $this->_var['vo']['info']; ?>...<a href="<?php echo $this->_var['vo']['url']; ?>">[查看全文]</a></p>
        <?php }} ?>
        <ul class="b-box4">
        	<?php $this->_tags_data=$this->tag_block_loop(array('type'=>'arclist','row'=>'3',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
        	<li ><a href="<?php echo $this->_var['vo']['url']; ?>"><img src="<?php echo $this->_var['vo']['pic']; ?>" alt="<?php echo $this->_var['vo']['title']; ?>" /><?php echo $this->_var['vo']['title']; ?></a></li>
            <?php }} ?>
            <div class="cl"></div>
        </ul>
        <div class="g-box5">
        	<div class="t-4 fl">
			<?php $this->_tags_data=$this->tag_block_loop(array('type'=>'typename','row'=>'1',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
            	<span ><a href="<?php echo $this->_var['vo']['typeurl']; ?>">&raquo;更多</a></span>
            	<h3 ><a href='<?php echo $this->_var['vo']['typeurl']; ?>'><?php echo $this->_var['vo']['typename']; ?></a></h3>
			<?php }} ?>
            </div>
        	<div class="pic fl">
            	<?php $this->_tags_data=$this->tag_block_loop(array('type'=>'arclist','row'=>'1','image'=>'1',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
                <a href="<?php echo $this->_var['vo']['url']; ?>"><img src="<?php echo $this->_var['vo']['pic']; ?>" alt="<?php echo $this->_var['vo']['title']; ?>" /><?php echo $this->_var['vo']['title']; ?></a>
                <?php }} ?>
            </div>
            <ul class="b-box5-1 fl">
            	<?php $this->_tags_data=$this->tag_block_loop(array('type'=>'arclist','row'=>'4',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
                <li ><a href="<?php echo $this->_var['vo']['url']; ?>"><?php echo $this->_var['vo']['title']; ?></a></li>
            	<?php }} ?>
            </ul>
            <div class="cl"></div>
        </div>
        <div class="g-box5">
        	<div class="t-4 fl">
            	<?php $this->_tags_data=$this->tag_block_loop(array('type'=>'typename','row'=>'1',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
            	<span ><a href="<?php echo $this->_var['vo']['typeurl']; ?>">&raquo;更多</a></span>
            	<h3 ><a href='<?php echo $this->_var['vo']['typeurl']; ?>'><?php echo $this->_var['vo']['typename']; ?></a></h3>
			<?php }} ?>
            </div>
        	<div class="pic fl">
            	<?php $this->_tags_data=$this->tag_block_loop(array('type'=>'arclist','row'=>'1','image'=>'1',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
                <a href="<?php echo $this->_var['vo']['url']; ?>"><img src="<?php echo $this->_var['vo']['pic']; ?>" alt="<?php echo $this->_var['vo']['title']; ?>" /><?php echo $this->_var['vo']['title']; ?></a>
                <?php }} ?>
            </div>
            <ul class="b-box5-1 fl">
            	<?php $this->_tags_data=$this->tag_block_loop(array('type'=>'arclist','row'=>'4',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
                <li ><a href="<?php echo $this->_var['vo']['url']; ?>"><?php echo $this->_var['vo']['title']; ?></a></li>
            	<?php }} ?>
            </ul>
            <div class="cl"></div>
        </div>
    </div>
    <div class="right-2 fr">
    	<div class="g-box6">
        	<div class="t-2">热门文章</div>
            <ul class="b-box2">
            	<?php $this->_tags_data=$this->tag_block_loop(array('type'=>'link','row'=>'10',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
                <li ><a href="<?php echo $this->_var['vo']['url']; ?>"><?php echo $this->_var['vo']['title']; ?></a></li>
                <?php }} ?>
            </ul>
        </div>
        <div class="g-box6">
        	<div class="t-2"><?php $this->_tags_data=$this->tag_block_loop(array('type'=>'typename','row'=>'1',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?><a href='<?php echo $this->_var['vo']['typeurl']; ?>'><?php echo $this->_var['vo']['typename']; ?></a><?php }} ?></div>
            <ul class="b-box6">
            	<?php $this->_tags_data=$this->tag_block_loop(array('type'=>'arclist','image'=>'1','row'=>'2',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
                <li ><p ><a href="<?php echo $this->_var['vo']['url']; ?>"><?php echo $this->_var['vo']['title']; ?></a></p><a href="<?php echo $this->_var['vo']['url']; ?>"><img src="<?php echo $this->_var['vo']['pic']; ?>" alt="<?php echo $this->_var['vo']['title']; ?>" /></a></li>
                <?php }} ?>
                <div class="cl"></div>
            </ul>
            <ul class="b-box7">
            	<?php $this->_tags_data=$this->tag_block_loop(array('type'=>'arclist','row'=>'5',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
                <li ><a href="<?php echo $this->_var['vo']['url']; ?>"><?php echo $this->_var['vo']['title']; ?></a></li>
            	<?php }} ?>
            </ul>
        </div>
    </div>
    <div class="cl"></div>
</div>
<div class="main1">
	<div class="t-3">
        <h3 ><?php $this->_tags_data=$this->tag_block_loop(array('type'=>'typename','row'=>'1',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?><a href='<?php echo $this->_var['vo']['typeurl']; ?>'><?php echo $this->_var['vo']['typename']; ?></a><?php }} ?></h3>
    </div>
    <div class="left-2 fl">
    	<div class="b-box3">
        	<?php $this->_tags_data=$this->tag_block_loop(array('type'=>'arclist','row'=>'1',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
            <p ><a href="<?php echo $this->_var['vo']['url']; ?>"><?php echo $this->_var['vo']['title']; ?></a></p><a href="<?php echo $this->_var['vo']['url']; ?>"><img src="<?php echo $this->_var['vo']['pic']; ?>" alt="<?php echo $this->_var['vo']['title']; ?>" /></a>
            <?php }} ?>
		</div>
        <div class="g-box4">
        	<div class="t-2"><?php $this->_tags_data=$this->tag_block_loop(array('type'=>'typename','row'=>'1',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?><a href='<?php echo $this->_var['vo']['typeurl']; ?>'><?php echo $this->_var['vo']['typename']; ?></a><?php }} ?></div>
            <div class="pic">
            	<?php $this->_tags_data=$this->tag_block_loop(array('type'=>'arclist','row'=>'1','image'=>'1','info'=>'1',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
            	<a href="<?php echo $this->_var['vo']['url']; ?>"><img src="<?php echo $this->_var['vo']['pic']; ?>" alt="<?php echo $this->_var['vo']['title']; ?>" /></a>
                <p ><a href="<?php echo $this->_var['vo']['url']; ?>"><?php echo $this->_var['vo']['title']; ?></a></p>
               <?php echo $this->_var['vo']['info']; ?>...<a href="<?php echo $this->_var['vo']['url']; ?>">[详细]</a>
               <?php }} ?>
            </div>
            <ul class="b-box5">
            	<?php $this->_tags_data=$this->tag_block_loop(array('type'=>'arclist','row'=>'3',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
                <li ><a href="<?php echo $this->_var['vo']['url']; ?>"><?php echo $this->_var['vo']['title']; ?></a></li>
            	<?php }} ?>
            </ul>
        </div>
        <div class="g-box4">
        	<div class="t-2"><?php $this->_tags_data=$this->tag_block_loop(array('type'=>'typename','row'=>'1',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?><a href='<?php echo $this->_var['vo']['typeurl']; ?>'><?php echo $this->_var['vo']['typename']; ?></a><?php }} ?></div>
            <ul class="b-box1">
                <?php $this->_tags_data=$this->tag_block_loop(array('type'=>'arclist','row'=>'5',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
                <li ><a href="<?php echo $this->_var['vo']['url']; ?>"><?php echo $this->_var['vo']['title']; ?></a></li>
            	<?php }} ?>
            </ul>
        </div>
    </div>
    <div class="middle-1 fl">
    	<?php $this->_tags_data=$this->tag_block_loop(array('type'=>'arclist','row'=>'1','info'=>'1',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
    	<h2 ><a href="<?php echo $this->_var['vo']['url']; ?>"><?php echo $this->_var['vo']['title']; ?></a></h2>
        <p ><?php echo $this->_var['vo']['info']; ?>...<a href="<?php echo $this->_var['vo']['url']; ?>">[查看全文]</a></p>
        <?php }} ?>
        <ul class="b-box4">
        	<?php $this->_tags_data=$this->tag_block_loop(array('type'=>'arclist','row'=>'3',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
        	<li ><a href="<?php echo $this->_var['vo']['url']; ?>"><img src="<?php echo $this->_var['vo']['pic']; ?>" alt="<?php echo $this->_var['vo']['title']; ?>" /><?php echo $this->_var['vo']['title']; ?></a></li>
            <?php }} ?>
            <div class="cl"></div>
        </ul>
        <div class="g-box5">
        	<div class="t-4 fl">
            	<h3 ><?php $this->_tags_data=$this->tag_block_loop(array('type'=>'typename','row'=>'1',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?><a href='<?php echo $this->_var['vo']['typeurl']; ?>'><?php echo $this->_var['vo']['typename']; ?></a><?php }} ?></h3>
            </div>
        	<div class="pic fl">
            	<?php $this->_tags_data=$this->tag_block_loop(array('type'=>'arclist','row'=>'3','image'=>'1',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
                <a href="<?php echo $this->_var['vo']['url']; ?>"><img src="<?php echo $this->_var['vo']['pic']; ?>" alt="<?php echo $this->_var['vo']['title']; ?>" /><?php echo $this->_var['vo']['title']; ?></a>
                <?php }} ?>
            </div>
            <ul class="b-box5-1 fl">
            	<?php $this->_tags_data=$this->tag_block_loop(array('type'=>'arclist','row'=>'4',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
                <li ><a href="<?php echo $this->_var['vo']['url']; ?>"><?php echo $this->_var['vo']['title']; ?></a></li>
            	<?php }} ?>
            </ul>
            <div class="cl"></div>
        </div>
        <div class="g-box5">
        	<div class="t-4 fl">
            	
            	<h3 ><?php $this->_tags_data=$this->tag_block_loop(array('type'=>'typename','row'=>'1',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?><a href='<?php echo $this->_var['vo']['typeurl']; ?>'><?php echo $this->_var['vo']['typename']; ?></a><?php }} ?></h3>
            </div>
        	<div class="pic fl">
            	<?php $this->_tags_data=$this->tag_block_loop(array('type'=>'arclist','row'=>'1','image'=>'1',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
                <a href="<?php echo $this->_var['vo']['url']; ?>"><img src="<?php echo $this->_var['vo']['pic']; ?>" alt="<?php echo $this->_var['vo']['title']; ?>" /><?php echo $this->_var['vo']['title']; ?></a>
                <?php }} ?>
            </div>
            <ul class="b-box5-1 fl">
            	<?php $this->_tags_data=$this->tag_block_loop(array('type'=>'arclist','row'=>'4',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
                <li ><a href="<?php echo $this->_var['vo']['url']; ?>"><?php echo $this->_var['vo']['title']; ?></a></li>
            	<?php }} ?>
            </ul>
            <div class="cl"></div>
        </div>
    </div>
    <div class="right-2 fr">
    	<div class="g-box6">
        	<div class="t-2">热门文章</div>
            <ul class="b-box2">
            	<?php $this->_tags_data=$this->tag_block_loop(array('type'=>'arclist','row'=>'10',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
                <li ><a href="<?php echo $this->_var['vo']['url']; ?>"><?php echo $this->_var['vo']['title']; ?></a></li>
                <?php }} ?>
            </ul>
        </div>
        <div class="g-box6">
        	<div class="t-2"><?php $this->_tags_data=$this->tag_block_loop(array('type'=>'typename','row'=>'1',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?><a href='<?php echo $this->_var['vo']['typeurl']; ?>'><?php echo $this->_var['vo']['typename']; ?></a><?php }} ?></div>
            <ul class="b-box6">
            	<?php $this->_tags_data=$this->tag_block_loop(array('type'=>'arclist','image'=>'1','row'=>'2',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
                <li ><p ><a href="<?php echo $this->_var['vo']['url']; ?>"><?php echo $this->_var['vo']['title']; ?></a></p><a href="<?php echo $this->_var['vo']['url']; ?>"><img src="<?php echo $this->_var['vo']['pic']; ?>" alt="<?php echo $this->_var['vo']['title']; ?>" /></a></li>
                <?php }} ?>
                <div class="cl"></div>
            </ul>
            <ul class="b-box7">
            	<?php $this->_tags_data=$this->tag_block_loop(array('type'=>'arclist','row'=>'5',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
                <li ><a href="<?php echo $this->_var['vo']['url']; ?>"><?php echo $this->_var['vo']['title']; ?></a></li>
            	<?php }} ?>
            </ul>
        </div>
    </div>
    <div class="cl"></div>
</div>
<div class="main1">
	<div class="t-3">
    	<h3 ><?php $this->_tags_data=$this->tag_block_loop(array('type'=>'typename','row'=>'1',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?><a href='<?php echo $this->_var['vo']['typeurl']; ?>'><?php echo $this->_var['vo']['typename']; ?></a><?php }} ?></h3>
    </div>
    <div class="left-2 fl">
    	<div class="b-box3">
        	<?php $this->_tags_data=$this->tag_block_loop(array('type'=>'arclist','row'=>'1','image'=>'1',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
            <p ><a href="<?php echo $this->_var['vo']['url']; ?>"><?php echo $this->_var['vo']['title']; ?></a></p><a href="<?php echo $this->_var['vo']['url']; ?>"><img src="<?php echo $this->_var['vo']['pic']; ?>" alt="<?php echo $this->_var['vo']['title']; ?>" /></a>
            <?php }} ?>
		</div>
        <div class="g-box4">
        	<div class="t-2"><?php $this->_tags_data=$this->tag_block_loop(array('type'=>'typename','row'=>'1',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?><a href='<?php echo $this->_var['vo']['typeurl']; ?>'><?php echo $this->_var['vo']['typename']; ?></a><?php }} ?></div>
            <div class="pic">
            	<?php $this->_tags_data=$this->tag_block_loop(array('type'=>'arclist','image'=>'1','row'=>'1','info'=>'1',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
            	<a href="<?php echo $this->_var['vo']['url']; ?>"><img src="<?php echo $this->_var['vo']['pic']; ?>" alt="<?php echo $this->_var['vo']['title']; ?>" /></a>
                <p ><a href="<?php echo $this->_var['vo']['url']; ?>"><?php echo $this->_var['vo']['title']; ?></a></p>
               <?php echo $this->_var['vo']['info']; ?>...<a href="<?php echo $this->_var['vo']['url']; ?>">[详细]</a>
               <?php }} ?>
            </div>
            <ul class="b-box5">
            	<?php $this->_tags_data=$this->tag_block_loop(array('type'=>'arclist','row'=>'3',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
                <li ><a href="<?php echo $this->_var['vo']['url']; ?>"><?php echo $this->_var['vo']['title']; ?></a></li>
            	<?php }} ?>
            </ul>
        </div>
        <div class="g-box4">
        	<div class="t-2"><?php $this->_tags_data=$this->tag_block_loop(array('type'=>'typename','row'=>'1',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?><a href='<?php echo $this->_var['vo']['typeurl']; ?>'><?php echo $this->_var['vo']['typename']; ?></a><?php }} ?></div>
            <ul class="b-box1">
                <?php $this->_tags_data=$this->tag_block_loop(array('type'=>'arclist','row'=>'5',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
                <li ><a href="<?php echo $this->_var['vo']['url']; ?>"><?php echo $this->_var['vo']['title']; ?></a></li>
            	<?php }} ?>
            </ul>
        </div>
    </div>
    <div class="middle-1 fl">
    	<?php $this->_tags_data=$this->tag_block_loop(array('type'=>'arclist','row'=>'1','info'=>'1',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
    	<h2 ><a href="<?php echo $this->_var['vo']['url']; ?>"><?php echo $this->_var['vo']['title']; ?></a></h2>
        <p ><?php echo $this->_var['vo']['info']; ?>...<a href="<?php echo $this->_var['vo']['url']; ?>">[查看全文]</a></p>
        <?php }} ?>
        <ul class="b-box4">
        	<?php $this->_tags_data=$this->tag_block_loop(array('type'=>'arclist','row'=>'3',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
        	<li ><a href="<?php echo $this->_var['vo']['url']; ?>"><img src="<?php echo $this->_var['vo']['pic']; ?>" alt="<?php echo $this->_var['vo']['title']; ?>" /><?php echo $this->_var['vo']['title']; ?></a></li>
            <?php }} ?>
            <div class="cl"></div>
        </ul>
        <div class="g-box5">
        	<div class="t-4 fl">
            	
            	<h3 ><?php $this->_tags_data=$this->tag_block_loop(array('type'=>'typename','row'=>'1',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?><a href='<?php echo $this->_var['vo']['typeurl']; ?>'><?php echo $this->_var['vo']['typename']; ?></a><?php }} ?></h3>
            </div>
        	<div class="pic fl">
            	<?php $this->_tags_data=$this->tag_block_loop(array('type'=>'arclist','image'=>'1','row'=>'1',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
                <a href="<?php echo $this->_var['vo']['url']; ?>"><img src="<?php echo $this->_var['vo']['pic']; ?>" alt="<?php echo $this->_var['vo']['title']; ?>" /><?php echo $this->_var['vo']['title']; ?></a>
                <?php }} ?>
            </div>
            <ul class="b-box5-1 fl">
            	<?php $this->_tags_data=$this->tag_block_loop(array('type'=>'arclist','row'=>'4',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
                <li ><a href="<?php echo $this->_var['vo']['url']; ?>"><?php echo $this->_var['vo']['title']; ?></a></li>
            	<?php }} ?>
            </ul>
            <div class="cl"></div>
        </div>
        <div class="g-box5">
        	<div class="t-4 fl">
            	
            	<h3 ><?php $this->_tags_data=$this->tag_block_loop(array('type'=>'typename','row'=>'1',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?><a href='<?php echo $this->_var['vo']['typeurl']; ?>'><?php echo $this->_var['vo']['typename']; ?></a><?php }} ?></h3>
            </div>
        	<div class="pic fl">
            	<?php $this->_tags_data=$this->tag_block_loop(array('type'=>'arclist','image'=>'1','row'=>'1',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
                <a href="<?php echo $this->_var['vo']['url']; ?>"><img src="<?php echo $this->_var['vo']['pic']; ?>" alt="<?php echo $this->_var['vo']['title']; ?>" /><?php echo $this->_var['vo']['title']; ?></a>
                <?php }} ?>
            </div>
            <ul class="b-box5-1 fl">
            	<?php $this->_tags_data=$this->tag_block_loop(array('type'=>'arclist','row'=>'4',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
                <li ><a href="<?php echo $this->_var['vo']['url']; ?>"><?php echo $this->_var['vo']['title']; ?></a></li>
            	<?php }} ?>
            </ul>
            <div class="cl"></div>
        </div>
    </div>
    <div class="right-2 fr">
    	<div class="g-box6">
        	<div class="t-2">热门文章</div>
            <ul class="b-box2">
            	<?php $this->_tags_data=$this->tag_block_loop(array('type'=>'arclist','row'=>'10',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
                <li ><a href="<?php echo $this->_var['vo']['url']; ?>"><?php echo $this->_var['vo']['title']; ?></a></li>
                <?php }} ?>
            </ul>
        </div>
        <div class="g-box6">
        	<div class="t-2"><?php $this->_tags_data=$this->tag_block_loop(array('type'=>'typename','row'=>'1',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?><a href='<?php echo $this->_var['vo']['typeurl']; ?>'><?php echo $this->_var['vo']['typename']; ?></a><?php }} ?></div>
            <ul class="b-box6">
            	<?php $this->_tags_data=$this->tag_block_loop(array('type'=>'arclist','row'=>'2','image'=>'1',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
                <li ><p ><a href="<?php echo $this->_var['vo']['url']; ?>"><?php echo $this->_var['vo']['title']; ?></a></p><a href="<?php echo $this->_var['vo']['url']; ?>"><img src="<?php echo $this->_var['vo']['pic']; ?>" alt="<?php echo $this->_var['vo']['title']; ?>" /></a></li>
                <?php }} ?>
                <div class="cl"></div>
            </ul>
            <ul class="b-box7">
            	<?php $this->_tags_data=$this->tag_block_loop(array('type'=>'arclist','row'=>'5',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
                <li ><a href="<?php echo $this->_var['vo']['url']; ?>"><?php echo $this->_var['vo']['title']; ?></a></li>
            	<?php }} ?>
            </ul>
        </div>
    </div>
    <div class="cl"></div>
</div>

<?php echo $this->fetch('footer.html'); ?>
</body>
</html>
