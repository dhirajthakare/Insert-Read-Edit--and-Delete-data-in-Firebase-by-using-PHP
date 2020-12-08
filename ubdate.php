
<?php
require_once('includes/connection.php');

if(isset($_POST['Update_data']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $token = $_POST['token'];

    $data = [
        'name' => $name,
        'email' => $email,
        'phone' => $phone
    ];

   $ref = "contact/".$token."/";
   $postdata = $database->getReference($ref)->update($data);

   if($postdata){
        header("Location: insert.php");
    }else{
        header("Location: insert.php");
    }

}