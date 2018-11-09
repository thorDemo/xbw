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
	<link rel="stylesheet" href="<?php echo $this->_var['theme_path']; ?>/css/info.css" type="text/css">
</head>
<body>
<?php echo $this->fetch('header.html'); ?>
<div class="content">
	<div class="l">
		<div class="main_lb">
			<h2 class="bar">本地商家分类<i class="rt"></i><i class="lt"></i></h2>
			<dl>
				<dt><a href="<?=randList('lvyou')?>">便民服务</a></dt>
				<dd>
                    <?php $type = typeName('lvyou',10)?>
                    <?php foreach ($type as $item):?>
						<a href="<?=randList('lvyou')?>"><?=$item['name']?></a>
                    <?php endforeach;?>
				</dd>
				
				<dt><a href="<?=randList('lvyou')?>">餐饮美食</a></dt>
				<dd>
                    <?php $type = typeName('lvyou',10)?>
                    <?php foreach ($type as $item):?>
						<a href="<?=randList('lvyou')?>"><?=$item['name']?></a>
                    <?php endforeach;?>
				</dd>
				<dt><a href="<?=randList('lvyou')?>">休闲娱乐</a></dt>
				<dd>
                    <?php $type = typeName('lvyou',10)?>
                    <?php foreach ($type as $item):?>
						<a href="<?=randList('lvyou')?>"><?=$item['name']?></a>
                    <?php endforeach;?>
				</dd>
				<dt><a href="<?=randList('lvyou')?>">教育培训</a></dt>
				<dd>
                    <?php $type = typeName('lvyou',10)?>
                    <?php foreach ($type as $item):?>
						<a href="<?=randList('lvyou')?>"><?=$item['name']?></a>
                    <?php endforeach;?>
				</dd>
				<dt><a href="<?=randList('lvyou')?>">婚庆/摄影</a></dt>
				<dd>
                    <?php $type = typeName('lvyou',10)?>
                    <?php foreach ($type as $item):?>
						<a href="<?=randList('lvyou')?>"><?=$item['name']?></a>
                    <?php endforeach;?>
				</dd>
				<dt><a href="<?=randList('lvyou')?>">车辆服务</a></dt>
				<dd>
                    <?php $type = typeName('lvyou',10)?>
                    <?php foreach ($type as $item):?>
						<a href="<?=randList('lvyou')?>"><?=$item['name']?></a>
                    <?php endforeach;?>
				</dd>
				<dt><a href="<?=randList('lvyou')?>">旅游酒店</a></dt>
				<dd>
                    <?php $type = typeName('lvyou',10)?>
                    <?php foreach ($type as $item):?>
						<a href="<?=randList('lvyou')?>"><?=$item['name']?></a>
                    <?php endforeach;?>
				</dd>
				<dt><a href="<?=randList('lvyou')?>">商务服务</a></dt>
				<dd>
                    <?php $type = typeName('lvyou',10)?>
                    <?php foreach ($type as $item):?>
						<a href="<?=randList('lvyou')?>"><?=$item['name']?></a>
                    <?php endforeach;?>
				</dd>
				<dt><a href="<?=randList('lvyou')?>">购物服务</a></dt>
				<dd>
                    <?php $type = typeName('lvyou',10)?>
                    <?php foreach ($type as $item):?>
						<a href="<?=randList('lvyou')?>"><?=$item['name']?></a>
                    <?php endforeach;?>
				</dd>
				<dt><a href="<?=randList('lvyou')?>">党政文体卫</a></dt>
				<dd>
                    <?php $type = typeName('lvyou',10)?>
                    <?php foreach ($type as $item):?>
						<a href="<?=randList('lvyou')?>"><?=$item['name']?></a>
                    <?php endforeach;?>
				</dd>
				<dt><a href="<?=randList('lvyou')?>">公司/工厂</a></dt>
				<dd>
                    <?php $type = typeName('lvyou',10)?>
                    <?php foreach ($type as $item):?>
						<a href="<?=randList('lvyou')?>"><?=$item['name']?></a>
                    <?php endforeach;?>
				</dd>
				<dd class="ge"></dd>
				<dd>
                    <?php $type = typeName('lvyou',10)?>
                    <?php foreach ($type as $item):?>
						<a href="<?=randList('lvyou')?>"><?=$item['name']?></a>
                    <?php endforeach;?>
				</dd>
			</dl>
			<h2 class="bar">诚商通商家展示<i class="rt"></i><i class="lt"></i></h2>
			<ul class="qy_list">
                <?php $article = randArticle('lvyou',20)?>
                <?php foreach ($article as $item):?>
					<li>
						<a href="<?=$item['url']?>" target="_blank">
							<img src="<?=randPic()?>" alt="<?=$item['title']?>"/><br/><?=$item['title']?>
						</a>
					</li>
                <?php endforeach;?>
                <?php $article = randArticle('lvyou',50)?>
                <?php foreach ($article as $item):?>
					<li>
						<a href="<?=$item['url']?>" target="_blank">
							<br/><?=$item['title']?>
						</a>
					</li>
                <?php endforeach;?>
			</ul>
		</div>
	</div>
	<div class="r">
		<div class="apply"><a href="<?=randList('lvyou')?>">申请收录我的商家</a></div>
		<h2 class="bar">最新网友点评<i class="rt"></i><i class="lt"></i></h2>
		<ul class="qy_ping">
            <?php $article = randArticle(null, 15)?>
            <?php foreach ($article as $item):?>
				<li>
					<span><?=randName()?></span><em>评</em><a href="<?=$item['url']?>" target="_blank"><?=$item['title']?></a>
                    <?=$item['description']?>
				</li>
            <?php endforeach;?>
		</ul>
		<h2 class="bar">关于诚商通<i class="rt"></i><i class="lt"></i></h2>
		<ul class="box">
			<li><a href="<?=randList('lvyou')?>">诚商通是企业会员身份，是网络营销工具</a></li>
			<li><a href="<?=randList('lvyou')?>">它可以全面展示公司形象及产品服务</a></li>
			<li><a href="<?=randList('lvyou')?>">诚商通企业信息在列表页优先展示</a></li>
			<li><a href="<?=randList('lvyou')?>">拥有定时自动涮新信息等特权</a></li>
			<li class="lianxi">诚商通服务热线<br/><strong>0<?php echo $this->tag_function_function(array( 'name'=>"get_num_gd", 'args'=>"2,1", )); ?>-<?php echo $this->tag_function_function(array( 'name'=>"get_num_gd", 'args'=>"8,1", )); ?></strong></li>
		</ul>
	</div>
</div>
<?php echo $this->fetch('footer.html'); ?>
</body>
</html>