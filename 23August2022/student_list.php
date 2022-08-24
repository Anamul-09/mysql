<?php $db = new mysqli("localhost","root","","anamul");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<?php

    $sql = "SELECT * FROM students1";
    $result = $db->query($sql);
    ?>
    <table class="table table-striped">
        <tr>
            <th>Student_id</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Student_email</th>
            <th>student_phone</th>
            <th>Action</th>
        </tr>
   <?php
   
    while($data = $result->fetch_assoc()){?>
        <tr>
            <td><?php echo $data["student_id"]?></td>
            <td><?php echo $data["first_name"]?></td>
            <td><?php echo $data["last_name"]?></td>
            <td><?php echo $data["student_email"]?></td>
            <td><?php echo $data["student_phone"]?></td>
            <td>
                <!-- data delete -->
                <a href="student_list_delete.php?id=<?php echo $data['student_id']?>"><span class="glyphicon glyphicon-trash"></span></a>
                <!-- data edit -->
                <a href="student_list_edit.php?id=<?php echo $data['student_id']?>"><span class="glyphicon glyphicon-pencil"></span></a>
            
            </td>
        </tr>

   <?php } ?> 

</table>
<a href="student_data_entry.php">New data</a>
    
</body>
</html>