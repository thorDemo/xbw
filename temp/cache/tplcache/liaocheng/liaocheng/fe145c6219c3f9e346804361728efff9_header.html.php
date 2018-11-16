<?php if(!defined('IN_TXTCMS')){define('IN_TXTCMS',true);} ?><div id="header">
    <div id="top">
        <div id="logo"><a href="<?php echo $this->_var['web_url']; ?>"><img src="/uploads/images/logo.png?n=<?php echo $this->_var['encode_name']; ?>&w=180" alt="<?php echo $this->_var['web_url']; ?>"></a></div>
        <div id="logo_txt">
            <strong>聊城权威网络媒体<br>
                //<a href="javascript:void(0);" onclick="window.external.AddFavorite('http://www.liaocheng.cc', '聊城信息港<?php echo $this->_var['web_url']; ?>');return false;" rel="sidebar">收藏本站</a>
            </strong>
            <br><?php echo $this->_var['web_url']; ?>
        </div>
        <div id="top_searchs">
            
            <div id="top_login">欢迎您：网友，请
                <a href="/huiyuan/login.html">登录</a> 不是会员？
                <a href="/huiyuan/reg.html">免费注册</a> 也可用
                <a href="/Api/qq/" style="background:url(<?php echo $this->_var['theme_path']; ?>/img/qq_ico.gif) no-repeat 0px 0px;padding:2px 0 3px 18px;/" title="用QQ账号登录">QQ登录</a>
                <a href="/webad/wap.htm" target="_blank"
                   style="background:url(<?php echo $this->_var['theme_path']; ?>/img/m.gif) no-repeat 0px -18px;padding:1px 5px 1px 15px;margin-left:15px;color:#f30;font-weight: bold;">手机版</a>
                <span id="login_str"></span>
            </div>
            <div id="top_search">
                <form method="get" action="/so">
                    <div id="top_input">
                        <input type="text" name="key" id="search_key" autocomplete="off"
                               onkeyup="kts(event,'','/inc/key.aspx?value=','search_key',true);"
                               value="">
                    </div>
                    <input type="submit" id="top_search_submit"
                           onmouseout="this.style.backgroundPosition='-352px';"
                           onmouseover="this.style.backgroundPosition='-417px';" value="搜 索"
                           style="background-position: -352px center;">
                </form>
                <div id="top_fabu">
                    <a href="/fabu.html">
                        <img src="<?php echo $this->_var['theme_path']; ?>/img/fabu.gif" title="免费发布信息">
                    </a>
                </div>
            </div>
            <div id="goTopBtn" style="display: block;">
                <a href="/#top"><img src="<?php echo $this->_var['theme_path']; ?>/img/top.gif"></a>
            </div>
        </div>
    </div>
    <ul id="navA">
        <li><a href="/" title="聊城信息港" class="home">首页</a></li>
        <li><a href="/fangchan/" title="聊城房产">房产<img src="<?php echo $this->_var['theme_path']; ?>/img/jian.gif"></a></li>
        <li><a href="/zhaopin/" title="招聘/求职">人才</a></li>
        <li><a href="/ershou/" title="二手市场">二手</a></li>
        <li><a href="/jiaoyou/" title="聊城交友">交友</a></li>
        <li><a href="/shenghuo/" title="生活服务">生活</a></li>
        <li><a href="/blog/" title="博客日志">博客</a></li>
        <li><a href="/qiye/" title="企业信息">黄页<img src="<?php echo $this->_var['theme_path']; ?>/img/jian.gif"></a></li>
        <li><a href="/news/" title="新闻资讯">新闻</a></li>
        <li><a href="/keji/" title="科技">科技</a></li>
        <li><a href="/bbs/" title="聊城论坛">论坛<img src="<?php echo $this->_var['theme_path']; ?>/img/jian.gif"></a></li>
        <li><a href="/lvyou/" title="旅游指南">旅游</a></li>
    </ul>
    <ul id="navB">
	    <?php $item = TypeName('news', 23)?>
	    <?php for ($i=1; $i< count($item); $i++):?>
	    <?php if ($i == rand(1,10) || $i == rand(1,10)):?>
        <li><a href="<?php echo $this->tag_function_geturl(array( 'tpl'=>"", 'fan'=>"", )); ?>" title="<?=$item[$i]['name']?>"><?=$item[$i]['name']?><img src="<?php echo $this->_var['theme_path']; ?>/img/jian.gif"></a></li>
	    <?php else:?>
        <li><a href="<?php echo $this->tag_function_geturl(array( 'tpl'=>"", 'fan'=>"", )); ?>" title="<?=$item[$i]['name']?>"><?=$item[$i]['name']?></a></li>
        <?php endif; ?>
		<?php endfor;?>
    </ul>
</div>