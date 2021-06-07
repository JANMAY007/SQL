<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deleting records in sql using php</title>
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mywebsite";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    } 
    $id = $_GET["id"];
    $sql = "DELETE FROM users WHERE id='$id'";
    if ($conn->query($sql) === TRUE)
    {
        header("location:delete_records.php?message=delete");
    }
    else
    {
        echo "Error deleting record: " . $conn->error;
    }
    $conn->close();
    ?>
</body>
</html>