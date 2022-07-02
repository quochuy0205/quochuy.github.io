<?php 
include_once("connect.php"); 
$masp=""; 
if(isset($_GET["MACHUYENDI"]))
    {
        $masp=$_GET["MACHUYENDI"]; 
        $sql="delete from chuyendi where MACHUYENDI='$masp'";
    } 

    if ($conn->query($sql) ===true )
    {
        header("Location:danhsachsanpham.php");
    }
    else 
    {
        echo"Có lỗi khi xóa sản phẩm ".$conn->error;
    }
?> 