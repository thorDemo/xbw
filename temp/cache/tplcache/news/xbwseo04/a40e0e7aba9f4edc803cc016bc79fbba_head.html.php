<?php if(!defined('IN_TXTCMS')){define('IN_TXTCMS',true);} ?>﻿<div class="top"></div>
<div class="head">
	<div class="logo fl"><a href="<?php echo $this->_var['web_url']; ?>"><img src="/uploads/images/logo.png?n=<?php echo $this->_var['encode_name']; ?>&w=180"></a></div>
    <div class="tagso fr">
        <div class="serach fl">
            <form action="" name="formsearch">
                <input type="hidden" name="kwtype" value="0" />
                <input name="keyword" type="text" class="search-keyword fl" id="search-keyword" value="站内搜索" onfocus="if(this.value=='站内搜索'){this.value='';}"  onblur="if(this.value==''){this.value='站内搜索';}"/>
                <button type="submit" class="search-submit fl">搜索</button>
            </form>
        </div>
    </div>
    <div class="cl"></div>
</div>
<div class="nav1">
	<ul class="n-box1">
    	<li class="u-1"><a href="<?php echo $this->_var['web_path']; ?>/">首页</a></li>
        <?php $this->_tags_data=$this->tag_block_loop(array('type'=>'typename','row'=>'10',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
      	<li ><a href='<?php echo $this->_var['vo']['typeurl']; ?>'><?php echo $this->_var['vo']['typename']; ?></a></li>
      	<?php }} ?>
    </ul>
</div>