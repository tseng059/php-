<?php
    // 開始會話
    session_start();
    
    // 如果計數器未被設置，則將其設置為 1
    if (!isset($_SESSION["counter"]))
        $_SESSION["counter"] = 1;
    else
        // 否則將計數器加 1
        $_SESSION["counter"]++;

    // 顯示計數器的值
    echo "counter=" . $_SESSION["counter"];
    echo "<br><a href='9.reset_counter.php'>重置counter</a>";
?>
