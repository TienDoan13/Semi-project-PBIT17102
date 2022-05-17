<!DOCTYPE html>
<html>
<head>
  <title>Sign In</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <style type="text/css">
  .get-in-touch {
  max-width: 800px;
  margin: 50px auto;
  position: relative;

}
.get-in-touch .title {
  text-align: center;
  text-transform: uppercase;
  letter-spacing: 3px;
  font-size: 3.2em;
  line-height: 48px;
  padding-bottom: 48px;
    background: #5543ca;
    background: -moz-linear-gradient(left,#f4524d  0%,#5543ca 100%) !important;
    background: -webkit-linear-gradient(left,#f4524d  0%,#5543ca 100%) !important;
    background: linear-gradient(to right,#f4524d  0%,#5543ca  100%) !important;
    -webkit-background-clip: text !important;
    -webkit-text-fill-color: transparent !important;
}

.contact-form .form-field {
  position: relative;
  margin: 32px 0;
}
.contact-form .input-text {
  display: block;
  width: 100%;
  height: 36px;
  border-width: 0 0 2px 0;
  border-color: #5543ca;
  font-size: 18px;
  line-height: 26px;
  font-weight: 400;
}
.contact-form .input-text:focus {
  outline: none;
}
.contact-form .input-text:focus + .label,
.contact-form .input-text.not-empty + .label {
  -webkit-transform: translateY(-24px);
          transform: translateY(-24px);
}
.contact-form .label {
  position: absolute;
  left: 20px;
  bottom: 11px;
  font-size: 18px;
  line-height: 26px;
  font-weight: 400;
  color: #5543ca;
  cursor: text;
  transition: -webkit-transform .2s ease-in-out;
  transition: transform .2s ease-in-out;
  transition: transform .2s ease-in-out, 
  -webkit-transform .2s ease-in-out;
}
.contact-form .submit-btn {
  display: inline-block;
  background-color: #000;
   background-image: linear-gradient(125deg,#a72879,#064497);
  color: #fff;
  text-transform: uppercase;
  letter-spacing: 2px;
  font-size: 16px;
  padding: 8px 16px;
  border: none;
  width:200px;
  cursor: pointer;
}

  </style>
</head>
<body style="background-image: url('https://wallpapercave.com/wp/xpULpcq.jpg'); background-repeat: no-repeat; background-size: 1550px 755px;">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<section class="get-in-touch">
   <h1 class="title">Sign In</h1>
   <div>
     <form method="POST" class="contact-form row">
        <div class="form-field col-lg-12 ">
           <input id="gmail" class="input-text js-input" type="email" required style="background-color: transparent;"name="gmail">
           <label class="label" for="email">E-mail</label>
        </div>
        <div class="form-field col-lg-12 ">
           <input id="company" class="input-text js-input" type="text" required style="background-color: transparent;" name="pass_word">
           <label class="label" for="company">Password</label>
        </div>
        <div class="form-field col-lg-12">
           <input class="submit-btn" type="submit" value="Sign In" name="signin">
        </div>
     </form>
  </div>
</section>
<?php
  session_start();
  $connect = mysqli_connect('localhost','root','','tunesourcewebsite');
  if($connect){
    echo "";
  }
  else{
    echo"Connection failed";
  }
  if (isset($_POST['signin'])){
    $gmail=$_POST['gmail'];
    $pass_word=$_POST['pass_word'];
    $sql="SELECT * FROM users WHERE gmail ='$gmail' AND pass_word ='$pass_word'";
    $result= mysqli_query($connect, $sql);
    $row=mysqli_num_rows($result);
    $row_user=mysqli_fetch_array($result);
  if ($row>0){
    $_SESSION['gmail']=$gmail;
    $_SESSION['user_id']=$row_user['user_id'];
    echo"<script>alert('Successful sign in')</script>";
    echo"<script>window.open('musicearthaftersignin.php','_self')</script>";
  }
  else{
    echo "<script>alert('Sign in failed')</script>";
  }
  }
  ?>
  <h1>Tien loc</h1>
  <h1>Tien loc 2</h1>
  <h1>tien loc 3</h1>
  <h1>tien da sua</h1>
  <h1>tien da suaaaaa</h1>
  <h1>tien sua lan cuoi</h1>
</body>
</html>