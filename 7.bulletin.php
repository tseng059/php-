<?php
    // 隱藏錯誤訊息
    error_reporting(0);
    
    // 建立資料庫連結
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
    
    // 從資料庫查詢佈告資料
    $result = mysqli_query($conn, "SELECT * FROM bulletin");
    
    // 顯示表格標題
    echo "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";
    
    // 逐筆顯示佈告資料
    while ($row = mysqli_fetch_array($result)){
        echo "<tr><td>";
        echo $row["bid"];
        echo "</td><td>";
        echo $row["type"];
        echo "</td><td>"; 
        echo $row["title"];
        echo "</td><td>";
        echo $row["content"]; 
        echo "</td><td>";
        echo $row["time"];
        echo "</td></tr>";
    }
    
    // 顯示表格結尾
    echo "</table>";
?>
