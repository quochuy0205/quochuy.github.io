<?php include_once 'inc/header.php'?>
<?php include_once 'inc/sidebar.php'?>

					
<div class="panel-body">
						  <?php 
						  	include 'connect.php';
							  $masp=$_GET["MACHUYENDI"];
							  $sql = "select * from chuyendi where MACHUYENDI='$masp'"; 
							  $result= mysqli_query($conn,$sql);
							  while($row_sql=$result->fetch_assoc()	){
						  ?>
						<div class="chitietsanpham">
									<div class="hinhanh_ctsanpham">
									<img  style="width:100%;" src="hinhanh/<?php echo $row_sql["HINHANH"]; ?>"> 
									</div> 

									<div class="ctsp">
										<h3><?php echo $row_sql['TENCHUYENDI']?></h3>
										<h4>Giá: <?php echo number_format( $row_sql['GIA'],0,',','.').'vnđ'?><h4>
										<p>Mô tả: <?php echo $row_sql['MOTACHUYENDI']?><p>
										<form action="themgiohang.php?MACHUYENDI=<?php echo $row_sql['MACHUYENDI'];?>" method="POST">
										<?php if(isset($user['name'])) { ?>
  										<button type="submit" name="themgiohang" class="btn btn-info">Thêm vào giỏ hàng</button>
										</form>
										<?php }?>
									
									</div>
						</div>
						  <?php }?>
						  </div>
						</div>

										</br>										
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>										
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										</br>
										<?php
										include "inc/footer.php";
										?>
									


						
