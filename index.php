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
 *            Plugin URI: https://www.allwebtuts.com/
 *            Description: Build your Email List - Collect your Blog Visitor's Email on Firebase realtime Database
 *            Version: 1.0
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
$message= '<div class="container"><div class="row"><div class="col-lg-6 col-lg-offset-3"><div class="alert alert-success text-center"><i class="fa fa-thumbs-up"></i> <b>Thanks for Subscribe to Our Blog Post  Updates</b></div></div></div></div>';

?>

<!DOCTYPE html>
<html lang="en">
<head>

<!-- meta character set -->
<meta charset="utf-8">

<!-- Always force latest IE rendering engine or request Chrome Frame -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<!-- Mobile Specific Meta -->
<meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>

<title>Subscribe to our Updates</title>
<meta name="Description" content="Subscribe to our Blog Post Updates.">
<link href='https://www.mskian.com/msk.ico' rel='icon' type='image/x-icon'/>

<!-- CSS and Fonts -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Lato:300,400,300italic,400italic' rel='stylesheet' type='text/css'>

<style>
body {
  background: #eee !important;
  font-family: 'Lato', sans-serif;
  
}
.login-form{
	margin:3% auto 0;
	max-width:380px;
}
.login-form h1{
	font-size: 30pt;
	font-weight: 700;
    letter-spacing: -1px;
    font-family: 'Lato', sans-serif;
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
</style>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

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

<h1 class="text-center">Free Email Updates</h1>

<div class="form-header">
<i class="fa fa-user"></i>
</div>

<form class="form-signin" method="post">
<div class="form-group">
<input type="text" name="name" class="form-control" required data-parsley-trigger="keyup" placeholder="Your Name">
</div>
<div class="form-group">
<input class="form-control" type="email" name="email" required data-parsley-type="email" data-parsley-trigger="keyup" placeholder="Email address">
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


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.5.1/parsley.min.js"></script>


<script>
$(document).ready(function(){
	$('form').parsley();
});
</script>


</body>
</html>
