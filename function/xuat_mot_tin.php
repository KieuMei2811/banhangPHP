<?php
    $id=$_GET['id'];
    $tv="SELECT * FROM menu_ngang WHERE id='$id'";
    $tv_1=mysqli_query($conn,$tv);
    $tv_2=mysqli_fetch_array($tv_1);
    echo "<h1>";
        echo $tv_2['names'];
    echo "</h1>";
    echo $tv_2['content'];
?>