<?php

// 1. Write the HTML for a single comment
// 2. If $message->id is EVEN, create a left-side comment
// 3. If $message->id is ODD, create a right-side comment
// 4. Echo the PHP data from the DB for that comment
//     a. message
//     b. username
//     c. date & time

$txtMsg = $msg->message;
$userName = $msg->username;
$date = $msg->date_created;

if ($msg->id % 2 === 0) {
    echo "<div class='msg-and-username'><p class='username'>$userName</p><p class='msg'>$txtMsg</p></div>";
    echo "<p>$date</p>";
} else {
    echo "<div class='msg-and-username'><p class='username'>$userName</p><p class='msg'>$txtMsg</p></div>";
    echo "<p>$date</p>";
}
