<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php include_once 'inc/header.php'?>
<?php include_once 'inc/sidebar.php'?>
<body>
<?php
                  include "connect.php";
                  if(isset($_GET['search'])){
                    $search_term = mysqli_real_escape_string($conn, $_GET['search']);
                  ?>
                  <h2 class="page-heading">Tìm kiếm các bài viết liên quan đến : <?php echo $search_term; ?></h2>
                  <div class="block">
          <div class="container">
            <div class="row g-3">
              <?php
              include "connect.php";
              $limit = 8;
              if (isset($_GET['page'])) {
                $page = $_GET['page'];
              } else {
                $page = 1;
              }
              $offset = ($page - 1) * $limit;
              $query = "SELECT * FROM loaichuyendi,chuyendi
              WHERE chuyendi.MALOAICHUYENDI = loaichuyendi.MALOAICHUYENDI 
              AND chuyendi.TENCHUYENDI LIKE '%{$search_term}%'";
              $query_run = mysqli_query($conn, $query);
              $check_faculty = mysqli_num_rows($query_run) > 0;

              if ($check_faculty) {
                while ($row = mysqli_fetch_array($query_run)) {
              ?>        
              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="product_item">

                    <div class="product-image">
                        <a href="chitietsanpham.php?MACHUYENDI=<?php echo $row['MACHUYENDI']; ?>"><img style="width:100%; height:150px;"
                                src="hinhanh/<?php echo $row["HINHANH"]; ?>" alt="" class=""></a>
                    </div>
                    <p><a href="chitietsanpham.php?MACHUYENDI=<?php echo $row['MACHUYENDI']; ?>"><?php echo $row["TENCHUYENDI"];  ?>
                        </a></p>
                    <p class="gia_sanpham"> Giá: <?php echo number_format( $row["GIA"],0,',','. ').'vnđ' ?> </p>

                </div>
            </div>
                  <?php
                }
              } else {
  
                echo "<h1>Không tìm thấy</h1>";
              }} ?>
</body>
</html>