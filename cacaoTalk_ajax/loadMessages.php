<?php

include 'db_connect.php';

$offset = $_GET['offset'];

$req = $db->prepare("SELECT messages.id, messages.message, users.username, messages.date_created FROM messages INNER JOIN users ON users.id = messages.user_id ORDER BY id DESC LIMIT :offset, 5");
$req->bindParam("offset", $offset, PDO::PARAM_INT);
$req->execute();

while ($msg = $req->fetch(PDO::FETCH_OBJ)) {
    if (!empty($msg->username) && !empty($msg->message)) {
        echo "<div class='single-msg-container'>";
        include 'messageView.php';
        echo "</div>";
    } else {
        continue;
    }
}


// $req = $db->prepare('SELECT * FROM messages ORDER BY id DESC LIMIT :offset, 5');
// $req->bindParam("offset", $offset, PDO::PARAM_INT);
// $req->execute();

// while ($msg = $req->fetch(PDO::FETCH_OBJ)) {
//     if (!empty($msg->username) && !empty($msg->message)) {
//         echo "<div class='single-msg-container'>";
//         include 'messageView.php';
//         echo "</div>";
//     } else {
//         continue;
//     }
// }