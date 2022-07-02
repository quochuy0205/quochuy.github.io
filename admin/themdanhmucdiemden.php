
<?php include_once 'inc/header.php'?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->

        <?php include_once 'inc/sidebar.php' ?>

        <!-- End of Sidebar -->

<div class="container">
                    <h2>Thêm danh mục điểm đến</h2>
                    <form action="xulythemdanhmucdiemden.php" method="post" style="width:50%">
                        <div class="form-group">

                        <label for="iduser">Mã danh mục điểm đến</label>
                        <input type="text" class="form-control" id="id" placeholder="mã danh mục" name="txt_madmdiemden">
                        </div>


                        <div class="form-group">
                        <label for="fullname">Tên danh mục điểm đến</label>
                        <input type="text" class="form-control" id="fullname" placeholder="Tên danh mục" name="txt_danhmucdiemden">
                        </div>
                        <button type="submit" class="btn btn-primary">Thêm</button>

                        
                    </form>
                    </div>           
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once 'inc/footer.php' ?>