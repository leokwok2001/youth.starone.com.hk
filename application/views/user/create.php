
<p>&nbsp;</p>
<font size="+2" >支隊負責人-新增</font>


<?php echo validation_errors(); ?>
<?php echo form_open('user/create') ?>

<?php  $segments1 = array('user','view'); ?>

  <table width="475" border="0">
    <tr>
      <td bgcolor="#FF9900" ><font color="white">username</font></td>
      <td><input type="text" name="username" id="username" /></td>
    </tr>
    <tr>
      <td bgcolor="#FF9900" ><font color="white">password</font></td>
      <td><input type="text" name="password" id="password" /></td>
    </tr>
    
      <tr>
      <td bgcolor="#FF9900" ><font color="white">姓名</font></td>
      <td><input type="text" name="fullname" id="fullname" /></td>
    </tr>
    
    
    <tr>
      <td bgcolor="#FF9900" ><font color="white">mobile</font></td>
      <td><input type="text" name="mobile" id="mobile" /></td>
    </tr>
    
    <tr>
      <td bgcolor="#FF9900" ><font color="white">所屬支隊</font></td>
      <td>
      
      
  <select name ="club_code" id="club_code">
  <option value="海光">海光</option>
  <option value="山光">山光</option>
  <option value="聖經講座">聖經講座</option>
  <option value="九龍">九龍</option>
  <option value="大埔">大埔</option>
  <option value="太和">太和</option>
  <option value="沙田">沙田</option>
  <option value="屯門">屯門</option>
  <option value="元朗">元朗</option>
  </select>
  
       <select name ="cat" id="cat" >
         <option value="前鋒會少年團">前鋒會少年團</option>
         <option value="前鋒會幼年團">前鋒會幼年團</option>
       </select>
      
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
