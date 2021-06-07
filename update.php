<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updating records in sql using php</title>
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
    $id = $_GET["id"];
    $sql = "SELECT * FROM users WHERE id = '$id'";
    $result = $connect->query($sql);
    if ($result->num_rows > 0)
    {
        while ($row = $result->fetch_assoc())
        {
            $fname = $row['firstname'];
            $lname = $row['lastname'];
            $email = $row['email'];
        }
    }
    else
    {
        echo "0 results";
    }
    ?>
    <form action="update_records.php" method="post">
        <table width="300" cellspacing="1" cellpadding="1">
            <tr>
                <td>First Name:</td>
                <td><input type="text" name="fname" id="fname" value="<?php echo $fname;?>"></td>
            </tr>
            <tr>
                <td>Last Name:</td>
                <td><input type="text" name="lname" id="lname" value="<?php echo $lname;?>"></td>
            </tr>
            <tr>
                <td>E-mail:</td>
                <td><input type="email" name="email" id="email" value="<?php echo $email;?>"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" value="update"></td>
            </tr>
        </table>
        <input type="hidden" name="id" value="<?php echo $id;?>">
    </form>
    <?php
    $connect->close();
    ?>
</body>
</html>