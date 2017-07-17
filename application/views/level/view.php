<p>&nbsp;</p>

  <?php

$segments1 = array('level', 'create');
$segments2 = array('level', 'edit');
$segments3 = array('level', 'delete');
$club_code = $this -> session -> userdata('club_code');
$user_right = $this -> session -> userdata('user_right');
  ?>

<font size="+2" >領袖級資格</font>

 <?php

if ($user_right == 1) {
	echo "<a href='" . site_url($segments1) . "'>領袖級資格-新增</a>";
}
 ?>

<br>
<br>

<?php echo form_open('level/view'); ?>
<tr>
 <td bgcolor="#0000FF"><font size="+1" color="black">崗位</font>
 </td>
<td>
	<select name ="search_level" id="search_level">
	<option value=""></option>
	<option value="團師MG">團師MG</option>
	<option value="領袖勳章PLA">領袖勳章PLA</option>
	<option value="高級領袖勳章APLA">高級領袖勳章APLA</option>

	</select>
</td>
</tr>
<input type="submit" name="submit" value="Search" />
<?php echo form_close(); ?>

<!-- <table width="961"  border="1" > -->

<table  id="dataTable" class="display" cellspacing="0" width="100%"   >
        <thead >
	               <tr>
	    <td width="49" bgcolor="#FF9900"><font color="white">level</font></td>
	    <td width="52" bgcolor="#FF9900"><font color="white">分類</font></td>
        <td width="42" bgcolor="#FF9900"><font color="white">編號</font></td>
        <td width="440" bgcolor="#FF9900"><font color="white">內容</font></td>
	    <td width="135" bgcolor="#FF9900"><font color="white">version</font></td>
	    <td width="68" bgcolor="#FF9900"><font color="white">輸入日期</font></td>
	     <td width="129" bgcolor="#FF9900">&nbsp;</td>
            </tr>
      </thead >
      
   <tbody>
  <?php foreach ($level as $level_item): ?>
  	    <tr>
	    <td><?php echo $level_item['level'] ?></td>
	    <td><?php echo $level_item['cat'] ?></td>
        <td><?php echo $level_item['code'] ?></td>
        <td><?php echo $level_item['desc'] ?></td>
	    <td><?php echo $level_item['version'] ?></td>
	    <td><?php echo $level_item['indate'] ?></td>
	    <td> &nbsp;
         <?php  echo "<a href='" . site_url($segments2) . "/" . $level_item['code'] . "'> 修改 </a>"; ?> &nbsp;&nbsp;&nbsp;
		<?php

		if ($user_right == 1) {


		echo '  |  &nbsp;&nbsp;&nbsp;<a href="javascript: return false;" onclick="return confirmation(\''. site_url($segments3) . "/" . $level_item['seq'] . '\')"> 刪除 </a>';


		}
		?>
        </td>
 	 </tr>
<?php endforeach ?>
   </tbody>
</table>
<br>
<br>
<br>

<script type="text/javascript">
    $(document).ready(function () {
        $('#dataTable').DataTable({
            "scrollY": 350,
            "scrollCollapse": true,
            "scrollX": true
        });
        });
</script>
