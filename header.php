<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Learning Managment System</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet"type="text/css" href="main.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    

    <style>
  body{
    
    background-image:url("img/iit1.jpg");
    font-family: 'Raleway', sans-serif;
    cursor:auto;
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: 100%;


       }
       
</style>
     

  </head>
  <body>
  <nav>
   <div class="container">

   <hr>

              <div class="col-md-10 col-sm-8 col-xs-12">
              <h1>INFORMATICS INSTITUTE OF TECHNOLOGY </h1> 
              <h5 > Learning Managment System</h5>
   </div>

  <div class="col-md-2 col-sm-8 col-xs-12">
    
    <img src="img/iitlogo.png" height="150px" width="150px">
  </div>
              
   <hr>
 <div class="rows">
      <div class="col-md-12 col-sm-8 col-xs-12">
    <nav class="navbar">
<div id="nav">
<ul>
  <li><a href="https://localhost/nsbmtest/index.php">HOME</a></li>
    <li><a href="https://localhost/nsbmtest/about.php">ABOUT</a>
    </li>
 
  <li><a a href="#">COURSES</a>
         <ul>

        <li><a href="https://localhost/nsbmtest/software.php">Software Eng</a></li>
        <li><a href="https://localhost/nsbmtest/networks.php">Network Eng</a></li>
        <li><a href="https://localhost/nsbmtest/cybersecurity.php">Cyber Security</a></li>
        <li><a href="https://localhost/nsbmtest/web.php">Web Developing</a></li>

      </ul>
  </li>
  <li><a>DOWNLOADS</a>
       <ul>

        <li><a href="https://localhost/nsbmtest/timetable.php">Time tables</a></li>
        <li><a href="https://localhost/nsbmtest/tutorials.php">Tutorials</a></li>
        <li><a href="https://localhost/nsbmtest/pastpapers.php">Past Papers</a></li>
       
      </ul>

  </li>
  <!-- log in button....@ushiya-->
 <li> <p  class="ushan1" data-toggle="modal" data-target="#myModal" style=" opacity: 0.8; "> <a href="#"> LOG IN</a>
</p>
</li>
<!--sign up button @ushiya-->
<li>
 <p  class="ushan2" data-toggle="modal" data-target="#myModal2" style=" opacity: 0.8;">
  SIGN IN</a>
</p>
</li>
</ul>
</div>
   </div>
  </div>
  </div>  
  </nav>

    <div class="container">

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style=" background-color: 	#FFFAF0 ;opacity: 0.8;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="text-align:center;font-weight:bold 100px;">User Account</h4>
      </div>
     
      <div class="modal-body">
   <form action="login.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Enter your e-mail</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="User name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Enter the Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
  </div>
  
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal3" style="background-color:  #DC143C;">
  Forgot Password
</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button class="btn btn-primary">Log In</button>
      </div>
  
</form>
  </div>
  </div>
</div>


<!--forgot password button @ushiya-->
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="text-align:center;">User Account</h4>
      </div>
     
        <p id ="info" style="margin-left: 5px;margin-right: 5px;">If you forgrt your email . then enter your mail in here . we will send you the verification code and link to chage the passwoed</p>
    
      <div class="modal-body">
   <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Enter your E-mail</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="E-mail">
  </div>
 
      </div>
      <div class="modal-footer">
     
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Send">
		</div>
 
  
</form>
   </div>
  </div>
</div>





<!-- Modal of the sign in panel...@ushiya -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabe2">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="background-color:  	#FFFAF0;opacity: 0.8;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabe2" style="text-align: center;">New User Account</h4>
      </div>
      <form action="register.php" method="post">
      <div class="modal-body">
   
  <div class="form-group">
    <label for="exampleInputEmail1"> Enter the First name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="fname" placeholder="First Name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Enter the Last name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="lname" placeholder="Last Name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Enter the E-Mail Address</label>
    <input type="email" class="form-control" id="exampleInputPassword1" name="email" placeholder="E-mail">
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Enter the Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
  </div>
 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Sign in" >
		</div>
</form>
    </div>
  </div>
</div>
</nav>
