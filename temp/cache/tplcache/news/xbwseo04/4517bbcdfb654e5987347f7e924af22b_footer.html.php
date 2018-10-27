<?php if(!defined('IN_TXTCMS')){define('IN_TXTCMS',true);} ?><div class="link">
	<div class="link-t">
    	<h4>友情链接</h4>
    	<span >接受PR>=1、BR>=1，流量相当，内容相关类链接。</span>
    </div>
    <ul>
    	<?php $this->_tags_data=$this->tag_block_loop(array('type'=>'domain',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?><a href="<?php echo $this->_var['vo']['url']; ?>" target="_blank"><?php echo $this->_var['vo']['title']; ?></a><?php }} ?>
		 <?php if($this->_var['links_open']): ?>
   <?php $this->_tags_data=$this->tag_block_loop(array('type'=>'link',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
   <li ><a href="<?php echo $this->_var['vo']['url']; ?>" target="_blank"><?php echo $this->_var['vo']['title']; ?></a></li>
   <?php }} ?>
   <?php endif; ?>
        <div class="cl"></div>
    </ul>
</div>
<div class="footer">
	<p >Copyright &copy; 2016 Powered by <a href="<?php echo $this->_var['thisurl']; ?>"><?php echo $this->_var['title']; ?></a>,<a href="<?php echo $this->_var['web_url']; ?>"><?php echo $this->_var['web_name']; ?></a>&nbsp;&nbsp;<?php echo $this->_var['web_tongji']; ?> <a href="http://<?php echo $this->_var['host']; ?>/sitemap.xml">sitemap</a></p>
</div>
<?php echo $this->_var['web_share']; ?>
<?php echo $this->_var['web_bdpush']; ?>