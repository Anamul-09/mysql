<?php 

    $db = new mysqli("localhost","root","","anamul");

    $id = $_GET['id'];
    $sql = "DELETE FROM students1 WHERE student_id=$id";

    $db->query($sql);

    if($db->affected_rows>0){
        // header("location:student_list.php?id=$id");
        echo "seccessfully done";
    }


?>