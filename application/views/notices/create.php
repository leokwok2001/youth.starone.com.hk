
<p>&nbsp;</p>
<font size="+2" >公告欄-新增</font>


<?php echo validation_errors(); ?>

<?php  $segments1 = array('notices','view'); ?>

<?php 

if (isset($error)) {
	echo $error; 
}

?>

<?php echo form_open_multipart('notices/create');?>

  <table width="515"  border="0">
    <tr>
      <td width="76"  bgcolor="#FF9900" ><font color="white">日期</font></td>
      <td width="429"> <input type="text" name="indate" id="datepicker1"  /></td>
    </tr>
    <tr>
      <td bgcolor="#FF9900" ><font color="white">少/幼年團</font></td>
      <td><select name ="cat" id="cat" >
        <option value="前鋒會少年團">前鋒會少年團</option>
          <option value="前鋒會幼年團">前鋒會幼年團</option>
          <option value="全部">全部</option>
      </select></td>
    </tr>
    
      <tr>
      <td bgcolor="#FF9900" ><font color="white">事件</font></td>
      <td><select name ="event" id="event" >
        <option value="金波利大會">金波利大會</option>
          <option value="週年滙操">週年滙操</option>
          <option value="制服指引">制服指引</option>
          <option value="其他">其他</option>
        </select></td>
    </tr>
    
    
    <tr>
      <td bgcolor="#FF9900" ><font color="white">主題</font></td>
      <td><input type="text" name="subject" id="subject" /></td>
    </tr>
    
     <tr>
      <td height="200" bgcolor="#FF9900" ><font color="white">內容</font></td>
      <td>
        <textarea name="context" id="context" cols="40" rows="15"></textarea>
      </td>
      
      
    </tr>
    
    <tr>
      <td  bgcolor="#FF9900" ><font color="white">附件[*.Pdf]</font></td>
      <td>
       <input type="file" name="userfile" id="userfile" size="50" />
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