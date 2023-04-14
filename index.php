<?php
    session_start();
    include("connect.php");
    include("function/ham/ham.php");
    if(isset($_POST['thong_tin_khach_hang']))
    {
        include("function/gio_hang/thuc_hien_mua_hang.php");
    }
    if(isset($_POST['cap_nhat_gio_hang']))
    {
        include("function/gio_hang/cap_nhat_gio_hang.php");
        trang_truoc();
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Web bán hàng</title>
        <link rel="stylesheet" href="style/index.css">
    </head>
    <body>
        <div>
            <img class="poster-ground"  src="img/poster.jpg" >
        </div>
        <center>
            <table width="990px">
                <!-- <tr>
                    <td colspan="0"><img class="poster-ground" src="img/poster.jpg" ></td>
                </tr> -->
                <tr>
                    <td colspan="3" height="50px">
                        <?php
                            include("function/menu_ngang/menu_ngang.php");
                        ?>
                    </td>
                </tr>
                <tr>
                    <td width="170px" valign="top">  
                        <?php
                            include("function/menu_doc/menu_doc.php");
                            include("function/san_pham/moi.php");
                        ?>
                    </td>
                    <td width="650px" valign="top">
                    <?php
                        include("function/dieu_huong.php");
                    ?>
                    </td>
                    <td width="170px" valign="top">
                    <?php
                        include("function/tim_kiem/vung_tim_kiem.php");
                        include("function/gio_hang/vung_gio_hang.php");
                        include("function/san_pham/noi_bat.php");
                    ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">Footer</td>
                </tr>
            </table>
        </center>
    </body>
</html>