<?php  $db = new mysqli('localhost','root','','anamul')?>

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
    <h2>Students list table</h2>
    
    <table class="table table-striped">
    <tr>
        <th>Students_id</th>
        <th>Students_name</th>
        <th>Students_email</th>
        <th>Students_phone</th>
        <th>action</th>
    </tr>

    <?php 
        $sql = " SELECT * FROM students";
        $result = $db->query($sql);
    echo "<h2>Total record found $result->num_rows<h2>";
        // $data = $result->fetch_array();
        // print_r($result);

        while($data = $result->fetch_array()){ ?>
        <tr>
            <td><?php echo $data["student_id"]?></td>
            <td><?php echo $data["student_name"]?></td>
            <td><?php echo $data["student_email"]?></td>
            <td><?php echo $data["student_phone"]?></td>
            <td>
                     <!-- delete data -->
                 <a href="students_list_delete.php?id=<?php echo $data['student_id']?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a> 
                        <!-- Edit data -->
            <a href="student_edit.php?id=<?php echo $data['student_id']?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>

            </td> 
             <!-- <td><?php  var_dump($data['student_id']);?></td>  -->
       </tr>



     <?php   }
    
    ?>
 
    </table>

    <a href="student_entrys.php">New entry</a>

    <?php 
    
    ?>

    


    
</body>
</html>