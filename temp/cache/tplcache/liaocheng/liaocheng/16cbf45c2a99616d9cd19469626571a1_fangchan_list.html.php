<?php if(!defined('IN_TXTCMS')){define('IN_TXTCMS',true);} ?><?php require 'core/mylib/tag.php'?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title><?php echo $this->_var['toptitle']; ?></title>
    <meta name="Description" content="<?php echo $this->_var['description']; ?>"/>
    <meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>"/>
    <link rel="shortcut icon" href="<?php echo $this->_var['theme_path']; ?>/img/favicon.ico">
    <link rel="stylesheet" href="<?php echo $this->_var['theme_path']; ?>/css/css.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $this->_var['theme_path']; ?>/css/classad.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo $this->_var['theme_path']; ?>/css/house_index.css" type="text/css"/>
</head>
<body>
<?php echo $this->fetch('header.html'); ?>
<div class="content">
    <div class="h_l">
        <div class="news">
            <h5>聊城楼市风向标</h5>
            <ul>
                <?php $article = randArticle('fangchan', 10)?>
	            <?php foreach ($article as $item):?>
                <li><a href="<?=$item['url']?>" target="_blank"><?=$item['title']?></a></li>
	            <?php endforeach;?>
            </ul>
        </div>
    </div>
    <div class="h_r">
        <ul class="info_list">
            <?php $article = randArticle('fangchan', 22)?>
            <?php foreach ($article as $item):?>
		        <li><a href="<?=$item['url']?>" target="_blank"><?=$item['title']?></a></li>
            <?php endforeach;?>
        </ul>
    </div>
</div>
<div class="news_pic">
    <h5>楼盘展示</h5>
    <ul>
        <?php $article = randArticle('fangchan', 22)?>
        <?php foreach ($article as $item):?>
		    <li>
			    <a href="<?=$item['url']?>" target="_blank">
				    <img src='<?=randPic('news')?>' rel="nofollow" alt="<?=$item['title']?>"/>
				    <br/><?=$item['title']?>
			    </a>
		    </li>
        <?php endforeach;?>
    </ul>
</div>
<div class="content">
    <div class="h_l">
        <div class="news">
            <h5><a href='<?php echo $this->tag_function_geturl(array( 'tpl'=>"fangchan_list", 'fan'=>"", )); ?>'>更多&raquo;</a>聊城房产论坛</h5>
            <ul>
                <?php $article = randArticle('fangchan', 15)?>
                <?php foreach ($article as $item):?>
		            <li><a href="<?=$item['url']?>" target="_blank"><?=$item['title']?></a></li>
                <?php endforeach;?>
            </ul>
        </div>
    </div>
    <div class="h_r">
        <div class="cls_main">
            <dl class="h360">
                <dt><span><a href='<?php echo $this->tag_function_geturl(array( 'tpl'=>"fangchan_list", 'fan'=>"", )); ?>'>更多&raquo;</a></span><a href="/house/chushou" class="cls_bt">房屋出售房源</a></dt>
                <?php $article = randArticle('fangchan', 15)?>
                <?php foreach ($article as $item):?>
		            <li><a href="<?=$item['url']?>" target="_blank"><?=$item['title']?></a></li>
                <?php endforeach;?>
            </dl>
            <dl class="m_r h360">
                <dt><span><a href='<?php echo $this->tag_function_geturl(array( 'tpl'=>"fangchan_list", 'fan'=>"", )); ?>'>更多&raquo;</a></span><a href="/house/chuzu" class="cls_bt">房屋出租房源</a>
                </dt>
                <?php $article = randArticle('fangchan', 15)?>
                <?php foreach ($article as $item):?>
		            <li><a href="<?=$item['url']?>" target="_blank"><?=$item['title']?></a></li>
                <?php endforeach;?>
            </dl>
        </div>
    </div>
</div>
<div class="content top_5">
    <div class="h_l">
        <div class="news">
            <h5><a href='<?php echo $this->tag_function_geturl(array( 'tpl'=>"fangchan_list", 'fan'=>"", )); ?>'>更多&raquo;</a>房产企业展示</h5>
            <ul>
                <?php $article = randArticle('fangchan', 15)?>
                <?php foreach ($article as $item):?>
		            <li><a href="<?=$item['url']?>" target="_blank"><?=$item['title']?></a></li>
                <?php endforeach;?>
            </ul>
        </div>
    </div>
    <div class="h_r">
        <div class="cls_main">
            <dl class="h360">
                <dt><span><a href='<?php echo $this->tag_function_geturl(array( 'tpl'=>"fangchan_list", 'fan'=>"", )); ?>'>更多&raquo;</a></span><a href="/house/qiugou" class="cls_bt">房屋求购房源</a>
                </dt>
                <?php $article = randArticle('fangchan', 15)?>
                <?php foreach ($article as $item):?>
		            <li><a href="<?=$item['url']?>" target="_blank"><?=$item['title']?></a></li>
                <?php endforeach;?>
            </dl>
            <dl class="m_r h360">
                <dt><span><a href='<?php echo $this->tag_function_geturl(array( 'tpl'=>"fangchan_list", 'fan'=>"", )); ?>'   >更多&raquo;</a></span><a href="/house/qiuzu" class="cls_bt">房屋求租房源</a>
                </dt>
                <?php $article = randArticle('fangchan', 15)?>
                <?php foreach ($article as $item):?>
		            <li><a href="<?=$item['url']?>" target="_blank"><?=$item['title']?></a></li>
                <?php endforeach;?>
            </dl>
        </div>
    </div>
</div>
<?php echo $this->fetch('footer.html'); ?>
</body>
</html>