<p>&nbsp;</p>
<font size="+2" >會員資料-新增</font>
<?php
// lgoin capture info.
$club_code = $this->session->userdata('club_code');
$user_right = $this->session->userdata('user_right');
$cat = $this->session->userdata('cat');
// init combox array data.
$skillItem = array("skill1", "skill2", "skill3", "skill4", "skill5",
    "skill6", "skill7", "skill8", "skill9");
$array_cat = array("前鋒會少年團", "前鋒會幼年團");
$array_location = array("海光", "山光", "聖經講座", "九龍", "大埔", "太和", "沙田", "屯門", "元朗", "港澳區會");
//$array_level_adult = array("團友", "團侶", "團俊", "團佐", "團使", "團彥", "準團師", "團師MG", "領袖勳章PLA", "高級領袖勳章APLA");
$array_level_adult = array("團友", "團侶", "團俊", "團佐", "團使", "團彥");

$array_level_child = array("綿羊", "海狸", "忙鋒", "流螢", "飛燕", "馴鴿");

$array_level_common = array("新會員");

$array_posistion_adult1 = array("普通會員", "少年輔導員", "教練", "輔導員", "副會長", "會長", "分區協調人", "助理幹事", "幹事");

$array_posistion_adult = array("普通會員", "少年輔導員", "教練", "輔導員", "副會長", "會長");
$array_posistion_child = array("普通會員", "少年輔導員", "教練", "輔導員", "副會長", "會長");
// process for define what type of user login such as "admin,view,bv-a".
if ($user_right == 1 or $user_right == 2) {
    $array_position = $array_posistion_adult1;
    $array_level = array_merge($array_level_child, $array_level_adult, $array_level_common);
} else {
    if ($cat == "前鋒會少年團") {
        $array_position = $array_posistion_adult;
        $array_level = array_merge($array_level_adult, $array_level_common);
    } else {
        $array_position = $array_posistion_child;
        $array_level = array_merge($array_level_child, $array_level_common);
    }
}
?>
<?php echo validation_errors(); ?>
<?php echo form_open('member/create') ?>
<?php $segments2 = array('member', 'view'); ?>
<table width="900" border="0">
    <tr>
        <td width="179" bgcolor="#0000FF" ><font  size="+1" color="white">英文名</font></td>
        <td width="711"><input type="text" name="english_name" id="english_name" placeholder="請輸入英文姓名"  />
            (*)</td>
    </tr>
    <tr>
        <td bgcolor="#0000FF" ><font  size="+1" color="white">中文名</font></td>
        <td><input type="text" name="chinese_name" id="chinese_name"  placeholder="請輸入中文姓名"/></td>
    </tr>
    <tr>
        <td bgcolor="#0000FF" ><font  size="+1" color="white">出生日期</font></td>
        <td><input type="text" name="date_of_birth" id="datepicker1" />
            (*)</td>

    </tr>


    <tr>
        <td bgcolor="#0000FF" ><font size="+1" color="white">性別</font></td>
        <td><!--<input type="text" name="gender" id="gender" /> -->
            <select name ="gender" id="gender">
                <option value="男">男</option>
                <option value="女">女</option>
            </select>
        </td>
    </tr>

    <tr>
        <td bgcolor="#0000FF" ><font size="+1" color="white">身份證</font></td>
        <td><input type="text" name="HKID" id="HKID" placeholder="請輸入身份證首4位" />
            (*)</td>
    </tr>

    <tr>
        <td bgcolor="#0000FF" ><font size="+1" color="white">電話</font></td>
        <td><input type="text" name="tel" id="tel" placeholder="請輸入電話號碼" /></td>
    </tr>

    <tr>
        <td bgcolor="#0000FF" ><font size="+1" color="white">電郵e-mail</font></td>
        <td><input type="text" name="email" id="email" placeholder="請輸入電郵地址" /></td>
    </tr>

    <tr>
        <td bgcolor="#0000FF" ><font size="+1" color="white">住址</font></td>
        <td><input type="text" name="addr1" id="addr1" placeholder="請輸入地址1"  /></td>
    </tr>

    <tr>
        <td bgcolor="#0000FF" ><font size="+1" color="white"></font></td>
        <td><input type="text" name="addr2" id="addr2"  placeholder="請輸入地址2"/></td>
    </tr>

    <tr>
        <td bgcolor="#0000FF" ><font size="+1" color="white"></font></td>
        <td><input type="text" name="addr3" id="addr3" placeholder="請輸入地址3" /></td>
    </tr>



    <tr>
        <td bgcolor="#0000FF" ><font size="+1" color="white">所屬支隊</font></td>
        <td>


            <select name ="club_code" id="club_code">
                <?php
                if ($user_right == 1 or $user_right == 2) {

                    foreach ($array_location as $key => $tmp_location) {
                        echo " <option value=\"" . $tmp_location . "\">" . $tmp_location . "</option> \n";
                    }
                } else {
                    ?>
                    <option value=<?php echo "\"" . $club_code . "\"" ?>><?php echo $club_code; ?></option>


                <?php } ?>     

            </select>

            <select name ="cat" id="cat" >
                <?php if ($cat == "前鋒會少年團") {
                    ?>
                    <option value="前鋒會少年團">前鋒會少年團</option>
                <?php } elseif ($cat == "前鋒會幼年團") { ?>
                    <option value="前鋒會幼年團">前鋒會幼年團</option>
                <?php } else { ?>
                    <option value="前鋒會少年團">前鋒會少年團</option>
                    <option value="前鋒會幼年團">前鋒會幼年團</option>
                <?php } ?>
            </select>




        </td>


    </tr>

    <tr>
        <td bgcolor="#0000FF" ><font size="+1" color="white">職級(LEVEL)</font></td>
        <td>   

            <select name ="level" id="level">
                <?php
                foreach ($array_level as $key => $tmp_level) {
                    echo "<option value=\"" . $tmp_level . "\">" . $tmp_level . "</option> \n";
                }
                ?>
            </select>

        </td>


    </tr>
    <tr>
        <td bgcolor="#0000FF" ><font size="+1" color="white">崗位</font></td>
        <td>


            <select name ="position" id="position">    
                <?php
                foreach ($array_position as $key => $tmp_position) {
                    echo "<option value=\"" . $tmp_position . "\">" . $tmp_position . "</option> \n";
                }
                ?>  
            </select>

        </td>
    </tr>




    <tr>
        <td bgcolor="#0000FF" ><font size="+1" color="white">良好表現</font></td>
        <td>    
            <select name ="goodper" id="goodper">
                <option value="NO">NO</option> 
                <option value="YES">YES</option>  

            </select>
            <input   type="hidden"  name="isactive" id="isactive" value='active'/>

        </td>
    </tr>  
    <tr>
        <td bgcolor="#0000FF" ><font size="+1" color="white">浸禮SDA</font></td>
        <td>    
            <select name ="baptism" id="baptism">
                <option value="NO">NO</option>    
                <option value="YES">YES</option>  

            </select></td>
    </tr> 
