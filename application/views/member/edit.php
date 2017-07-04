
<p>&nbsp;</p>
<font size="+2" >會員資料-修改</font>

<?php
$club_code = $this->session->userdata('club_code');
$user_right = $this->session->userdata('user_right');
$cat = $this->session->userdata('cat');
$skillItem = array("skill1", "skill2", "skill3", "skill4", "skill5", "skill6", "skill7", "skill8", "skill9");
$array_cat = array("前鋒會少年團", "前鋒會幼年團");
$array_location = array("海光", "山光", "聖經講座", "九龍", "大埔", "太和", "沙田", "屯門", "元朗", "港澳區會");

$array_level_adult1 = array("團友", "團侶", "團俊", "團佐", "團使", "團彥");
$array_level_adult2 = array("準團師", "團師MG", "領袖勳章PLA", "高級領袖勳章APLA");
$array_level_adult3 = array("團彥", "準團師", "團師MG", "領袖勳章PLA", "高級領袖勳章APLA");

//in_array($member['level'],$array_level_adult2)

$array_level_common = array("新會員");

$array_level_child = array("綿羊", "海狸", "忙鋒", "流螢", "飛燕", "馴鴿");



$array_posistion_adult1 = array("普通會員", "少年輔導員", "教練", "輔導員", "副會長", "會長", "分區協調人", "助理幹事", "幹事");

$array_posistion_adult = array("普通會員", "少年輔導員", "教練", "輔導員", "副會長", "會長");
$array_posistion_child = array("普通會員", "少年輔導員", "教練", "輔導員", "副會長", "會長");

if ($user_right == 1 or $user_right == 2) {
    $array_level = array_merge($array_level_child, $array_level_adult1, $array_level_common);
    $array_posistion = $array_posistion_adult1;
} else {
    if ($cat == "前鋒會少年團") {
        $array_level = $array_level_adult1;
        $array_posistion = array_merge($array_posistion_adult, $array_level_common);
    } else {
        $array_level = $array_level_child;
        $array_posistion = array_merge($array_posistion_child, $array_level_common);
    }
}

$segments1 = array('honor', 'view');
$segments2 = array('member', 'view');
$segments3 = array('member', 'memberHonorDelete');
$segments4 = array('member_level', 'levelup');
$segments5 = array('member_level', 'view');

