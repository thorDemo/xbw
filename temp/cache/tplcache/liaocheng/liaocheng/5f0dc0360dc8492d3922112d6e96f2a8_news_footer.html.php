<?php if(!defined('IN_TXTCMS')){define('IN_TXTCMS',true);} ?><div id="bottom">
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
    <a href="/huiyuan/reg.html">用户注册</a> - <a href="/inc/tougao.html">在线投稿</a> - <a href="/webad/adServer.htm">广告投放</a>
    - <a href="/inc/guestbook.html">留言反馈</a> - <span>运行时间 <?php echo _runtime("loadTime","end"); ?>
    <br/>免责声明：本网站所有信息、内容均为会员发布，请注意识别验证信息的虚假。据此交易风险自负！本站不提供任何保证并不承担任何法律连带责任。<br/>
    Copyright &copy; 2003-2009 liaocheng.cc All rights reserved.
    <a target="blank" href="tencent://message/?uin=61979880&Site=点击这里给我发消息&Menu=yes">
        <img border="0" SRC=http://wpa.qq.com/pa?p=1:61979880:1 alt="点击这里给我发消息"></a>
    <?php echo $this->_var['web_share']; ?>
    <?php echo $this->_var['web_bdpush']; ?>
</div>