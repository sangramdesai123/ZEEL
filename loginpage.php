<?php
  include 'partial/header.php';
 ?>

<br><br>
<div class="container text-center">    
  
    <div class="row">
      <div class="col-sm-1">
      
      </div>

	    <div class="col-sm-4 w3-container w3-center w3-animate-left">
      <h3 style="font-family: monospace; background-color: #ce991e" style="box-shadow: 0 0  100px rgb(0,0,0,0.5)"><b>LOGIN</b></h3><br>
	
  <form action="controller/login.php" method="GET">
    <div  class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control"  name="email" id="email" placeholder="Enter email" required="True">
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control"  name="pwd" id="password" placeholder="Enter password" required="True">
    </div>
    <div class="checkbox">
      <label><input type="checkbox"><b>Remember me</b></label>
    </div>
    <input class="btn btn-outline-success" onclick="validate()" name="submit" value="Login" type="submit">
  </form>

      </div>
	  
	  <div class="col-sm-2 w3-container w3-center w3-animate-top"><br><br><br><br><br>
	  <h3 ><b><i>OR</i></b></h3>
	  </div>
	  
	   <div class="col-sm-4 w3-container w3-center w3-animate-right">
	   <div class="ex3">
      <h3 style="font-family: monospace; background-color: #ce991e" style="box-shadow: 0 0  100px rgb(0,0,0,0.5)"><b>SIGNUP</b></h3><br>
   <form  action="controller/signup.php" method="GET">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" name="name" id="name" placeholder="Enter Your Name" required="true">
    </div>
	    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required="true" >
    </div>
	
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" name="pwd" id="password" placeholder="Enter password" required="true">
    </div>
	<div class="form-group">
      <label for="tel">Mobile Number:</label>
      <input type="tel" class="form-control" name="phone" id="tel" placeholder="Enter Mobile Number" required="true">
    </div>
	<div class="form-group">
      <label for="address">Address:</label>
	  <textarea rows="4" cols="45" input type="address" name="address" class="form-control" id="address" placeholder="Enter Your Address" required="true"></textarea>
      
    </div>

    <input class="btn btn-outline-success" onclick="validate1()" value="Signup" type="submit">
  </form>

      </div>
	  </div>
	  

      <div class="col-sm-1">
     
      </div>
    </div>
</div>

<?php
  include 'partial/footer.php';
 ?>

  