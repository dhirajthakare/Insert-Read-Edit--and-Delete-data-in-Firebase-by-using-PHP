<?php 
require_once('includes/connection.php');

if(isset($_POST['save_push_data']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $data = [
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
    ];

   $ref = "contact/";
   $postdata = $database->getReference($ref)->push($data);

   if($postdata){
        header("Location: insert.php");
    }else{
        header("Location: insert.php");
    }

}
