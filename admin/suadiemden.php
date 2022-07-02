
<?php 
    include 'connect.php';

    $sql = "select * from diemden where MADIEMDEN= '$_GET[MADIEMDEN]' ";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);


        $sql = "select * from loaidiemden";
        $danhmuc = mysqli_query($conn,$sql); 
        

        if (isset($_POST["btsuasp"]))
        {   
            $masp =mysqli_escape_string($conn,$_POST["madiemden"]);
            $madm = mysqli_escape_string($conn,$_POST["maloaidiemden"]);
            $tensp =mysqli_escape_string($conn, $_POST["tendiemden"]);
            $gia =mysqli_escape_string($conn, $_POST["motadiemden"]);
            $anh = $_FILES['c_img']['name'];


            if($anh != null)
				{


				$path = "../hinhanh/";
				$tmp_name = $_FILES['c_img']['tmp_name'];
				$anh = $_FILES['c_img']['name'];

				move_uploaded_file($tmp_name,$path.$anh);
					$sql = "update diemden set HINHANH = '$anh' where MADIEMDEN ='$_GET[MADIEMDEN]'";
					mysqli_query($conn,$sql);
					header('location:quanlydiemden.php');
				}

					$sql = "UPDATE diemden set MADIEMDEN = '$masp', MALOAIDIEMDEN = '$madm', TENDIEMDEN = '$tensp' , MOTA = '$gia' where MADIEMDEN = '$_GET[MADIEMDEN]' ";
					mysqli_query($conn,$sql);
					header('location:quanlydiemden.php');

        }

	    
        

        ?>
<?php include_once 'inc/header.php'?>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
<?php include_once 'inc/sidebar.php' ?>
  
  
  
         <div class="container" style="width:50%">
                    <h2 style="text-align:center">Sửa diem den: </h2>
                    <form action="" method="POST" enctype="multipart/form-data">


                    <div class="form-group">
                        <label for="fullname">Mã diem den</label>
                        <input type="text" class="form-control" value="<?php echo $row['MADIEMDEN'];?>" id="fullname" placeholder="  " name="madiemden" readonly>
                        </div>
                        
                         <div class="form-group">
                         <label for="fullname1">Danh mục</label>
                        <select name="maloaidiemden" class="form-control">
                        <?php
                            while($dm = mysqli_fetch_array($danhmuc)) {
                            echo "<option value='".  $dm['MALOAIDIEMDEN']."'>" .  $dm['TENLOAIDIEMDEN'] ."</option>";
                            }
                            ?>
                            </select>
                            </div>

                        <div class="form-group">
                        <label for="fullname">Tên diem den</label>
                        <input type="text" class="form-control" value="<?php echo $row['TENDIEMDEN'];?>" id="fullname" placeholder="Tên sản phẩm" name="tendiemden">
                        </div>
                        

                    
        
                        <div class="form-group">
                        <label for="comment">Mo ta diem den</label>
                        <textarea class="form-control" value= "<?php echo $row['MOTA'];?>" rows="5" id="chitietsp" name="motadiemden"></textarea>
                        </div>


                        <div class="form-group">
                        <label for="image">Hình Ảnh</label>
                        <input type="file" class="form-control" id="hinhanh" placeholder="Hình ảnh" name="c_img">
                        <td><img src="../hinhanh/<?php echo $row['HINHANH']; ?>" style="max-width: 100px;"></td>

                        </div>
                        <button type="submit" class="btn btn-primary" name="btsuasp">Sửa</button>
                    </form>
            </div>            
            <?php include_once 'inc/footer.php' ?>