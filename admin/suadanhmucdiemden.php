<?php include_once 'inc/header.php'?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->

        <?php include_once 'inc/sidebar.php' ?>

        <!-- End of Sidebar -->



        <!-- Content Wrapper -->
        

                <!-- End of Topbar --> 

                 <!-- bắt đầu  Nội Dung -->
    <?php 
    include 'connect.php';
        $madm=$_GET["MALOAIDIEMDEN"];
        $sql = "select * from loaidiemden where MALOAIDIEMDEN='$madm'"; 
        $result= mysqli_query($conn,$sql);
        while ($row = mysqli_fetch_assoc($result))
        {
            
            $tendm =$row["TENLOAIDIEMDEN"];
        }
    ?>

         <div class="container" style="width:50%">
                    <h2 style="text-align:center">SỬA DANH MỤC DIEM DEN</h2>
                    <form action="xulysuadanhmucdiemden.php?MALOAIDIEMDEN=<?php echo $madm;?>" method="post">
                        
                        

                        <div class="form-group">
                        <label for="fullname">Sửa tên danh mục</label>
                        <input type="text" class="form-control"value="<?php echo $tendm;?>" id="fullname" placeholder="Tên danh mục" name="txt_tendmdiemden">
                        </div>
                        <button type="submit" class="btn btn-primary" name="btsua">Sửa</button>
                    </form>
            </div>            
            <?php include_once 'inc/footer.php' ?>