<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updating</title>
</head>
<body>
    <?php
    $fname = value($_POST['fname']);
    $lname = value($_POST['lname']);
    $email = value($_POST['email']);
    function value($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mywebsite";
    $connect = new mysqli($servername, $username, $password, $dbname);
    if ($connect->connect_error)
    {
        die("Connection failed: " . $connect->connect_error);
    }
    $sql = "UPDATE users SET firstname = '$fname', lastname = '$lname', email = '$email' WHERE id = '$id';";
    if ($connect->query($sql) === TRUE)
    {
        header("location:delete.php?message=success&id" . $id);
    }
    else
    {
        echo "Error: Updating records <br>" . $connect->error;
    }
    $connect->close();
    ?>
</body>
</html>