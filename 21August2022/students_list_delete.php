<?php

   $db = new mysqli("localhost","root","","anamul");
   $id = $_GET['id'];

//    echo $id;

   $sql = "DELETE FROM students WHERE student_id=$id";

   $db->query($sql);

   if($db->affected_rows>0){
        header("Location:students_list.php");
   } 

    // $db = new mysqli("localhost", "root", "", "anamul");

    // $id = $_GET['id'];
    // $db->query("DELETE FROM students WHERE student_id=$id");
    // if($db->affected_rows > 0){
    //     header("Location:students_list.php");
    //     // echo "delete seccess";
    // }

?>

