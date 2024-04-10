<?php
   # mysqli_connect() 建立資料庫連結
   $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
   # mysqli_query() 從資料庫查詢資料
   $result = mysqli_query($conn, "SELECT * FROM user");
   # mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   $login = FALSE;
   while ($row = mysqli_fetch_array($result)) {
     // 檢查用戶提交的帳號和密碼是否與資料庫中的任何一組帳號和密碼匹配
     if ($_POST["id"] == $row["id"] && $_POST["pwd"] == $row["pwd"]) {
       $login = TRUE;
       break; // 如果找到匹配的帳號和密碼，則停止迴圈
     }
   } 
   if ($login == TRUE)
     echo "登入成功";
   else
     echo "帳號/密碼 錯誤";
?>
