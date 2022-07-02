
<?php include 'inc/header.php' ?>


<div id="content">
    <div class="container clearpadding" >
        <div>
        </br>
        <h4 style="color:SteelBlue"> Danh sách đơn hàng </h4>
        <div class="panel-body">
     
               


        <?php 
                    include 'connect.php';
                    $sql_lietke_dh="SELECT * FROM chitietdonhang,chuyendi WHERE chitietdonhang.MACHUYENDI=chuyendi.MACHUYENDI 
                    AND chitietdonhang.oder_code='$_GET[code]'  ORDER BY chitietdonhang.mactdh DESC";
                    $query_lietke_dh = mysqli_query($conn,$sql_lietke_dh);

                ?> 
                <table class="table table-hover" style="align:center">
                                <thead style="align:center">
                                    <th>STT</th>
                                    <th>Mã đơn hàng</th>
                                    <th>Tên chuyen di </th>
                                    <th>Số lượng </th>
                                    <th>Giá</th>
                                    <th>Thành tiền </th>        
                                </thead>
                                    
                    
                        
                                <tbody>
                                <?php
                            $i=0;
                            $tongtien1=0;
                            while($row=mysqli_fetch_array($query_lietke_dh))
                                {
                                    $i++;
                                    $tongtien1 +=  $row['GIA']*$row["soluongmua"];
                                    
                        
                        ?> 
                                    <tr>
                                        <td><?php echo $i ?> </td> 
                                        <td><?php echo $row['oder_code'] ?> </td>
                                        <td><?php echo $row['TENCHUYENDI']?> </td> 
                                        <td><?php echo $row['soluongmua']?> </td> 
                                        <td> <?php echo number_format( $row['GIA'],0,',','.').'vnđ'  ?></td>
                                        <td> <?php echo number_format( $row['GIA']*$row["soluongmua"],0,',','.').'vnđ'  ?></td>
                                    </tr> 
                                    <?php } ?>
                                    <tr>
										<td> <strong>Tổng tiền:</strong>    <?php echo number_format($tongtien1,0,',','.').'vnđ' ?>  </td>
									</tr>
                                    
                                </tbody>
                                
                            
                              

                            </table>
								
 
<script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>