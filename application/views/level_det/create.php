
<p>&nbsp;</p>
<font size="+2" >Level_detail-明細項目</font>


<?php echo validation_errors(); ?>
<?php echo form_open('level_det/create/'.$code.'/'.$level) ?>

<?php  $segments1 = array('level','view'); ?>
<?php $segments2 = array('level', 'edit'); ?>
  <table width="396" border="0">
    <tr>
      <td width="36" bgcolor="#FF9900" ><font color="white">code</font></td>
      <td width="1397"><input type="text" name="code" id="code"  value =<?php echo '"'.$code.'"' ?> /></td>
    </tr>
    
        <tr>
      <td bgcolor="#FF9900" ><font color="white">level</font></td>
      <td><input name="level" type="text" id="level" size="50"   value =<?php echo '"'.$level.'"' ?>  /></td>
    </tr>
    
    <tr>
      <td bgcolor="#FF9900" ><font color="white">desc</font></td>
      <td><input name="desc" type="text" id="desc" size="50" maxlength="100" /></td>
    </tr>
    
     
    <tr>
      <td bgcolor="#FF9900" ><font color="white">indate</font></td>
      <td><input type="text" name="in_date" id="datepicker1" /></td>
      

      
     </tr> 
  

    <tr>
      <td>&nbsp;</td>
      <td>
      


  <?php  echo "<a href='" . site_url($segments2) . "/" . $code . "'> 返回 </a>"; ?>
        <input type="submit" name="submit" value="儲存" />
      </td>
    </tr>
  </table>
</form>
