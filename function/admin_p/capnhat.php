<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "ban_hang";

// Create connection
$conn = mysqli_connect($host,$user,$password,$database);
mysqli_set_charset($conn,"UTF8");

// Check connection
if(!$conn){
     die("Connection failed: ".mysqli_connect_error());
}

    // Lấy thông tin sản phẩm để sửa
											
    if (isset($_GET['id']))							
    {							
    if (isset($_GET['es'])) {							
    echo "<script type=\"text/javascript\">alert(\"Bạn đã sửa sản phẩm thành công!\");</script>";					
    }							
    if (isset($_GET['ef'])) {							
    echo "<script type=\"text/javascript\">alert(\"Sửa sản phẩm thất bại!\");</script>";							
    }							
    }  

    if (isset($_GET['id']))							
    {							
        $id = $_GET['id'];							
        $tv = "SELECT * FROM san_pham WHERE id = " . $id;							
        $tv_1 = mysqli_query($conn,$tv);	
        $tv_2 = mysqli_fetch_assoc($tv_1);					
    }	
    
    // Đẩy data lên database
    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $name = $_POST['names'];
        $price = $_POST['price'];
        $photo = $_POST['photo'];
        $content = $_POST['content'];
        $tv = "UPDATE san_pham SET names='$name', price = '$price', photo = '$photo', content ='$content' WHERE id = '$id'";
        $tv_1 = mysqli_query($conn,$tv);
        header('location:admin_product.php');
    }



?>