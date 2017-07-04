<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/themes/hot-sneaks/jquery-ui.css" rel="stylesheet">
 <!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
 
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> 
 
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
  <style>
    article,aside,figure,figcaption,footer,header,hgroup,menu,nav,section {display:block;}
    body {font: 70% "Trebuchet MS", sans-serif; margin: 50px;}
  </style>


<style type ="text/css">
	.calendar {
		font-family: Arial; font-size:12px;
	}
	table.calendar{
		
		margin-left:0px; border-collapse: collapse; 
	}
	.calendar  .days td {
		width: 80px;height: 80px; padding: 40px;
		border: 1px solid #999;
		vertical-align: top;
		background-color: #DEF;
		
	}
	
		.calendar .days td:hover {
			background-color: #FFF;
		}
		.calendar .highlight {
			font-weight: bold; color: #00F;
		}
		.content{
			color:#F00;
		}


	
</style>	



</head>
<body>
<p>&nbsp;</p>


 <?php	$homeurl = array('member_level', 'view');   
 

 $url1 =   site_url($homeurl) . "/" . urldecode($member_id) . "/". "準團師";
 
 $url2 =   site_url($homeurl) . "/" . urldecode($member_id) . "/". "團師MG";
 $url3 =   site_url($homeurl) . "/" . urldecode($member_id) . "/". "領袖勳章PLA";
 ?>
     


&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php echo "(".$member_date['date1'].")"; ?> <?php echo "(".$member_date['date2'].")"; ?>  <?php echo "(".$member_date['date3'].")"; ?>
</br>

會員升級歷史- | <a href ="<?php echo $url1; ?>" >團師MG </a> |  <a href ="<?php echo $url2; ?>" >領袖勳章PLA</a> | <a href ="<?php echo $url3; ?>" >高級領袖勳章APLA</a> 
<p>&nbsp;</p>
<?php echo form_open('member_level/update') ?>

<?php echo urldecode($level);?> 


 <input type="hidden" name="member_id" value="<?php echo urldecode($member_id) ?>" />
 <input type="hidden" name="oldlevel" value="<?php echo urldecode($oldlevel) ?>" />
  <input type="hidden" name="level" value="<?php echo urldecode($level) ?>" />
       <input type="submit" name="submit" value="儲存升級資格" />
	<table width="961"  border="1"  style="font-size:small">
	  <tr>
		
       <td width="30" bgcolor="#FF9900"><font  color="white">合格</font></td>
	    <td width="60" bgcolor="#FF9900"><font  color="white">分類</font></td>
        <td width="42" bgcolor="#FF9900"><font  color="white">編號</font></td>
        <td width="500" bgcolor="#FF9900"><font  color="white">內容</font></td>
	    <td width="120" bgcolor="#FF9900"><font  color="white">version</font></td>
	    <td width="68" bgcolor="#FF9900"><font  color="white">輸入日期</font></td>
     </tr>
  <?php 
  
  $var1='';
  $i=1;
  $j=0;
  $x=0;
  foreach ($member_level as $key=>$member_level_item): ?>
  	
    <?php  if ( $var1 !== $member_level_item['code'] ){?>
    <?php $j++;?>
      <tr>
      
        <td ><input type="checkbox" name="isfinish[]" value="<?php echo $member_level_item['seq'] ?>" 
        
         <?php if ($member_level_item['isfinish']==1) 
		   {echo "checked" ;
		   $x++;} else {  echo " " ;}
		   ?>
         />
         <input type="hidden" name="seq[]" value="<?php echo $member_level_item['seq'] ?>" /></td>
	    <td><?php echo $member_level_item['cat'] ?></td>
        <td><?php echo $member_level_item['code'] ?></td>
        <td><?php echo $member_level_item['desc'] ?></td>
	    <td><?php echo $member_level_item['version'] ?></td>
	    <td>
		<input type="text" name="indate[]" id="<?php echo 'datepicker'.$i ?>" value="<?php echo  $member_level_item['indate']?>" />
		</td>
 	 </tr>
     <?php  } ?>
     
        
     <?php if (!is_null( $member_level_item['code2'])) { ?>
      <?php $i=$i+1;?>
     <tr>
        <td ></td>
        <td ></td>
	
        <td bgcolor="#0000FF" align="right">
          <input type="checkbox"  name="isfinish2[]" value="<?php echo $member_level_item['seq2'] ?>" 
             <?php if ($member_level_item['isfinish2']==1) 
		   {echo "checked" ;} else {  echo " " ;}
		   ?>
          
          
          />
          <input type="hidden" name="seq2[]" value="<?php echo $member_level_item['seq2'] ?>" /></td>
          
        <td bgcolor="#0000FF"><font  color="white"><?php echo $member_level_item['desc2'] ?></font></td>
	    <td bgcolor="#0000FF"><font  color="white">
			
		<input type="text" name="indate2[]" id="<?php echo 'datepicker'.$i ?>" value="<?php echo $member_level_item['in_date2'] ?>" />
        
        </font></td>
	    <td   ></td>
 	 </tr>
     <?php }
	  $var1 = $member_level_item['code'];
	 ?>
     
     
     <?php $i=$i+1;
	 	
	 ?>
   
<?php endforeach ?>
</table>

<?php echo urldecode($level);?> 
   <input type="submit" name="submit" value="儲存升級資格" />
 </form>
 

 <font size="+2" color="#0000FF">
 
 
 	<?php 
	
	if ($x==$j and $x!=0 and $j!=0)
	{echo   '可以升級!!';	} 
	else {
		if ($j==0){
			
				
			} else
		{	
		echo '課程完成進度:'.$x.'/'.$j." (" .round((($x/$j)*100),2).'%)' ;
		}
	}
	
	?>
 
 
 </font>
</br>
會員升級歷史- | 
<a href ="<?php echo $url1; ?>" >團師MG </a> |  
<a href ="<?php echo $url2; ?>" >領袖勳章PLA</a> | 
<a href ="<?php echo $url3; ?>" >高級領袖勳章APLA</a> |


<br>
<br>
<br>

  
