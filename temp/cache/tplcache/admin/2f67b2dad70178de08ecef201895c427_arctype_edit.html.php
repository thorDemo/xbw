<?php if(!defined('IN_TXTCMS')){define('IN_TXTCMS',true);} ?><?php echo $this->fetch('header.html'); ?>
<body class="body-main">
<ul id="admin_sub_title">
	<li class="unsub"><a href="<?php echo url('admin/arctype/index'); ?>">模型管理</a></li>
	<li class="sub"><a><?php if($this->_var['id'] == 0): ?>添加<?php else: ?>编辑<?php endif; ?>模型</a></li>
	<li class="unsub"><a href="javascript:" onclick="nodeImport(0);"><i class="typcn typcn-download" style="font-size:15px;"></i> 导入模型</a></li>
</ul>
<script type="text/javascript">
function nodeImport(id){
	art.dialog.open('?admin-arctype-import-id-'+id,{lock:true,opacity:0.1,title:'导入模型',id:'nodeTestifrm',width:'700px',height:'400px'});
}
</script>
<style type="text/css">
.hightline{
  background: #FEFCF1;
}
.hightline .topline{
  border-top:1px solid #fdeedb;
}
.hightline .bottomline{
  border-bottom:1px solid #fdeedb;
}
</style>
<div id="admin_right_b">
  <form method="post">
    <table width="98%" border="0" align="center" cellpadding="5" cellspacing="0" class="tableConfig">
	<tr class="item_title">
		<td colspan="5"><i class="typcn typcn-cog"></i> 基本设置</td>
	</tr>
	<tr>
      <td width="120" align="right" class="config_td_first">模型名称：</td>
	  <input type="hidden" name="con[id]" value="<?php echo empty($this->_var['id']) ? 0 : $this->_var['id']; ?>">
      <td class="tdbg" colspan="4"><input name="con[name]" type="text" value="<?php echo $this->_var['name']; ?>" class="input" size="30"> <font color="#ff3300">*</font></td>
    </tr>

	<tr>
      <td width="120" align="right" class="config_td_first">文件夹名称：</td>
      <td class="tdbg" colspan="4"><input name="con[dirname]" type="text" <?php if($this->_var['id'] > 0): ?> disabled<?php endif; ?> value="<?php echo $this->_var['dirname']; ?>" class="input" size="30"><font color="#ff3300">*</font> 填写文件夹名称，数字和字母，不要有中文和符号，不要有重复，<font color="red">添加后不可修改</font></td>
    </tr>
	<tr class="item_title">
		<td colspan="5"><i class="typcn typcn-cog"></i> 模板URL规则列表 ( <font color="red" style="font-weight:500">注：系统默认的模板为 首页：index、列表：list、内容：show</font> )</td>
	</tr>
	<tbody id="tbody_urlrules">
	<tr class="headtr" align="center">
	  <td width="50">ID</td>
	  <td width="100">模板文件</td>
	  <td width="300">url规则(每行一条)</td>
	  <td width="60">操作</td>
	  <td>&nbsp;</td>
	</tr>
	<tr align="center">
		<td align="center">1</td>
		<td><input type="text" value="index" class="input" style="width:100px;" disabled></td>
		<td><input type="text" value="/" class="input" style="width:350px;font-size:13px;" disabled></td>
		<td  align="center"><font color="red">系统</font></td>
		<td align="center">&nbsp;</td>
	</tr>
	<?php $i=2; ?>
	<?php if($this->_var['urlrules']): ?>
	<?php $_from=$this->_var['urlrules']; if(!is_array($_from) && !is_object($_from)){ settype($_from, 'array'); }; $this->push_vars('k', 'vo');if(count($_from)):
    foreach($_from AS $this->_var['k'] => $this->_var['vo']):
