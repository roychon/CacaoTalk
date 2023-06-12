<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <!-- <script src="./sign_in.js"></script> -->

</head>

<body>
    <div class="outer">
        <div class="left">
            <h1 id="title">Cacao Talk 🍩</h1>
            <img src="img/bear3-removebg-preview.png" alt="Cacao Talk Bear">
        </div>
        <div class="right">

            <h1>Sign In</h1>
            <form action="check_user.php" method="POST" id='signUpForm'>
                <div>
                    <label for="name">Username: </label>
                    <p>
                        <input type="text" name="userName" id="userName">
                        <span class="hide-error">Length must exceed 3</span>
                    </p>
                </div>


                <div>
                    <label for="pw">Password: </label>

                    <p>
                        <input type="password" name="pw" id="pw">
                        <span class="hide-error">Invalid password</span>
                    </p>
                </div>

    
                <p>
                    <input type="submit" value="Sign In" id="submit">
                </p>

            </form>

            <p>Don't have an account? <a href="sign_up.php">Sign up</a> here</p>

            <?php
            if (!empty($_GET['error'])) {
                echo "<div class='error-msg'>";
                switch ($_GET['error']) {
                    case 1:
                        echo "Error: Wrong username or password";
                        break;
                    case 2:
                        echo "Error: Empty user";
                        break;
                }
            }
            echo "</div>";
            ?>
        </div>
    </div>
</body>

</html>