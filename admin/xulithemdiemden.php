<?php
//ketnoicsdl
include_once("connect.php");

$masp=$madm=$tensp=$gia=$chitietsp=$hinhanh=""; 


$madm =$_POST["danhmuc"];
$tensp = $_POST["txt_tendiemden"];
$gia =$_POST["txt_motadiemden"];
$hinhanh = $_FILES['c_img']['name'];
//ketnoicsdl

//viết câu truy vấn 
if($hinhanh != null)
{
    $path ="../hinhanh/";
    $tmp_name = $_FILES['c_img']['tmp_name'];
    $hinhanh=$_FILES['c_img']['name'];
    move_uploaded_file ($tmp_name, $path.$hinhanh);
  

$sql= "insert into diemden(MADIEMDEN, MALOAIDIEMDEN, TENDIEMDEN, MOTA,HINHANH) values('$masp','$madm','$tensp','$gia','$hinhanh')";
if ($conn->query($sql) === TRUE) {
header("location:quanlydiemden.php");
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
} 
}
$sql_category = "SELECT MALOAIDIEMDEN, TENLOAIDIEMDEN FROM loaidiemden";
$result_category = $conn->query($sql_category);


$conn->close();
?>
