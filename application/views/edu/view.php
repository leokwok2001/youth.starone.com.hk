

<p>&nbsp;</p>

  <?php    
  
  $segments1 = array('edu','create'); 
  $segments2 = array('edu','delete'); 
   $segments3 = array('edu','view'); 
   $user_right=$this->session->userdata('user_right');
   $array_level = array("","忙鋒", "流螢", "飛燕", "馴鴿","團友", "團侶", "團俊", "團佐", "團使", "團彥","準團師", "團師MG", "領袖勳章PLA", "高級領袖勳章APLA","榮譽証","其他");
   $array_cat = array("","前鋒會幼年團", "前鋒會少年團","其他");
    
  
  ?>
  
  <?php echo form_open('edu/view'); ?>
<table width="600" border="0">
  <tr>
	<td width="60" bgcolor="#3300FF"><font color="white">分類)</font></td>
    <td>
    
    

    
       <select name ="search_cat" id="search_cat" >   
   
   <?php
	foreach ($array_cat as $key => $tmp_cat) {
			echo "<option value=\"" . $tmp_cat . "\"";
			
			echo ">" . $tmp_cat . "</option> \n";
		}
   ?>
      </select>
    
    
    </td>
  </tr>
  <tr>
    <td width="60" bgcolor="#3300FF"><font color="white">Level)</font></td>
    <td>
    
  
    <select name ="search_level" id="search_level" >
   	
	<?php
	foreach ($array_level as $key => $tmp_level) {
			echo "<option value=\"" . $tmp_level . "\"";			
			echo ">" . $tmp_level . "</option> \n";
		}
   ?>
   
      </select>
    
    </td>
  </tr>

</table>
  



<input type="submit" name="submit2" value="Search" />
</form>
  
  
  
  
  <font size="+2">教材</font> - <?php 
  	if ($user_right==1){
	  echo "<a href='".site_url($segments1)."'>新增教材</a>"; 
	}
  
  ?>


<table width="900"  border="0" >
	  <tr>
	    <td width="50" bgcolor="#0000FF" ><font color="white">日期</font></td>
	    <td width="100" bgcolor="#0000FF"><font color="white">分類</font></td>
	    <td width="100" bgcolor="#0000FF"><font color="white">主題</font></td> 
        <td width="30" bgcolor="#0000FF"><font color="white">&nbsp;</font></td> 
         
	        
  </tr>
  <?php    
  
  
  ?>
  <?php foreach ($edu as $edu_item): ?>

	  <tr>
	    <td><?php echo "<a href='".site_url($segments3)."/".$edu_item['id']."'>".$edu_item['indate']." </a>"; ?></td>
	    <td><?php echo "<a href='".site_url($segments3)."/".$edu_item['id']."'>".$edu_item['cat']."-".$edu_item['level']." </a>"; ?></td>
	    <td> <?php echo "<a href='".site_url($segments3)."/".$edu_item['id']."'>". $edu_item['subject']." </a>"; ?> </td>
        <td> 
		
		
		<?php 
			if ($user_right==1)
			{
				
			//echo "<a href='".site_url($segments2)."/".$edu_item['id']."'>刪除</a>"; }
	echo '  |  &nbsp;&nbsp;&nbsp;<a href="javascript: return false;" onclick="return confirmation(\''. site_url($segments2) . "/" . $edu_item['id'] . '\')"> 刪除 </a>';}
				
			
			
			
			?>
        
        
        </td>
 	 </tr>
<?php endforeach ?>


				
		
</table>
<br>
<br>
<br>


