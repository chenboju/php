<?php
    error_reporting(0);
    $conn=mysqli_connect("localhost","root","", "mydb");
    $result=mysqli_query($conn, "select * from bulletin");
    echo "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";
    while ($row=mysqli_fetch_array($result)){
        echo "<tr><td>";
         $row["bid"]; "</td><td>";
         $row["type"];"</td><td>"; 
        $row["title"]; "</td><td>";
         $row["content"]; "</td><td>";
         $row["time"];"</td></tr>";
    }
    echo "</table>"
?>