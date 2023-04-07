<?php
    if(isset($_GET['thamso'])){$tham_so=$_GET['thamso'];}else{$tham_so="";}
    switch($tham_so)
    {
        case "xuat_san_pham":
            include("function/san_pham/xuat.php");
        break;
        case "chi_tiet_san_pham":
            include("function/san_pham/chi_tiet_san_pham.php");
        break;
        case "xuat_san_pham_2":
            include("function/san_pham/xuat_toan_bo_san_pham.php");
        break;
        case "xuat_mot_tin":
            include("function/xuat_mot_tin.php");
        break;
        case "tim_kiem":
            include("function/tim_kiem/xuat_san_pham_tim_kiem.php");
        break;
        case "gio_hang":
            include("function/gio_hang/gio_hang.php");
        break;
        default:
            echo "Trang chủ";
    }
?>