<?php if(!defined('IN_TXTCMS')){define('IN_TXTCMS',true);} ?><?php require 'core/mylib/tag.php'?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="mobile-agent" content="format=xhtml; url=<?php echo $this->_var['web_url']; ?>m/">
    <meta name="mobile-agent" content="format=html5; url=<?php echo $this->_var['web_url']; ?>m/">
    <meta name="mobile-agent" content="format=wml; url=<?php echo $this->_var['web_url']; ?>m/">

    <title><?php echo $this->_var['toptitle']; ?></title>
    <meta name="description" content="<?php echo $this->_var['description']; ?>">
    <meta name="keywords" content="<?php echo $this->_var['keywords']; ?>">
    <link rel="shortcut icon" href="<?php echo $this->_var['theme_path']; ?>/img/favicon.ico">
    <link rel="stylesheet" href="<?php echo $this->_var['theme_path']; ?>/css/main.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $this->_var['theme_path']; ?>/css/css.css" type="text/css">
</head>
<body>
<?php echo $this->fetch('header.html'); ?>
<div class="banner">
    <div class="banner">
        <p align="center"><a href='<?=randList('zhaopin')?>' title="招聘信息" target="_blank"><img src="<?php echo $this->_var['theme_path']; ?>/img/0926048450.gif" alt="网络招聘" width="948" height="70" border="0"></a></p>
    </div>
    <div class="banner">
        <p align="center"><a href='<?=randList('fangchan')?>' target="_blank"><img src="<?php echo $this->_var['theme_path']; ?>/img/0954533473.jpg" alt="房产" width="948" height="70" border="0"></a></p>
    </div>
    <div class="banner">
    </div>
    <div class="ad155">
        <a href='<?=randList('qiye')?>' target="_blank" onfocus="this.blur()"><img src="<?php echo $this->_var['theme_path']; ?>/img/2237597237.jpg" width="155" height="55" alt="企业"></a><a
            href='<?=randList('ershou')?>' target="_blank" onfocus="this.blur()"><img src="<?php echo $this->_var['theme_path']; ?>/img/1533344547.gif" width="155" height="55" alt="二手"></a><a
            href='<?=randList('lvyou')?>' target="_blank" onfocus="this.blur()"><img src="<?php echo $this->_var['theme_path']; ?>/img/2239549247.gif" width="155" height="55" alt="旅游"></a><a
            href='<?=randList('news')?>' target="_blank" onfocus="this.blur()"><img src="<?php echo $this->_var['theme_path']; ?>/img/0919590237.gif" width="155" height="55" alt="新闻"></a><a
            href='<?=randList('keji')?>' target="_blank" onfocus="this.blur()"><img src="<?php echo $this->_var['theme_path']; ?>/img/0920098240.gif" width="155" height="55" alt="科技"></a><a
            href='<?=randList('bbs')?>' target="_blank" onfocus="this.blur()"><img src="<?php echo $this->_var['theme_path']; ?>/img/1018214360.gif" width="155" height="55" alt="论坛"></a>
    </div>
    <ul id="gg_txt" style="display: block;">
        <?php $article = randArticle(null,11)?>
	    <?php for($i=1;$i<12;$i++):?>
        <li><?=$i?>
            <a href="<?=$article[$i-1]['url']?>" title="<?=$article[$i-1]['title']?>" target="_blank"></a><?=$article[$i-1]['title']?>
        </li>
        <?php endfor;?>
    </ul>
    <div class="content bottom_5">
        <div class="r">
            <div id="jdt">
                <?php $article = randArticle(null,5)?>
                <?php for($i=1;$i<12;$i++):?>
                <p id="jdt_<?=$i?>" style="display: none;">
                    <a href="<?=$article[$i-1]['url']?>" target="_blank" onfocus="this.blur()">
                        <img src="<?=randPic()?>" alt="<?=$article[$i-1]['title']?>">
                    </a>
                </p>
                <?php endfor;?>
                <div id="jdt_page"><strong>1</strong>
                    <a href="javascript:setFocus(2);" target="_self">2</a>
                    <a href="javascript:setFocus(3);" target="_self">3</a>
                    <a href="javascript:setFocus(4);" target="_self">4</a>
                </div>
            </div>
            <script language="javascript" src="<?php echo $this->_var['theme_path']; ?>/js/jdt.js" rel="nofollow"></script>
            <a href="<?php echo $this->_var['web_url']; ?>fangchan/" target="_blank" onfocus="this.blur()">
                <img border="0" src="<?php echo $this->_var['theme_path']; ?>/img/0904101273.gif" width="256" height="52"></a>
            <br>
            <a href="<?php echo $this->_var['web_url']; ?>zhaopin/" target="_blank" onfocus="this.blur()">
                <img border="0" src="<?php echo $this->_var['theme_path']; ?>/img/0904200277.gif" width="256" height="52"></a>
            <br>
            <a href="<?php echo $this->_var['web_url']; ?>jiaoyou/" target="_blank" onfocus="this.blur()">
                <img border="0" src="<?php echo $this->_var['theme_path']; ?>/img/0904279280.gif" width="256" height="52"></a>
            <br>
            <a href="<?php echo $this->_var['web_url']; ?>ershou/" target="_blank" onfocus="this.blur()">
                <img border="0" src="<?php echo $this->_var['theme_path']; ?>/img/0904363283.gif" width="256" height="52"></a>
            <br>
            <a href="<?php echo $this->_var['web_url']; ?>info/" target="_blank" onfocus="this.blur()">
                <img border="0" src="<?php echo $this->_var['theme_path']; ?>/img/0904451287.gif" width="256" height="52"></a>
            <br>
            <a href="<?php echo $this->_var['web_url']; ?>bbs/" target="_blank" onfocus="this.blur()">
                <img border="0" src="<?php echo $this->_var['theme_path']; ?>/img/0156430283.gif" width="256" height="52"></a>
        </div>
        <div class="l">
            <div id="jd">
                <?php $article = randArticle('news')?>
                <h3><a href="<?=$article['url']?>" target="_blank"><strong><?=$article['title']?></strong></a></h3>
                <p><?=$article['description']?></p>
                <ul class="hot_news">
                    <?php $article = randArticle('news',34)?>
	                <?php foreach ($article as $item):?>
                    <li><a href="<?=$item['url']?>" target="_blank" title="<?=$item['title']?>"><?=$item['title']?></a></li>
                    <?php endforeach;?>
                </ul>
            </div>
            <div class="box2 right">
                <h5><a href="<?php echo $this->_var['web_url']; ?>bbs/" class="more">更多&gt;&gt;</a>
                    <span>聊城论坛快眼看贴</span></h5>
                <ul class="ico">
                    <?php $article = randArticle('bbs',20)?>
                    <?php foreach ($article as $item):?>
		                <li><a href="<?=$item['url']?>" target="_blank" title="<?=$item['title']?>"><?=$item['title']?></a></li>
                    <?php endforeach;?>
                </ul>
            </div>
            <div class="news_pic">
                <h5><a href="<?php echo $this->_var['web_url']; ?>qiye/">商家展示</a></h5>
                <ul>
                    <?php $article = randArticle('qiye',5)?>
                    <?php foreach ($article as $item):?>
                    <li><a href="<?=$item['url']?>"><img src="<?=randPic()?>" alt="<?=$item['title']?>"><br></a></li>
                    <?php endforeach;?>
                </ul>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="l">
            <div class="box1">
                <h5><a href="/fangchan/" class="more">更多&gt;&gt;</a><span>房产信息</span>
                </h5>
                <ul>
                    <?php $article = randArticle('fangchan',12)?>
                    <?php foreach ($article as $item):?>
		                <li><span><?=date("m-d")?></span><a href="<?=$item['url']?>"><?=$item['title']?></a></li>
                    <?php endforeach;?>
                </ul>
            </div>
            <div class="box1 box_l">
                <h5><a href="/ershou/" class="more">更多&gt;&gt;</a><span>二手信息</span></h5>
                <ul>
                    <?php $article = randArticle('ershou',12)?>
                    <?php foreach ($article as $item):?>
                    <li><span><?=date("m-d")?></span><a href="<?=$item['url']?>"><?=$item['title']?></a></li>
                    <?php endforeach;?>
                </ul>
            </div>
        </div>
        <div class="r">
            <div class="box2">
                <h5><a href="/shenhuo/" class="more">更多&gt;&gt;</a><span>生活服务</span></h5>
                <ul class="ico">
                    <?php $article = randArticle('shenghuo',12)?>
                    <?php foreach ($article as $item):?>
		                <li><span><?=date("m-d")?></span><a href="<?=$item['url']?>"><?=$item['title']?></a></li>
                    <?php endforeach;?>
                </ul>
            </div>
        </div>
    </div>
    <div class="l">
        <div class="box1">
            <h5><a href="/zhaopin/" class="more">更多&gt;&gt;</a><span>企业招聘</span></h5>
            <ul>
                <?php $article = randArticle('zhaopin',12)?>
                <?php foreach ($article as $item):?>
		            <li><span><?=date("m-d")?></span><a href="<?=$item['url']?>"><?=$item['title']?></a></li>
                <?php endforeach;?>
            </ul>
        </div>
        <div class="box1 box_l">
            <h5><a href="/keji/" class="more">更多&gt;&gt;</a><span>科技前沿</span></h5>
            <ul>
                <?php $article = randArticle('keji',12)?>
                <?php foreach ($article as $item):?>
		            <li><span><?=date("m-d")?></span><a href="<?=$item['url']?>"><?=$item['title']?></a></li>
                <?php endforeach;?>
            </ul>
        </div>
    </div>
    <div class="r">
        <div class="box2">
            <h5><a href="/jiaoyou/" class="more">更多&gt;&gt;</a><span>交友征婚</span></h5>
            <ul class="ico">
                <?php $article = randArticle('jiaoyou',12)?>
                <?php foreach ($article as $item):?>
		            <li><span><?=date("m-d")?></span><a href="<?=$item['url']?>"><?=$item['title']?></a></li>
                <?php endforeach;?>
            </ul>
        </div>
    </div>
