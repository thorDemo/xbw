<?php if(!defined('IN_TXTCMS')){define('IN_TXTCMS',true);} ?><?php require 'core/mylib/tag.php'?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
	<link rel="stylesheet" href="<?php echo $this->_var['theme_path']; ?>/css/classad.css" type="text/css"/>
	<script src="/inc/system.js" type="text/javascript"></script>
</head>
<body>
<?php echo $this->fetch('header.html'); ?>
<div class="content">
	<div class="l">
		<div class="xlb">
			<?php $item = typeName('company', 20)?>
			<?php foreach ($item as $it):?>
				<a href="<?=randList('ershou')?>"><?=$it['name']?><span class="js">(<?php echo rand(100,500)?>)</span></a>
			<?php endforeach;?>
		</div>
		<div class="dq">
			<b>按地区：</b>
            <?php $place = randPlace(8)?>
            <?php foreach ($place as $item):?>
				<a href="<?=randList('ershou')?>"><?=$item?></a>
            <?php endforeach;?>
		</div>
		<div class="list_dh">
			<div class="list_dh_l">全部信息</div>
			<div class="list_dh_c">位于：<a href="/">聊城信息港</a> &raquo; <a href="<?=randList('ershou')?>">二手市场</a></div>
			<div class="list_dh_r"><a href="<?=randList('ershou')?>" target="_blank">？信息如何置顶</a></div>
		</div>
		<div class="list" id="keylist">
			<?php $article = randArticle('ershou', 34)?>
			<dl>
                <?php foreach ($article as $item):?>
				<dt class="dt3"><span class="news"><?=randTime()?></span><a href="<?php echo $item['url']?>" target="_blank"><?=$item['title']?></a>
				</dt>
				<dd class="dd3_xx"><?php echo randName()?></dd>
				<dd class="dd3_jj"><?php echo $item['description']?><a href="dq-1.aspx">xxx</a>)
				</dd>
				<?php endforeach;?>
			</dl>

		</div>
		<div class="page">
			<em>共<?=rand(1000,9999)?>条</em>
			<a href='<?=randList('ershou')?>'>上一页&gt;</a>
			<?php foreach (range(1,10) as $item):?>
			<a href='<?=randList('ershou')?>'><?=$item?></a>
			<?php endforeach;?>
			<a href="<?=randList('ershou')?>">下一页&gt;</a>
		</div>
		<div class="page_fa">
			<span class="right">
				<a href="#top">回到顶部↑</a>
			</span>未找到想要的信息？发布一条信息，让信息主动来找您
			<a href="<?=randList('ershou')?>">？我要发布分类信息</a>
		</div>
	</div>
	<div class="r">
		<div class="abc k208 b_10"><h5>信息特征筛选查找</h5>
		</div>
		<script type="text/javascript" src="/classad/mk4.js"></script>
		<div class="abc k208 b_10"><h5 id="gg_title">置顶信息随机展示</h5>
			<ul class="abc_news">
				<?php $article = randArticle(null,30)?>
				<?php foreach ($article as $item):?>
				<li><a href="<?=$item['url']?>"><?=$item['title']?></li>
				<?php endforeach;?>
			</ul>
		</div>
		<div class="k208 left"><a href="<?=randList('ershou')?>"><img src="<?=randPic('face')?>" alt="发布信息" border="0"/></a></div>
	</div>
</div>
<?php echo $this->fetch('footer.html'); ?>
</body>
</html>
