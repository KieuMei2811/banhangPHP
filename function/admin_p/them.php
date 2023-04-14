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
   if($_SERVER['REQUEST_METHOD'] == 'POST' || isset($_POST['submit'])) {
        $id = $_POST['id'];
        $name = $_POST['names'];
        $price = $_POST['price'];
        $photo = $_POST['photo'];
        $content = $_POST['content'];
        $tv = "INSERT INTO san_pham (names,price,photo, content) VALUES ('$name', '$price', '$photo','$content')";
            if (mysqli_query($conn, $tv)) {
                echo "thanh cong";
                header('location:admin_product.php');
            } else {
                echo "Lỗi: " . mysqli_error($conn);
            }}
?>