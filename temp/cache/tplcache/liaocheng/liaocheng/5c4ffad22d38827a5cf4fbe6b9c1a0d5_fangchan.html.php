<?php if(!defined('IN_TXTCMS')){define('IN_TXTCMS',true);} ?><?php require 'core/mylib/tag.php'?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title><?php echo $this->tag_function_getone(array( 'name'=>"common/house_title", 'cacheid'=>"1", )); ?><?php echo $this->_var['title']; ?></title>
    <meta name="description" content='<?php echo $this->tag_function_getone(array( 'name'=>"common/house_title", 'cacheid'=>"1", )); ?>'>
    <meta name="keywords" content='<?php echo $this->tag_function_getone(array( 'name'=>"common/house_title", 'cacheid'=>"1", )); ?>'>
    <link rel="shortcut icon" href="<?php echo $this->_var['theme_path']; ?>/img/favicon.ico">
    <link rel="stylesheet" href="<?php echo $this->_var['theme_path']; ?>/css/main.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $this->_var['theme_path']; ?>/css/css.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $this->_var['theme_path']; ?>/css/classad.css" type="text/css">
    
</head>
<body>
<?php echo $this->fetch('header.html'); ?>
<div class="content">
    <div class="l">
        <div class="c_x1">
            <b>类别：</b>
            <a href="/">聊城信息港</a> &gt;
            <a href="<?php echo $this->_var['typeurl']; ?>">房产信息</a> &gt;
            <a href="<?php echo $this->_var['thisurl']; ?>">房屋出售</a> &nbsp;
            <b>地区：</b><a href="/house/chushou/"><?php echo $this->tag_function_getone(array( 'name'=>"common/chengshi", 'cacheid'=>"{$this->_var['host']}", 'global'=>"1", )); ?></a> &gt;
            <b>TAG：</b>
            <span >房源</span>
            <span >稀缺</span>

        </div>
        <h1 class="c_bt"><?php echo $this->tag_function_getone(array( 'name'=>"common/house_title", 'cacheid'=>"1", )); ?> <?php echo $this->tag_function_getone(array( 'name'=>"title", 'cacheid'=>"rand", )); ?></h1>
        <div class="c_x2">ID编号：<?php echo $this->tag_function_randstr(array( 'type'=>"2", 'num'=>"1,5", )); ?> &nbsp; 类型：
            <span class="mobileyz" title="手机已认证"></span> &nbsp; 时间：<?php echo $this->_var['postdate']; ?> &nbsp; 浏览：<?php echo $this->tag_function_randstr(array( 'type'=>"2", 'num'=>"1,5", )); ?> &nbsp; 管理：
            <a href="" rel="nofollow">置顶</a>&nbsp;
            <a href="/fangchan/xiugai.html" rel="nofollow">修改</a>&nbsp;
            <a href="/fangchan/delete.html" onclick="return confirm('确定删除?')" rel="nofollow">删除</a>&nbsp;
            <span id="sj_u_a_78471">
                <a onclick="">刷新</a>
            </span>
        </div>
        <div class="c_nr">
            <p><img src="<?php echo $this->_var['pic']; ?>" alt="<?php echo $this->_var['title']; ?>" /></p>
            <p><?php echo $this->_var['content1']; ?><?php echo $this->_var['content2']; ?></p>
            <?php echo $this->tag_function_getone(array( 'name'=>"common/article", )); ?>
            <?php $this->_tags_data=$this->tag_block_loop(array('type'=>'arclist','tpl'=>'fangchan','row'=>'1','name'=>'common/house_title/','image'=>'0',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
            <a href="<?php echo $this->_var['vo']['url']; ?>"><h1>关键词： <?php echo $this->tag_function_getone(array( 'name'=>"common/house_title", 'cacheid'=>"1", )); ?></h1></a>
            <?php }} ?>
            <?php echo $this->tag_function_getone(array( 'name'=>"common/article", )); ?>
            <?php $this->_tags_data=$this->tag_block_loop(array('type'=>'arclist','tpl'=>'fangchan','row'=>'1','name'=>'common/house_title/','image'=>'0',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
            <a href="<?php echo $this->_var['vo']['url']; ?>"><h1>关键词： <?php echo $this->tag_function_getone(array( 'name'=>"common/house_title", 'cacheid'=>"1", )); ?></h1></a>
            <?php }} ?>
        </div>
        <div class="c_x1"><b>电话/手机：</b><span style="font-family:Arial Black;color:#f30;font-size:18px;padding:0 5px;">0<?php echo $this->tag_function_function(array( 'name'=>"get_num_gd", 'args'=>"2,1", )); ?>-<?php echo $this->tag_function_function(array( 'name'=>"get_num_gd", 'args'=>"8,1", )); ?></span>
            <a title="点击查看完整号码" rel="nofollow" style="margin:5px 0px 4px 16px;background-color:#f30;color:#fff;font-size:14px;text-align:center;vertical-align: middle;text-decoration: none;display: inline-block;cursor: pointer;height:30px;line-height:30px;padding:0 10px;">点击查看完整号码</a>
        </div>
        <div class="c_x2">您可以这样电话联系：“您好，我从 <b>聊城信息港</b> 看到您发布的...信息,请问...”</div>
        <div class="c_x1">
            <b>联系地址：<?php echo $this->tag_function_getone(array( 'name'=>"common/chengshi", 'cacheid'=>"{$this->_var['host']}", 'global'=>"1", )); ?><?php echo $this->tag_function_getone(array( 'name'=>"common/daolu", 'cacheid'=>"{$this->_var['host']}", 'global'=>"1", )); ?><?php echo $this->tag_function_function(array( 'name'=>"get_num_gd", 'args'=>"3,1", )); ?>号</b>
            <img src="<?php echo $this->_var['theme_path']; ?>/img/jst_offline.gif" title="会员『』离线点击发送短信留言" align="absmiddle" style="cursor:pointer"
                                                     onclick="openWindow('')"/>
        </div>
        <div class="c_x3"><a id="icang"
                             href="javascript:shoucang('')"
                             rel="nofollow">收藏这条信息&raquo;</a><a
                href="javascript:openWindow('','分享 - 转发给朋友',450,240)" rel="nofollow">分享/转发该条信息&raquo;</a><a
                href="javascript:openWindow('','信息举报',400,300)"
                rel="nofollow">投诉举报&raquo;</a><a href="<?php echo $this->tag_function_function(array( 'name'=>"get_url", 'args'=>"show", )); ?>">TA发布的所有信息&raquo;</a></div>
        <div class="c_x2">如果此信息不适合，您也可以发布一条信息，坐等反馈 <a href="/fabu/">？我要免费发布</a></div>
        <div class="c_x2"><img src="<?php echo $this->_var['theme_path']; ?>/img/item.gif" align="middle"/> <span id="pingts">网友评论</span>
            (留言联系信息发布人，推荐使用即时通站内短信)
        </div>
        <div id="pinglun">
            <dl id="pinglun_list">
                <dt>当前暂无评论</dt>
            </dl>
        </div>
    </div>
    <div class="r">
        <div class="abc k208 tC">

            <img src="<?php echo $this->tag_function_getone(array( 'name'=>"pic", 'cacheid'=>"rand", )); ?>" style="padding:10px 0 5px 0;max-width:180px;max-height:180px;"/><br/>特别推荐↑
        </div>
        <div class="abc k208 t_5">
            <h5>相关信息</h5>
            <ul class="abc_news">
                <?php $this->_tags_data=$this->tag_block_loop(array('type'=>'arclist','tpl'=>'fangchan','row'=>'12','name'=>'common/house_title/','image'=>'0',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
                <li><a href="<?php echo $this->_var['vo']['url']; ?>" target="_blank"><?php echo $this->tag_function_getone(array( 'name'=>"common/house_title", )); ?></a></li>
                <?php }} ?>
            </ul>
        </div>
        <div class="abc k208 t_5">
            <h5>置顶信息随机展示</h5>
            <ul class="abc_news">
                <?php $this->_tags_data=$this->tag_block_loop(array('type'=>'arclist','tpl'=>'fangchan','row'=>'12','name'=>'common/house_title/','image'=>'0',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
                <li><a href="<?php echo $this->_var['vo']['url']; ?>" target="_blank"><?php echo $this->tag_function_getone(array( 'name'=>"common/house_title", )); ?></a></li>
                <?php }} ?>
            </ul>
        </div>
    </div>
</div>
<?php echo $this->fetch('show_footer.html'); ?>
</body>
</html>