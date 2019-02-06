<?php

include_once('config.php');


//RegisterUser - este functie de introducere in baza de date a informatiilor din form

function RegisterUser () {

        $email = $_POST['email'];
        $numar = $_POST['tel_number'];
        $code = $_POST['code'];

       // $conn trebuie declarata globala pentru a putea fi folosita in interiorul functiei 
        global $conn;

    $insert = "insert into users(email,tel_number,registers) values ('$email','$numar','1')";

    if($conn->query($insert)){

        header("Location:succes.php");
    }

}


function LoginAdminUser () {

    $user = $_POST['email'];
    $password = $_POST['tel_number'];

    $sql = "select email,tel_number from users where email='$user' and tel_number='$password'";
    global $conn;
    $result = $conn->query($sql);

    if ($result->num_rows==1) {

        header("location:admin_page.php");
    }
}
?>