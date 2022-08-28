<?php $db = new mysqli('localhost','root','','anamul')?>

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


<table border="1">
        <tr>
            <th>student id</th>
            <th>student Name</th>
            <th>student email</th>
            <th>student phone</th>
            <!-- <th>Action</th> -->
        </tr>
        <?php
            $sql = "CALL GetStudents";
            $result = $db->query($sql);
            print_r($result);
            echo "<h2>Total rows $result->num_rows<h2> ";
            while($data = $result->fetch_array()){ ?>
                <tr>
                <td><?php echo $data["studentid"]; ?></td>
                <td><?php echo $data["studentname"]; ?></td>
                <td><?php echo $data["studentemail"]; ?></td>
                <td><?php echo $data["studentphone"]; ?></td>
                <!-- <td>
                    <a href="student_delete.php?id=<?php echo $data['studentid']?>" onclick="return confirm('Are you sure')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

                    <a href="student_delete.php?id=<?php echo $data['studentid']?>" ><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                </td> -->

               
            </tr>
            <?php  }
        ?>
    </table>
    <a href="student_entry.php">New data</a>
    
</body>
</html>