
<p>&nbsp;</p>
<font size="+2" >教材-新增</font>


<?php echo validation_errors(); 





$array_level = array("忙鋒", "流螢", "飛燕", "馴鴿","團友", "團侶", "團俊", "團佐", "團使", "團彥","準團師", "團師MG", "領袖勳章PLA", "高級領袖勳章APLA","榮譽証","其他");
	
$array_cat = array("前鋒會幼年團", "前鋒會少年團","其他");



?>

<?php  $segments1 = array('edu','view'); ?>

<?php 

if (isset($error)) {
	echo $error; 
}

?>

<?php echo form_open_multipart('edu/create');?>

  <table width="740"  border="0">
    <tr>
      <td width="76"  bgcolor="#FF9900" ><font color="white">日期</font></td>
      <td width="429"> <input type="text" name="indate" id="datepicker1"  /></td>
    </tr>
    <tr>
      <td bgcolor="#FF9900" ><font color="white">種類</font></td>
      <td><select name ="cat" id="cat" >   
   
   <?php
	foreach ($array_cat as $key => $tmp_cat) {
			echo "<option value=\"" . $tmp_cat . "\"";
			
			echo ">" . $tmp_cat . "</option> \n";
		}
   ?>
      </select></td>
    </tr>
    
    
    <tr>
      <td bgcolor="#FF9900" >&nbsp;</td>
      <td><select name ="level" id="level" >
    
	
	<?php
	foreach ($array_level as $key => $tmp_level) {
			echo "<option value=\"" . $tmp_level . "\"";			
			echo ">" . $tmp_level . "</option> \n";
		}
   ?>
   
      </select></td>
    </tr>
    <tr>
      <td bgcolor="#FF9900" ><font color="white">主題</font></td>
      <td><input type="text" name="subject" id="subject" /></td>
    </tr>
    
     <tr>
      <td height="200" bgcolor="#FF9900" ><font color="white">內容</font></td>
      <td>
        <textarea name="context" id="context" cols="40" rows="15" style="padding-left: 4px;"></textarea>
      </td>
      
      
    </tr>
    
       <tr>
      <td width="200"  bgcolor="#FF9900" ><font color="white">YouTube 教學影片</font></td>
      <td width="600"> <input type="text" name="videopath"     style="width: 606px; "/></td>
    </tr>
    
    <tr>
      <td  bgcolor="#FF9900" ><font color="white">附件1[*.Pdf]</font></td>
      <td>
 		 	<input type="text" name="filen[]"  />
  			<input type="file" multiple name="userfile[]"  size="20" />
      </td>   
    </tr>

    <tr>
      <td  bgcolor="#FF9900" ><font color="white">附件2[*.Pdf]</font></td>
      <td>
  
 		 	<input type="text" name="filen[]"  />
  			<input type="file" multiple name="userfile[]"  size="20" />

      </td>  
    </tr>
    
   <tr>
      <td  bgcolor="#FF9900" ><font color="white">附件3[*.Pdf]</font></td>
      <td>
 		 	<input type="text" name="filen[]"  />
  			<input type="file" multiple name="userfile[]"  size="20" />
      </td>   
    </tr>
    
    <tr>
      <td  bgcolor="#FF9900" ><font color="white">附件4[*.Pdf]</font></td>
      <td>
 		 	<input type="text" name="filen[]"  />
  			<input type="file" multiple name="userfile[]"  size="20" />
      </td>   
    </tr>
    <tr>
      <td  bgcolor="#FF9900" ><font color="white">附件5[*.Pdf]</font></td>
      <td>
 		 	<input type="text" name="filen[]"  />
  			<input type="file" multiple name="userfile[]"  size="20" />
      </td>   
    </tr>
    

    
    
    
    
    
    
    
    <tr>
      <td>&nbsp;</td>
      <td>
      
       <?php echo "<a href='".site_url($segments1)."'>返回</a> |  "; ?>

        <input type="submit" name="submit" value="儲存" />
      </td>
    </tr>
  </table>
</form>