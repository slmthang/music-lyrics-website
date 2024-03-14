<?php 

    
    session_start();
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // values from submitted form
        $userName = $_POST["username"];
        $userPassword = $_POST["password"];

        $userPassword = "naslkfn29384na" . $userPassword; // added salt

        ################# SET UP FOR PDO connection ###############

        $dsn = "mysql:host=localhost;dbname=thangs"; // dns
        $mysql_username = "root"; // username for mysql
        $mysql_password = "red781"; // password for mysql

        // make PDO connection
        $pdo = new PDO($dsn, $mysql_username, $mysql_password);

        // Throw a PDOException if a SQL error occurs
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        
        try {

            // sql 
            $sql = "SELECT username,password FROM users WHERE username=:name";

            // prepared statement
            $stmt = $pdo->prepare($sql); // prepare
            $stmt->bindParam(":name", $userName); // bind
            $stmt->execute(); // execute

        } catch (PDOException $e) { // catch PDO connection errors

            if ($e->errorInfo[1] == 1062) {

                die("<h1> Username or email already taken </h1>");
            } else {

                $errMsg = $e->getMessage();
                echo $errMsg;
            }
            
        }

        ##########  VERIFY USERNAME & PASSWORD ##########
        $row = $stmt->fetch();

        if ($row["username"] == $userName and password_verify($userPassword, $row["password"])) { // verify password and usernames
            
            // session
            $_SESSION["username"] = $userName;
            
            // go to homepage
            header("Location: ../homepage/homepage.php");
            
        } else {

            die("Log In FAILED!!"); // log in failed
        }

    }

?>