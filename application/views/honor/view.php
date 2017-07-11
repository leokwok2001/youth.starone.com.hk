
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



	<style type ="text/css">

	#pagination a, #pagination strong{
		background: #e3e3e3;
		padding:4px 7px;
		text-decoration:none;
		border: 1px solid #cac9c9;
		color: #292929;
		font-size:13px;
	}
	#pagination strong, #pagination a:hover {
		font-weight: normal;
		background: #cac9c9;
	}


	</style>


	<title> </title>




</head>
<body>
	<p>&nbsp;</p>

	<?php $segments = array('member','edit'); ?>



	<?php echo form_open('honor/view') ?>
	<table width="600" border="0">


		<!--  <tr>
		<td width="50" bgcolor="#3300FF"><font color="white">種類(中文)</font></td>
		<td>
		<select name ="honor_ccat2" id="honor_ccat2" >
		<option value="榮譽証專章">榮譽証專章</option>
		<option value="榮譽証">榮譽証</option>
	</select>
</td>
</tr>
-->


<!-- <tr>
<td width="100" bgcolor="#3300FF"><font color="white">榮譽証編號</font></td>
<td><input type="text" name="honor_code2"  id="honor_code2" /></td>
</tr> -->
<tr>
	<td width="300" bgcolor="#3300FF"><font color="white">榮譽証(中文)</font></td>
	<td><input type="text" name="honor_cname2" id="honor_cname2" /></td>
</tr>
<tr>
	<td width="290" bgcolor="#3300FF"><font color="white">榮譽証(英文)</font></td>
	<td><input type="text" name="honor_ename2" id="honor_ename2"  /></td>
</tr>
</table>
<?php  echo "<a href='".site_url($segments)."/". $id ."'> 返回 </a>"; ?><input type="submit" name="submit2" value="Search" />
<?php echo '<input type="hidden" name="member_id2" value="'. $id.'" />' ?>
</form>
<p>&nbsp;</p>

<?php	echo $this->pagination->create_links(); ?>
<?php echo form_open('honor/pickhonor') ?>

<p><font size="+2" >榮譽證</font>
	<input type="submit" name="submit" value="儲存" /></p>
	<table width="1100" border="1">
		<tr>
			<td width="180" bgcolor="#3300FF"><font color="white">選取</font></td>
			<td width="180" bgcolor="#3300FF"><font color="white">少/幼年團</font></td>
			<td width="50" bgcolor="#3300FF"><font color="white">種類(中文)</font></td>
			<td width="200" bgcolor="#3300FF"><font color="white">種類(英文)</font></td>
			<td   hidden="hidden"  width="100" bgcolor="#3300FF"><font color="white">榮譽証編號</font></td>
			<td width="300" bgcolor="#3300FF"><font color="white">榮譽証(中文)</font></td>
			<td width="290" bgcolor="#3300FF"><font color="white">榮譽証(英文)</font></td>
		</tr>
		<?php foreach ($honor as $honor_item): ?>
			<tr>
				<td><?php echo '<input type="checkbox" name="check1[]" value ="'.$honor_item['honor_code'].'" />'; ?>
					<?php echo '<input type="hidden" name="member_id[]" value="'. $id.'" />' ?> </td>
					<td><?php echo '<input type="text" name="cat[]" value="'. $honor_item['cat'].'" />' ?></td>
					<td><?php echo '<input type="text" name="honor_ccat[]" value="'. $honor_item['honor_ccat'].'" />' ?></td>
					<td><?php echo '<input type="text" name="honor_ecat[]" value="'. $honor_item['honor_ecat'].'" />' ?></td>
					<td  > <?php echo '<input type="hidden" name="honor_code[]"  value="'. $honor_item['honor_code'].'" />' ?></td>
					<td><?php echo '<input type="text" name="honor_cname[]" value="'. $honor_item['honor_cname'].'" />' ?></td>
					<td><?php echo '<input type="text" name="honor_ename[]" value="'. $honor_item['honor_ename'].'" />' ?></td>
				</tr>
			<?php endforeach ?>
		</table>
	</form  >
</br>
<?php	echo $this->pagination->create_links(); ?>
</body>
</html>
