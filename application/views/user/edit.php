
<p>&nbsp;</p>
<font size="+2" >支隊負責人-修改</font>


<?php 	$club_code=$this->session->userdata('club_code');
         	$user_right=$this->session->userdata('user_right');  
			$cat=$this->session->userdata('cat'); ?>

<?php echo validation_errors(); ?>
<?php echo form_open('user/update') 

		

?>

<?php  $segments1 = array('user','view'); ?>

  <table width="475" border="0">
    <tr>
      <td bgcolor="#FF9900" ><font color="white">username</font></td>
      <td><input type="text" name="username" id="username" readonly="readonly" value =<?php echo '"'.$user['username'].'"' ;?>/></td>
    </tr>
    <tr>
      <td bgcolor="#FF9900" ><font color="white">password</font></td>
      <td><input type="text" name="password" id="password" value =<?php echo '"'.$user['password'].'"' ;?>/></td>
    </tr>
    
      <tr>
      <td bgcolor="#FF9900" ><font color="white">姓名</font></td>
      <td><input type="text" name="fullname" id="fullname" value =<?php echo '"'.$user['fullname'].'"' ;?>/></td>
    </tr>
    
    
    <tr>
      <td bgcolor="#FF9900" ><font color="white">mobile</font></td>
      <td><input type="text" name="mobile" id="mobile" value =<?php echo '"'.$user['mobile'].'"' ;?>/></td>
    </tr>
    
    <tr>
      <td bgcolor="#FF9900" ><font color="white">所屬支隊</font></td>
      <td>
      
 <?php   	
  
if ( $user_right==1 )
 {   
?>
      
  <select name ="club_code"   id="club_code" >
  <option value="海光" <?php if ($user['club_code'] == '海光' ) echo 'selected'; ?> >海光</option>
  <option value="山光" <?php if ($user['club_code'] == '山光' ) echo 'selected'; ?> >山光</option>
  <option value="聖經講座" <?php if ($user['club_code'] == '聖經講座' ) echo 'selected'; ?>>聖經講座</option>
  <option value="九龍" <?php if ($user['club_code'] == '九龍' ) echo 'selected'; ?>>九龍</option>
  <option value="大埔" <?php if ($user['club_code'] == '大埔' ) echo 'selected'; ?>>大埔</option>
  <option value="太和" <?php if ($user['club_code'] == '太和' ) echo 'selected'; ?> >太和</option>
  <option value="沙田"  <?php if ($user['club_code'] == '沙田' ) echo 'selected'; ?> >沙田</option>
  <option value="屯門" <?php if ($user['club_code'] == '屯門' ) echo 'selected'; ?>>屯門</option>
  <option value="元朗"   <?php if ($user['club_code'] == '元朗' ) echo 'selected'; ?>>元朗</option>
   <option value="港澳區會"   <?php if ($user['club_code'] == '港澳區會' ) echo 'selected'; ?>>港澳區會</option>
  </select>
  
  
  <select name ="cat" id="cat"  >
   <option value="前鋒會少年團" <?php if ($user['cat'] == '前鋒會少年團' ) echo 'selected'; ?>>前鋒會少年團</option>
   <option value="前鋒會幼年團"  <?php if ($user['cat'] == '前鋒會幼年團' ) echo 'selected'; ?>>前鋒會幼年團</option>
   <option value="港澳區會"   <?php if ($user['cat'] == '港澳區會' ) echo 'selected'; ?>>港澳區會</option>
  </select>
 <?php } elseif  ( $user_right==0) { ?>
  
   <?php echo  "<select name =\"club_code\"   id=\"club_code\" >";  ?>
 <?php echo "<option value=\"".$user['club_code']."\"  selected> ".$user['club_code']."</option>";?>
   </select>
    
    <select name ="cat" id="cat"  >
 <?php echo "<option value=\"" .$user['cat']. "\"   'selected' >" .$user['cat']."</option>"; ?>
    </select>

<?php } else {?> 
    
 <?php echo  "<select name =\"club_code\"   id=\"club_code\" >";  ?>
 <?php echo "<option value=\"".$club_code."\"  selected> ".$club_code."</option>";?>
   </select>
    
    <select name ="cat" id="cat"  >
 <?php echo "<option value=\"" .$cat. "\"   'selected' >" .$cat."</option>"; ?>
    </select>
    
    
  <?php } ?> 
    
    
    
    
      </td>
      
      
    </tr>

    <tr>
      <td>&nbsp;</td>
      <td>
      
       <?php echo "<a href='".site_url($segments1)."'>返回</a> |  "; ?>

	<?php if ($club_code=="港澳區會" and $user_right==0) { ?>

	<?php } else {?>
        <input type="submit" name="submit" value="儲存" />
	<?php } ?>
      </td>
    </tr>
  </table>
</form>
