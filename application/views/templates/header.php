<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo $title ?> </title>


        <!-- <link  rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/themes/hot-sneaks/jquery-ui.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script> -->
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

                table.dataTable {

                  width: 100%;

                  margin: 0 auto;

                  clear: both;

                  border-collapse: separate;

                  border-spacing: 0;

                  /*

                   * Header and footer styles

                   */

                  /*

                   * Body styles

                   */ }

                  table.dataTable thead th,

                  table.dataTable tfoot th {

                    font-weight: bold; }

                  table.dataTable thead th,

                  table.dataTable thead td {

                    padding: 10px 18px;

                    border-bottom: 1px solid #111111; }

                    table.dataTable thead th:active,

                    table.dataTable thead td:active {

                      outline: none; }

                  table.dataTable tfoot th,

                  table.dataTable tfoot td {

                    padding: 10px 18px 6px 18px;

                    border-top: 1px solid #111111; }

                  table.dataTable thead .sorting,

                  table.dataTable thead .sorting_asc,

                  table.dataTable thead .sorting_desc,

                  table.dataTable thead .sorting_asc_disabled,

                  table.dataTable thead .sorting_desc_disabled {

                    cursor: pointer;

                    *cursor: hand;

                    background-repeat: no-repeat;

                    background-position: center right; }

                  table.dataTable thead .sorting {

                    background-image: url("../images/sort_both.png"String); }

                  table.dataTable thead .sorting_asc {

                    background-image: url("../images/sort_asc.png"String); }

                  table.dataTable thead .sorting_desc {

                    background-image: url("../images/sort_desc.png"String); }

                  table.dataTable thead .sorting_asc_disabled {

                    background-image: url("../images/sort_asc_disabled.png"String); }

                  table.dataTable thead .sorting_desc_disabled {

                    background-image: url("../images/sort_desc_disabled.png"String); }

                  table.dataTable tbody tr {

                    background-color: white; }

                    table.dataTable tbody tr.selected {

                      background-color: #b0bed9; }

                  table.dataTable tbody th,

                  table.dataTable tbody td {

                    padding: 8px 10px; }

                  table.dataTable.row-border tbody th, table.dataTable.row-border tbody td, table.dataTable.display tbody th, table.dataTable.display tbody td {

                    border-top: 1px solid #dddddd; }

                  table.dataTable.row-border tbody tr:first-child th,

                  table.dataTable.row-border tbody tr:first-child td, table.dataTable.display tbody tr:first-child th,

                  table.dataTable.display tbody tr:first-child td {

                    border-top: none; }

                  table.dataTable.cell-border tbody th, table.dataTable.cell-border tbody td {

                    border-top: 1px solid #dddddd;

                    border-right: 1px solid #dddddd; }

                  table.dataTable.cell-border tbody tr th:first-child,

                  table.dataTable.cell-border tbody tr td:first-child {

                    border-left: 1px solid #dddddd; }

                  table.dataTable.cell-border tbody tr:first-child th,

                  table.dataTable.cell-border tbody tr:first-child td {

                    border-top: none; }

                  table.dataTable.stripe tbody tr.odd, table.dataTable.display tbody tr.odd {

                    background-color: #f9f9f9; }

                    table.dataTable.stripe tbody tr.odd.selected, table.dataTable.display tbody tr.odd.selected {

                      background-color: #abb9d3; }

                  table.dataTable.hover tbody tr:hover, table.dataTable.display tbody tr:hover {

                    background-color: whitesmoke; }

                    table.dataTable.hover tbody tr:hover.selected, table.dataTable.display tbody tr:hover.selected {

                      background-color: #a9b7d1; }

                  table.dataTable.order-column tbody tr > .sorting_1,

                  table.dataTable.order-column tbody tr > .sorting_2,

                  table.dataTable.order-column tbody tr > .sorting_3, table.dataTable.display tbody tr > .sorting_1,

                  table.dataTable.display tbody tr > .sorting_2,

                  table.dataTable.display tbody tr > .sorting_3 {

                    background-color: #f9f9f9; }

                  table.dataTable.order-column tbody tr.selected > .sorting_1,

                  table.dataTable.order-column tbody tr.selected > .sorting_2,

                  table.dataTable.order-column tbody tr.selected > .sorting_3, table.dataTable.display tbody tr.selected > .sorting_1,

                  table.dataTable.display tbody tr.selected > .sorting_2,

                  table.dataTable.display tbody tr.selected > .sorting_3 {

                    background-color: #acbad4; }

                  table.dataTable.display tbody tr.odd > .sorting_1, table.dataTable.order-column.stripe tbody tr.odd > .sorting_1 {

                    background-color: #f1f1f1; }

                  table.dataTable.display tbody tr.odd > .sorting_2, table.dataTable.order-column.stripe tbody tr.odd > .sorting_2 {

                    background-color: #f3f3f3; }

                  table.dataTable.display tbody tr.odd > .sorting_3, table.dataTable.order-column.stripe tbody tr.odd > .sorting_3 {

                    background-color: whitesmoke; }

                  table.dataTable.display tbody tr.odd.selected > .sorting_1, table.dataTable.order-column.stripe tbody tr.odd.selected > .sorting_1 {

                    background-color: #a6b3cd; }

                  table.dataTable.display tbody tr.odd.selected > .sorting_2, table.dataTable.order-column.stripe tbody tr.odd.selected > .sorting_2 {

                    background-color: #a7b5ce; }

                  table.dataTable.display tbody tr.odd.selected > .sorting_3, table.dataTable.order-column.stripe tbody tr.odd.selected > .sorting_3 {

                    background-color: #a9b6d0; }

                  table.dataTable.display tbody tr.even > .sorting_1, table.dataTable.order-column.stripe tbody tr.even > .sorting_1 {

                    background-color: #f9f9f9; }

                  table.dataTable.display tbody tr.even > .sorting_2, table.dataTable.order-column.stripe tbody tr.even > .sorting_2 {

                    background-color: #fbfbfb; }

                  table.dataTable.display tbody tr.even > .sorting_3, table.dataTable.order-column.stripe tbody tr.even > .sorting_3 {

                    background-color: #fdfdfd; }

                  table.dataTable.display tbody tr.even.selected > .sorting_1, table.dataTable.order-column.stripe tbody tr.even.selected > .sorting_1 {

                    background-color: #acbad4; }

                  table.dataTable.display tbody tr.even.selected > .sorting_2, table.dataTable.order-column.stripe tbody tr.even.selected > .sorting_2 {

                    background-color: #adbbd6; }

                  table.dataTable.display tbody tr.even.selected > .sorting_3, table.dataTable.order-column.stripe tbody tr.even.selected > .sorting_3 {

                    background-color: #afbdd8; }

                  table.dataTable.display tbody tr:hover > .sorting_1, table.dataTable.order-column.hover tbody tr:hover > .sorting_1 {

                    background-color: #eaeaea; }

                  table.dataTable.display tbody tr:hover > .sorting_2, table.dataTable.order-column.hover tbody tr:hover > .sorting_2 {

                    background-color: #ebebeb; }

                  table.dataTable.display tbody tr:hover > .sorting_3, table.dataTable.order-column.hover tbody tr:hover > .sorting_3 {

                    background-color: #eeeeee; }

                  table.dataTable.display tbody tr:hover.selected > .sorting_1, table.dataTable.order-column.hover tbody tr:hover.selected > .sorting_1 {

                    background-color: #a1aec7; }

                  table.dataTable.display tbody tr:hover.selected > .sorting_2, table.dataTable.order-column.hover tbody tr:hover.selected > .sorting_2 {

                    background-color: #a2afc8; }

                  table.dataTable.display tbody tr:hover.selected > .sorting_3, table.dataTable.order-column.hover tbody tr:hover.selected > .sorting_3 {

                    background-color: #a4b2cb; }

                  table.dataTable.no-footer {

                    border-bottom: 1px solid #111111; }

                  table.dataTable.nowrap th, table.dataTable.nowrap td {

                    white-space: nowrap; }

                  table.dataTable.compact thead th,

                  table.dataTable.compact thead td {

                    padding: 4px 17px 4px 4px; }

                  table.dataTable.compact tfoot th,

                  table.dataTable.compact tfoot td {

                    padding: 4px; }

                  table.dataTable.compact tbody th,

                  table.dataTable.compact tbody td {

                    padding: 4px; }

                  table.dataTable th.dt-left,

                  table.dataTable td.dt-left {

                    text-align: left; }

                  table.dataTable th.dt-center,

                  table.dataTable td.dt-center,

                  table.dataTable td.dataTables_empty {

                    text-align: center; }

                  table.dataTable th.dt-right,

                  table.dataTable td.dt-right {

                    text-align: right; }

                  table.dataTable th.dt-justify,

                  table.dataTable td.dt-justify {

                    text-align: justify; }

                  table.dataTable th.dt-nowrap,

                  table.dataTable td.dt-nowrap {

                    white-space: nowrap; }

                  table.dataTable thead th.dt-head-left,

                  table.dataTable thead td.dt-head-left,

                  table.dataTable tfoot th.dt-head-left,

                  table.dataTable tfoot td.dt-head-left {

                    text-align: left; }

                  table.dataTable thead th.dt-head-center,

                  table.dataTable thead td.dt-head-center,

                  table.dataTable tfoot th.dt-head-center,

                  table.dataTable tfoot td.dt-head-center {

                    text-align: center; }

                  table.dataTable thead th.dt-head-right,

                  table.dataTable thead td.dt-head-right,

                  table.dataTable tfoot th.dt-head-right,

                  table.dataTable tfoot td.dt-head-right {

                    text-align: right; }

                  table.dataTable thead th.dt-head-justify,

                  table.dataTable thead td.dt-head-justify,

                  table.dataTable tfoot th.dt-head-justify,

                  table.dataTable tfoot td.dt-head-justify {

                    text-align: justify; }

                  table.dataTable thead th.dt-head-nowrap,

                  table.dataTable thead td.dt-head-nowrap,

                  table.dataTable tfoot th.dt-head-nowrap,

                  table.dataTable tfoot td.dt-head-nowrap {

                    white-space: nowrap; }

                  table.dataTable tbody th.dt-body-left,

                  table.dataTable tbody td.dt-body-left {

                    text-align: left; }

                  table.dataTable tbody th.dt-body-center,

                  table.dataTable tbody td.dt-body-center {

                    text-align: center; }

                  table.dataTable tbody th.dt-body-right,

                  table.dataTable tbody td.dt-body-right {

                    text-align: right; }

                  table.dataTable tbody th.dt-body-justify,

                  table.dataTable tbody td.dt-body-justify {

                    text-align: justify; }

                  table.dataTable tbody th.dt-body-nowrap,

                  table.dataTable tbody td.dt-body-nowrap {

                    white-space: nowrap; }



                table.dataTable,

                table.dataTable th,

                table.dataTable td {

                  box-sizing: content-box; }



                /*

                 * Control feature layout

                 */

                .dataTables_wrapper {

                  position: relative;

                  clear: both;

                  *zoom: 1;

                  zoom: 1; }

                  .dataTables_wrapper .dataTables_length {

                    float: left; }

                  .dataTables_wrapper .dataTables_filter {

                    float: right;

                    text-align: right; }

                    .dataTables_wrapper .dataTables_filter input {

                      margin-left: 0.5em; }

                  .dataTables_wrapper .dataTables_info {

                    clear: both;

                    float: left;

                    padding-top: 0.755em; }

                  .dataTables_wrapper .dataTables_paginate {

                    float: right;

                    text-align: right;

                    padding-top: 0.25em; }

                    .dataTables_wrapper .dataTables_paginate .paginate_button {

                      box-sizing: border-box;

                      display: inline-block;

                      min-width: 1.5em;

                      padding: 0.5em 1em;

                      margin-left: 2px;

                      text-align: center;

                      text-decoration: none !important;

                      cursor: pointer;

                      *cursor: hand;

                      color: #333333 !important;

                      border: 1px solid transparent;

                      border-radius: 2px; }

                      .dataTables_wrapper .dataTables_paginate .paginate_button.current, .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {

                        color: #333333 !important;

                        border: 1px solid #979797;

                        background-color: white;

                        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, white), color-stop(100%, gainsboro));

                        /* Chrome,Safari4+ */

                        background: -webkit-linear-gradient(top, white 0%, gainsboro 100%);

                        /* Chrome10+,Safari5.1+ */

                        background: -moz-linear-gradient(top, white 0%, gainsboro 100%);

                        /* FF3.6+ */

                        background: -ms-linear-gradient(top, white 0%, gainsboro 100%);

                        /* IE10+ */

                        background: -o-linear-gradient(top, white 0%, gainsboro 100%);

                        /* Opera 11.10+ */

                        background: linear-gradient(to bottom, white 0%, gainsboro 100%);

                        /* W3C */ }

                      .dataTables_wrapper .dataTables_paginate .paginate_button.disabled, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:active {

                        cursor: default;

                        color: #666 !important;

                        border: 1px solid transparent;

                        background: transparent;

                        box-shadow: none; }

                      .dataTables_wrapper .dataTables_paginate .paginate_button:hover {

                        color: white !important;

                        border: 1px solid #111111;

                        background-color: #585858;

                        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #585858), color-stop(100%, #111111));

                        /* Chrome,Safari4+ */

                        background: -webkit-linear-gradient(top, #585858 0%, #111111 100%);

                        /* Chrome10+,Safari5.1+ */

                        background: -moz-linear-gradient(top, #585858 0%, #111111 100%);

                        /* FF3.6+ */

                        background: -ms-linear-gradient(top, #585858 0%, #111111 100%);

                        /* IE10+ */

                        background: -o-linear-gradient(top, #585858 0%, #111111 100%);

                        /* Opera 11.10+ */

                        background: linear-gradient(to bottom, #585858 0%, #111111 100%);

                        /* W3C */ }

                      .dataTables_wrapper .dataTables_paginate .paginate_button:active {

                        outline: none;

                        background-color: #2b2b2b;

                        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #2b2b2b), color-stop(100%, #0c0c0c));

                        /* Chrome,Safari4+ */

                        background: -webkit-linear-gradient(top, #2b2b2b 0%, #0c0c0c 100%);

                        /* Chrome10+,Safari5.1+ */

                        background: -moz-linear-gradient(top, #2b2b2b 0%, #0c0c0c 100%);

                        /* FF3.6+ */

                        background: -ms-linear-gradient(top, #2b2b2b 0%, #0c0c0c 100%);

                        /* IE10+ */

                        background: -o-linear-gradient(top, #2b2b2b 0%, #0c0c0c 100%);

                        /* Opera 11.10+ */

                        background: linear-gradient(to bottom, #2b2b2b 0%, #0c0c0c 100%);

                        /* W3C */

                        box-shadow: inset 0 0 3px #111; }

                    .dataTables_wrapper .dataTables_paginate .ellipsis {

                      padding: 0 1em; }

                  .dataTables_wrapper .dataTables_processing {

                    position: absolute;

                    top: 50%;

                    left: 50%;

                    width: 100%;

                    height: 40px;

                    margin-left: -50%;

                    margin-top: -25px;

                    padding-top: 20px;

                    text-align: center;

                    font-size: 1.2em;

                    background-color: white;

                    background: -webkit-gradient(linear, left top, right top, color-stop(0%, rgba(255, 255, 255, 0)), color-stop(25%, rgba(255, 255, 255, 0.9)), color-stop(75%, rgba(255, 255, 255, 0.9)), color-stop(100%, rgba(255, 255, 255, 0)));

                    background: -webkit-linear-gradient(left, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.9) 25%, rgba(255, 255, 255, 0.9) 75%, rgba(255, 255, 255, 0) 100%);

                    background: -moz-linear-gradient(left, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.9) 25%, rgba(255, 255, 255, 0.9) 75%, rgba(255, 255, 255, 0) 100%);

                    background: -ms-linear-gradient(left, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.9) 25%, rgba(255, 255, 255, 0.9) 75%, rgba(255, 255, 255, 0) 100%);

                    background: -o-linear-gradient(left, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.9) 25%, rgba(255, 255, 255, 0.9) 75%, rgba(255, 255, 255, 0) 100%);

                    background: linear-gradient(to right, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.9) 25%, rgba(255, 255, 255, 0.9) 75%, rgba(255, 255, 255, 0) 100%); }

                  .dataTables_wrapper .dataTables_length,

                  .dataTables_wrapper .dataTables_filter,

                  .dataTables_wrapper .dataTables_info,

                  .dataTables_wrapper .dataTables_processing,

                  .dataTables_wrapper .dataTables_paginate {

                    color: #333333; }

                  .dataTables_wrapper .dataTables_scroll {

                    clear: both; }

                    .dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody {

                      *margin-top: -1px;

                      -webkit-overflow-scrolling: touch; }

                      .dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody > table > thead > tr > th, .dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody > table > thead > tr > td, .dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody > table > tbody > tr > th, .dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody > table > tbody > tr > td {

                        vertical-align: middle; }

                      .dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody > table > thead > tr > th > div.dataTables_sizing,

                      .dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody > table > thead > tr > td > div.dataTables_sizing, .dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody > table > tbody > tr > th > div.dataTables_sizing,

                      .dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody > table > tbody > tr > td > div.dataTables_sizing {

                        height: 0;

                        overflow: hidden;

                        margin: 0 !important;

                        padding: 0 !important; }

                  .dataTables_wrapper.no-footer .dataTables_scrollBody {

                    border-bottom: 1px solid #111111; }

                  .dataTables_wrapper.no-footer div.dataTables_scrollHead > table,

                  .dataTables_wrapper.no-footer div.dataTables_scrollBody > table {

                    border-bottom: none; }

                  .dataTables_wrapper:after {

                    visibility: hidden;

                    display: block;

                    content: ""String;

                    clear: both;

                    height: 0; }



                @media screen and (max-width: 767px) {

                  .dataTables_wrapper .dataTables_info,

                  .dataTables_wrapper .dataTables_paginate {

                    float: none;

                    text-align: center; }

                  .dataTables_wrapper .dataTables_paginate {

                    margin-top: 0.5em; } }

                @media screen and (max-width: 640px) {

                  .dataTables_wrapper .dataTables_length,

                  .dataTables_wrapper .dataTables_filter {

                    float: none;

                    text-align: center; }

                  .dataTables_wrapper .dataTables_filter {

                    margin-top: 0.5em; } }


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