<!--    <tr>
        <td bgcolor="#0000FF" ><font size="+1" color="white"> 註冊團師</font></td>
        <td>    
            <select name ="cert" id="cert">
                <option value="未註冊">未註冊</option> 
                <option value="已註冊">已註冊</option>  
            </select></td>
    </tr>  -->
    <tr>
        <td bgcolor="#0000FF" ><font size="+1" color="white"> 註冊日期</font></td>

        <td><input type="text" name="createdate" id="createdate"  value ="<?php echo date("Y-m-d") ;?> "  readonly="true"  />
          </td>

    </tr>  


    <tr>
        <td>&nbsp;</td>
        <td>

            <?php echo "<a href='" . site_url($segments2) . "'>返回</a> |  "; ?>

            <input type="submit" name="submit" value="儲存" />
        </td>
    </tr>

</table>
<p><font size="+2" >技能 SKILL</font>

<table width="500" border="0">

    <?php
    foreach ($skillItem as $key => $value) {
        echo "<tr> \n";
        echo "<td bgcolor=\"#0000FF\" ><font size=\"+1\" color=\"white\">技能-" . $value . "</font></td> \n";
        echo "<td> \n";
        echo "	<select name =\"" . $value . "\" id=\"" . $value . "\"> \n";
        echo "    	<option value=\"\"></option> \n";
        echo "      <option value=\"山藝一級\">山藝一級</option> \n";
        echo "		<option value=\"山藝二級\">山藝二級</option>  \n";
        echo "	    <option value=\"山藝三級\">山藝三級</option>   \n";
        echo "	    <option value=\"山藝教練一級\">山藝教練一級</option>   \n";
        echo "	    <option value=\"山藝教練二級\">山藝教練二級</option>   \n";
        echo "	    <option value=\"急救證書AFA\">急救證書AFA</option> \n";
        echo "	    <option value=\"急救入門+心肺復甦IFA\">急救入門+心肺復甦IFA</option> \n";
        echo "		<option value=\"康樂沿繩下降證書\">康樂沿繩下降證書</option> \n";
        echo "        <option value=\"歷奇活動導師證書\">歷奇活動導師證書</option> \n";
        echo "	</select> \n";
        echo "</td> \n";
        echo "</tr> \n";
    }
    ?>


    <tr>
        <td bgcolor="#0000FF" ><font  size="+1" color="white">技能-skill10</font></td>
        <td><input type="text" name="skill10" id="skill10" /></td>
    </tr>
    <tr>
        <td bgcolor="#0000FF" ><font  size="+1" color="white">技能-skill11</font></td>
        <td><input type="text" name="skill11" id="skill11" /></td>
    </tr>
    <tr>
        <td bgcolor="#0000FF" ><font  size="+1" color="white">技能-skill12</font></td>
        <td><input type="text" name="skill12" id="skill12" /></td>
    </tr>

    <tr>
        <td bgcolor="#0000FF" ><font  size="+1" color="white">技能-skill13</font></td>
        <td><input type="text" name="skill13" id="skill13" /></td>
    </tr>

    <tr>
        <td bgcolor="#0000FF"   ><font  size="+1" color="white" >技能-skill14</font></td>
        <td><input type="text" name="skill14" id="skill14" /></td>

    </tr>

</table>
</form>
