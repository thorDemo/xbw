<?php if(!defined('IN_TXTCMS')){define('IN_TXTCMS',true);} ?><?php echo $this->fetch('header.html'); ?>
<body class="body-main">
<ul id="admin_sub_title">
	<li class="sub"><a href="javascript:void(0)" onClick="selectTab('config0',this)">域名设置</a></li>
	<li class="unsub"><a href="javascript:void(0)" onClick="selectTab('config1',this)">站点模式</a></li>
</ul>
<div id="admin_right_b">
<form method="post">
<input type="hidden" name="r[id]" value="<?php echo empty($this->_var['id']) ? 0 : $this->_var['id']; ?>">
<table width="98%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableConfig" id="config0">
	<tr class="tdbg item_title">
		<td width="100" align="right"><i class="typcn typcn-cog"></i> 域名设置</td>
		<td></td>
	</tr>
	<tr>
      <td width="100" align="right" class="config_td_first">分组名称：</td>
      <td class="tdbg" colspan="4"><input name="r[name]" type="text" value="<?php echo $this->_var['name']; ?>" class="input" size="20"> <font color="#ff3300">*</font> 给本分组起个名字</td>
    </tr>
	<tr>
      <td align="right" class="config_td_first">保存文件夹：</td>
      <td class="tdbg" colspan="4"><input name="r[dirname]" type="text" value="<?php echo $this->_var['dirname']; ?>" class="input" size="20"> <font color="#ff3300">*</font> <font size="" color="red">填字母数字</font>，分组的关键词和外链将放在此文件夹</td>
    </tr>
	<tr>
	  <td align="right" class="config_td_first">所属模型：</td>
	  <td><select name="cid[]" multiple="multiple" class="multiple">
	  <?php $_from=$this->_var['classlist']; if(!is_array($_from) && !is_object($_from)){ settype($_from, 'array'); }; $this->push_vars('', 'vo');if(count($_from)):
    foreach($_from AS $this->_var['vo']):
?>
		<option value="<?php echo $this->_var['vo']['id']; ?>" <?php if(in_array ( $this->_var['vo'] [ 'id' ] , $this->_var['cids'] )): ?>selected="selected"<?php endif; ?>><?php echo $this->_var['vo']['name']; ?></option>
	  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars(); ?>
	  </select> 多选则随机分配，(可按住 CTRL 多选)</td>
	</tr>
	<tr>
	 <td align="right" class="config_td_first">域名(一行一个)：</td>
	  <td><textarea name="domain" id="text" type="text" style="height:140px;width:350px;"><?php echo $this->_var['domain']; ?></textarea></td>
	</tr>
	
</table>
<table width="98%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableConfig" id="config1" style="display:none">
	<tr class="tdbg item_title">
		<td width="100" align="right"><i class="typcn typcn-cog"></i> 站点模式</td>
		<td></td>
	</tr>
	<tr class="tdbg">
	  <td align="right" class="config_td_first">301重定向到www：</td>
	  <td><label><input type="radio" name="r[rewww]" value="1" <?php if($this->_var['rewww'] == 1): ?> checked<?php endif; ?>>全部重定向</label>
			<label><input type="radio" name="r[rewww]" value="2" <?php if($this->_var['rewww'] == 2): ?> checked<?php endif; ?>>顶级域名重定向</label>
			<label><input type="radio" name="r[rewww]" value="0" <?php if(! $this->_var['rewww']): ?> checked<?php endif; ?>>关闭</label></td>
	</tr>
	<tr class="tdbg">
	  <td align="right" class="config_td_first">站点模式：</td>
	  <td><select name="r[domain_mod]">
		<option value="1" <?php if(!$this->_var['domain_mod']||$this->_var['domain_mod'] == '1'): ?> selected="selected"<?php endif; ?>>泛域名</option>
		<option value="2" <?php if($this->_var['domain_mod'] == '2'): ?> selected="selected"<?php endif; ?>>单域名</option>
	  </select>&nbsp;&nbsp;<span>泛域名需泛解析</span></td>
	</tr>
	<tr class="tdbg">
      <td align="right" class="config_td_first">泛域名前缀：</td>
      <td><label><input type="radio" name="r[prefix_type]" value="1"<?php if($this->_var['prefix_type']): ?> checked<?php endif; ?> onclick="$('.make').show();$('.automake').hide();">自定义</label>
			<label><input type="radio" name="r[prefix_type]" value="0"<?php if(! $this->_var['prefix_type']): ?> checked<?php endif; ?> onclick="$('.automake').show();$('.make').hide();">自动生成</label>
			 <span class="tips"></span>
		</td>
    </tr>
	<tr <?php if($this->_var['prefix_type']): ?> style="display:none"<?php endif; ?> class="automake">
      <td align="right" class="config_td_first">自动生成前缀：</td>
      <td class="tdbg">生成级数：<input name="con[prefix_leve]" type="text" class="input" size="2" value="<?php echo empty($this->_var['prefix_leve']) ? 1 : $this->_var['prefix_leve']; ?>">&nbsp;级 ，随机范围：<input name="con[prefix_start]" type="text" class="input" size="2" value="<?php echo empty($this->_var['prefix_start']) ? 5 : $this->_var['prefix_start']; ?>">&nbsp;至&nbsp;<input name="con[prefix_end]" type="text" class="input" size="2" value="<?php echo empty($this->_var['prefix_end']) ? 5 : $this->_var['prefix_end']; ?>">&nbsp;位数</td>
    </tr>
	<tr <?php if(! $this->_var['prefix_type']): ?> style="display:none"<?php endif; ?> class="make">
	  <td align="right" class="config_td_first">屏蔽非自定义泛前缀访问</td>
	  <td><label><input type="radio" name="r[ban_prefix]" value="1" <?php if($this->_var['ban_prefix']): ?> checked<?php endif; ?>>开启</label>
			<label><input type="radio" name="r[ban_prefix]" value="0" <?php if(! $this->_var['ban_prefix']): ?> checked<?php endif; ?>>关闭</label>　<span>屏蔽非自定义泛前缀的域名访问</span></td>
	</tr>
	<tr <?php if(! $this->_var['prefix_type']): ?> style="display:none"<?php endif; ?> class="make">
	 <td align="right" class="config_td_first">自定义前缀：<br>(一行一个<br>注：不要超过1000)</td>
	  <td><textarea name="domain_prefix" type="text" style="height:180px;width:350px;"><?php echo $this->_var['domain_prefix']; ?></textarea></td>
	</tr>
</table>
<table width="98%" border="0" align="center" cellpadding="3" cellspacing="1">
	<tr>
	  <td width="100" align="center" class="tdbg">&nbsp;</td>
	  <td><button type="button" id="dosave" class="button">提交保存</button></td>
	</tr>
	</table>
</form>
<script type="text/javascript">
$("#dosave").click(function(){
		$(this).html('正在保存...').attr('disabled','disabled');
		$.ajax({
			type:"post",
			url:"?admin-domain-update",
			data:$("form").serialize(),
			dataType:'json',
			timeout:28000,
			global:false,
			success:function(data){
				if(data.status==1){
					showAlert('success',data.info);
					setTimeout(function(){ var win = art.dialog.open.origin;win.location.reload(); top.art.dialog.list['openifrm'].close(); },2000);
				}else{
					showAlert('error',data.info);
				}
				$(this).html('提交保存').attr('disabled',false);
			}
		});
	 return false;
	});
</script>
</body>
</html>