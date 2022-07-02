<?php include_once 'inc/header.php'?>
<?php include_once 'inc/sidebar1.php'?>

					
<div class="panel-body">
						  <?php 
						  	include 'connect.php';
							  $masp=$_GET["MADIEMDEN"];
							  $sql = "select * from diemden where MADIEMDEN='$masp'"; 
							  $result= mysqli_query($conn,$sql);
							  while($row_sql=$result->fetch_assoc()	){
						  ?>
						<div class="chitietsanpham">
									<div class="hinhanh_ctsanpham">
									<img  style="width:100%;" src="hinhanh/<?php echo $row_sql["HINHANH"]; ?>"> 
									</div> 

									<div class="ctsp">
										<h3>Tên bài viết: <?php echo $row_sql['TENDIEMDEN']?></h3>
										<h3>Mô tả:</h3>
										<p><?php echo $row_sql['MOTA']?><p>
									
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
										<?php
										include "inc/footer.php";
										?>
									


						
