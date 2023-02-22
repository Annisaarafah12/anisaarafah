<?php 
include "boot.php";
?>
<link rel="stylesheet" href="style.css">
<div class="container col-4 mt-5">
  <form action="proses_login.php" method="post">
  
    <div class="form mt-4">
        <div class="text1">
            <h4 class="title text-center">Login in here</h4>
          
        </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input name="username" type="text" class="form-control" id="exampleInputText" aria-describedby="text">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button name="login" type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
</div>