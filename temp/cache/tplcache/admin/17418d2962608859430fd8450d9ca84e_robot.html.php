<?php if(!defined('IN_TXTCMS')){define('IN_TXTCMS',true);} ?><?php echo $this->fetch('header.html'); ?>
<script type="text/javascript" src="static/js/highcharts/highcharts.js"></script>
<script type="text/javascript" src="static/js/highcharts/themes/txtcms.js"></script>
<body class="body-main">
<ul id="admin_sub_title">
	<li class="sub"><a href="javascript:">访问记录</a></li>
	<li class="tips"><a href="javascript:" onclick="recount();" style="color:red">（点击修正/重新计算）</a></li>
</ul>
<script type="text/javascript">
function recount(){
	if(confirm("此操作会暂时关闭蜘蛛记录，待修正完毕会自动开启\n------------------------------------\n数量大的话会需要点时间\n------------------------------------\n确定执行吗？\n------------------------------------")==false){
		return false;
	}
	page_loading('正在计算蜘蛛爬行记录...');
	$.ajax({
		url:'?admin-robot-recount',
		success:function(h){
			page_loading_close();
			alert(h);
			location.reload();
		}
	});
}
</script>
<div id="admin_right_b">
<?php if($this->_var['total']): ?>
<div style="height: 300px;">
	<div style="position: relative;">
		<div id="line_tab" class="chart_tab" style="margin-left:31%;">
			<span class="cur" data="today">今日</span>
			<span data="yestoday">昨日</span>
			<span data="7day">7日</span>
			<span data="30day">30日</span>
			<span data="365day">1年</span>
			<span data="3650day">10年</span>
		</div>
		<div id="chart_line_day_box" class="chart_box"><?php echo $this->fetch('chart_line_day.html'); ?></div>
	</div>
	<div style="position: relative;text-align:right">
		<div id="pie_tab" class="chart_tab" style="text-align: right;width: 30%;left: -10px;">
			<span class="cur" data="today">今日</span>
			<span data="yestoday">昨日</span>
			<span data="7day">7日</span>
			<span data="30day">30日</span>
			<span data="365day">1年</span>
			<span data="3650day">10年</span>
		</div>
		<div id="chart_pie_day_box" class="chart_box"><?php echo $this->fetch('chart_pie_day.html'); ?></div>
	</div>
</div>
<div style="position: relative;">
	<div class="type_tab" id="week_type_tab">
		<span class="cur" data="">全部</span><span data="detail">明细</span>
	</div>
	<span id="week_type" data=""></span>
	<div id="week_tab" class="chart_tab" style="left:160px;">
		<span data="10day" class="cur">近10日</span>
		<span data="30day">近30日</span>
		<span data="365day">近1年</span>
		<span data="3650day">近10年</span>
	</div>
	<div id="chart_line_week_box" class="chart_box"><?php echo $this->fetch('chart_line_week.html'); ?></div>
</div>
<br>
<script type="text/javascript">
$(function () {
	$('#pie_tab span').click(function(){
		$(this).siblings().removeClass('cur').end().addClass('cur');
		var gurl='?admin-robot-getchartpie-'+'value-'+$(this).attr('data');
		$('#chart_pie_day_box .highcharts-container').css({ opacity: 0.3 });
		$('#chart_pie_day').append('<div class="loading">加载中...</div>');
		$.ajax({
			url:gurl,
			success:function(data){
				$('#chart_pie_day_box .highcharts-container').html(data.html).css({ opacity:1 });
			}
		});
	});
	$.ajax({
		url:'?admin-robot-getchartline-value-today',
		success:function(data){
			$('#chart_line_day_box .highcharts-container').html(data.html);
		}
	});
	$('#line_tab span').click(function(){
		$(this).siblings().removeClass('cur').end().addClass('cur');
		var gurl='?admin-robot-getchartline-'+'value-'+$(this).attr('data');
		$('#chart_line_day_box .highcharts-container').css({ opacity: 0.3 });
		$('#chart_line_day').append('<div class="loading">加载中...</div>');
		$.ajax({
			url:gurl,
			success:function(data){
				$('#chart_line_day_box .highcharts-container').html(data.html).css({ opacity:1 });
			}
		});
	});
	$('#week_type_tab span').click(function(){
		$(this).siblings().removeClass('cur').end().addClass('cur');
		$('#week_type').attr('data',$(this).attr('data'));
		var gurl='?admin-robot-getchartweek-'+'value-10day'+'-type-'+$('#week_type').attr('data');
		$('#chart_line_week_box .highcharts-container').css({ opacity: 0.3 });
		$('#chart_line_week').append('<div class="loading">加载中...</div>');
		$.ajax({
			url:gurl,
			success:function(data){
				$('#chart_line_week_box .highcharts-container').html(data.html).css({ opacity:1 });
			}
		});
	});
	$('#week_tab span').click(function(){
		$(this).siblings().removeClass('cur').end().addClass('cur');
		var gurl='?admin-robot-getchartweek-'+'value-'+$(this).attr('data')+'-type-'+$('#week_type').attr('data');
		$('#chart_line_week_box .highcharts-container').css({ opacity: 0.3 });
		$('#chart_line_week').append('<div class="loading">加载中...</div>');
		$.ajax({
			url:gurl,
			success:function(data){
				$('#chart_line_week_box .highcharts-container').html(data.html).css({ opacity:1 });
			}
		});
	});
});
</script>

