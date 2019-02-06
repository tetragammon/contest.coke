<?php

include_once('config.php');
include_once('header.php');
include_once('functions.php');

?>

<main role="main" class="inner cover">
<img src="img/coca-cola-logo-260x260.png" alt="..." class="rounded-circle">

<!-- Formular de inregistrare-->
<form method="POST" style="margin-top: 25px;"> 
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-8">
      <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Enter your email here">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Telephone</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputPassword3" name="tel_number"placeholder="Enter your telephone number here">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Code</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputPassword3" name="code"placeholder="Enter your code here">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-8">
      <div class="form-check" style="margin-left:15%">
        <input class="form-check-input" type="checkbox" id="gridCheck1" name="check">
        <label class="form-check-label" for="gridCheck1">
          I agree with the data provided!
        </label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-8">
      <button type="submit" class="btn btn-primary" name="register" style="margin-left:50%; background-color:#E61D2B; border-color:#E61D2B">Register!</button>
    </div>
  </div>
</form>
<!-- END of form-->
</main>


<?php

include_once('footer.php');

if(isset($_POST['register'])) {

  RegisterUser();
}

?>