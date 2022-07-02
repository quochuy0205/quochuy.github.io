
<?php include 'inc/header.php' ?>


<div id="content">
    <div class="container clearpadding" >
        <div>
        </br>
        <h4 style="color:SteelBlue"> Danh sách đơn hàng </h4>
        <div class="panel-body">
        <?php 
						include 'connect.php';
						$sql_lietke_dh="SELECT * FROM dondathang,nguoidung WHERE dondathang.mand=nguoidung.mand AND nguoidung.mand=$user[mand] ORDER BY madh DESC";
						$query_lietke_dh = mysqli_query($conn,$sql_lietke_dh);

					?> 
					<table class="table table-hover" style="align:center">
									<thead style="align:center">
										<th>STT</th>
										<th>Mã đơn hàng</th>
										<th>Tên khách hàng</th>
										<th>Địa chỉ </th>
										<th>Số điện thoại</th>
										<th>Ghi chú</th>
										<th>Trạng thái</th>

									</thead>
										
							<?php
								$i=0;
								while($row=mysqli_fetch_array($query_lietke_dh))
									{
										$i++;							
							?> 
							
									<tbody>
										<tr>
											<td><?php echo $i ?> </td> 
											<td><?php echo $row['oder_code'] ?> </td>
											<td><?php echo $row['name']?> </td> 
											<td><?php echo $row['diachi']?> </td> 
											<td><?php echo $row['phone']?> </td> 
											<td><?php echo $row['ghichu']?> </td> 
											<td>
												<?php
													if($row['trangthai']==1) 
													 echo "Chưa xác nhận";
													else if($row['trangthai']==2) 
													echo"Đã xác nhận";
												?>
											</td> 

											<td><a href="camonchitiet.php?code=<?php echo $row['oder_code'] ?>">xem chi tiết</a> </td> 


 

										</tr> 
									</tbody>
									<?php } ?>

								</table>
								
 <div id="footer">
    <div class='container'>
        <div class="row">
                <div class="col-md-6">
                    <address>
                    <strong>Công Ty Du Lịch HNC</strong><br>
              <span class="glyphicon glyphicon-home" aria-hidden="true"></span> Địa chỉ: Phạm Ngũ Lão - K4 - P1 - TP.Trà Vinh<br>
              <span class="glyphicon glyphicon-phone" aria-hidden="true"></span> Điện thoại: 0794397294<br>
                    </address>
                
        </div>
    </div>
</div>
</div>
<script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>