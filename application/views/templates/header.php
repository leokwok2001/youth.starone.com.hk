<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo $title ?> </title>



        <link  rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/themes/hot-sneaks/jquery-ui.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
        <style>
                    article,aside,figure,figcaption,footer,header,hgroup,menu,nav,section {display:block;}
                    body {font: 70% "Trebuchet MS", sans-serif; margin: 50px;}
        </style>





            <style type ="text/css">
                .calendar {
                    font-family: Arial; font-size:12px;
                }
                table.calendar{

                    margin-left:0px; border-collapse: collapse;
                }
                .calendar  .days td {
                    width: 80px;height: 80px; padding: 40px;
                    border: 1px solid #999;
                    vertical-align: top;
                    background-color: #DEF;

                }

                .calendar .days td:hover {
                    background-color: #FFF;
                }
                .calendar .highlight {
                    font-weight: bold; color: #00F;
                }
                .content{
                    color:#F00;
                }

                div.cover {
                    /* background-image: url(http://youth.starone.com.hk/images/bg.jpg);*/
                    background: url(http://youth.starone.com.hk/images/bg.jpg);
                    background-repeat: no-repeat;
                    /* background-position: center center;*/
                    background-size: cover;
                }
            </style>




            <link rel="stylesheet" type="text/css"href="https://cdn.datatables.net/v/dt/jq-2.2.4/dt-1.10.15/datatables.min.css"/>
            <script type="text/javascript"  src="https://cdn.datatables.net/v/dt/jq-2.2.4/dt-1.10.15/datatables.min.js"></script>



    </head>

    <body>
        <h1>


            <?php
            $image_properties3 = array(
                'src' => 'images/web_logo2.png');
            echo img($image_properties3, FALSE);

            $user_right = $this->session->userdata('user_right');


            if ($this->session->userdata('islogin')) {

                $cat = $this->session->userdata('cat');



                switch ($cat) {
                    case "前鋒會幼年團":


                        $image_properties1 = array(
                            'src' => 'images/Adventurers2.png',
                            'width' => '100',
                            'height' => '100',
                        );


                        echo img($image_properties1, FALSE);


                        break;
                    case "前鋒會少年團":

                        $image_properties2 = array(
                            'src' => 'images/Pathfinder.jpg',
                            'width' => '100',
                            'height' => '100',
                        );

                        echo img($image_properties2, FALSE);
                        break;

                    default:
                        break;
                }


                echo "<h1><font color='#0066FF'>歡迎 " . $this->session->userdata('club_code') . "-" . $this->session->userdata('cat') . " " . $this->session->userdata('username') . " 登入!" . "</font></h1>";


                $segments1 = array('user', 'checkout');
                $segments2 = array('member', 'view');
                $segments3 = array('user', 'view');
                $segments4 = array('notices', 'view');
                $segments5 = array('level', 'view');
                $segments6 = array('edu', 'view');



                echo "<a href='" . site_url($segments6) . "'>教材</a> |  ";


                echo "<a href='" . site_url($segments4) . "'>公告欄</a> |  ";

                if ($user_right == 1 or $user_right == 2) {

                    echo "<a href='" . site_url($segments5) . "'>領袖級資格</a> |  ";
                }


                echo "<a href='" . site_url($segments3) . "'>支隊負責人</a> |  ";
                echo "<a href='" . site_url($segments2) . "'>會員資料</a> |  ";
                echo "<a href='" . site_url($segments1) . "'> 登出</a>";
            }
            ?>
