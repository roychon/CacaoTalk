<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="./sign_in.js"></script>
</head>
<body>
    <h1>Sign In</h1>

    <form action="check_user.php" method="POST">
        <p>
            <label for="userName">Username: </label>
            <input type="text" name="userName" id="userName">
        </p>

        <p>
            <label for="pw">Password: </label>
            <input type="password" name="pw" id="pw">
        </p>

        <p>
            <input type="submit" value="Sign In">
        </p>
        
    </form>
    <?php
        if (!empty($_GET['error'])) {
            switch($_GET['error']) {
                case 1:
                    echo "Invalid username or email";
                    break;
                case 2:
                    echo "User is not found";
                    break;
            }
        }
    ?>
</body>
</html>