<?php

    $db =new mysqli("localhost","root","","wdpf51_exam");

?>

<?php

if(isset($_POST['submit'])){
    $id = $_POST['manu_id'];
    echo $id;
    $sql = "DELETE FROM manufacturer WHERE id = '$id'";

    $db->query($sql);
    if($db->affected_rows>0){
        echo "deleted";
    }
}

?>

<form action="" method="post">
    <select name="manu_id" id="">
        <option value="" disabled selected>Select once</option>
</form>
    <?php

        $sql ="SELECT * FROM manufacturer";
        $result = $db->query($sql);
        while ($row = $result->fetch_assoc()) { ?>
    <tr>
       <option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>
            
      <?php  } ?>

  
      </select>
      <input type="submit" value="DELETE" name="submit">
    </form>
   
    <a href="products.php">product file</a>