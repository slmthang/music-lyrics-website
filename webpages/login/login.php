<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/styles2.css">
    <link rel="stylesheet" href="../../css/login.css">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Leckerli+One&display=swap" rel="stylesheet">
    <!-- end -->
    <link rel="icon" href="../../images/favicon.png">
    <title>Log In</title>
</head>
<body>

    <!-- <script>
        function closeWindow() {
            window.close();
        }
    </script> --> 

    <?php

        session_start();

        session_unset(); // remove all session variables

        session_destroy();
    ?>

    <?php include "../boilerplates/top-nav-bar.php"; ?>

    <main id="log-in-page">
        
        <div>
            <h1>Log In</h1> 
            <form id="log-in-form" method="POST" action="login-handler.php">
                <div class="input-div">
                    <input type="text" id="username" name="username" placeholder="username" required>
                </div>
                <div class="input-div">
                    <input type="password" id="password" name="password" placeholder="password" required>
                </div>

                <div id="login"> 
                    <input type="submit" value="Log In">
                </div>

            </form>

            <hr>

            <a href="./signup.php" style="text-decoration:none;">
                <button id="signup-button">Sign Up</button>
            </a>
        </div>

    </main>

    <?php include "../boilerplates/footer.php"; ?>
</body>
</html>