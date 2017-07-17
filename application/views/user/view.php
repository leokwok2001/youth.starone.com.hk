

<p>&nbsp;</p>

  <?php

  $segments1 = array('user','create');
  $segments2 = array('user','edit');
  $segments3 = array('user','delete');
  $club_code=$this->session->userdata('club_code');
  $user_right=$this->session->userdata('user_right');
  ?>


<font size="+2" >支隊負責人資料</font> -


 <?php


 if ($user_right==1) {
 echo "<a href='".site_url($segments1)."'>新增負責人</a>";
 }


 ?>

<br>
<br>
<table  id="dataTable" class="display" cellspacing="0" width="100%"   >
        <thead >
	  <tr>

	    <td width="84" bgcolor="#FF9900"><font color="white">username</font></td>
	    <td width="81" bgcolor="#FF9900"><font color="white">password</font></td>
        <td width="70" bgcolor="#FF9900"><font color="white">負責人姓名</font></td>
        <td width="70" bgcolor="#FF9900"><font color="white">手机</font></td>
	    <td width="70" bgcolor="#FF9900"><font color="white">所屬支隊</font></td>
	    <td width="50" bgcolor="#FF9900"><font color="white">負責團</font></td>
	    <td width="65" bgcolor="#FF9900">&nbsp;</td>

  </tr>
      </thead >
   <tbody>
  <?php foreach ($user as $user_item): ?>




	  <tr>
	    <td><?php echo $user_item['username'] ?></td>
	    <td><?php echo $user_item['password'] ?></td>
          <td><?php echo $user_item['fullname'] ?></td>
           <td><?php echo $user_item['mobile'] ?></td>
	    <td><?php echo $user_item['club_code'] ?></td>
	    <td><?php echo $user_item['cat'] ?></td>




	     <!--user_right-->




	    <td> &nbsp;

         <?php  echo "<a href='".site_url($segments2)."/". $user_item['username'] ."'> 修改 </a>"; ?> &nbsp;&nbsp;&nbsp;



		<?php




           if ( $user_right==1 ){



	echo '  |  &nbsp;&nbsp;&nbsp;<a href="javascript: return false;" onclick="return confirmation(\''.site_url($segments3)."/". $user_item['username'] . '\')"> 刪除 </a>';







		   }


		   ?>

        </td>

 	 </tr>

<?php endforeach ?>
      <tbody>
</table>
<br>
<br>
<br>
<script type="text/javascript">
    $(document).ready(function () {
        $('#dataTable').DataTable({
            "scrollY": 350,
            "scrollCollapse": true,
            "scrollX": true
        });
        });
</script>
