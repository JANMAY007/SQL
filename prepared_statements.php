<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prepared statements in sql using php</title>
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mywebsite";
    $connect = new mysqli($servername, $username, $password, $dbname);
    if ($connect->connect_error)
    {
        die("Connection failed: " . $connect->connect_error);
    }
    $statement = $connect->prepare("INSERT INTO users (firstname, lastname, email) VALUES (?, ?, ?);");
    $statement->bind_param("sss", $firstname, $lastname, $email);
    $firstname = "Janmay";
    $lastname = "Bhatt";
    $email = "dealslover999@gmail.com";
    $statement->execute();
    echo "New record created";
    $statement->close();
    $connect->close();
    ?>
</body>
</html>