echo validation_errors();
echo form_open('member/update');
?>
<table width="946" border ="1" >
    <tr>
        <td>
            <table width="380" border="0">
                <tr>
                    <td width="178" bgcolor="#0000FF" ><font size="+1" color="white">id</font></td>
                    <td width="380"><input type="text" name="member_id"  readonly="readonly" id="member_id"  value =<?php echo '"' . $member['member_id'] . '"' ?>/></td>
                </tr>
                <tr>
                    <td bgcolor="#0000FF" ><font size="+1" color="white">英文名</font></td>
                    <td><input type="text"  placeholder="請輸入英文姓名"  name="english_name" id="english_name" value =<?php echo '"' . $member['english_name'] . '"' ?>/>
                        (*)</td>
                </tr>
                <tr>
                    <td bgcolor="#0000FF" ><font size="+1" color="white">中文名</font></td>
                    <td><input type="text" placeholder="請輸入中文姓名" name="chinese_name" id="chinese_name" value =<?php echo '"' . $member['chinese_name'] . '"' ?>/></td>
                </tr>
                <tr>
                    <td bgcolor="#0000FF" ><font size="+1" color="white">出生日期</font></td>
                    <td><input type="text" name="date_of_birth" id="datepicker1"  value =<?php echo '"' . $member['date_of_birth'] . '"' ?>/>
                        (*) </td>

                    
                    
                </tr>
                <tr>
                    <td bgcolor="#0000FF" ><font size="+1" color="white">性別</font></td>
                    <td><!--<input type="text" name="gender" id="gender" /> -->
                        <select name ="gender" id="gender">
                            <option value="男" <?php
                            if ($member['gender'] == '男')
                                echo 'selected';
                            ?>>男</option>
                            <option value="女"  <?php
                            if ($member['gender'] == '女')
                                echo 'selected';
                            ?>>女</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td bgcolor="#0000FF" ><font size="+1" color="white">身份證</font></td>
                    <td><input type="text"  placeholder="請輸入身份證首4位" name="HKID" id="HKID" value = <?php echo '"' . $member['HKID'] . '"' ?>/>
                        (*) </td>
                </tr>

                <tr>
                    <td bgcolor="#0000FF" ><font size="+1" color="white">電話</font></td>
                    <td><input type="text" placeholder="請輸入電話號碼"   name="tel" id="tel"  value = <?php echo '"' . $member["tel"] . '"' ?>/>
                    </td>
                </tr>

                <tr>
                    <td bgcolor="#0000FF" ><font size="+1" color="white">電郵e-mail</font></td>
                    <td><input type="text"  placeholder="請輸入電郵地址" name="email" id="email"   value = <?php echo '"' . $member["email"] . '"' ?>/>
                    </td>
                </tr>

                <tr>
                    <td bgcolor="#0000FF" ><font size="+1" color="white">住址</font></td>
                    <td><input type="text" name="addr1" id="addr1"  placeholder="請輸入地址1"   value = <?php echo '"' . $member["addr1"] . '"' ?>  />
                    </td>
                </tr>

                <tr>
                    <td bgcolor="#0000FF" ><font size="+1" color="white"></font></td>
                    <td><input type="text" name="addr2" id="addr2" placeholder="請輸入地址2"  value = <?php echo '"' . $member["addr2"] . '"' ?>  /> </td>
                </tr>

                <tr>
                    <td bgcolor="#0000FF" ><font size="+1" color="white"></font></td>
                    <td><input type="text" name="addr3" id="addr3 "  placeholder="請輸入地址3"  value = <?php echo '"' . $member["addr3"] . '"' ?>  /></td>
                </tr>




                <tr>
                    <td bgcolor="#0000FF" ><font size="+1" color="white">所屬支隊</font></td>
                    <td>


                        <select name ="club_code" id="club_code">

                            <?php
                            // if login 'admin' or 'view'  do this.
                            if ($user_right == 1 or $user_right == 2) {
                                foreach ($array_location as $key => $tmp_location) {
                                    echo "<option value=\"" . $tmp_location . "\"";
                                    if ($member['club_code'] == $tmp_location) {
                                        echo 'selected';
                                    }
                                    echo ">" . $tmp_location . "</option> \n";
                                }
                            } else {
                                echo "<option value=\"" . $club_code . "\" > " . $club_code . "</option> \n";
                            }
                            ?>
                        </select> 


                        </select>
                        <select name ="cat" id="cat" >
                            <?php
                            // if login 'admin' or 'view'  do this.
                            if ($user_right == 1 or $user_right == 2) {

                                foreach ($array_cat as $key => $tmp_cat) {
                                    echo " <option value=\"" . $tmp_cat . "\"";
                                    if ($member['cat'] == $tmp_cat) {
                                        echo 'selected';
                                    }
                                    echo ">" . $tmp_cat . "</option> \n";
                                }
                            } else {
                                echo "<option value=\"" . $cat . "\">" . $cat . "</option> \n";
                            }
                            ?>
                        </select>  
                    </td>
                </tr>

                <tr>
                    <td bgcolor="#FF6600" ><font size="+1" color="black">職級(LEVEL)</font></td>
                    <td>   


                        <?php
                        //"準團師", "團師MG", "領袖勳章PLA", "高級領袖勳章APLA" if (in_array("Irix", $os)) {  
                        if (!in_array($member['level'], $array_level_adult2)) {
                            ?> 
                            <select name ="level" id="level" style="background-color:#F60">
                                <?php
                                foreach ($array_level as $key => $tmp_level) {
                                    echo "<option value=\"" . $tmp_level . "\"";
                                    if ($member['level'] == $tmp_level) {
                                        echo 'selected';
                                    }
                                    echo " >" . $tmp_level . "</option> \n";
                                }
                                ?>
                            </select>  	

                            <?php
                        } else {
                            echo $member['level'];
                        }
                        ?>





                        <?php
                        if ($user_right == 1 and in_array($member['level'], $array_level_adult3)) {

                            $key = array_search($member['level'], $array_level_adult3);
                            if ($key < 4) {
                                $nextlevel = $array_level_adult3[$key + 1];
                            } else {
                                $nextlevel = "";
                            }


                            if ($key < 4) {
                                ?>



                                <a href="<?php echo site_url($segments4) . "/" . $member['member_id'] . "/" . $member['level'] ?>">升級 </a>
                                <?php
                                echo " 至 " . $nextlevel;
                            }
                            ?>   
<?php } ?>
                    </td>



                </tr>
                <tr>
                    <td bgcolor="#0000FF" ><font size="+1" color="white">崗位</font></td>
                    <td>


                        <select name ="position" id="position">

                            <?php
                            foreach ($array_posistion as $key => $tmp_posistion) {
                                echo "<option value=\"" . $tmp_posistion . "\"";
                                if ($member['position'] == $tmp_posistion) {
                                    echo 'selected';
                                }
                                echo ">" . $tmp_posistion . "</option> \n";
                            }
                            ?>


                        </select>
                    </td>
                </tr>

                <tr>
                    <td bgcolor="#0000FF" ><font size="+1" color="white">良好表現</font></td>
                    <td>    
                        <select name ="goodper" id="goodper">
                            <option value="YES" <?php
                            if ($member['goodper'] == 'YES')
                                echo 'selected';
                            ?>>YES</option>  
                            <option value="NO" <?php
                            if ($member['goodper'] == 'NO')
                                echo 'selected';
                            ?>>NO</option>            
                        </select></td>
                </tr>  


                <tr>
                    <td bgcolor="#0000FF" ><font size="+1" color="white">浸禮SDA</font></td>
                    <td>    
                        <select name ="baptism" id="baptism">
                            <option value="YES" <?php
                            if ($member['baptism'] == 'YES')
                                echo 'selected';
                            ?>>YES</option>  
                            <option value="NO" <?php
                            if ($member['baptism'] == 'NO')
                                echo 'selected';
                            ?>>NO</option>            
                        </select></td>
                </tr> 


                <tr>
                    <td bgcolor="#0000FF" ><font size="+1" color="white">情況</font></td>
                    <td>    
                        <select name ="isactive" id="isactive">
                            <option value="active" <?php
                            if ($member['isactive'] == 'active')
                                echo 'selected';
                            ?>>active</option>  
                            <option value="inactive" <?php
                            if ($member['isactive'] == 'inactive')
                                echo 'selected';
                            ?>>inactive</option>            
                        </select></td>
                </tr>


