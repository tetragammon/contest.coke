<?php

include_once('config.php');
include_once('functions.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coca-Cola Contest</title>
    <!-- Font awesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
   <!-- Bootstrap core CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
   <!-- Specific CSS for this page -->
   <link href="style.css" rel="stylesheet">
</head>

<body class="text-center">
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
<main role="main" class="inner cover">
<img src="img/coca-cola-logo-260x260.png" alt="..." class="rounded-circle">

<!-- Formular de inregistrare-->
<form method="POST" style="margin-top: 25px;"> 
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">User</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputEmail3" name="email" placeholder="Enter your admin user here">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" id="inputPassword3" name="tel_number"placeholder="Enter password here">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-8">
      <button type="submit" class="btn btn-primary" name="signin" style="margin-left:50%; background-color:#E61D2B; border-color:#E61D2B">Sign in!</button>
    </div>
  </div>
</form>
<!-- END of form-->
</main>


<?php

include_once('footer.php');

if(isset($_POST['signin'])) {

    LoginAdminUser ();
}

?>