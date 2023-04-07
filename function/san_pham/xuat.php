<?php
    $id=$_GET['id'];
  
    $so_du_lieu = 3;
    $tv = "SELECT count(*) FROM san_pham WHERE thuoc_menu='$id';";
    $tv_1 = mysqli_query($conn,$tv);
    $tv_2 = mysqli_fetch_array($tv_1);
    $so_trang = ceil($tv_2[0]/$so_du_lieu);
  
    if(!isset($_GET['trang'])){$vtbd=0;}else{$vtbd=($_GET['trang']-1)*$so_du_lieu;}
  
    $tv = "SELECT id,names,price,photo,thuoc_menu FROM san_pham WHERE thuoc_menu='$id' ORDER BY id DESC limit $vtbd,$so_du_lieu";
    $tv_1 = mysqli_query($conn,$tv);
    echo "<table>";
    while($tv_2 = mysqli_fetch_array($tv_1))
    {
        echo "<tr>";
            for($i=1;$i<=3;$i++)
            {
                echo "<td align='center' width='215px' valign='top' >";
                    if($tv_2!=false)
                    {
                        $link_photo="img/san_pham/".$tv_2['photo'];
                        $link_chi_tiet="?thamso=chi_tiet_san_pham&id=".$tv_2['id'];

                        echo "<a href='$link_chi_tiet' >";
                            echo "<img src='$link_photo' width='150px' >";
                        echo "</a>";
                        echo "<br>";
                        echo "<a href='$link_chi_tiet' >";
                            echo $tv_2['names'];
                        echo "</a>";
                        echo "<br>";
                        echo $tv_2['price'];echo "<br>";echo "<br>";
                    }
                    else
                    {
                        echo "&nbsp;";
                    }
                echo "</td>";
                if($i!=3)
                {
                    $tv_2=mysqli_fetch_array($tv_1);
                }
            }
        echo "</tr>";
    }
    echo "<tr>";
        echo "<td colspan='3' align='center' >";
            echo "<div class='phan_trang' >";
                for( $i=1;$i<=$so_trang;$i++)
                {
                    $link="?thamso=xuat_san_pham&id=".$_GET['id']."&trang=".$i;
                    echo "<a href='$link' >";
                        echo $i;echo " ";
                    echo "</a>";
                }
            echo "</div>";
        echo "</td>";
    echo "</tr>";
    echo "</table>";
?>