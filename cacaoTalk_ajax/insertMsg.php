<?php
session_start();
include 'db_connect.php';

if (isset($_POST['username']) && isset($_POST['message'])) {
    $req = $db->prepare('INSERT INTO messages (user_id, message, date_expire) VALUES (:userid, :message, DATE_ADD(NOW(), INTERVAL 2 MONTH))');
    $req->execute(array(
        "userid" => $_SESSION['id'],
        "message" => $_POST['message']
    ));
}

header("Location: index.php");
