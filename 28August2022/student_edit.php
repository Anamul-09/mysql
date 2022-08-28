<?php $db = new mysqli('localhost','root','','anamul')?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Students Entry form</h2>
    <form action="" method="post">
        <label for="">ID :</label>
        <input type="number" name="id" placeholder="Enter your id" id=""><br>
        <label for="">Name :</label>
        <input type="text" name="name" placeholder="Enter your name"><br>
        <label for="">Email :</label>
        <input type="email" name="email" placeholder="Enter your email" id=""><br>
        <label for="">Phone :</label>
        <input type="text" name="phone" placeholder="Enter your phonenumber"><br>
        <input type="submit" value="UPDATE" name="submit">
    </form>

    <a href="students_list.php">Students list</a><br>

    
</body>
</html>

<?php

echo $id =$_REQUEST["id"];

$sql ="SELECT * FROM students1 WHERE studentid = '$id'";
$result =$db->query($sql);
    if(isset($_POST["submit"])){
        extract($_POST);
        // $id = $_POST["id"];
        // $name = $_POST["name"];
        // $email = $_POST["email"];
        // $phone = $_POST["phone"];

        // echo "ID :  $id <br> Name :$name <br> Email : $email <br> Phone : $phone";

        $sql = "INSERT INTO students1 VALUES('$id','$name','$email','$phone')";
        $db->query($sql);
        if($db->affected_rows>0){
            echo "Successfully inserted";
        };

    }

    
?>