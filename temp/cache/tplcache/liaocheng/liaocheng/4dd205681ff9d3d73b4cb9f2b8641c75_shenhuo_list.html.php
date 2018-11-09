<?php if(!defined('IN_TXTCMS')){define('IN_TXTCMS',true);} ?><?php include 'core/mylib/tag.php' ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?php echo $this->_var['toptitle']; ?></title>
	<base target="_blank"/>
	<meta name="Description" content="<?php echo $this->_var['description']; ?>"/>
	<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="shortcut icon" href="<?php echo $this->_var['theme_path']; ?>/img/favicon.ico">
	<link rel="stylesheet" href="<?php echo $this->_var['theme_path']; ?>/css/css.css" type="text/css">
	<link rel="stylesheet" href="<?php echo $this->_var['theme_path']; ?>/css/main.css" type="text/css">
	<link rel="stylesheet" href="<?php echo $this->_var['theme_path']; ?>/css/news.css" type="text/css"/>
</head>
<body>
<?php echo $this->fetch('header.html'); ?>
	<div id="dh">
        <?php $list = typeName('news', 20)?>
        <?php foreach ($list as $item):?>
			<a href="<?=randList('shenghuo')?>"><?=$item['name']?></a> |
        <?php endforeach;?>
	</div>
	<div class="content">
	<div class="l">
		<div class="list">
			<div class="dh">您所在的位置：<a href="/">首页</a> &gt; <a href="<?=randList('shenghuo')?>">资讯中心</a> &gt; <a href="<?=randList('shenghuo')?>">时尚生活</a>
			</div>
			<ul>
                <?php $article = randArticle('shenghuo',40)?>
                <?php foreach ($article as $item):?>
					<li><span><?php echo date("Y")?> </span><a href="<?php echo $item['url']?>"><?php echo $item['title']?></a></li>
                <?php endforeach;?>
			</ul>
			<div class="page">共3000条，<?=rand(1,260)?>/260页 <span>首页</span> <span>上一页</span> <a href="<?=randList('shenghuo')?>">下一页</a> <a
						href="<?=randList('shenghuo')?>">末页</a></div>
		</div>
	</div>

	<div class="r">
		<div class="box2">
			<h5>赞助商推广链接</h5>
			<div class="ad">
                <?php $article = randArticle(null,10)?>
                <?php foreach ($article as $item):?>
					<li><a href="<?php echo $item['url']?>"><?php echo $item['title']?></a></li>
                <?php endforeach;?>
			</div>
		</div>
		<div class="box2 t_10">
			<h5>文章随机推荐</h5>
			<ul>
                <?php $article = randArticle('shenghuo',30)?>
                <?php foreach ($article as $item):?>
					<li><a href="<?php echo $item['url']?>"><?php echo $item['title']?></a></li>
                <?php endforeach;?>
			</ul>
		</div>
	</div>
</div>
<?php echo $this->fetch('footer.html'); ?>
</body>
</html>