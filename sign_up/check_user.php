<?php

if (empty($_POST) || empty($_POST['userName']) || empty($_POST['pw'])) {
    header("Location: sign_in.php?error=1");
}

include 'connect.php';

$req = $db->prepare("SELECT * FROM users WHERE username = :username");

$req->execute(array(
    "username" => $_POST['userName']
));

$user = $req->fetch(PDO::FETCH_OBJ);

if (empty($user)) {
    header("Location: sign_in.php?error=2");
}

// valid user
if (password_verify($_POST['pw'], $user->password)) {
    session_start();
    $_SESSION['username'] = $user->username;
    $_SESSION['id'] = $user->id;
    header("Location: http://localhost/sites/sql/cacaoTalk_ajax/");
} else {
    header("Location: sign_in.php?error=1");
}