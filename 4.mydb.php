<?php
    # mysqli_connect() 建立資料庫連結
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
    # mysqli_query() 從資料庫查詢資料
    $result = mysqli_query($conn, "SELECT * FROM user");
    # mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
    $row = mysqli_fetch_array($result);
    // 顯示第一筆用戶資料
    echo $row["id"] . " " . $row["pwd"] . "<br>"; 
    // 抓取下一筆用戶資料
    $row = mysqli_fetch_array($result);
    // 顯示第二筆用戶資料
    echo $row["id"] . " " . $row["pwd"];
?>
