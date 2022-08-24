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

    <?PHP  
    // $id =$_GET['id'];
    // $sid ="SELECT * FROM students1 WHERE student_id=$id";
    // $db->fetch_

    $id1 = $_GET['id'];
    $sid = "SELECT * FROM students1 WHERE student_id='$id1'";
    $result = $db->query($sid);
    $data = $result->fetch_assoc();

    //  print_r($data );

    ?>
    <h2>Edit information</h2>

    <form action="" method="post">
    <label for="">Student Id :</label>
    <input type="number" name="id" value="<?php echo $data["student_id"]?>" ><br><br>
    <label for="">Fast Name :</label>
    <input type="text" name="fname" value="<?php echo $data["first_name"]?>"  ><br><br>
    <label for="">Last Name :</label>
    <input type="text" name="lname" value="<?php echo $data["last_name"]?>"  ><br><br>
    <label for="">Student Email :</label>
    <input type="email" name="email" value="<?php echo $data["student_email"]?>"  ><br><br>
    <label for="">Student Phone :</label>
    <input type="text" name="phone" value="<?php echo $data["student_phone"]?>"  ><br><br>
    <input type="submit" value="Update" name="submit">
    </form>

    <?php 
    
        if(isset($_POST["submit"])){
            extract($_POST);

          $sql = " UPDATE students1 SET `student_id`='$id',`first_name`='$fname',`last_name`='$lname',`student_email`='$email',`student_phone`='$phone' WHERE student_id=$id1";
          $db->query($sql);

          if($db->affected_rows > 0){
            header("location:student_list.php?id=$id1");
          }

        }
    
    ?>
    
</body>
</html>