<!--                <tr>
                    <td bgcolor="#0000FF" ><font size="+1" color="white"> 註冊團師</font></td>
                    <td>    
                        <select name ="cert" id="cert">
                            <option value="已註冊" <?php
                            if ($member['cert'] == '已註冊')
                                echo 'selected';
                            ?>>已註冊</option>  
                            <option value="未註冊" <?php
                            if ($member['cert'] == '未註冊')
                                echo 'selected';
                            ?>>未註冊</option>            
                        </select></td>
                </tr>   -->
                <tr>
                    <td bgcolor="#0000FF" ><font size="+1" color="white">註冊日期</font></td>
                    <td><input type="text" name="createdate"  readonly="true" id="createdate" value =<?php echo '"' . $member['createdate'] . '"' ?>/>
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

            <table width="380" border="0"> 
                <?php
                foreach ($skillItem as $key => $value) {
                    echo "<tr> \n";
                    echo "<td bgcolor=\"#0000FF\" ><font size=\"+1\" color=\"white\">技能-" . $value . "</font></td> \n";
                    echo "<td> \n";
                    echo "	<select name =\"" . $value . "\" id=\"" . $value . "\"> \n";
                    echo "    	<option value=\"\"></option> \n";
                    echo "		<option value=\"山藝一級\"";
                    if ($member[$value] == '山藝一級') {
                        echo 'selected';
                    }
                    echo ">山藝一級</option> ";
                    echo "		<option value=\"山藝二級\"";
                    if ($member[$value] == '山藝二級') {
                        echo 'selected';
                    }
                    echo ">山藝二級</option> ";
                    echo "    	<option value=\"山藝三級\"";
                    if ($member[$value] == '山藝三級') {
                        echo 'selected';
                    }
                    echo ">山藝三級</option>  ";
                    echo "    	<option value=\"山藝教練一級\"";
                    if ($member[$value] == '山藝教練一級') {
                        echo 'selected';
                    }
                    echo ">山藝教練一級</option>  ";
                    echo "    	<option value=\"山藝教練二級\"";
                    if ($member[$value] == '山藝教練二級') {
                        echo 'selected';
                    }
                    echo ">山藝教練二級</option>  ";
                    echo "    <option value=\"急救證書AFA\"";
                    if ($member[$value] == '急救證書AFA') {
                        echo 'selected';
                    }
                    echo ">急救證書AFA</option> ";
                    echo "    <option value=\"急救入門+心肺復甦IFA\"";
                    if ($member[$value] == '急救入門+心肺復甦IFA') {
                        echo 'selected';
                    }
                    echo ">急救入門+心肺復甦IFA</option> ";
                    echo "	<option value=\"康樂沿繩下降證書\"";
                    if ($member[$value] == '康樂沿繩下降證書') {
                        echo 'selected';
                    }
                    echo ">康樂沿繩下降證書</option>";
                    echo "    <option value=\"歷奇活動導師證書\"";
                    if ($member[$value] == '歷奇活動導師證書') {
                        echo 'selected';
                    }
                    echo ">歷奇活動導師證書</option>";
                    echo "	</select> \n";
                    echo "	</td> \n";
                    echo "	</tr> \n";
                }
                ?>

                <tr>
                    <td bgcolor="#0000FF" ><font size="+1" color="white">技能-skill10</font></td>
                    <td><input type="text" name="skill10" id="skill10" value =<?php echo '"' . $member['skill10'] . '"' ?>/></td>
                </tr>

                <tr>
                    <td bgcolor="#0000FF" ><font size="+1" color="white">技能-skill11</font></td>
                    <td><input type="text" name="skill11" id="skill11" value =<?php echo '"' . $member['skill11'] . '"' ?>/></td>
                </tr>
                <tr>
                    <td bgcolor="#0000FF" ><font size="+1" color="white">技能-skill12</font></td>
                    <td><input type="text" name="skill12" id="skill12" value =<?php echo '"' . $member['skill12'] . '"' ?>/></td>
                </tr>

                <tr>
                    <td bgcolor="#0000FF" ><font size="+1" color="white">技能-skill13</font></td>
                    <td><input type="text" name="skill13" id="skill13" value =<?php echo '"' . $member['skill13'] . '"' ?>/></td>
                </tr>

                <tr>
                    <td bgcolor="#0000FF" ><font size="+1" color="white">技能-skill14</font></td>
                    <td><input type="text" name="skill14" id="skill14" value =<?php echo '"' . $member['skill14'] . '"' ?>/></td>
                </tr>

            </table>

        </td>





        <?php
        if (($user_right == 1 or $user_right == 2) and in_array($member['level'], $array_level_adult2)) {
            /// if  (!in_array($member['level'],$array_level_adult2) )
            ?>
            <td>
                升級資料
                <iframe  src="<?php echo site_url($segments5) . "/" . $member['member_id'] . "/" . $member['level']; ?>"  width="1000" height="750" >
                </iframe>
            </td>	
<?php } ?>
    </tr>
