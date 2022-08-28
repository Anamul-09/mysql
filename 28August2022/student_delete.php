<?php
$db = new mysqli('localhost','root','','anamul');
$id = $_GET["id"];
$sql = "DELETE FROM students1 WHERE studentid =$id";

$db->query($sql);
if($db->affected_rows>0){
    header("Location:students_list.php");
};

?>