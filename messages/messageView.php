<?php
    $txtMsg = $msg->message;
    $userName = $msg->username;
    $date = $msg->date;
    $time = $msg->time;
    // id of user currently logged in
    $current_user_id = $_SESSION['id'];
    
    if ($current_user_id === $msg->user_id) {
        // right side of the messages box
        echo "<div class='right message'>";
        echo "<div class='user-msg' style='display: flex'>
            <p class='username'>$userName</p> 
            <p class='textmsg'>$txtMsg</p>
            </div>";
        echo "<p class='time'>$date $time</p>";
        echo "</div>";
    } else {
    // left side of the messages box
    echo "<div class='left message'>";
    echo "<div class='user-msg' style='display: flex'>
            <p class='username'>$userName</p> 
            <p class='textmsg'>$txtMsg</p>
            </div>";
    echo "<p class='time'>$date $time</p>";
    echo "</div>";
    }
    // echo $_SESSION['id'];
