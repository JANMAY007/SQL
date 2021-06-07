<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DISTINCT in sql using php</title>
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
    $sql = "SELECT DISTINCT firstname FROM users;";
    $result = $connect->query($sql);
    if ($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
            echo "Name: " . $row["firstname"] . "<br>";
        }
    }
    else
    {
        echo "0 results";
    }
    $connect->close();
    ?>
</body>
</html>