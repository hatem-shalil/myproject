<?php
//echo 'Welcom';
    //include_once('./conn.php');
    $sql="SELECT * FROM users ORDER BY RAND() LIMIT 1";
    $result=mysqli_query($conn,$sql);
    //echo 'Error : '.mysqli_error($conn);
    $users=mysqli_fetch_all($result,MYSQLI_ASSOC);
   // echo $result;
    //include_once('./close.php');
    //include './close.php';
?>