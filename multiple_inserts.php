<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiple inserts in sql using php</title>
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
    $sql = "INSERT INTO users (firstname, lastname, email) VALUES ('Janmay', 'Bhatt', 'dealslover999@gmail.com');";
    $sql .= "INSERT INTO users (firstname, lastname, email) VALUES ('Bhatt', 'Janmay', 'jfdbestfriends@gmail.com');";
    if ($connect->multi_query($sql) === TRUE)
    {
        echo "New record/s created succesfully";
    }
    else
    {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
    $connect->close();
    ?>
</body>
</html>