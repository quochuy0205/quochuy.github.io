
         <?php  
                        include 'connect.php';

                        $sql_tt="SELECT * FROM dondathang WHERE oder_code='$_GET[code]'";
                        $query_tt=mysqli_query($conn,$sql_tt);
                        $row_tt=mysqli_fetch_array($query_tt);

                    if(isset($_POST['sltrangthai']) && $row_tt['trangthai'] !=4 )
                    {
                        $sltrangthai=$_POST['sltrangthai'];
                        mysqli_query($conn,"UPDATE dondathang SET trangthai=$sltrangthai WHERE oder_code='$_GET[code]'");
                        header('Location:quanlydonhang.php');
                    }
                         
                        ?>  
<?php include_once 'inc/header.php'?>


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include_once 'inc/sidebar.php' ?>

                <!-- End of Topbar --> 

                <!-- bắt đầu  Nội Dung -->

               

                    <h1>Xác Nhận Đơn Hàng</h1>
                <?php 
                    include 'connect.php';
                    $sql_lietke_dh="SELECT * FROM chitietdonhang,chuyendi WHERE chitietdonhang.MACHUYENDI=chuyendi.MACHUYENDI 
                    AND chitietdonhang.oder_code='$_GET[code]'   ORDER BY chitietdonhang.mactdh DESC";
                    $query_lietke_dh = mysqli_query($conn,$sql_lietke_dh);

                ?> 
                        
                         <form action="" method="POST">
                              <div class="form-group">
                             <select class="form-control" id="sel1" name="sltrangthai" style="width:20%">
                                <option value="1" style="color:red">Chưa xác nhận</option>
                                <option value="2">Đã xác nhận</option>
         
                            </select>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Cập nhật trạng thái đơn hàng </a></button> 
                            
                        </form>
                       
                                 
                           

                <!--  kết thúc Nội Dung -->  
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once 'inc/footer.php' ?>