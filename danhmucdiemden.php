

<?php include_once 'inc/header.php'?>
<?php include_once 'inc/sidebar1.php'?>

					
		<div class="panel-body">
	<?php 
	
		 include 'connect.php';
		 $sql_dmct = "SELECT * FROM diemden WHERE diemden.MALOAIDIEMDEN= '$_GET[MALOAIDIEMDEN]' ORDER BY diemden.MADIEMDEN ASC"; 
		 $result= mysqli_query($conn,$sql_dmct);
		 $sql_dmten = "SELECT * FROM loaidiemden WHERE loaidiemden.MALOAIDIEMDEN= '$_GET[MALOAIDIEMDEN]' LIMIT 1"; 
		 $result_dm= mysqli_query($conn, $sql_dmten);



		 $tendmm= mysqli_fetch_array($result);
		 $tendmm2= mysqli_fetch_array($result_dm);

		
		?> 
		<h3> Danh mục: <?php echo $tendmm2['TENLOAIDIEMDEN'] ?> </h3>
		<?php while ($row_dmct1=$result->fetch_assoc()) {  ?>
		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="product_item">

                    <div class="product-image">
                        <a href="chitietdiemden.php?MADIEMDEN=<?php echo $row_dmct1['MADIEMDEN']; ?>"><img style="width:100%; height:150px;"
                                src="hinhanh/<?php echo $row_dmct1["HINHANH"]; ?>" alt="" class=""></a>
                    </div>
                    <p><a href="chitietdiemden.php?MADIEMDEN=<?php echo $row_dmct1['MADIEMDEN']; ?>"><?php echo $row_dmct1["TENDIEMDEN"];  ?>
                        </a></p>
                    <p class="gia_sanpham"> MO TA: <?php echo $row_dmct1['MOTA'] ?> </p>

                </div>
            </div>
            <?php } ?>
						
		</div>  
<?php
include 'inc/footer.php';
?>

