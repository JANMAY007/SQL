<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adding data into database</title>
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
    $sql = "INSERT INTO users (firstname, lastname, email) VALUES ('$fname', '$lname', '$email');";
    if ($connect->query($sql) === TRUE)
    {
        $last_id = $connect->insert_id;
        echo "New record created succesfully. Record ID is " . $last_id;
    }
    else
    {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
    $connect->close();
    ?>
</body>
</html>