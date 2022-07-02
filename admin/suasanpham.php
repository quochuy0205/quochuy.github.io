
<?php 
    include 'connect.php';

    $sql = "select * from chuyendi where MACHUYENDI= '$_GET[MACHUYENDI]' ";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);


        $sql = "select * from loaichuyendi";
        $danhmuc = mysqli_query($conn,$sql); 
        

        if (isset($_POST["btsuasp"]))
        {   
            $masp =mysqli_escape_string($conn,$_POST["masp"]);
            $madm = mysqli_escape_string($conn,$_POST["madm"]);
            $tensp =mysqli_escape_string($conn, $_POST["tensp"]);
            $gia =mysqli_escape_string($conn, $_POST["gia"]);
            $chitietsp =mysqli_escape_string($conn,$_POST["chitietsanpham"]);
            $anh = $_FILES['c_img']['name'];


            if($anh != null)
				{


				$path = "../hinhanh/";
				$tmp_name = $_FILES['c_img']['tmp_name'];
				$anh = $_FILES['c_img']['name'];

				move_uploaded_file($tmp_name,$path.$anh);
					$sql = "update chuyendi set HINHANH = '$anh' where MACHUYENDI ='$_GET[MACHUYENDI]'";
					mysqli_query($conn,$sql);
					header('location:danhsachsanpham.php');
				}

					$sql = "UPDATE chuyendi set MACHUYENDI = '$masp', MALOAICHUYENDI = '$madm', TENCHUYENDI = '$tensp' , GIA = '$gia', MOTACHUYENDI='$chitietsp' where MACHUYENDI = '$_GET[MACHUYENDI]' ";
					mysqli_query($conn,$sql);
					header('location:danhsachsanpham.php');

        }

	    
        

        ?>
<?php include_once 'inc/header.php'?>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
<?php include_once 'inc/sidebar.php' ?>
  
  
  
         <div class="container" style="width:50%">
                    <h2 style="text-align:center">Sửa Chuyến Đi </h2>
                    <form action="" method="POST" enctype="multipart/form-data">


                    <div class="form-group">
                        <label for="fullname">Mã Chuyến Đi</label>
                        <input type="text" class="form-control" value="<?php echo $row['MACHUYENDI'];?>" id="fullname" placeholder="Tên sản phẩm" name="masp" readonly>
                        </div>
                        
                         <div class="form-group">
                         <label for="fullname1">Danh Mục</label>
                        <select name="madm" class="form-control">
                        <?php
                            while($dm = mysqli_fetch_array($danhmuc)) {
                            echo "<option value='".  $dm['MALOAICHUYENDI']."'>" .  $dm['TENLOAICHUYENDI'] ."</option>";
                            }
                            ?>
                            </select>
                            </div>

                        <div class="form-group">
                        <label for="fullname">Tên Chuyến Đi</label>
                        <input type="text" class="form-control" value="<?php echo $row['TENCHUYENDI'];?>" id="fullname" placeholder="Tên sản phẩm" name="tensp">
                        </div>
                        

                        <div class="form-group">
                        <label for="address">Giá Chuyến Đi</label>
                        <input type="text" class="form-control" value="<?php echo $row['GIA'];?>" id="gia"  placeholder="Giá" name="gia">
                        </div>
                    
                        <div class="form-group">
                        <label for="comment">Chi Tiết Chuyến Đi</label>
                        <textarea class="form-control" value= "<?php echo $row['MOTACHUYENDI'];?>" rows="5" id="chitietsp" name="chitietsanpham"></textarea>
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