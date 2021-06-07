<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DELETE in sql using php</title>
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
    if (isset($_GET['message']))
    {
        if ($_GET['message'] == "delete")
        {
            echo "Change completed <br>";
        }
    }
    $sql = "SELECT id, firstname, lastname, email FROM users";
    $result = $conn->query($sql);
    ?>
    <table width="300" border="1" cellspacing="1" cellpadding="1">
        <?php
        if ($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc())
            {    
        ?>		
        <tr>
            <td>ID</td>
            <td><?php echo $row["id"]; ?></td>
            <td>
                <a href="delete.php?id=<?php echo $row["id"] ?>">Delete</a>
                <br>
                <a href="update.php?id=<?php echo $row["id"] ?>">Update</a>
            </td>
        </tr>
        <tr>
            <td>First Name</td>
            <td><?php echo $row["firstname"]; ?></td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><?php echo $row["lastname"]; ?></td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo $row["email"]; ?></td>
            <td>&nbsp;</td>
        </tr> 
        <?php	
            } 
        ?>
    </table>	
        <?php	
            }
            else
            {
                echo "0 results";
            }   
        $conn->close();
    ?>
</body>
</html>