</div>

<div class="qilist">
    <div class="l">
        <div class="box1">
            <h5><a href="/news/" class="more">更多&gt;&gt;</a><span>新闻资讯</span></h5>
            <div class="pic">
                <?php $article = randMeta('news')?>
                <a href="<?=$article['url']?>"><img src="<?=randPic()?>" alt='<?=$article['title']?>'></a>
            </div>
            <ul class="hot">
                <?php $article = randArticle('news',4)?>
                <?php foreach ($article as $item):?>
		            <li><a href="<?=$item['url']?>" title="<?=$item['title']?>"><?=$item['title']?></a></li>
                <?php endforeach;?>
            </ul>
            <ul class="news">
                <?php $article = randArticle('news',12)?>
                <?php foreach ($article as $item):?>
		            <li><span><?=date("m-d")?></span><a href="<?=$item['url']?>"><?=$item['title']?></a></li>
                <?php endforeach;?>
            </ul>
        </div>

        <div class="box1 box_l">
            <h5><a href="/qiye/" class="more">更多&gt;&gt;</a><span>企业</span></h5>
	        <div class="pic">
                <?php $article = randMeta('qiye')?>
		        <a href="<?=$article['url']?>"><img src="<?=randPic()?>" alt='<?=$article['title']?>'></a>
	        </div>
	        <ul class="hot">
                <?php $article = randArticle('qiye',4)?>
                <?php foreach ($article as $item):?>
			        <li><a href="<?=$item['url']?>" title="<?=$item['title']?>"><?=$item['title']?></a></li>
                <?php endforeach;?>
	        </ul>
	        <ul class="news">
                <?php $article = randArticle('qiye',12)?>
                <?php foreach ($article as $item):?>
			        <li><span><?=date("m-d")?></span><a href="<?=$item['url']?>"><?=$item['title']?></a></li>
                <?php endforeach;?>
	        </ul>
        </div>
    </div>
    <div class="r">
        <div class="box2">
            <h5><a href="/blog/" class="more">更多&gt;&gt;</a><span>聊城博客</span></h5>
            <ul class="ico">
                <?php $article = randArticle('blog',12)?>
                <?php foreach ($article as $item):?>
		            <li><span><?=date("m-d")?></span><a href="<?=$item['url']?>"><?=$item['title']?></a></li>
                <?php endforeach;?>
            </ul>
        </div>
    </div>
    <div class="qilist">
        <div class="l">
            <div class="box1">
	            <h5><a href="/lvyou/" class="more">更多&gt;&gt;</a><span>旅游资讯</span></h5>
	            <div class="pic">
                    <?php $article = randMeta('lvyou')?>
		            <a href="<?=$article['url']?>"><img src="<?=randPic()?>" alt='<?=$article['title']?>'></a>
	            </div>
	            <ul class="hot">
                    <?php $article = randArticle('lvyou',4)?>
                    <?php foreach ($article as $item):?>
			            <li><a href="<?=$item['url']?>" title="<?=$item['title']?>"><?=$item['title']?></a></li>
                    <?php endforeach;?>
	            </ul>
	            <ul class="news">
                    <?php $article = randArticle('lvyou',12)?>
                    <?php foreach ($article as $item):?>
			            <li><span><?=date("m-d")?></span><a href="<?=$item['url']?>"><?=$item['title']?></a></li>
                    <?php endforeach;?>
	            </ul>
            </div>
	        <div class="box1 box_l">

		        <h5><a href="/" class="more">更多&gt;&gt;</a><span>随机推荐</span></h5>
		        <div class="pic">
                    <?php $article = randMeta(null)?>
			        <a href="<?=$article['url']?>"><img src="<?=randPic()?>" alt='<?=$article['title']?>'></a>
		        </div>
		        <ul class="hot">
                    <?php $article = randArticle(null,4)?>
                    <?php foreach ($article as $item):?>
				        <li><a href="<?=$item['url']?>" title="<?=$item['title']?>"><?=$item['title']?></a></li>
                    <?php endforeach;?>
		        </ul>
		        <ul class="news">
                    <?php $article = randArticle(null,12)?>
                    <?php foreach ($article as $item):?>
				        <li><span><?=date("m-d")?></span><a href="<?=$item['url']?>"><?=$item['title']?></a></li>
                    <?php endforeach;?>
		        </ul>
	        </div>
        </div>
        <div class="r">
            <div class="box2">
                <h5><a href="/news/" class="more">更多&gt;&gt;</a><span>热点推荐</span>
                </h5>
                <ul class="ico">
                    <?php $article = randArticle(null,12)?>
                    <?php foreach ($article as $item):?>
		                <li><span><?=date("m-d")?></span><a href="<?=$item['url']?>"><?=$item['title']?></a></li>
                    <?php endforeach;?>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="bottom">
    <ul id="navA">
        <li><a href="/" title="聊城信息港" class="home">首页</a></li>
        <li><a href="/fangchan/" title="聊城房产">房产<img src="<?php echo $this->_var['theme_path']; ?>/img/jian.gif"></a></li>
        <li><a href="/zhaopin/" title="招聘/求职">人才</a></li>
        <li><a href="/ershou/" title="二手市场">二手</a></li>
        <li><a href="/jiaoyou/" title="聊城交友">交友</a></li>
        <li><a href="/shenghuo/" title="生活服务">服务</a></li>
        <li><a href="/zhidao/" title="你问我答">知道</a></li>
        <li><a href="/blog/" title="博客日志">博客</a></li>
        <li><a href="/qiye/" title="企业信息">黄页<img src="<?php echo $this->_var['theme_path']; ?>/img/jian.gif"></a></li>
        <li><a href="/news/" title="新闻资讯">新闻</a></li>
        <li><a href="/keji/" title="科技">科技</a></li>
        <li><a href="/bbs/" title="聊城论坛">论坛<img src="<?php echo $this->_var['theme_path']; ?>/img/jian.gif"></a></li>
        <li><a href="/lvyou/" title="旅游指南">旅游</a></li>
    </ul>
    <p><span class="STYLE1">友情连接：</span>
        <?php $this->_tags_data=$this->tag_block_loop(array('type'=>'domain',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
        <a href="<?php echo $this->_var['vo']['url']; ?>" target="_blank"><?php echo $this->_var['vo']['title']; ?></a>
        <?php }} ?>
        <?php if($this->_var['links_open']): ?>
        <?php $this->_tags_data=$this->tag_block_loop(array('type'=>'link','row'=>'20','tpl'=>'','image'=>'','info'=>'',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
        <?php echo $this->tag_function_getone(array( 'name'=>"link/liaocheng/link", )); ?>
        <?php }} ?>
        <?php endif; ?>
    </p>
    <p>
        <span style="CURSOR: hand"
              onclick="window.external.addFavorite()">加入收藏</span> |
        <a href="<?php echo $this->_var['web_url']; ?>" rel="nofollow"
           onclick=""
           title="聊城信息港">设为首页</a> |
        <a href="<?php echo $this->_var['web_url']; ?>shortcut.html" rel="nofollow">保存到桌面</a> |
        <a href="<?php echo $this->_var['web_url']; ?>sitemap.xml">网站地图</a> |
        <a href="<?php echo $this->_var['web_url']; ?>about.html">关于我们</a> |
        <a href="<?php echo $this->_var['web_url']; ?>webad/adServer.htm">广告投放</a> |
        <a href="<?php echo $this->_var['web_url']; ?>zhidao">用户帮助</a> |
        <a href="<?php echo $this->_var['web_url']; ?>huiyuan/reg.html">用户注册</a> |
        <a href="<?php echo $this->_var['web_url']; ?>tougao.html">在线投稿</a> |
        <a href="">手机版</a> |
        <a href="<?php echo $this->_var['web_url']; ?>guestbook.html">留言反馈</a>
    </p>
    <p>
        <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&amp;uin=369207198&amp;site=qq&amp;menu=yes">
            <img border="0" src="<?php echo $this->_var['theme_path']; ?>/img/button_11.gif" alt="点击这里给我发消息" title="点击这里给我发消息">
        </a>业务电话:0<?php echo $this->tag_function_function(array( 'name'=>"get_num_gd", 'args'=>"2,1", )); ?>-<?php echo $this->tag_function_function(array( 'name'=>"get_num_gd", 'args'=>"8,1", )); ?> QQ:369207198
        <a href="<?php echo $this->_var['web_url']; ?>" target="_blank">聊城信息港</a> 运行时间 <?php echo _runtime("loadTime","end"); ?>
        <a target="_blank" rel="nofollow" href="#" title="聊城信息港（官方）"></a><br>
        Copyright &#169; 2003-2010 <strong><span class="STYLE1"><?php echo $this->_var['web_url']; ?></span></strong></p>
    <center>All rights reserved. &nbsp;&nbsp;备案编号：鲁ICP备16047037号 <a
            href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=37152602000101" target="_blank">鲁公网安备
        37152602000101</a></center>
    <a key="59db23580c909644c952128f" logo_size="124x47" logo_type="realname"
       href="http://v.pinpaibao.com.cn/authenticate/cert/?site=<?php echo $this->_var['web_url']; ?>&amp;at=realname" target="_blank">
        <b id="aqLogoFLNVT" style="display: none;"></b><img src="<?php echo $this->_var['theme_path']; ?>/img/sm_124x47.png" alt="安全联盟认证"
                                                            width="124" height="47" style="border: none;"></a>
    <a key="59db23580c909644c952128f" logo_size="124x47" logo_type="common"
       href="http://www.cn-ecusc.org.cn/cert/aqkx/site/?site=<?php echo $this->_var['web_url']; ?>" target="_blank">
        <b id="aqLogoUSBIT" style="display: none;"></b><img src="<?php echo $this->_var['theme_path']; ?>/img/aqkx_124x47.png" alt="安全联盟认证"
                                                            width="124" height="47" style="border: none;"></a>
    <p></p>
</div>

</body>
</html>