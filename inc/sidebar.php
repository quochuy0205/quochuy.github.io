<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 clearpadding" style="margin-top: 15px;">
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 clearpaddingl">
					<div class="panel panel-info" style="margin-bottom: 5px;">
						<div class="panel-heading">
						    <h3 class="panel-title">Tìm kiếm</h3>
						</div>

						<div class="search-box-container">
       			 <form class="search-post" action="timkiem.php" method ="GET">
           		 <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Nhập nội dung...">
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-danger">Tìm kiếm</button>
                </span>
            </div>
        </form>
   		 </div>
					</div>
					<div class="panel panel-info">
					  <div class="panel-body" style="padding:0px">
					  	<div class="list-group">
						  <a href="#" class="list-group-item active">
						   Loại chuyến đi
						  </a>
                          <?php
						  include 'connect.php';
						  $sql = "SELECT * FROM loaichuyendi ORDER BY MALOAICHUYENDI ASC"; 
						  $result= mysqli_query($conn,$sql);

                             while($row_dm=$result->fetch_assoc()	) {
                            ?>
                              <a href="danhmuc.php?MALOAICHUYENDI=<?php echo $row_dm['MALOAICHUYENDI'] ?>" class="list-group-item"><?php  echo $row_dm['TENLOAICHUYENDI']?></a>
                            <?php }
                           ?>
						 
						</div>
					  </div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 clearpaddingr">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 clearpadding">
						<ol class="breadcrumb">
						  <li><a href="trangchu.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Trang chủ</a></li>
						  <li><a href="#">Danh mục sản phẩm</a></li>
						</ol>
						<div class="panel panel-info " style="margin-bottom: 15px">
						  <div class="panel-heading">
						    <h3 class="panel-title">Xem chi tiết sản phẩm</h3>
						  </div>
						</div>