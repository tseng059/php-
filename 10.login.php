<?php
   // 建立資料庫連結
   $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
   
   // 從資料庫查詢用戶資料
   $result = mysqli_query($conn, "SELECT * FROM user");
   
   // 設置登入狀態初始值為 FALSE
   $login = FALSE;
   
   // 遍歷資料庫中的每個用戶資料
   while ($row = mysqli_fetch_array($result)) {
     // 檢查用戶提交的帳號和密碼是否與資料庫中的任何一組帳號和密碼匹配
     if ($_POST["id"] == $row["id"] && $_POST["pwd"] == $row["pwd"]) {
       // 如果匹配成功，設置登入狀態為 TRUE
       $login = TRUE;
       break; // 停止迴圈
     }
   } 
   
   // 如果登入成功
   if ($login == TRUE) {
    // 開始會話
    session_start();
    // 將用戶帳號存儲在會話中
    $_SESSION["id"] = $_POST["id"];
    // 顯示登入成功消息
    echo "登入成功";
    // 重定向到佈告板頁面，並在 3 秒後進行
    echo "<meta http-equiv='REFRESH' content='3; url=11.bulletin.php'>";
   }
   // 如果登入失敗
  else {
    // 顯示帳號/密碼錯誤消息
    echo "帳號/密碼 錯誤";
    // 重定向到登入頁面，並在 3 秒後進行
    echo "<meta http-equiv='REFRESH' content='3; url=2.login.html'>";
  }
?>
