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
<div class="content">
	<div class="l">
		<div class="news_pic">
			<h5>图片文章</h5>
			<ul>
                <?php $pic = randPic('news',5)?>
                <?php $article = randArticle('keji',5)?>
                <?php for($i=0; $i<5; $i++):?>
					<li><a href="<?=$article[$i]['url'];?>" target="_blank"><img src="<?=$pic[$i];?>" alt="<?=$article[$i]['title']; ?>"/><br/><?=$article[$i]['title']; ?></a></li>
                <?php endfor;?>
			</ul>
		</div>
		<div class="juhe">
			
			<div class="box1">
				<div class="title"><h5>娱乐资讯</h5> <a href='<?=randList('keji')?>'>更多 >></a></div>
				<div class="pic">
                    <?php $article = randArticle('keji')?>
					<a href="<?= $article['url']?>" target="_blank">
						<img src="<?=randPic('news')?>" alt="<?= $article['title']?>"/>
					</a>
				</div>
				<ul class="hot">
                    <?php $article = randArticle('keji',4)?>
                    <?php for($i=0; $i<4; $i++):?>
						<li><a href="<?=$article[$i]['url']?>" target="_blank"><?=$article[$i]['title']?></a></li>
                    <?php endfor;?>
				</ul>
				<ul>
                    <?php $article = randArticle('keji',8)?>
                    <?php for($i=0; $i<8; $i++):?>
						<li><span><?php echo date("m-d")?></span><a href="<?=$article[$i]['url']?>" target="_blank"><?=$article[$i]['title']?></a></li>
                    <?php endfor;?>
				</ul>
			</div>
			
			<div class="box1">
				<div class="title"><h5>热点聚集</h5><a href='<?=randList('keji')?>''>更多 >></a></div>
				<div class="pic">
                    <?php $article = randArticle('keji')?>
					<a href="<?= $article['url']?>" target="_blank">
						<img src="<?=randPic('news')?>" alt="<?= $article['title']?>"/>
					</a>
				</div>
				<ul class="hot">
                    <?php $article = randArticle('keji',4)?>
                    <?php for($i=0; $i<4; $i++):?>
						<li><a href="<?=$article[$i]['url']?>" target="_blank"><?=$article[$i]['title']?></a></li>
                    <?php endfor;?>
				</ul>
				<ul>
                    <?php $article = randArticle('keji',8)?>
                    <?php for($i=0; $i<8; $i++):?>
						<li><span><?php echo date("m-d")?></span><a href="<?=$article[$i]['url']?>" target="_blank"><?=$article[$i]['title']?></a></li>
                    <?php endfor;?>
				</ul>
			</div>
			
			<div class="box1">
				<div class="title"><h5>民俗名胜</h5><a href='<?=randList('keji')?>''>更多 >></a></div>
				<div class="pic">
                    <?php $article = randArticle('keji')?>
					<a href="<?= $article['url']?>" target="_blank">
						<img src="<?=randPic('news')?>" alt="<?= $article['title']?>"/>
					</a>
				</div>
				<ul class="hot">
                    <?php $article = randArticle('keji',4)?>
                    <?php for($i=0; $i<4; $i++):?>
						<li><a href="<?=$article[$i]['url']?>" target="_blank"><?=$article[$i]['title']?></a></li>
                    <?php endfor;?>
				</ul>
				<ul>
                    <?php $article = randArticle('keji',8)?>
                    <?php for($i=0; $i<8; $i++):?>
						<li><span><?php echo date("m-d")?></span><a href="<?=$article[$i]['url']?>" target="_blank"><?=$article[$i]['title']?></a></li>
                    <?php endfor;?>
				</ul>
			</div>
			
			<div class="box1">
				<div class="title"><h5>房产家居</h5><a href='<?=randList('keji')?>''>更多 >></a></div>
				<div class="pic">
                    <?php $article = randArticle('keji')?>
					<a href="<?= $article['url']?>" target="_blank">
						<img src="<?=randPic('news')?>" alt="<?= $article['title']?>"/>
					</a>
				</div>
				<ul class="hot">
                    <?php $article = randArticle('keji',4)?>
                    <?php for($i=0; $i<4; $i++):?>
						<li><a href="<?=$article[$i]['url']?>" target="_blank"><?=$article[$i]['title']?></a></li>
                    <?php endfor;?>
				</ul>
				<ul>
                    <?php $article = randArticle('keji',8)?>
                    <?php for($i=0; $i<8; $i++):?>
						<li><span><?php echo date("m-d")?></span><a href="<?=$article[$i]['url']?>" target="_blank"><?=$article[$i]['title']?></a></li>
                    <?php endfor;?>
				</ul>
			</div>
			
			<div class="box1">
				<div class="title"><h5>聊城汽车</h5><a href='<?=randList('keji')?>''>更多 >></a></div>
				<div class="pic">
                    <?php $article = randArticle('keji')?>
					<a href="<?= $article['url']?>" target="_blank">
						<img src="<?=randPic('news')?>" alt="<?= $article['title']?>"/>
					</a>
				</div>
				<ul class="hot">
                    <?php $article = randArticle('keji',4)?>
                    <?php for($i=0; $i<4; $i++):?>
						<li><a href="<?=$article[$i]['url']?>" target="_blank"><?=$article[$i]['title']?></a></li>
                    <?php endfor;?>
				</ul>
				<ul>
                    <?php $article = randArticle('keji',8)?>
                    <?php for($i=0; $i<8; $i++):?>
						<li><span><?php echo date("m-d")?></span><a href="<?=$article[$i]['url']?>" target="_blank"><?=$article[$i]['title']?></a></li>
                    <?php endfor;?>
				</ul>
			</div>
			
			<div class="box1">
				<div class="title"><h5>时尚生活</h5><a href='<?=randList('keji')?>''>更多 >></a></div>
				<div class="pic">
                    <?php $article = randArticle('keji')?>
					<a href="<?= $article['url']?>" target="_blank">
						<img src="<?=randPic('news')?>" alt="<?= $article['title']?>"/>
					</a>
				</div>
				<ul class="hot">
                    <?php $article = randArticle('keji',4)?>
                    <?php for($i=0; $i<4; $i++):?>
						<li><a href="<?=$article[$i]['url']?>" target="_blank"><?=$article[$i]['title']?></a></li>
                    <?php endfor;?>
				</ul>
				<ul>
                    <?php $article = randArticle('keji',8)?>
                    <?php for($i=0; $i<8; $i++):?>
						<li><span><?php echo date("m-d")?></span><a href="<?=$article[$i]['url']?>" target="_blank"><?=$article[$i]['title']?></a></li>
                    <?php endfor;?>
				</ul>
			</div>
			
			<div class="box1">
				<div class="title"><h5>健康养生</h5><a href='<?=randList('keji')?>''>更多 >></a></div>
				<div class="pic">
                    <?php $article = randArticle('keji')?>
					<a href="<?= $article['url']?>" target="_blank">
						<img src="<?=randPic('news')?>" alt="<?= $article['title']?>"/>
					</a>
				</div>
				<ul class="hot">
                    <?php $article = randArticle('keji',4)?>
                    <?php for($i=0; $i<4; $i++):?>
						<li><a href="<?=$article[$i]['url']?>" target="_blank"><?=$article[$i]['title']?></a></li>
                    <?php endfor;?>
				</ul>
				<ul>
                    <?php $article = randArticle('keji',8)?>
                    <?php for($i=0; $i<8; $i++):?>
						<li><span><?php echo date("m-d")?></span><a href="<?=$article[$i]['url']?>" target="_blank"><?=$article[$i]['title']?></a></li>
                    <?php endfor;?>
				</ul>
			</div>
			
			<div class="box1">
				<div class="title"><h5>明星八卦</h5><a href='<?=randList('keji')?>''>更多 >></a></div>
				<div class="pic">
                    <?php $article = randArticle('keji')?>
					<a href="<?= $article['url']?>" target="_blank">
						<img src="<?=randPic('news')?>" alt="<?= $article['title']?>"/>
					</a>
				</div>
				<ul class="hot">
                    <?php $article = randArticle('keji',4)?>
                    <?php for($i=0; $i<4; $i++):?>
						<li><a href="<?=$article[$i]['url']?>" target="_blank"><?=$article[$i]['title']?></a></li>
                    <?php endfor;?>
				</ul>
				<ul>
                    <?php $article = randArticle('keji',8)?>
                    <?php for($i=0; $i<8; $i++):?>
						<li><span><?php echo date("m-d")?></span><a href="<?=$article[$i]['url']?>" target="_blank"><?=$article[$i]['title']?></a></li>
                    <?php endfor;?>
				</ul>
			</div>
			
			<div class="box1">
				<div class="title"><h5>财经频道</h5><a href='<?=randList('keji')?>''>更多 >></a></div>
				<div class="pic">
                    <?php $article = randArticle('keji')?>
					<a href="<?= $article['url']?>" target="_blank">
						<img src="<?=randPic('news')?>" alt="<?= $article['title']?>"/>
					</a>
				</div>
				<ul class="hot">
                    <?php $article = randArticle('keji',4)?>
                    <?php for($i=0; $i<4; $i++):?>
						<li><a href="<?=$article[$i]['url']?>" target="_blank"><?=$article[$i]['title']?></a></li>
                    <?php endfor;?>
				</ul>
				<ul>
                    <?php $article = randArticle('keji',8)?>
                    <?php for($i=0; $i<8; $i++):?>
						<li><span><?php echo date("m-d")?></span><a href="<?=$article[$i]['url']?>" target="_blank"><?=$article[$i]['title']?></a></li>
                    <?php endfor;?>
				</ul>
			</div>
			
			<div class="box1">
				<div class="title"><h5>互联时代</h5><a href='<?=randList('keji')?>''>更多 >></a></div>
				<div class="pic">
                    <?php $article = randArticle('keji')?>
					<a href="<?= $article['url']?>" target="_blank">
						<img src="<?=randPic('news')?>" alt="<?= $article['title']?>"/>
					</a>
				</div>
				<ul class="hot">
                    <?php $article = randArticle('keji',4)?>
                    <?php for($i=0; $i<4; $i++):?>
						<li><a href="<?=$article[$i]['url']?>" target="_blank"><?=$article[$i]['title']?></a></li>
                    <?php endfor;?>
				</ul>
				<ul>
                    <?php $article = randArticle('keji',8)?>
                    <?php for($i=0; $i<8; $i++):?>
						<li><span><?php echo date("m-d")?></span><a href="<?=$article[$i]['url']?>" target="_blank"><?=$article[$i]['title']?></a></li>
                    <?php endfor;?>
				</ul>
			</div>
		
		</div>
	</div>
	
	<div class="r">
		<div class="box2">
			<div class="search">
				<form action="/keji_search.aspx" method="get" name="form">
					文章搜索：<input name="key" size="15" maxlength="10" title="搜索"/>
					<input name="submit" type="submit" value="搜索"/>
				</form>
			</div>
		</div>
		<div class="box2 t_10">
			<h5>赞助商推广链接</h5>
		
		</div>
		<div class="box2 t_10">
			<h5>文章随机推荐</h5>
			<ul>
                <?php $article = randArticle(null,59)?>
                <?php for($i=0; $i<count($article); $i++):?>
					<li><a href="<?=$article[$i]['url']?>" target="_blank"><?=$article[$i]['title']?></a></li>
                <?php endfor;?>
			</ul>
		</div>
	</div>
</div>
</body>
<?php echo $this->fetch('footer.html'); ?>
</html>