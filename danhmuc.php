

<?php include_once 'inc/header.php'?>
<?php include_once 'inc/sidebar.php'?>

					
		<div class="panel-body">
	<?php 
	
		 include 'connect.php';
		 $sql_dmct = "SELECT * FROM chuyendi WHERE chuyendi.MALOAICHUYENDI= '$_GET[MALOAICHUYENDI]' ORDER BY chuyendi.MACHUYENDI ASC"; 
		 $result= mysqli_query($conn,$sql_dmct);
		 $sql_dmten = "SELECT * FROM loaichuyendi WHERE loaichuyendi.MALOAICHUYENDI= '$_GET[MALOAICHUYENDI]' LIMIT 1"; 
		 $result_dm= mysqli_query($conn, $sql_dmten);

		 $tendmm= mysqli_fetch_array($result);
		 $tendmm2= mysqli_fetch_array($result_dm);

		
		?> 
		<h3> Danh mục: <?php echo $tendmm2['TENLOAICHUYENDI'] ?> </h3>
		<?php while ($row_dmct=$result->fetch_assoc()) {  ?>
		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="product_item">

                    <div class="product-image">
                        <a href="chitietsanpham.php?MACHUYENDI=<?php echo $row_dmct['MACHUYENDI']; ?>"><img style="width:100%; height:150px;"
                                src="hinhanh/<?php echo $row_dmct["HINHANH"]; ?>" alt="" class=""></a>
                    </div>
                    <p><a href="chitietsanpham.php?MACHUYENDI=<?php echo $row_dmct['MACHUYENDI']; ?>"><?php echo $row_dmct["TENCHUYENDI"];  ?>
                        </a></p>
                    <p class="gia_sanpham"> Giá: <?php echo number_format( $row_dmct["GIA"],0,',','. ').'vnđ' ?> </p>

                </div>
            </div>
            <?php } ?>
						
		</div>
<?php 
include 'inc/footer.php';
?>

