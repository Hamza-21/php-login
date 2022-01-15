<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Validate</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
      integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
      integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
      <?php
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
            if(isset($_POST['login'])) {
                $email = $_POST['email'];
                $password = $_POST['password'];

                $query = "SELECT * FROM login_test WHERE email = '$email'
                AND pass = '$password' LIMIT 1";

                $result = mysqli_query($conn, $query);

                if (mysqli_num_rows($result) == 1) {
                    $_SESSION['email'] = $email;
                    ?> 
                    <script>
                        alert('Logged in successfully');
                        window.location.replace('http://localhost/login/index.php');
                    </script><?php
                } else {
                    ?>
                    <script>
                        alert('please enter the correct password!');
                        window.location.replace('http://localhost/login/home.php');
                    </script>
                    <?php
                }

            }
        }

      ?>
    
  </body>
</html>
