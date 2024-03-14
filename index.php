<!DOCTYPE html>
<html lang="us">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./css/styles.css">
        <link rel="stylesheet" href="./css/homepage.css">
        <script src="./scripts.js"></script>
        <!-- font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Leckerli+One&display=swap" rel="stylesheet">
        <!-- end -->
    </head>
    <body>
        
        <?php
            session_start();

            if (isset($_SESSION["username"])) {

                header("Location: webpages/homepage/homepage.php");

            } else {
                
                header("Location: webpages/login/login.php");
            }
        
        ?>   

    </body>
</html>