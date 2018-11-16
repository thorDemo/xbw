<?php if(!defined('IN_TXTCMS')){define('IN_TXTCMS',true);} ?><div id="bottom">
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
	<a href="/sitemap.xml">网站地图</a> - <a href="/webad/wap.htm">手机版</a> - <a href="/zhidao">用户帮助</a> -
	<a href="/huiyuan/reg.html">用户注册</a> - <a href="/inc/tougao.html">在线投稿</a> - <a href="/webad/adServer.htm"> 运行时间 <?php echo _runtime("loadTime","end"); ?></a>
	- <a href="/inc/guestbook.html">留言反馈</a> - <span>运行时间 <?php echo _runtime("loadTime","end"); ?></span><br/>免责声明：本网站所有信息、内容均为会员发布，请注意识别验证信息的虚假。据此交易风险自负！本站不提供任何保证并不承担任何法律连带责任。<br/>Copyright
	&copy;&nbsp; liaocheng.cc Inc. All rights reserved
	<?php echo $this->_var['web_share']; ?>
	<?php echo $this->_var['web_bdpush']; ?>
</div>