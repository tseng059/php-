<?php 
    // 如果帳號是 "john"，並且密碼是 "john1234"，則顯示 "登入成功"
    if ($_POST["id"] == "john" && $_POST["pwd"] == "john1234")
        echo "登入成功";
    // 否則顯示 "登入失敗"
    else
        echo "登入失敗";
?>
