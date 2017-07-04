
<p>&nbsp;</p>
<font size="+2" >教材-內容</font>


<?php echo validation_errors(); 




$array_level = array("忙鋒", "流螢", "飛燕", "馴鴿","團友", "團侶", "團俊", "團佐", "團使", "團彥","準團師", "團師MG", "領袖勳章PLA", "高級領袖勳章APLA","榮譽証","其他");
	
$array_cat = array("全部","前鋒會幼年團", "前鋒會少年團","其他");

	
	
?>

<?php  $segments1 = array('edu','view'); ?>

<?php echo form_open('edu/create') ?>



  <table width="607"  border="0">
    <tr>
      <td width="76"  bgcolor="#FF9900" ><font color="white">日期</font></td>
      <td width="521"> <input type="text" name="indate" id="datepicker1"  value =<?php echo '"'.$edu['indate'].'"' ?> /></td>
    </tr>
    <tr>
      <td bgcolor="#FF9900" ><font color="white">種類</font></td>
      <td><select name ="cat" id="cat" >
        <?php   	foreach ($array_cat as $key => $tmp_cat) {
			echo "<option value=\"" . $tmp_cat . "\"";
			if ($edu['cat'] == $tmp_cat) 
			{echo 'selected';
			}
			echo ">" . $tmp_cat . "</option> \n";
		}?>
      </select></td>
    </tr>
    <tr>
      <td bgcolor="#FF9900" >&nbsp;</td>
      <td><select name ="level" id="level" >
        <?php   	foreach ($array_level as $key => $tmp_level) {
			echo "<option value=\"" . $tmp_level . "\"";
			if ($edu['level'] == $tmp_level) 
			{echo 'selected';
			}
			echo ">" . $tmp_level . "</option> \n";
		}?>
      </select></td>
    </tr>
    
      <tr>
      
    </tr>
    
    <tr>
      <td height="200" bgcolor="#FF9900" ><font color="white">內容</font></td>
      <td>
      
      
      
        <textarea  name="context" id="context" cols="40" rows="15"   ><?php echo $edu['context'] ;?></textarea>
        
        
        <br />
      </td>
      
      
    </tr>

    <tr>
      <td>&nbsp;</td>
      <td>
      
       <?php echo "<a href='".site_url($segments1)."'>返回</a> |  "; ?>
	
      <!--  <input type="submit" name="submit" value="儲存" />-->
      
      </td>
    </tr>
    
    

    
  <!--     <tr>
      <td width="76"  bgcolor="#FF9900" ><font color="white">YouTube 教學影片</font></td>
      <td width="521"> 
      
      
      </td>
      
     
    </tr>-->
    
  </table>
</form>
</p>
    
    
  <?php 
  
  
  //echo $edu['filename']."</br>";
  //echo $edu['filename2']."</br>";
  //echo $edu['filename3']."</br>";
  //echo $edu['filename4']."</br>";
  //echo $edu['filename5']."</br>";
  
  if ($edu['filename']!=="uploads/") {
  		echo "<a href='". base_url().$edu['filename']."'> 教學文件1:" . $edu['filen']."</a></br>"; } else
  	{
  		//echo "<a href='". base_url()."'> 教學文件1:" . $edu['filen']."</a></br>";
  	}
  	
  	if ($edu['filename2']!=="uploads/") { 
  		echo "<a href='". base_url().$edu['filename2']."'> 教學文件2:" . $edu['filen2']."</a></br>"; } else 
  	{
  		//echo "<a href='". base_url()."'> 教學文件2:" . $edu['filen2']."</a></br>";
  	}
  		
  		
  	if ($edu['filename3']!=="uploads/") {
  		echo "<a href='". base_url().$edu['filename3']."'> 教學文件3:" . $edu['filen3']."</a></br>"; }  else 
  		{
  			echo "</br>";
  			//echo "<a href='". base_url()."'> 教學文件3:" . $edu['filen3']."</a></br>";
  		}
  	
  	
  	if ($edu['filename4']!=="uploads/") {
  		echo "<a href='". base_url().$edu['filename4']."'> 教學文件4:" . $edu['filen4']."</a></br>";
  	} else { 
  		//echo "<a href='". base_url()."'> 教學文件4:" . $edu['filen4']."</a></br>";
  		echo "</br>";
  	}
  	
  	if ($edu['filename5']!=="uploads/") {
  		echo "<a href='". base_url().$edu['filename5']."'> 教學文件5:" . $edu['filen5']."</a></br>";
  	} else {
  		//echo "<a href='". base_url()."'> 教學文件5:" . $edu['filen5']."</a></br>";
  		echo "</br>";
  	}
  
?>  
</p>
  
  <?php
  
  if ($edu['videopath']!=="")
  {
  echo "YouTube 教學影片"."</br></br>";
  echo $edu['videopath'];
  }

  
  ?>

</p>