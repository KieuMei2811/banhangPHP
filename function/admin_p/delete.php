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
   
      //  echo "Connected Successfully !";

    $id = $_GET['id'];
    // Truy vấn SQL để xóa sản phẩm
    $tv = "DELETE FROM san_pham WHERE id=$id";
    if (mysqli_query($conn, $tv)) {
        header('Location: admin_product.php');
    } else {
        echo "Lỗi: " . mysqli_error($conn);
    }
    
?>