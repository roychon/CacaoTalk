<?php

// check if POST is empty or missing form data
if (empty($_POST) || empty($_POST['userName']) || empty($_POST['email']) || empty($_POST['pw']) || empty($_POST['pwConfirm'])) {
    header("Location: sign_up.php?error=1");
}

// check that regex matches
$pwRegex = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*[@$&]){8,30}/';
if (strlen($_POST['userName']) < 3 || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) || !preg_match($pwRegex, $_POST['pw']) || $_POST['pw'] !== $_POST['pwConfirm']) {
    header("Location: sign_up.php?error=2");
}


include 'connect.php';

$checkUser = $db->prepare("SELECT * FROM users WHERE username = :username");
$checkUser->execute(array(
    "username" => $_POST['userName']
));

$user = $checkUser->fetch();

// if user already exists, send them back to sign up page and tell them that the user already exists
if (!empty($user)) {
    header("Location: sign_up.php?error=2");
}


$req = $db->prepare("INSERT INTO users (username, password, email) VALUES (:username, :password, :email)");

$req->bindParam("username", $_POST['userName'], PDO::PARAM_STR);
$req->bindParam("password", password_hash($_POST['pw'], PASSWORD_DEFAULT), PDO::PARAM_STR);
$req->bindParam("email", $_POST['email'], PDO::PARAM_STR);

$req->execute();

header("Location: sign_in.php");