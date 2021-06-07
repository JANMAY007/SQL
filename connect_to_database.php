<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connecting sql with php</title>
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $connect = new mysqli($servername, $username, $password);
    if ($connect->connect_error) {
        die("Connection failed" . $connect->connect_error);
    }
    echo "Connected succesfully";
    $connect->close();
    ?>
</body>
</html>