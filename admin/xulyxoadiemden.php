<?php 
include_once("connect.php"); 
$masp=""; 
if(isset($_GET["MADIEMDEN"]))
    {
        $masp=$_GET["MADIEMDEN"]; 
        $sql="delete from diemden where MADIEMDEN='$masp'";
    } 

    if ($conn->query($sql) ===true )
    {
        header("Location:quanlydiemden.php");
    }
    else 
    {
        echo"Có lỗi khi xóa sản phẩm ".$conn->error;
    }
?> 