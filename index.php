<?php

/**
 * Firebase Realtime Database Using PHP Curl.
 * Collect your Blog/website readers name and email on Firebase Realtime database.
 *
 * @package Firebase Email Subscription
 * @author Santhosh veer
 * @license GPL-2.0+
 * @link https://www.allwebtuts.com
 * @copyright 2017-2018 allwebtuts.com, All rights reserved.
 *
 *            @Firebase Email Subscription
 *            Plugin Name: Firebase Email Subscription
 *            Plugin URI: https://www.allwebtuts.com/build-an-email-subscriber-list-by-using-firebase/
 *            Description: Build your Email List - Collect your Blog Visitor's Email on Firebase realtime Database
 *            Version: 1.1
 *            License: GPL-3.0+
 *            License URI: https://www.gnu.org/licenses/gpl-3.0.txt
 */

if($_SERVER["REQUEST_METHOD"] == "POST")
{

$name= $_POST["name"];
$email= $_POST["email"];

$name = htmlspecialchars($name,ENT_COMPAT);
$email = htmlspecialchars($email,ENT_COMPAT);

 $data = '{
  "subscriber": {
    "name": "' . $name . '","email": "' . $email . '"}
        
}';

    //replace https://example-project.firebaseio.com with Firebase Realtime DB URL - DON'T REMOVE /subscribers.json
    $url = "https://example-project.firebaseio.com/subscribers.json";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);                          
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    $jsonResponse = curl_exec($ch);
    if(curl_errno($ch))
    {
        echo 'Curl error: ' . curl_error($ch);
    }
    curl_close($ch);


// Show result on JSON Format - if you don't want this just add // infront of the echo
//echo $data . "\n";


}

// Add your Own Message
$message= '<div class="container"><div class="row"><div class="col-lg-6 col-lg-offset-3 mx-auto"><div class="alert alert-success text-center"><i class="fas fa-thumbs-up"></i> <b>Thanks for Subscribe to Our Blog Post  Updates</b></div></div></div></div>';

?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>Subscribe to our Updates</title>
<meta name="Description" content="Subscribe to our Blog Post Updates.">

<!-- CSS and Fonts -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">

<style>
body {
  background: #eee !important;
  font-family: 'Exo 2', sans-serif;
}
.login-form{
  margin:3% auto 0;
  max-width:380px;
}
.login-form h1{
  font-size: 30pt;
  font-weight: 700;
    letter-spacing: -1px;
    font-family: 'Exo 2', sans-serif;
}
.form-header,.form-footer{
  background-color: rgba(255, 255, 255, .8);
    border: 1px solid rgba(0,0,0,0.1);
}
.form-signin{
  padding: 45px 35px 45px;
    background-color: #fff;
    border: 1px solid rgba(0,0,0,0.1);  
    border-bottom: 0px; 
    border-top: 0px;  
}
.form-register{
  padding: 45px 35px 45px;
    background-color: #fff;
    border: 1px solid rgba(0,0,0,0.1);  
    border-bottom: 0px; 
    border-top: 0px; 
}
.form-header{
  text-align: center;
  padding: 15px 40px;
  border-radius: 10px 10px 0 0;
}
.form-header i{font-size:60px;}
.form-footer {
  padding: 15px 40px; 
}
.form-signin-heading{
  margin-bottom: 30px;
}
.bt-login{
    background-color: #ff8627;
    color: #ffffff;
    padding-bottom: 10px;
    padding-top: 10px;
    transition: background-color 300ms linear 0s;
}
.form-signin .form-control, .form-register .form-control{
  position: relative;
  height: auto;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus, .form-register .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
input.parsley-error,
select.parsley-error,
textarea.parsley-error {    
    border-color:#843534;
    box-shadow: none;
}
input.parsley-error:focus,
select.parsley-error:focus,
textarea.parsley-error:focus {    
    border-color:#843534;
    box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #ce8483
}
.parsley-errors-list {
    list-style-type: none;
    opacity: 0;
    transition: all .3s ease-in;

    color: #d16e6c;
    margin-top: 5px;
    margin-bottom: 0;
  padding-left: 0;
}
.parsley-errors-list.filled {
    opacity: 1;
    color: #a94442;
}
pre {
  background-color: #f7f7f9;
  border: 1px solid #e1e1e8;
color: #336cac;
font-size: 17px;
}
pre:before {
    color: #333;
}
.btn {
    margin-bottom:4px;white-space: normal;
}
.input {
    margin-bottom:4px;white-space: normal;
}
</style>


<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>


<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->


</head>
<body>
<br />
<br />

<div class="container">
<div class="login-form">

<h2 class="text-center">Free Email Updates</h2>
<br />

<div class="form-header">
<i class="fas fa-bell"></i>
</div>

<form class="form-signin" method="post">
<div class="form-group">
<input type="text" name="name" class="form-control" data-parsley-required="true" data-parsley-error-message="Enter a your Name" placeholder="Your Name">
</div>
<div class="form-group">
<input class="form-control" type="email" name="email" data-parsley-required="true" data-parsley-type="email" placeholder="Email address">
</div>
<button type="submit" class="btn btn-block bt-login">Subscribe</button>
</form>
<br/>

</div>
</div>

<?php
if(isset($_POST['name'])) {
echo $message;
}
?>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.8.1/parsley.min.js" integrity="sha256-XqEmjxbIPXDk11mQpk9cpZxYT+8mRyVIkko8mQzX3y8=" crossorigin="anonymous"></script>

<script>
$(document).ready(function(){
  $('form').parsley();
});
</script>

</body>
</html>