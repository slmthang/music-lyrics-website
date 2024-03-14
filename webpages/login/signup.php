<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/styles2.css">
    <link rel="stylesheet" href="../../css/signup.css">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Leckerli+One&display=swap" rel="stylesheet">
    <!-- end -->
    <link rel="icon" href="../../images/favicon.png">
    <title>Sign Up</title>
</head>
<body>
    
    <?php include "../boilerplates/top-nav-bar.php"; ?>

    <main>
        <div id = "l">
            <h1>Sign Up</h1>
            <form id="sign-up-form" method="POST" action="signup-handler.php">
                <div>
                    <input type="text" id="username" name="username" placeholder="username" minlength="1" required>
                </div>
                <div>
                    <input type="email" id="email" name="email" minlength="2" placeholder="email" minlength="9" required>
                </div>
                <div>
                    <input type="password" id="password" name="password" placeholder="password" minlength="6" required>
                </div>
                <div>
                    <input type="submit" value="Sign Up">
                </div>
            </form>
        </div>
    </main>

    <?php include "../boilerplates/footer.php"; ?>

</body>
</html>