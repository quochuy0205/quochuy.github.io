<?php 
include_once("connect.php"); 
$madm=""; 
if(isset($_GET["MALOAIDIEMDEN"]))
    {
        $madm=$_GET["MALOAIDIEMDEN"]; 
        $sql="delete from loaidiemden where MALOAIDIEMDEN='$madm'";
    } 

    if ($conn->query($sql) ===true )
    {
        header("Location:quanlydanhmucdiemden.php");
    }
    else 
    {
        echo"Có lỗi khi xóa sản phẩm ".$conn->error;
    }
?> 