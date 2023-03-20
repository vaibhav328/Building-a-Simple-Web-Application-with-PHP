<?php  include("header.php");?>
<div class="container pt -2 pt-md-5">
  <div class="row">
    <div class="col-md-6">
        <h2 class="text-center text-dark mb-2">Login</h2>
        <form action="login_process.php" method="post">
  <div class="form-group">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" id="username" name="username"">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
    <div class="col-md-6">
        <h2 class="text-center text-dark mb-2">Register</h2>
        <form action="register_process.php" method="post">
        <div class="form-group">
    <label for="firstname" class="form-label">firstname</label>
    <input type="text" class="form-control" id="firstname" name="firstname"">
    
  </div>
  <div class="form-group">
    <label for="lastname" class="form-label">lastname</label>
    <input type="text" class="form-control" id="lastname" name="lastname"">
    
  </div>
  <div class="form-group">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" id="username" name="username"">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  
  <button type="submit" class="btn btn-primary float-right mt-2">Register</button>
</form>
    </div>
</div>
</div>
<?php include("footer.php");?>