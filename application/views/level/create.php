
<p>&nbsp;</p>
<font size="+2" >領袖級資格-新增項目</font>


<?php echo validation_errors(); ?>
<?php echo form_open('level/create') ?>

<?php  $segments1 = array('level','view'); ?>

  <table width="475" border="0">
    <tr>
      <td bgcolor="#FF9900" ><font color="white">Level</font></td>
      <td>
      
      <!--<input type="text" name="level" id="level" />-->
      
      
      	<select name ="level" id="level">
	<option value=""></option> 
	<option value="團師MG">團師MG</option> 
	<option value="領袖勳章PLA">領袖勳章PLA</option>
	<option value="高級領袖勳章APLA">高級領袖勳章APLA</option>
	
	</select>
      
      </td>
    </tr>
    <tr>
      <td bgcolor="#FF9900" ><font color="white">分類</font></td>
      <td>
      
           <select name ="cat" id="cat">
    <option value=""></option>  
	<option value="基本資格">基本資格</option> 
	<option value="健康生活">健康生活</option> 
	
    <option value="屬靈成長">屬靈成長</option> 
	<option value="技能發展">技能發展</option>
	<option value="兒童成長">兒童成長</option>
			<option value="領袖發展">領袖發展</option>
        	<option value="個人成長">個人成長</option>
            <option value="訓練講座">訓練講座</option>

	</select>
      
      
      
      
      </td>
    </tr>
    
      <tr>
      <td bgcolor="#FF9900" ><font color="white">編號</font></td>
      <td><input type="text" name="code" id="code" /></td>
    </tr>
    
    
    <tr>
      <td bgcolor="#FF9900" ><font color="white">日期</font></td>
      <td><input type="text" name="indate" id="datepicker1" /></td>
    </tr>
    
    <tr>
      <td bgcolor="#FF9900" ><font color="white">Version</font></td>
      <td><input type="text" name="version" id="version" /></td>
     </tr> 
      
    <tr>
      <td bgcolor="#FF9900" ><font color="white">內容</font></td>
      <td><input name="desc" type="text" id="desc" size="100" /></td>
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
