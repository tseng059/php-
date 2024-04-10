<?php
    // 隱藏錯誤訊息
    error_reporting(0);
    
    // 開始會話
    session_start();
    
    // 如果未登入
    if (!$_SESSION["id"]) {
        // 顯示提示消息
        echo "請先登入";
        // 重定向到登入頁面，並在 3 秒後進行
        echo "<meta http-equiv='REFRESH' content='3; url=2.login.html'>";
    }
    // 如果已登入
    else {
        // 顯示歡迎消息和相關操作連結
        echo "歡迎, ".$_SESSION["id"]." [<a href='12.logout.php'>登出</a>] [<a href='18.user.php'>管理使用者</a>] [<a href='22.bulletin_add_form.php'>新增佈告</a>]<br>";
        
        // 建立資料庫連結
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        
        // 從資料庫查詢佈告資訊
        $result = mysqli_query($conn, "SELECT * FROM bulletin");
        
        // 顯示佈告資訊表格
        echo "<table border=2><tr><td></td><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";
        
        // 遍歷佈告資訊
        while ($row = mysqli_fetch_array($result)){
            echo "<tr><td><a href='26.bulletin_edit_form.php?bid={$row["bid"]}'>修改</a> 
            <a href='28.bulletin_delete.php?bid={$row["bid"]}'>刪除</a></td><td>";
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
    }
?>