</table>
</form>
<p>&nbsp;</p>
<p><font size="+2" >榮譽證</font>

    <?php
    echo "<button onclick=\"window.location.href='" . site_url($segments1) . "/" . $member['member_id'] . "'\">新增</button>";
    ?>



</p>
<table width="946" border="1">
    <tr>
        <td width="123" bgcolor="#0000FF"><font size="+1" color="white">少/幼年團</font></td>
        <td width="135" bgcolor="#0000FF"><font size="+1" color="white">種類(中文)</font></td>
        <td width="164" bgcolor="#0000FF" ><font size="+1" color="white">種類(英文)</font></td>
<!--        <td width="171" bgcolor="#0000FF" ><font size="+1" color="white">榮譽証編號</font></td>-->
        <td width="164" bgcolor="#0000FF"><font  size="+1" color="white">榮譽証(中文)</font></td>
        <td width="149" bgcolor="#0000FF"><font  size="+1" color="white">榮譽証(英文)</font></td>
        <td width="149" bgcolor="#0000FF">&nbsp;</td>
    </tr>
<?php foreach ($member_honor as $member_honor_item) { ?>
        <tr>
            <td><?php echo $member_honor_item['cat']; ?></td>
            <td><?php echo $member_honor_item['honor_ccat']; ?></td>
            <td><?php echo $member_honor_item['honor_ecat']; ?></td>
<!--            <td><?php echo $member_honor_item['honor_code']; ?></td>-->
            <td><?php echo $member_honor_item['honor_cname']; ?></td>
            <td><?php echo $member_honor_item['honor_ename']; ?></td>
            <td><a href ="<?php echo site_url($segments3) . "/" . $member['member_id'] . "/" . $member_honor_item['honor_code']; ?>"> 刪除</a></td>
        </tr>
<?php } ?>
</table>







