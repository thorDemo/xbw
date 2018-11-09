<?php if(!defined('IN_TXTCMS')){define('IN_TXTCMS',true);} ?><urlset>
	<?php $this->_tags_data=$this->tag_block_loop(array('type'=>'arclist','row'=>'50',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
	<url>
		<loc><?php echo $this->_var['vo']['url']; ?></loc>
		<lastmod><?php echo date('Y-m-d'); ?></lastmod>
		<changefreq>always</changefreq>
		<priority>1.0</priority>
	</url>
	<?php }} ?>
	<?php $this->_tags_data=$this->tag_block_loop(array('type'=>'typename','row'=>'50',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
	<url>
		<loc><?php echo $this->_var['vo']['typeurl']; ?></loc>
		<lastmod><?php echo date('Y-m-d'); ?></lastmod>
		<changefreq>always</changefreq>
		<priority>1.0</priority>
	</url>
	<?php }} ?>
	<?php $this->_tags_data=$this->tag_block_loop(array('type'=>'arclist','row'=>'50',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
	<url>
		<loc><?php echo $this->_var['vo']['url']; ?></loc>
		<lastmod><?php echo date('Y-m-d'); ?></lastmod>
		<changefreq>always</changefreq>
		<priority>1.0</priority>
	</url>
	<?php }} ?>
</urlset>