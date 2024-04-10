<?php
    // 開始會話
    session_start();
    
    // 刪除計數器變數
    unset($_SESSION["counter"]);
    
    // 顯示重置成功消息
    echo "counter重置成功....";
    
    // 重定向到 8.counter.php，並在 2 秒後進行
    echo "<meta http-equiv='REFRESH' content='2; url=8.counter.php'>";
?>
