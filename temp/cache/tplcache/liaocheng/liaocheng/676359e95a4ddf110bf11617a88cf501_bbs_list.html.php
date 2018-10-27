<?php if(!defined('IN_TXTCMS')){define('IN_TXTCMS',true);} ?><?php require 'core/mylib/tag.php'?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title><?php echo $this->_var['toptitle']; ?></title>
    <script src="<?php echo $this->_var['theme_path']; ?>/js/system.js" type="text/javascript"></script>
    <meta name="description" content="<?php echo $this->_var['description']; ?>">
    <meta name="keywords" content="<?php echo $this->_var['keywords']; ?>">
    <link rel="stylesheet" href="<?php echo $this->_var['theme_path']; ?>/css/bbs_news.css" type="text/css"/>
    <link rel="shortcut icon" href="<?php echo $this->_var['theme_path']; ?>/img/favicon.ico">
    <link rel="stylesheet" href="<?php echo $this->_var['theme_path']; ?>/css/main.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $this->_var['theme_path']; ?>/css/css.css" type="text/css">
</head>
<body>
<?php echo $this->fetch('header.html'); ?>
<div class="content">
    <div class="right">
        <div class="left t_10"><a href="/" title="整两句"><img src="<?php echo $this->_var['theme_path']; ?>/img/bbs.jpg" alt="我要发贴"/></a></div>
        <div class="abc">
            <h5>聊城论坛,新贴</h5>
            <ul>
                <?php $article = randArticle('bbs_article', 10);?>
                <?php for($i=0; $i< 34; $i++): ?>
                <li><a href="<?=$article[$i]['url'];?>" target="_blank"><?=$article[$i]['title'];?></a></li>
                <?php endfor;?>
            </ul>
        </div>
    </div>
    <div class="left">
        <ul id="news_dh">
            <li class="xz"><a href="javascript:getdh('hf');">最后回复</a></li>
            <li><a href="javascript:getdh('fa');">最新发贴</a></li>
            <li><a href="javascript:getdh('zhidao');">最新提问</a></li>
            <li><a href="javascript:getdh('rssnews');">新闻早知道</a></li>
        </ul>
        <div class="dh_info"><a href="" class="cRed">我要发贴</a>-<a href=topnews.aspx?abc=02>财富榜</a>-<a
                href=topnews.aspx?abc=03>版务</a>-<a href=sh.aspx>未审<span style="color: red">0</span>贴</a>-<a
                href=search.aspx>搜索</a>-<a href="iframe.aspx" target="_parent" rel="nofollow">？分栏</a></div>
        <div id="news_list">
            <?php $article = randArticle('bbs_article', 34);?>
            <?php for($i=0; $i< 34; $i++): ?>
		        <ul>
			        <li class="num"><?=rand(2,15)?><em>/<?=rand(100,200)?></em></li>
			        <li class="bt">
				        <a href="<?=$article[$i]['url']?>" target="_blank">
                            <?=$article[$i]['title']?>
				        </a>
				        <span class="lb"><?=$article[$i]['type']?></span>
			        </li>
			        <li class="fa">
				        <a href="<?=$article['url']?>" class="hf" target="_blank"></a>
			        </li>
                    <?php if($i >= 10): ?>
				        <li class="sj"><?=date("m-d",strtotime("-1 day"))?></li>
                    <?php else: ?>
				        <li class="sj"><?=date("m-d")?></li>
                    <?php endif;?>
			        <li class="bz"><?=$article[$i]['description']?></li>
			        <?php if(1 == rand ( 1 , 3 )): ?>
			        <li class="tp">
				        <?php foreach (range(1,3) as $i):?>
					        <img src="<?php echo $i?>" alt="<?php echo $article['title']?>"/>
                        <?php endforeach;?>
			        </li>
			        <?php endif; ?>
		        </ul>
            <?php endfor;?>
            <div class="news_page"><span>1</span><a href="javascript:getpage('hf',3500,2);">2</a><a
                    href="javascript:getpage('hf',3500,3);">3</a><a href="javascript:getpage('hf',3500,4);">4</a><a
                    href="javascript:getpage('hf',3500,5);">5</a><a href="javascript:getpage('hf',3500,6);">6</a><a
                    href="javascript:getpage('hf',3500,7);">7</a><a href="javascript:getpage('hf',3500,8);">8</a><a
                    href="javascript:getpage('hf',3500,9);">9</a><a href="javascript:getpage('hf',3500,2);">下一页&gt;</a>
            </div>
            <div class="page_fa"><span style="float:right;"><a href="#top">回到顶部↑</a></span>打造青岛西海岸黄岛胶南开发区最热人气论坛，整两句参与
                &nbsp; <a href="fa.aspx">&raquo;我要发贴</a></div>
        </div>
    </div>
</div>
<script src="<?php echo $this->_var['theme_path']; ?>/js/bbs_list.js" type="text/javascript"></script>
<?php echo $this->fetch('footer.html'); ?>
</body>
</html>