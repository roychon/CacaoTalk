<?php
session_start();
include 'db_connect.php';

$offset = $_GET['offset'];

$req = $db->prepare(
    "SELECT messages.user_id, messages.message, users.username, users.id , DATE_FORMAT(DATE(messages.date_created), '%M %e, %Y') AS date, DATE_FORMAT(messages.date_created,'%I:%i %p') AS time 
    FROM messages 
    INNER JOIN users ON users.id = messages.user_id 
    ORDER BY messages.id DESC 
    LIMIT :offset, 5");
$req->bindParam("offset", $offset, PDO::PARAM_INT);
$req->execute();

while ($msg = $req->fetch(PDO::FETCH_OBJ)) {
    if ($msg) {
        include 'messageView.php';
    } else {
        continue;
    }
}