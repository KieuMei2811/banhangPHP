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
      error_reporting(0);	

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin_Films_CRUD</title>
    <!-- link CSS -->
    <link href='../../style/admin_product.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <!-- boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Bootstrap -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/11a9c95312.js" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
   
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 background-left ">
                <div><img class="logo" src="../../asset/picture/3e1b693d-9dc1-43e7-b517-763a153989af-removebg-preview (2).png" alt=""><b class="logo_text">ShopSoup</b></div>
                <div class="row">
                    <a href=""  class="icon-item">
                        <ion-icon name="person"  ></ion-icon>
                        <b> User</b>
                    </a> 
                </div><br><br>
                <div class="row"> 
                    <p class="icon-play">
                        <ion-icon name="play-circle"></ion-icon>
                        <b> Product</b>
                    </p>
                </div>
            </div>
            <div class="col-lg-10 background-right">
                <div class="row"> 
                    <div class="col-lg-10">
                        <!--  -->
                    </div>
                    <div class="col-lg-2">
                        <div class="icon-user">   
                            <ion-icon name="person-circle" class="icon-acc"></ion-icon>
                            <a class="text-signout" href="#">Kieu</a>
                        </div>
                    </div>
                </div>
                <div class="row backgroud-bar">
                    <div class="col-sm-3"> 
                        <a href="" class="bar-user"><span >User </span></a>
                        <span class="line-line">/</span>
                        <span class="bar-film">Product</span>
                    </div>
                    <div class="col-sm-6">
                        <!--  -->
                    </div>
                    <div class="col-sm-3">
                        <span class="mess">Hello!</span>
                        <span class="name-acc">Kieu hi</span>
                    </div>  
                </div>
                <div class="container"> <br><br>
                     <!-- Nút mở modal -->
                     <button type="button" class="btn bg-danger text-white" data-toggle="modal" data-target="#myModal">
                    Add +
                    </button>

                    <!-- Modal -->
                    <div id="myModal" tabindex="-1" role="dialog" class="modal fade" data-backdrop="static">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">FOMR ADD</h5>
                                <button type="button" name="close" class="close" data-dismiss="modal" aria-label="Đóng">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="post" class="form-form" action="them.php"> <br>
                                    <!-- <input type="hidden" name="action" value="add"> Trường ẩn để xác định hành động -->
                                    <input type="hidden" name="id" value="<?php echo $tv_2['id']; ?>">
                                    <label for="name" class="title-title" >Name:</label>
                                    <input type="text" class="input-btn" name="names" value="<?php echo $tv_2['names']; ?>"><br><br>
                                    <label for="price" class="title-title">Pice:</label>
                                    <input type="text" class="input-btn" name="price" value="<?php echo $tv_2['price']; ?>"><br><br>
                                    <label for="name" class="title-title">Photo:</label>
                                    <input type="file" class="input-btn" name="photo" value="<?php echo $tv_2['photo']; ?>"><br><br>
                                    <label for="name" class="title-title">Content:</label>
                                    <input  name="content" class="input-btn" value="<?php echo $tv_2['content'];?>"><br> <br> 
                                    <div class="modal-footer">
                                        <input type="submit" name='submit' class="btn bg-danger text-white" value="Thêm">
                                    </div>
                                </form>
                            </div>
                           
                            </div>
                        </div>
                    </div> 
                    <!-- table --> 

                    <div class="table-responsive">
                        <table class="table table-responsive" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Photo</th>
                                    <th>Content</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="tab">
                            <?php
                                $tv = "SELECT * FROM san_pham";
                                $tv_1=mysqli_query($conn,$tv);
                                if (mysqli_num_rows($tv_1) > 0) {
                                    while ($tv_2 = mysqli_fetch_array($tv_1)) {
                                        echo "<tr>";
                                        echo "<td>" . $tv_2['id'] . "</td>";
                                        echo "<td>" . $tv_2['names'] . "</td>";
                                        echo "<td>" . $tv_2['price'] . "</td>";
                                        echo "<td>" . $tv_2['photo'] . "</td>";
                                        echo "<td>" . $tv_2['content'] . "</td>";
                                        echo "<td><a href='edit.php?id=". $tv_2['id'] ."'>Sửa</a>| <a href='delete.php?id=". $tv_2['id'] ."'>Xóa</a></td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "Không có sản phẩm nào.";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
         <!--modal  -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </script>
</body>
</html>
