<?php if(!defined('IN_TXTCMS')){define('IN_TXTCMS',true);} ?><?php require 'core/mylib/tag.php'?>
<?php $article = getArticle();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title><?=$article['title'];?></title>
	<meta name="description" content="<?=$article['description'] ;?>">
	<meta name="keywords" content="<?=$article['type'].','.$article['keywords'] ;?>">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="shortcut icon" href="<?php echo $this->_var['theme_path']; ?>/img/favicon.ico">
	<link rel="stylesheet" href="<?php echo $this->_var['theme_path']; ?>/css/css.css" type="text/css">
	<link rel="stylesheet" href="<?php echo $this->_var['theme_path']; ?>/css/main.css" type="text/css">
	<link rel="stylesheet" href="<?php echo $this->_var['theme_path']; ?>/css/news.css" type="text/css"/>
</head>
<body>
<?php echo $this->fetch('header.html'); ?>
<div class="content">
	<div class="l">
		<div class="news_dh">您所在的位置：<a href="/">聊城信息港</a> &gt; <a href="/news/">资讯中心</a> &gt; <a
					href='<?php echo $this->tag_function_geturl(array( 'tpl'=>"news_list", 'fan'=>"", )); ?>'>热点聚集</a></div>
		<div class="box">
			<h1><?=$article['title'];?></h1>
			<div class="info">发布：<?=$article['pub_time'];?>&nbsp;&nbsp;来源:转载&nbsp;&nbsp;浏览 <?php echo $this->tag_function_randstr(array( 'type'=>"2", 'num'=>"1,5", )); ?> 次&nbsp;&nbsp;编辑：佚名
			</div>
			<div class="nr">
                <?=$article['content'];?>
			</div>
			<div class="info_bottom">【<a href="/huiyuan/blog.php?abc=addblog" rel="nofollow">写进Blog</a>】 【<a
						href="/ping.php?abc=news&amp;id=88915" rel="nofollow">点评留言</a>】 【<a href="/inc/tougao.php" rel="nofollow">在线投稿</a>】 【<a
						href="javascript:window.print();" rel="nofollow">打印页面</a>】
			</div>
			
			<div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare">
				<span class="bds_more">分享到：</span>
				<a class="bds_tsina"></a>
				<a class="bds_qzone"></a>
				<a class="bds_tqq"></a>
				<a class="bds_renren"></a>
				<a class="bds_t163"></a>
				<a class="bds_mshare"></a>
				<a class="bds_baidu"></a>
				<a class="bds_tieba"></a>
				<a class="bds_sqq"></a>
				<a class="bds_qq"></a>
				<a class="shareCount"></a>
			</div>


			<div class="tC"><a target="_blank" href="/life/index.htm"><img alt="" src="/html/mb/news_image/news.gif"/></a>
			</div>
			<h3>相关文章</h3>
			<ul>
                <?php $article = randArticle('zhaopin',10)?>
                <?php for($i=0; $i<count($article); $i++):?>
					<li><span><?php echo date("m-d")?></span><a href="<?=$article[$i]['url']?>" target="_blank"><?=$article[$i]['title']?></a></li>
                <?php endfor;?>
			</ul>
		</div>
	</div>
	<div class="r">
		<div class="box2 t_10">
			<h5>文章随机推荐</h5>
			<ul>
                <?php $article = randArticle(null,30)?>
                <?php for($i=0; $i<count($article); $i++):?>
					<li><a href="<?=$article[$i]['url']?>" target="_blank"><?=$article[$i]['title']?></a></li>
                <?php endfor;?>
			</ul>
		</div>
	</div>
</div>
<?php echo $this->fetch('show_footer.html'); ?>
</body>
</html>