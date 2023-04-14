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
    $tv_2 = mysqli_fetch_array($tv_1);					
    }			
?>
<style>
  /* Modal */
    .input-btn{
        border-radius: 4px;
        border: none;
    }
    .input-btn:hover{
        border-radius: 4px;
    }
    .modal-header{
        background: #E00813;
    }
    .modal-title{
        color: #FFF;
    }
    .close{
        color: white;
        background: #E00813;
        border: none;
        font-size: 20px;
    }
    .modal-body{
        background: #0B1A2A;
    }
    .title-title{
        color: #FFF;
    }

</style>
<!-- Form sửa sản phẩm -->
<center>
    <!-- Modal -->
    <div id="myModal" tabindex="-1" role="dialog" class="modal fade" data-backdrop="static">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">FOMR ADD</h5>
                
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
</center>