?>
	<tr align="center" class="mtr">
		<td align="center"><?php echo $i; ?><input type="hidden" name="system[]" value="<?php echo $this->_var['vo']['system']; ?>" /></td>
		<td><input name="tplfile[]" type="text" value="<?php echo $this->_var['vo']['tplfile']; ?>" class="input" style="width:100px;<?php if($this->_var['vo']['system']): ?>background:#eee;<?php endif; ?>" <?php if($this->_var['vo']['system']): ?>readonly<?php endif; ?>></td>
		<td><textarea name="urlrules[]" class="textarea" style="width:350px;height:100px;"><?php echo htmlspecialchars($this->_var['vo']['rules']); ?></textarea></td>
		<td  align="center"><?php if($this->_var['vo']['system']): ?><font color="red">系统</font><?php else: ?><a href="javascript:" onClick="if(confirm('确定删除吗?')){  deltr(this);}">删除</a><?php endif; ?></td>
		<td align="center">&nbsp;</td>
	</tr>
	<?php $i++; ?>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars(); ?>
	<?php endif; ?>
	</tbody>
	<tr class="mtr" id="addtr">
		<td align="center">-</td>
		<td><input name="tplfile[]" type="text" value="" class="input" style="width:100px"></td>
		<td><textarea name="urlrules[]" class="textarea" style="width:350px;height:100px;"></textarea></td>
		<td align="center"><button type="button" class="button" onclick="addtpl();">+ 添加一项</button></td>
		<td align="center">&nbsp;</td>
	</tr>
	
	<tr>
		  <td>&nbsp;</td>
		  <td colspan="4"><button type="submit" id="dosave" class="button">提交保存</button> <button type="button" onClick="history.go(-1)" class="button">返回</button></td>
		</tr>
	<tr>
		<td colspan="5"><div class="divtips" style="font-size:13px;line-height:25px">
			<p>URL规则设置说明：</p>
			<p>1. 模板文件不用加.html</p>
			<p>2. url规则标签： {数字}、{字母}、{数字字母}、{日期}、{年}、{月}、{日}、{时}、{分}、{秒}，非时间的标签后面加数字是位数，如： {数字8}表示8个数字
			<p>3. 固定标签：{id}，<font color="red">添加此标签可实现描文本与标题对应，限列表和文章模板</font></p>
			<p>4. 每行一条url规则</p>
			<p>5. 前台的模板标签调用中指定模板文件，即可获取该模板url，具体查看《<a href="http://www.xbwseo.com/spiderpool/universal-spiderpool-template-tags.html" target="_blank">小霸王蜘蛛池模板标签编写指南</a>》</p>
			</div></td>
	</tr>
	</table>
 </form>
<script type="text/javascript">
var trnum=$("#tbody_urlrules tr").prevAll("tr").length;
function deltr(elem){
	$(elem).parents(".mtr").remove();
}
function addtpl(){
	trnum++;
	var id = trnum;
	var input='<tr class="mtr" align="center" bgcolor="#ffffff">';
	input+='<td align="center">'+id+'</td>';
	input+='<td><input name="tplfile[]" type="text" value="" class="input" style="width:100px"></td>';
	input+='<td><textarea name="urlrules[]" class="textarea" style="width:350px;height:100px;"></textarea></td>';
	input+='<td align="center"><a href="javascript:" onclick="deltr(this);">删除</a></td>';
	input+='<td align="center">&nbsp;</td>';
	input+='</tr>';
	$("#tbody_urlrules").append(input);
}
$("#dosave").click(function(){
		//editor.sync('#body');
		showDialog();
		$.ajax({
			type:"post",
			url:"<?php echo url('admin/arctype/update'); ?>",
			data:$("form").serialize(),
			dataType:'json',
			timeout:28000,
			global:false,
			success:function(data){
				if(data.status==1){
					showAlert('success','恭喜你，修改成功',"<?php echo url('admin/arctype/index'); ?>");
				}else{
					showAlert('error',data.info);
				}
			}
		});
	 return false;
	});
</script>
<div class="runtime"></div>  
</div>
</body>
</html>