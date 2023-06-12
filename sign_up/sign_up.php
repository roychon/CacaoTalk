<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script defer src="sign_up.js"></script>
</head>
<body>
    <h1>Sign Up</h1>
    <form action="add_user.php" method="POST" id='signUpForm'>

        <p>
            <label for="name">Username: </label>
            <input type="text" name="userName" id="userName">
            <span>Enter a valid name</span>
        </p>

        <p>
            <label for="email">Email: </label>
            <input type="text" name="email" id="email">
            <span>Enter a valid email</span>
        </p>
        
        <p>
            <label for="pw">Password: </label>
            <input type="password" name="pw" id="pw">
            <span>Enter a valid password</span>
        </p>

        <p>
            <label for="pw-confirm">Confirm Password: </label>
            <input type="password" name="pwConfirm" id="pwConfirm">
            <span>Password does not match</span>
        </p>

        <p>
            <input type="submit" value="Sign Up">
        </p>

    </form>

    <p>Already have an account? <a href="sign_in.php">Sign in</a> here</p>

    <?php
        if (!empty($_GET['error'])) {
            switch($_GET['error']) {
                case 1:
                    echo "Invalid data, unable to add user";
                    break;
                case 2:
                    echo "User already exists";
                    break;
            }
        }
    ?>
</body>
</html>