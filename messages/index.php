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
    <title>Messages</title>
    <script defer src="ajax.js"></script>
</head>

<body>
    <h1>Welcome to Cacao Talk </h1>
    <section>
        <div class="outer-container">
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
        </div>

    </section>

</body>

</html>

<?php
