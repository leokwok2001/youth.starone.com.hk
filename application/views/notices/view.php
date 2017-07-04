

<p>&nbsp;</p>

  <?php    
  
  $segments1 = array('notices','create'); 
  $segments2 = array('notices','delete'); 
   $segments3 = array('notices','view'); 
   $user_right=$this->session->userdata('user_right');
  
  ?>
  <font size="+2">公告欄</font> - <?php 
  	if ($user_right==1){
	  echo "<a href='".site_url($segments1)."'>新增公告</a>"; 
	}
  
  ?>

<br>
<br>
<table width="900"  border="0" >
	  <tr>
	    <td width="50" bgcolor="#0000FF" ><font color="white">日期</font></td>
	    <td width="100" bgcolor="#0000FF"><font color="white">少年/幼年團</font></td>
	    <td width="100" bgcolor="#0000FF"><font color="white">事件</font></td>
        <td width="100" bgcolor="#0000FF"><font color="white">主題</font></td> 
        <td width="30" bgcolor="#0000FF"><font color="white">&nbsp;</font></td> 
         
	        
  </tr>
  <?php    
  
  
  ?>
  <?php foreach ($notices as $notices_item): ?>

	  <tr>
	    <td><?php echo "<a href='".site_url($segments3)."/".$notices_item['id']."'>".$notices_item['indate']." </a>"; ?></td>
	    <td><?php echo "<a href='".site_url($segments3)."/".$notices_item['id']."'>".$notices_item['cat']." </a>"; ?></td>
	    <td><?php echo "<a href='".site_url($segments3)."/".$notices_item['id']."'>".$notices_item['event']." </a>"; ?></td>
	    <td> <?php echo "<a href='".site_url($segments3)."/".$notices_item['id']."'>". $notices_item['subject']." </a>"; ?> </td>
        <td> 
		
		
		<?php 
			if ($user_right==1)
			{
			//echo "<a href='".site_url($segments2)."/".$notices_item['id']."'>刪除</a>"; 
		echo '  |  &nbsp;&nbsp;&nbsp;<a href="javascript: return false;" 
  			onclick="return confirmation(\''. site_url($segments2) . "/" . $notices_item['id'] . '\')"> 刪除 </a>';
				
					
			}			
			
			?>
        
        
        </td>
 	 </tr>
<?php endforeach ?>


				
		
</table>
<br>
<br>
<br>


<font size="+2">行事曆</font> 
<?php echo $calendar;?> 