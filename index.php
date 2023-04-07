<?php
    session_start();
    include("connect.php");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Web bán hàng</title>
        <link rel="stylesheet" href="style/index.css">
    </head>
    <body>
        <center>
            <table width="990px">
                <tr>
                    <td colspan="3"><img src="img/hutieu.jpg" ></td>
                </tr>
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