<table border="0" align="center" cellpadding="3" cellspacing="1" class="table_b" style="margin-top:10px">
	<tbody>
	<tr class="tdbg item_title">
		<td colspan="6">
			<i class="typcn typcn-cog"></i> 蜘蛛访问明细&nbsp;<input id="sday" type="text" onClick="WdatePicker({ dateFmt:'yyyyMMdd'})" class="input Wdate" style="width:75px;" value="<?php echo $this->_var['sday']; ?>">&nbsp;<button type="button" class="button" onclick="get_list('?admin-robot-index-day-'+$('#sday').val());">查看</button>&nbsp;
			<span id="scount"><?php $_from=$this->_var['scount']; if(!is_array($_from) && !is_object($_from)){ settype($_from, 'array'); }; $this->push_vars('k', 'vo');if(count($_from)):
    foreach($_from AS $this->_var['k'] => $this->_var['vo']):
?>
				<span class="glist"><a href="<?php echo $this->_var['vo']['url']; ?>"><?php echo $this->_var['vo']['name']; ?>(<?php echo $this->_var['vo']['count']; ?>)</a>&nbsp;
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars(); ?></span>
		</td>
	</tr>
	<tr>
	  <td width="50" align='center' class="title_bg">id</td>
	  <td width="100" align='center' class="title_bg">蜘蛛名称</td>
	  <td width="110" align='center' class="title_bg">IP地址</td>
      <td class="title_bg">访问地址</td>
	  <td width="60" align='center' class="title_bg">模板</td>
	  <td width="140" align='center' class="title_bg">访问时间</td>
    </tr>
	</tbody>
	<tbody id="rlist">
	<?php $_from=$this->_var['list']; if(!is_array($_from) && !is_object($_from)){ settype($_from, 'array'); }; $this->push_vars('', 'vo');if(count($_from)):
    foreach($_from AS $this->_var['vo']):
?>
		<tr class="tdbg">
			<td align="center"><?php echo $this->_var['vo']['id']; ?></td>
			<td align="center"><?php if($this->_var['vo']['sourl']): ?><span class="glist"><a href="<?php echo $this->_var['vo']['sourl']; ?>"><?php echo $this->_var['vo']['name']; ?></a></span><?php else: ?><?php echo $this->_var['vo']['name']; ?><?php endif; ?></td>
			<td align="center"><?php echo $this->_var['vo']['ip']; ?></td>
			<td><?php echo $this->_var['vo']['url']; ?></td>
			<td align="center"><?php echo empty($this->_var['vo']['typename']) ? 'null' : $this->_var['vo']['typename']; ?></td>
			<td align="center"><?php echo $this->_var['vo']['time']; ?></td>
		</tr>
	<?php endforeach; else: ?>
		<tr bgcolor='#ffffff'>
			<td colspan='6' height="25" align="center">暂无记录！</td>
		</tr>
	<?php endif; unset($_from); ?><?php $this->pop_vars(); ?>
	</tbody>
	<tbody>
	<tr>
      <td colspan="6" class="tdbg content_page" align="center"><a>共 <font id="total"><?php echo $this->_var['total']; ?></font> 条</a>&nbsp;<span class="glist" id="pages"><?php echo $this->_var['pages']; ?></span></td>
	</tr>
	</tbody>
</table>
<script type="text/javascript">
bind_page();
function bind_page(){
	$('.glist a').click(function(){
		var href=$(this).attr('href');
		if(href){
			get_list(href);
			return false;
		}
	});
}
function get_list(url){
	page_loading();
	$.ajax({
		url:url,
		success:function(data){
			$('#pages').html(data.pages);
			str='';
			$.each(data.list,function($n,$vo){
				str+='<tr class="tdbg">';
				str+='	<td align="center">'+$vo['id']+'</td>';
				str+='	<td align="center">'+$vo['name']+'</td>';
				str+='	<td align="center">'+$vo['ip']+'</td>';
				str+='	<td>'+$vo['url']+'</td>';
				str+='	<td align="center">'+$vo['typename']+'</td>';
				str+='	<td align="center">'+$vo['time']+'</td>';
				str+='</tr>';
			});
			cstr='';
			$.each(data.scount,function($n,$vo){
				cstr+='<span class="glist"><a href="'+$vo['url']+'"><font '+($vo['key']==data.spider ? 'color="red"':'')+'>'+$vo['name']+'('+$vo['count']+')</font></a></span>&nbsp;';
			});
			$('#rlist').html(str);
			$('#scount').html(cstr);
			$('#total').html(data.total);
			page_loading_close();
			bind_page();
		}
	});
}
</script>
<?php else: ?>
<script type="text/javascript">
showDialog();
showDialog('<?php echo $this->_var['errmsg']; ?>','notice');
</script>
<?php endif; ?>
<div class="runtime"></div>  
</div>
<?php echo $this->fetch('footer.html'); ?>
</body>
</html>