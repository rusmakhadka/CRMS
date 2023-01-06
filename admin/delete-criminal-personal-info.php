<?php

include_once 'include/connection.php';
$id=$_GET['id'];
//echo $id;
$sql = "DELETE FROM criminal_personal_info WHERE id= $id";
if(mysqli_query($conn, $sql)){
    echo "Criminal Personal Record Deleted.";
}
mysqli_close($conn);
?>