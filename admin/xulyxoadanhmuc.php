<?php 
include_once("connect.php"); 
$madm=""; 
if(isset($_GET["MALOAICHUYENDI"]))
    {
        $madm=$_GET["MALOAICHUYENDI"]; 
        $sql="delete from loaichuyendi where MALOAICHUYENDI='$madm'";
    } 

    if ($conn->query($sql) ===true )
    {
        header("Location:quanlydanhmuc.php");
    }
    else 
    {
        echo"Có lỗi khi xóa sản phẩm ".$conn->error;
    }
?> 