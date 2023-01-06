<?php

include_once 'include/connection.php';
$id=$_GET['id'];
//echo $id;
$sql = "DELETE FROM criminal_record WHERE id= $id";
if(mysqli_query($conn, $sql)){
    echo "Criminal Case File Deleted.";
}
mysqli_close($conn);
?>