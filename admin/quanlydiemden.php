
<?php include_once 'inc/header.php'?>


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include_once 'inc/sidebar.php' ?>
        <form
            class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="timkiemsanpham.php" method="POST">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" name="noidung" placeholder="Tìm kiếm..."
                         aria-label="Search" aria-describedby="basic-addon2">
                     <div class="input-group-append">
                             <button class="btn btn-primary" type="submit" name="timkiem" value="Tìm kiếm">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
            <br> <br>
                <!-- End of Topbar --> 

                 <!-- bắt đầu  Nội Dung -->
                    
                 <table  class="table table-hover">
                    <tr >
                        <th> Mã diem den </th>  
                        <th> Ten diem den  </th> 
                        <th> Mo ta diem den  </th> 
                        <th> Hinh anh diem den </th> 
                        <th>Loai diem den</th>
                        <th>  <form action="themdiemden.php">
                            <button type="submit" class="btn btn-success" name="btsua1">Thêm</button>
                            </form>  </th>
                    </tr>
                            <?php 
                                include 'connect.php';
                                $sql = "select * from diemden,loaidiemden where diemden.MALOAIDIEMDEN = loaidiemden.MALOAIDIEMDEN"; 
                                $result = $conn-> query($sql); 
                                
                                if($result->num_rows>0)
                                {
                                    while ($row=$result->fetch_assoc())
                                        { 
                                        
                                            echo"<tr>";
                                            echo"<td>".$row["MADIEMDEN"]."</td>";
                                            echo"<td>".$row["TENDIEMDEN"]."</td>";
                                            echo"<td>".$row["MOTA"]."</td>";
                                            echo"<td><img style='width:50%;' src='../hinhanh/".$row["HINHANH"]."'/></td>";
                                            echo"<td>".$row["TENLOAIDIEMDEN"]."</td>";
                                            echo"<td>";
                                                ?> 
                                                <a onclick="return confirm('Bạn có thật sự muốn xóa sản phẩm này?')" href="xulyxoadiemden.php?MADIEMDEN=<?php echo $row["MADIEMDEN"];?>">Xóa</a>
                                                <?php   
                                            ?>
                                            <a href="suadiemden.php?MADIEMDEN=<?php echo $row['MADIEMDEN']; ?>">Sửa</a>
                                            <?php
                                                echo"</td>";

                                            echo"</tr>";
                                        
                                        }
                                }
                                else 
                                echo" 0 result ";
                            
                            ?> 
                        </table>


                   <!--  kết thúc Nội Dung -->  
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php include_once 'inc/footer.php' ?>