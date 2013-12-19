<?php
include('connect.php');
$id=$_GET['id'];
$result = $db->prepare("SELECT * FROM messages ORDER BY id ASC");
$result->execute();
for($i=0; $row = $result->fetch(); $i++){
echo '<div style="">' .$row['user'] . ' : '. $row['message'] .'<input type="submit" value="delete" name="'.$row['id'].'"/>'.'</div>';
}