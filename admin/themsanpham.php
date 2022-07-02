
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
                    
                <div class="container">
                    <h2>Cập Nhật Chuyến Đi</h2>
                    <form action="xulithemsp.php" method="post" enctype="multipart/form-data" >
                        <div class="form-group">

                        <label for="fullname">Lựa chọn danh mục</label>
                        <select name="danhmuc" id="" class="form-control">
                            <?php
                            require_once "xulithemsp.php";
                            if($result_category ->num_rows > 0)
                            {                         
                                while($category_select = $result_category->fetch_assoc())
                                {

                                
                            ?>
                            <option  value="<?php echo $category_select["MALOAICHUYENDI"]?>"><?php echo $category_select["TENLOAICHUYENDI"]?></option>
                            <?php
                                }
                            }
                            ?>
                        </select>
                        </div>


                        <div class="form-group">
                        <label for="fullname">Tên chuyến đi</label>
                        <input type="text" class="form-control" id="fullname" placeholder="Tên Sản Phẩm" name="txt_tensp">
                        </div>
                        

                        <div class="form-group">
                        <label for="address">Giá chuyến đi</label>
                        <input type="text" class="form-control" id="address" placeholder="Giá" name="txt_gia">
                        </div>
                    

                        <div class="form-group">
                        <label for="comment">Chi Tiết chuyến đi</label>
                        <textarea class="form-control" rows="5" id="comment" name="txt_chitietsp"></textarea>
                        </div>

                        <div class="form-group">
                        <label for="image">Hình ảnh chuyến đi</label>
                        <input type="file" class="form-control" id="phone" placeholder="Hình ảnh" name="c_img">
                        </div>
                        


                        <button type="submit" class="btn btn-primary">Thêm</button>

                        
                    </form>
                    </div>

                   <!--  kết thúc Nội Dung -->  
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once 'inc/footer.php' ?>