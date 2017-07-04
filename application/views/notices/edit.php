
<p>&nbsp;</p>
<font size="+2" >公告欄-內容</font>


<?php echo validation_errors(); ?>

<?php  $segments1 = array('notices','view'); ?>

<?php echo form_open('notices/create') ?>



  <table width="515"  border="0">
    <tr>
      <td width="76"  bgcolor="#FF9900" ><font color="white">日期</font></td>
      <td width="429"> <input type="text" name="indate" id="datepicker1"  value =<?php echo '"'.$notices['indate'].'"' ?> /></td>
    </tr>
    <tr>
      <td bgcolor="#FF9900" ><font color="white">少/幼年團</font></td>
      <td><select name ="cat" id="cat" >
        <option value="前鋒會少年團"  <?php if ($notices['cat'] == '前鋒會少年團' ) echo 'selected'; ?> >前鋒會少年團</option>
          <option value="前鋒會幼年團"  <?php if ($notices['cat'] == '前鋒會幼年團' ) echo 'selected'; ?>>前鋒會幼年團</option>
           <option value="前鋒會幼年團"  <?php if ($notices['cat'] == '全部' ) echo 'selected'; ?>>全部</option>
      </select></td>
    </tr>
    
      <tr>
      <td bgcolor="#FF9900" ><font color="white">事件</font></td>
      <td><select name ="event" id="event" >
        <option value="金波利大會" <?php if ($notices['event'] == '金波利大會' ) echo 'selected'; ?>>金波利大會</option>
          <option value="週年滙操" <?php if ($notices['event'] == '週年滙操' ) echo 'selected'; ?>>週年滙操</option>
          <option value="制服指引"  <?php if ($notices['event'] == '制服指引' ) echo 'selected'; ?>>制服指引</option>
          <option value="其他" <?php if ($notices['event'] == '其他' ) echo 'selected'; ?>>其他</option>
        </select></td>
    </tr>
    
    
    <tr>
      <td bgcolor="#FF9900" ><font color="white">主題</font></td>
      <td><input type="text" name="subject" id="subject" value =<?php echo '"'.$notices['subject'].'"' ?>/></td>
    </tr>
    
    <tr>
      <td height="200" bgcolor="#FF9900" ><font color="white">內容</font></td>
      <td>
      
      
      
        <textarea   name="context" id="context" cols="40" rows="15"   ><?php echo $notices['context'] ;?></textarea>
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
  </table>
</form>
</p>
  <?php 
  
  		
  if ($notices['filename']!=NULL){ 
  echo "<a href='". base_url().$notices['filename']."'> 附件:" . base_url().$notices['filename']."</a>";
  } else
  {
  	echo "沒有附件";	
  }
  
  ?>

</p>