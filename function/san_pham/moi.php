<br><br>
Sản phẩm mới <br><br>
<center>
    <?php
        $tv="SELECT id,names,photo FROM san_pham ORDER BY id desc limit 0,3";
        $tv_1=mysqli_query($conn,$tv);
        while($tv_2=mysqli_fetch_array($tv_1))
        {
            $link_photo="img/san_pham/".$tv_2['photo'];
            $link_chi_tiet="?thamso=chi_tiet_san_pham&id=".$tv_2['id'];
            echo "<a href='$link_chi_tiet' >";
                echo "<img src='$link_photo' width='100px' >";
            echo "</a>";
            echo "<br><br>";
            echo $tv_2['names'];
            echo "<br>";
            echo "<br>";
        }
    ?>
</center>