<?php if(!defined('IN_TXTCMS')){define('IN_TXTCMS',true);} ?><?php require 'core/mylib/tag.php'?>
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
        <?php $this->_tags_data=$this->tag_block_loop(array('type'=>'arclist','row'=>'3','tpl'=>'','image'=>'1','info'=>'1',));if($this->_tags_data){ foreach($this->_tags_data as $this->_var["k"]=>$this->_var["vo"]){ ?>
        <img src="<?php echo randPic('news')?>" alt="<?=$article[$i]['title']?>"/>
        <?php }} ?>
    </li>
    <?php endif; ?>
</ul>
<?php endfor;?>
<div class="news_page">
    <?php
        $p=$_GET["p"];
        echo '<a href="javascript:getpage(\'fa\',3500,'.($p - 1).');">上一页</a>';
        if ($p < 5){
            for($i = 1;$i < $p ;$i++ ){
                echo '<a href="javascript:getpage(\'fa\',3500,'.$i.');">'.$i.'</a>';
            }
        }else{
            for($i = $p - 4;$i < $p ;$i++ ){
                echo '<a href="javascript:getpage(\'fa\',3500,'.$i.');">'.$i.'</a>';
            }
        }
        echo '<span>'.$p.'</span>';
        for($i = $p + 1;$i < $p+5 ;$i++ ){
            echo '<a href="javascript:getpage(\'fa\',3500,'.$i.');">'.$i.'</a>';
        }
        echo '<a href="javascript:getpage(\'fa\',3500,'.($p + 1).');">下一页</a>';
    ?>
</div>
