<p>&nbsp;</p>
<?php
$segments = array('member', 'create');
$segments2 = array('member', 'edit');
$user_right = $this->session->userdata('user_right');
$array_location = array("", "海光", "山光", "聖經講座", "九龍", "大埔", "太和", "沙田", "屯門", "元朗", "港澳區會");
$array_level_adult = array("團友", "團侶", "團俊", "團佐", "團使", "團彥");
$array_level_child = array("", "綿羊", "海狸", "忙鋒", "流螢", "飛燕", "馴鴿");
$array_position = array("", "普通會員", "少年輔導員", "教練", "輔導員", "副會長", "會長", "分區協調人", "助理幹事", "幹事");
$array_level_common = array("新會員");
?>


<?php echo form_open('member/view'); ?>
<table width="600" border="0" >
    <tr>
        <td width="60" bgcolor="#3300FF"><font color="white">姓名(英文)</font></td>
        <td><input type="text" name="search_english_name"  id="search_english_name" /></td>
    </tr>
    <tr>
        <td width="60" bgcolor="#3300FF"><font color="white">姓名(中文)</font></td>
        <td><input type="text" name="search_chinese_name" id="search_chinese_name" /></td>
    </tr>

    <tr>
        <td width="60" bgcolor="#3300FF"><font color="white">註冊年份(YYYY)</font></td>
        <td><input type="text" name="search_createdate" id="search_createdate" /></td>
    </tr>

    <tr>
        <td width="60" bgcolor="#3300FF"><font color="white">情況</font></td>
        <td>



            <select name ="search_isactive" id="search_isactive">
                <option value="">   </option>
                <option value="active">active</option>
                <option value="inactive">inactive</option>
            </select>


        </td>
    </tr>


    <tr>
        <td width="60" bgcolor="#3300FF"><font color="white">所屬支隊</font></td>
        <td>

            <select name ="search_club_code" id="search_club_code">
                <?php
                foreach ($array_location as $key => $tmp_location) {
                    echo " <option value=\"" . $tmp_location . "\">" . $tmp_location . "</option> \n";
                }
                ?>
            </select>

    </tr>

    <tr>
        <td width="60" bgcolor="#3300FF"><font color="white"> 職級(Level)</font></td>
        <td>

            <select name ="search_level" id="search_level">
                <?php
                $array_level = array_merge($array_level_child, $array_level_adult, $array_level_common);
                foreach ($array_level as $key => $tmp_level) {
                    echo "<option value=\"" . $tmp_level . "\">" . $tmp_level . "</option> \n";
                }
                ?>
            </select>


<!--            <input type="text" name="search_level" id="search_level" />-->

        </td>
    </tr>

    <tr>
        <td width="60" bgcolor="#3300FF"><font color="white"> 崗位</font></td>
        <td>


            <select name ="search_position" id="search_position">
                <?php
                foreach ($array_position as $key => $tmp_position) {
                    echo "<option value=\"" . $tmp_position . "\">" . $tmp_position . "</option> \n";
                }
                ?>
            </select>

<!--            <input type="text" name="search_position" id="search_position" />-->


        </td>
    </tr>








    <tr>
        <td width="60" bgcolor="#3300FF"><font color="white"> 性別</font></td>
        <td>
            <select name ="search_gender" id="search_gender">
                <option value="">   </option>
                <option value="男">男</option>
                <option value="女">女</option>
            </select>
        </td>


    </tr>

<!--    <tr>
<td width="80" bgcolor="#3300FF"><font color="white">榮譽證編號</font></td>
<td><input type="text" name="search_honor_code" id="search_honor_code" /></td>
</tr>-->

    <tr>
        <td width="80" bgcolor="#3300FF"><font color="white">榮譽證(英文)</font></td>
        <td><input type="text" name="search_honor_ename" id="search_honor_ename" /></td>
    </tr>

    <tr>
        <td width="80" bgcolor="#3300FF"><font color="white">榮譽證(中文)</font></td>
        <td><input type="text" name="search_honor_cname" id="search_honor_cname" /></td>
    </tr>
    <tr>
        <td width="60" bgcolor="#3300FF"><font color="white">SKILL</font></td>
        <td>

            <select name ="search_skill" id="search_skill" >
                <option value=""></option>
                <option value="山藝一級">山藝一級</option>
                <option value="山藝二級">山藝二級</option>
                <option value="山藝三級">山藝三級</option>
                <option value="山藝教練一級">山藝教練一級</option>
                <option value="山藝教練二級">山藝教練二級</option>
                <option value="急救證書AFA">急救證書AFA</option>
                <option value="急救入門+心肺復甦IFA">急救入門+心肺復甦IFA</option>
                <option value="康樂沿繩下降證書">康樂沿繩下降證書</option>
                <option value="歷奇活動導師證書">歷奇活動導師證書</option>
            </select>


<!--<input type="text" name="search_skill" id="search_skill" /> -->

        </td>
    </tr>








</table>
<input type="submit" name="submit2" value="Search" />
</form>







<font size="+2" >會員資料</font> -<?php echo "<a href='" . site_url($segments) . "'>新增會員</a>"; ?>
<br>
<br>
<table  id="dataTable" class="table table-bordered table-striped nowrap"   width="100%">
    <thead >
    <tr>
        <td width="96" bgcolor="#0000FF"><font color="white">英文名</font></td>
        <td width="93" bgcolor="#0000FF"><font color="white">中文名</font></td>
        <td width="92" bgcolor="#0000FF"><font color="white">出生日期</font></td>
        <td width="62" bgcolor="#0000FF"><font color="white">性別</font></td>
        <td width="80" bgcolor="#0000FF"><font color="white">所屬支隊</font></td>
        <td width="80" bgcolor="#0000FF"><font color="white">所屬團</font></td>
        <td width="51" bgcolor="#0000FF"><font color="white">身份證</font></td>
        <td width="51" bgcolor="#0000FF"><font color="white">職級</font></td>
        <td width="57" bgcolor="#0000FF"><font color="white">崗位</font></td>
        <td width="54" bgcolor="#0000FF"><font color="white">情況</font></td>
        <td width="110" bgcolor="#0000FF">&nbsp;</td>
    </tr>
</thead>
 </tbody>
    <?php
    $segments = array('member', 'delete');
    ?>
    <?php foreach ($member as $member_item): ?>
        <tr>
            <td><?php echo $member_item['english_name'] ?></td>
            <td><?php echo $member_item['chinese_name'] ?></td>
            <td> <?php echo $member_item['date_of_birth'] ?></td>
            <td><?php echo $member_item['gender'] ?></td>
            <td><?php echo $member_item['club_code'] ?></td>
            <td><?php echo $member_item['cat'] ?></td>
            <td><?php echo substr($member_item['HKID'], 0, 4); ?></td>
            <td><?php echo $member_item['level'] ?></td>
            <td><?php echo $member_item['position'] ?></td>
            <td><?php echo $member_item['isactive'] ?></td>
            <td>&nbsp;
                <?php echo "<a href='" . site_url($segments2) . "/" . $member_item['member_id'] . "'> 修改 </a>"; ?> &nbsp;&nbsp;
                <?php if ($user_right == 1) { ?>
                    | &nbsp;&nbsp;



                    <?php
                    echo ' <a href="javascript: return false;" onclick="return confirmation(\'' . site_url($segments) . "/" . $member_item['member_id'] . '\')"> 刪除 </a>';
                    ?>

                <?php } ?>

            </td>


        </tr>
    <?php endforeach ?>
     </tbody>
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
