<?php
   header('Content-Type:application/json');
   header('Acess-Control-Allow-Origin: *');
   header('Acess-Control-Allow-Methods: POST');
   include "connection.php";
 $data=json_decode(file_get_contents("php://input"),true);
 print_r($data);
   $fname=$data['fname'];
   $lname=$data['lname'];
   $email=$data['email'];
   $pno=$data['pno'];
   $query="insert into tbl_insert (fname,lname,email,pno)values('{$fname}','{$lname}','{$email}','{$pno}')";
   $select=mysqli_query($conn,$query);
   // print_r($query);
   // print_r($select);
   if($select)
   {
      echo "Insert Data";

   }
   
  
   
?>