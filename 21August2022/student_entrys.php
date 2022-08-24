<?php $db = new mysqli('localhost','root','','anamul') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
    <input type="number" name="id" placeholder="Enter your id" id=""><br>
    <input type="text" name="name" placeholder="Enter your name" id=""><br>
    <input type="email" name="email" placeholder="Enter your email" id=""><br>
    <input type="text" name="phone" placeholder="Enter your number" id=""><br>
    <input type="submit" value="Submit" name="submit">
</form>
 <a href="students_list.php">students list</a>

<?php

    if(isset($_POST["submit"])){
        // extract($_POST); OR
        
        $id = $_POST["id"];
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];

        $sql="INSERT INTO students VALUES ('$id','$name','$email','$phone')";
        $db->query($sql);
        print_r($id);

        if($db->affected_rows>0){
            echo "Successfully inserted";
        }

    }

?>
    
</body>
</html>