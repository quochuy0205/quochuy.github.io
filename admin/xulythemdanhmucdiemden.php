<?php
//ketnoicsdl
include_once("connect.php");

$madm=$tendm=""; 

$madm = $_POST["txt_madmdiemden"];
$tendm =$_POST["txt_danhmucdiemden"];

//ketnoicsdl
include_once("connect.php");

//viết câu truy vấn 

$sql= "insert into  loaidiemden(MALOAIDIEMDEN, TENLOAIDIEMDEN) values('$madm','$tendm')";
if ($conn->query($sql) === TRUE) {
header("location:quanlydanhmucdiemden.php");
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>