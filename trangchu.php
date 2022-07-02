<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web đặt tour du lịch</title>
</head>
<?php
include "inc/header.php";
 include "inc/sidebar1.php";
?>
<?php
	if(isset($_GET['trang']))
		{
			$page=$_GET['trang'];
		}
	else 
		{
			$page=null;
		}

	if($page==0|| $page==1)
		{
			$batdau=0;
		}
	else 
		{
			$batdau=($page*10)-10;
		}
       
?> 
<body>
<div class="row">
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title text-center"><img src="" alt=""><a href="" class='product_title'>Tất cả bài viết
                </a><img src="../upload/icon/new.gif" alt=""></h3>
        </div>
        <div class="panel-body">
            <?php 
                                include 'connect.php';
                          $sql = "SELECT * FROM diemden LIMIT $batdau,12"; 	
                                $result = $conn-> query($sql); 
								
								//$row=$result->fetch_assoc();
								// var_dump($result->fetch_all()); 
								?>

            <?php while ($row=$result->fetch_assoc()) {  ?>

            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="product_item">

                    <div class="product-image">
                        <a href="chitietdiemden.php?MADIEMDEN=<?php echo $row['MADIEMDEN']; ?>"><img
                                src="hinhanh/<?php echo $row["HINHANH"]; ?>" alt="" class=""></a>
                    </div>
                    <p><a href="chitietdiemden.php?MADIEMDEN=<?php echo $row['MADIEMDEN']; ?>"><?php echo $row["TENDIEMDEN"];  ?>
                        </a></p>

                </div>
            </div>
            <?php } ?>
        </div>
    </div>
	<?php

		$sql_trang = "SELECT * FROM diemden"; 	
		$result = $conn-> query($sql); 
		
		$row_count = mysqli_num_rows($result);
		$trang=ceil($row_count/3)
	
	?> 


	<ul class="list_trang"> 
		<?php
			for($i=1;$i<=$trang;$i++)
			{?>
			<li <?php if ($i==$page) { echo 'style="background:black"';} else {echo '';} ?>><a  href="trangchu.php?trang=<?php echo $i ?>"><?php echo $i ?></a></li>
			<?php } ?>

	</ul> 
</div>
</body>
<?php
include "inc/footer.php";
?>
</html>