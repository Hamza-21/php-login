<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <?php
        $name = $_POST['name_user'];
        $email = $_POST['email'];
        $password = $_POST['pass'];
        $confirm = $_POST['confirm_pass'];

        if (($password != $confirm) || (strlen($password) > 15)) {
            header('Location: register.php');
        } else {
            //Access the db
            $host = 'localhost';
            $dbUsername = 'root';
            $dbPassword = '';
            $dbName = 'test';

            //connection to the db
            $conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbName);
            if (!$conn) {
                die('Connection failed!'.mysqli_connect_error());
            } else {
                $select = mysqli_query($conn, "SELECT * FROM login_test WHERE email = '$email'");
                $insert = "INSERT INTO login_test (name_user, email, pass, confirm_pass) VALUES (?, ?, ?, ?)";
                if(mysqli_num_rows($select)) { ?>
                <script>
                    alert('Account already registered with this email address!');
                    window.location.replace('http://localhost/login/register.php');
                </script><?php
                } else {
                    $stmt = $conn->prepare($insert);
                    $stmt->bind_param("ssss", $name, $email, $password, $confirm);
                    $stmt->execute();
                    ?>
                    <script>
                        alert('Account Created Successfully!');
                        window.location.replace('http://localhost/login/index.php');
                    </script><?php
                    $_SESSION['email'] = $email;
                }
                $stmt->close();
                $conn->close();
            }
        }
    ?>
</body>
</html>