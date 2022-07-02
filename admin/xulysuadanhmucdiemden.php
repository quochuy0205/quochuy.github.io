<?php 
include_once("connect.php"); 
if (isset($_POST["btsua"]))
{
    $madm = $_GET["MALOAIDIEMDEN"];
    $tendm = $_POST["txt_tendmdiemden"];
}
    $sql = "UPDATE loaidiemden SET TENLOAIDIEMDEN='$tendm' where MALOAIDIEMDEN='$madm'";
    if(mysqli_query($conn,$sql))
    {
        header("Location:quanlydanhmucdiemden.php");
    }
    else 
    {
        $result = "cập nhật chưa thành công". mysqli_error($conn);
    }
?> 