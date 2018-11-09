<?php if(!defined('IN_TXTCMS')){define('IN_TXTCMS',true);} ?><?php require 'core/mylib/tag.php'?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312"/>
    <?php $article = getArticle();?>
	<title><?=$article['title'];?></title>
	<meta name="description" content="<?=$article['description'] ;?>">
	<meta name="keywords" content="<?=$article['type'].','.$article['keywords'] ;?>">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="shortcut icon" href="<?php echo $this->_var['theme_path']; ?>/img/favicon.ico">
	<link rel="stylesheet" href="<?php echo $this->_var['theme_path']; ?>/css/css.css" type="text/css">
	<link rel="stylesheet" href="<?php echo $this->_var['theme_path']; ?>/css/u.css" type="text/css">
	<script type="text/javascript" src="<?php echo $this->_var['theme_path']; ?>/js/system.js"></script>
</head>
<body>
<div id="home">
	<div class="content">
		<div class="left">
			<a href="/" title="聊城信息港" class="home">首页</a>
			<a href="/fangchan/" title="聊城房产">房产<img src="<?php echo $this->_var['theme_path']; ?>/img/jian.gif" alt="热点"></a>
			<a href="/zhaopin/" title="招聘/求职">人才</a>
			<a href="/ershou/" title="二手市场">二手</a>
			<a href="/jiaoyou/" title="聊城交友">交友</a>
			<a href="/shenghuo/" title="生活服务">服务</a>
			<a href="/zhidao/" title="你问我答">知道</a>
			<a href="/blog/" title="博客日志">博客</a>
			<a href="/qiye/" title="企业信息">黄页<img src="<?php echo $this->_var['theme_path']; ?>/img/jian.gif" alt="热点"></a>
			<a href="/news/" title="新闻资讯">新闻</a>
			<a href="/keji/" title="科技">科技</a>
			<a href="/bbs/" title="聊城论坛">论坛<img src="<?php echo $this->_var['theme_path']; ?>/img/jian.gif" alt="热点"></a>
			<a href="/lvyou/" title="旅游指南">旅游</a>
		</div>
		<div class="right"><span id="login"></span></div>
	</div>
</div>
<div id="top">
    <?php $myname = randName()?>
	<h1><?=$myname?>的个人空间</h1>
	<div class="num">信息量<span><em></em>1727</span></div>
</div>
<div class="content">
	<div class="l">
		<div class="url">个人网址：<a href="http://www.liaocheng.cc/u/?huiyuan=mmp990860">http://www.liaocheng.cc/u/?huiyuan=mmp990860</a>
		</div>
		<h2 class="bt"><?=$article['title']?><em><?=$article['pub_time']?></em></h2>
		<div class="nr">
			<?=$article['content']?>
		</div>
	</div>
	<div class="r">
		<ul class="u_info">
			<li class="face"><img src="<?=randPic('face')?>" alt="<?=$myname?>" width="180px"/></li>
			<li class="name"><?=$myname?></li>
			<li><span class="mobileyz" title="手机已认证"></span></li>
			<li><img src="<?=randPic('level')?>" alt="会员等级"/></li>
			<li>积分：120</li>
			<li>性别：<?=array('男','女','保密')[rand(0,2)]?></li>
			<li>注册：<?php echo randTime()?></li>
			<li>登陆：<?=rand(1,999)?>天次</li>
			<li>活动：<?=randTime()?></li>
			<li class="mg_5">
				<img src="<?php echo $this->_var['theme_path']; ?>/img/jst_offline.gif" alt="会员『mmp990860』离线点击发送短信留言" style="cursor:pointer"/>
			</li>
		</ul>
		<div class="search">
			<form name="search_form" action="/u/" method="get">
				<input name="huiyuan" type="hidden" value="mmp990860"/>
				<input name="key" type="text" title="" class="wenbenkuang" size="15" maxlength="10"/>
				<input type="submit" class="go-wenbenkuang" value="搜我"/>
			</form>
		</div>
	</div>
</div>
<?php echo $this->fetch('show_footer.html'); ?>
<div id="goTopBtn"><a href="#top"><img src="<?php echo $this->_var['theme_path']; ?>/img/top.gif" alt="回顶部"/></a></div>
</body>
</html>