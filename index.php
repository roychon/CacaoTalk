<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./sign_up/style.css">
    <script defer src="./sign_up/sign_up.js"></script>
</head>
<body>
    <div class="outer">
        <div class="left">
            <h1 id="title">Cacao Talk 🍩</h1>
            <img src="./sign_up/img/bear3-removebg-preview.png" alt="Cacao Talk Bear">
        </div>
        <div class="right">
    
        <h1>Sign Up</h1>
        <form action="add_user.php" method="POST" id='signUpForm'>
            <div>
                <label for="name">Username: </label>
                <p>
                    <input type="text" name="userName" id="userName">
                    <span class="hide-error">Length must exceed 3</span>
                </p>
            </div>
    
            <div>
                <label for="email">Email: </label>
                <p>
                    <input type="text" name="email" id="email">
                    <span class="hide-error">Invalid email</span>
                </p>
            </div>  
            
            <div>
                <label for="pw">Password: </label>

                <p>
                    <input type="password" name="pw" id="pw">
                    <span class="hide-error">Invalid password</span>
                </p>
            </div>
    
            <div>
                <label for="pw-confirm">Confirm Password: </label>

                <p>
                    <input type="password" name="pwConfirm" id="pwConfirm">
                    <span class="hide-error">Password does not match</span>
                </p>
            </div>
    
            <p>
                <input type="submit" value="Sign Up" id="submit">
            </p>
    
        </form>
    
        <p>Already have an account? <a href="./sign_up/sign_in.php">Sign in</a> here</p>
    
        <?php
            if (!empty($_GET['error'])) {
                echo "<div class='error-msg'>";
                switch($_GET['error']) {
                    case 1:
                        echo "Error: Invalid data, unable to add user";
                        break;
                    case 2:
                        echo "Error: User already exists";
                        break;
                }
            }
            echo "</div>";
        ?>
        </div>
    </div>
</body>
</html>