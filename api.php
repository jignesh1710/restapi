<?php
   header('Content-Type:application/json');
   header('Acess-Control-Allow-Origin: *');
//    header('Acess-Control-Allow-Methods: GET');
   include "connection.php";
   $select=mysqli_query($conn,"select * from tbl_insert");
   $row1=mysqli_fetch_assoc($select);
   if(mysqli_num_rows($select)>0)
   {
    $row = mysqli_fetch_all($select);
    // print_r($row);
    // print_r($row1);
    print_r(json_encode($row));
    // print_r(json_decode($row,true));
   }

//    while($row = mysqli_fetch_assoc($select)){
//     print_r(json_encode($row));
//    }

   
?>