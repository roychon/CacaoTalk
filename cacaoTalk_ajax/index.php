<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cacao Talk Ajax</title>
    <script defer src="ajax.js"></script>
</head>

<body>

    <button class="showMore">Show more</button>
    <div class="message-container"></div>
    <form action="insertMsg.php" method="POST">
        <label for="username">Username: </label>
        <input type="text" name="username" id="username" value=<?= $_SESSION['username']; ?> readonly>

        <label for="message">Message: </label>
        <input type="text" name="message" id="message">

        <input type="submit" value="Send">
    </form>

    <form action="signout.php" method="POST">
        <input type="submit" value="Sign Out">
    </form>
    

</body>

</html>

<?php
// CacaoTalk PseudoCode

/* 
    1. Create a form action="insertMsg.php" method="POST"
        2. Create 2 inputs
            a. username
            b. message
        3. Create a Submit button

    4. Create a div container to hold all the messages
        5. Connect to the DB
        6. SELECT all the messages from the table
        7. fetch WHILE looping
            8. insert messageView.php
*/