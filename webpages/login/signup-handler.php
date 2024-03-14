<?php
        // POST
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $userName = $_POST["username"]; // username
            $userEmail = $_POST["email"]; // user's email
            $userPassword = $_POST["password"]; // user's password
            
            $userPassword = "naslkfn29384na" . $userPassword; // added salt

            // hash user's password 
            $userPassword = password_hash($userPassword, PASSWORD_BCRYPT);  // using bcrypt hash function

            ########## SET UP PDO connection ##########
            $dsn = "mysql:host=localhost;dbname=thangs"; // dns
            $mysql_username = "root"; // username for mysql
            $mysql_password = "red781"; // password for mysql


            // make PDO connection
            $pdo = new PDO($dsn, $mysql_username, $mysql_password);

            // Throw a PDOException if a SQL error occurs
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            try {

                // sql 
                $sql = "INSERT INTO users VALUES(:username, :userpassword, :useremail)";

                // prepared statement
                $stmt = $pdo->prepare($sql); // prepare
                $stmt->bindParam(":username", $userName); // bind
                $stmt->bindParam(":userpassword", $userPassword); // bind
                $stmt->bindParam(":useremail", $userEmail); // bind
                $stmt->execute(); // execute

            } catch (PDOException $e) { // catch PDO connection errors

                if ($e->errorInfo[1] == 1062) {

                    die("<h1> Username or email already taken </h1>");
                } else {

                    $errMsg = $e->getMessage();
                    echo $errMsg;
                }
                
            }

            // go to log in page
            header("Location: ./login.php");
        }

    ?>