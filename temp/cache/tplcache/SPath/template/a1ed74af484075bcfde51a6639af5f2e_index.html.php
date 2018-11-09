<?php if(!defined('IN_TXTCMS')){define('IN_TXTCMS',true);} ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $this->_var['toptitle']; ?></title>
    <meta name="description" content="<?php echo $this->_var['description']; ?>" />
    <meta name="keywords" content="<?php echo $this->_var['keywords']; ?>" />
    <link href="<?php echo $this->_var['theme_path']; ?>/style/cgcyz.css" rel="stylesheet" media="screen" type="text/css" />
    <script language="javascript" type="text/javascript" src="<?php echo $this->_var['web_path']; ?>/include/dedeajax2.js"></script>
    <script language="javascript" type="text/javascript" src="<?php echo $this->_var['web_path']; ?>/images/js/j.js" ></script>
    <script language="javascript" type="text/javascript" src="<?php echo $this->_var['theme_path']; ?>/js/pic_scroll.js"></script>

</head>
<body class="index">
<?php echo $this->fetch('head.html'); ?>


<div id="content" class="w960 center clear mt1">
    
    <div class="indexl">
        <div class="main">
            
            <div class="ml">
                <dl class="tbox">

                    <dd>
                        <ul class="d1 ico2">
                            <?php $this->_tags_data=$this->tag_block_loop(array('type'=>'arclist','row'=>'10',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
                            <li ><a href="<?php echo $this->_var['vo']['url']; ?>" target="_blank"><?php echo $this->_var['vo']['url']; ?></a></li>
                            <?php }} ?>
                        </ul>
                    </dd>
                </dl>
            </div>
            
        </div>
    </div>
</div>
</body>
</html>