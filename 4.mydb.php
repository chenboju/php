<?php
#mysqli_connec()建立資料庫
$conn=mysqli_connect("local","root","","mydb");
#mysqli_query()從資料庫查詢
$result-mysqli_query($cinn,"select*from user");
#mysqli_fetch_array()從查詢出來的資料一筆一筆抓出來#(*從所有欄位)
$row=mysqli_fetch_array($result);
echo $row["id"]." ".$row["pwd"];"<br>";

echo $row["id"]." ".$row["pwd"];"<br>";
?>