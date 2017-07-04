
<p>&nbsp;</p>
<font size="+2" >領袖級資格-編輯</font>


<?php echo validation_errors(); ?>

<?php  $segments1 = array('level','view'); ?>
<?php  $segments2= array('level','leveldetDelete'); ?>
<?php  $segments3= array('level_det','create'); 

$array_cat = array("基本資格","健康生活" ,"屬靈成長","技能發展","兒童成長","領袖發展","個人成長","訓練講座");

?>

<?php	$user_right = $this -> session -> userdata('user_right'); ?>
<?php echo form_open('level/update') ?>
  <table width="515"  border="0">
    <tr>
      <td  bgcolor="#FF9900" ><font color="white">seq</font></td>
      <td align="left">
             <input type="text" name="seq" id="seq"  value =<?php echo '"'.$level['seq'].'"' ?> />
      </td>
    </tr>
    <tr>
      <td width="76"  bgcolor="#FF9900" ><font color="white">Level</font></td>
      <td width="429" align="left"> 

   	<select name ="level" id="level">
	<option value=""></option> 
    
	<option value="團師MG"
    <?php
	if ($level['level'] == '團師MG')
		echo 'selected';
 	?>>團師MG</option> 
	
    <option value="領袖勳章PLA"
    <?php
	if ($level['level'] == '領袖勳章PLA')
		echo 'selected';
 	?>
    >領袖勳章PLA</option>
    
	<option value="高級領袖勳章APLA"
    <?php
	if ($level['level'] == '高級領袖勳章APLA')
		echo 'selected';
 	?>
    >高級領袖勳章APLA</option>
	</select>
      
      
    </td>
    </tr>
    <tr>
      <td bgcolor="#FF9900" ><font color="white">分類</font></td>
      <td align="left">
  
  

    <select name ="cat" id="cat" >
      <?php

	
			foreach ($array_cat as $key => $tmp_cat) {
				echo " <option value=\"" . $tmp_cat . "\"";
				if ($level['cat'] == $tmp_cat) {echo 'selected';
				}
				echo ">" . $tmp_cat . "</option> \n";
			}
	
	?>
	</select> 
     
     
     
     
     
     
      
      </td>
    </tr>
    
      <tr>
      <td bgcolor="#FF9900" ><font color="white">編號</font></td>
      <td align="left">
      <input type="text" name="code" id="code"  value =<?php echo '"'.$level['code'].'"' ?> />
      
      </td>
    </tr>
    
    
    <tr>
        <td bgcolor="#FF9900" ><font color="white">日期</font></td>
        <td align="left"><input type="text" name="indate" id="datepicker1"  value =<?php echo '"'.$level['indate'].'"' ?> /></td>
    </tr>
    
    <tr>
      <td bgcolor="#FF9900" ><font color="white">Version</font></td>
      <td align="left"><input type="text" name="version" id="version"
       value =<?php echo '"'.$level['version'].'"' ?>/></td>
    </tr>
    
    <tr>
      <td  bgcolor="#FF9900" ><font color="white">內容</font></td>
      <td align="left"><input  name="desc" type="text" id="desc"    
      value =<?php echo '"'.trim($level['desc']).'"' ?> size="100"/>
      </td>
      
      
    </tr>

    <tr>
      <td>&nbsp;</td>
      <td align="left">
      
       <?php echo "<a href='".site_url($segments1)."'>返回</a> |  "; ?>

 <input type="submit" name="submit" value="儲存" />
      
      </td>
    </tr>
  </table>
</form  >
<p>&nbsp;</p>
  <p>

    <font size="+2">領袖級資格-明細</font> 
<?php
	echo "<button onclick=\"window.location.href='" . site_url($segments3) . "/" . $level['code'] . "/". $level['level']."'\">新增</button>";
?>

    <br />
    <br />
  </p>
  <table width="860"  border="1" >
    <tr>
      <td width="52" bgcolor="#0000FF" ><font color="white">seq</font></td>
     
      <td width="506" bgcolor="#0000FF"><font color="white">desc</font></td>
      <td width="99" bgcolor="#0000FF"><font color="white">in_date</font></td>
      <td width="185" bgcolor="#0000FF"><font color="white">&nbsp;</font></td>
    </tr>
    <?php    
  
  ?>

    <?php foreach ($level_det as $level_det_item): ?>
    <tr>
      <td><?php echo $level_det_item['seq']; ?></td>
      <td><?php echo $level_det_item['desc']; ?></td>
      
      <td><?php echo $level_det_item['in_date']; ?></td>
      <td><?php 
			if ($user_right==1)
			{
			echo "<a href='".site_url($segments2)."/".$level['code']."/".$level_det_item['seq']."'>刪除</a>"; }?></td>
    </tr>
    <?php endforeach ?>
  </table>
  <br />
