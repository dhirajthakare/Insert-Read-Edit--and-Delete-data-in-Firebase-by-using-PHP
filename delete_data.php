<?php 
require_once('includes/connection.php');

if(isset($_POST['delete_data']))
{
    $token=$_POST['ref'];

   $ref = "contact/".$token;
   $postdata = $database->getReference($ref)->remove();

   if($postdata){
        header("Location: insert.php");
    }else{
        header("Location: insert.php");
    }

}
