<?php $db = new mysqli("localhost","root","","anamul")?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>input your information</h2>

<form action="" method="post">
    <label for=""> ID:</label><br>
    <input type="number" name="id" placeholder="Enter your id"><br><br>
    <label for="">First name :</label><br>
    <input type="text" name="fname" placeholder="Enter your firstName"><br><br>
    <label for="">Last name :</label><br>
    <input type="text" name="lname" placeholder="Enter your lastName"><br><br>
    <label for="">Email :</label><br>
    <input type="email" name="email" placeholder="Enter your email"><br><br>
    <label for="">Phone :</label><br>
    <input type="text" name="phone" placeholder="Enter your phone"><br><br>
    <input type="submit" value="Submit" name="submit">

</form>

<a href="student_list.php">Students list</a>

<?php
    if(isset($_POST["submit"])){
        extract($_POST);
        $sql = "INSERT INTO students1 VALUES ('$id','$fname','$lname','$email','$phone')";
        $db->query($sql);

        if($db->affected_rows>0){
            echo "<br>";
            echo "Data inserted successfully";
        }


    }

?>
    
</body>
</html>