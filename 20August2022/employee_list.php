<?php include_once("dbconfig.php")?>

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

    <!-- <div class="container">
        <table class="table table-striped">
            <tr>
                <th>Number</th>
                <th>Firs Name</th>
                <th>Last Name</th>
                <th>Email</th>
            </tr>
            <?php
            
            $sql = "SELECT * FROM employees";
            $result = $db->query($sql);
        
            while($data =$result->fetch_assoc()){
            ?>
            <tr>
                <td><?php echo $data["employeeNumber"]; ?></td>
                <td><?php echo $data["lastName"]; ?></td>
                <td><?php echo $data["firstName"]; ?></td>
                <td><?php echo $data["email"]; ?></td>
            </tr>
            <?php }?>

        </table>
    </div> -->

    <div class="container">
        <table class="table table-striped">
            <tr>
                <th>Employee name</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Email</th>
            </tr>

            <?php 
       $sql = "SELECT * FROM employees";
       $result = $db->query($sql);
       while ($data = $result->fetch_assoc()) {?>
            <tr>
                <td><?php echo $data["employeeNumber"]?></td>
                <td><?php echo $data["lastName"]?></td>
                <td><?php echo $data["firstName"]?></td>
                <td><?php echo $data["email"]?></td>
            </tr>
      <?php  }
        ?>

        </table>

     

    </div>
    
</body>
</html>