<?php 
include_once("connect.php"); 
if (isset($_POST["btsua"]))
{
    $madm = $_GET["MALOAICHUYENDI"];
    $tendm = $_POST["txt_tendm"];
}
    $sql = "UPDATE loaichuyendi SET TENLOAICHUYENDI='$tendm' where MALOAICHUYENDI='$madm'";
    if(mysqli_query($conn,$sql))
    {
        header("Location:quanlydanhmuc.php");
    }
    else 
    {
        $result = "cập nhật chưa thành công". mysqli_error($conn);
    }
?> 