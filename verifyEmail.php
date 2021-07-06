<?php

session_start();

if(isset($_SESSION['id']))
{
  header('LOCATION:home.php');
}

?>

 <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="http://socialcodia.net/web/css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="http://socialcodia.net/web/css/style.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body style="background-image: url(http://socialcodia.net/web/src/img/bg2.jpg); background-size: cover;">

<?php require_once('include/api.php');?>

<?php 

$message = "Yahoo! You have successfully verified the account.";

if(isset($_GET['email']) && isset($_GET['code']))
{
	$email = $_GET['email'];
	$code = $_GET['code'];
	$api = new Api;
	$result = $api->verifyEmail($email,$code);
	if($result->error)
		$message = "Opps..! Failed To Verify Your Email Address";
}
else
{
	header('LOCATION:login');
}

 ?>


<div class="row">
	<div class="col s12 m4 offset-m4 l4 offset-l4">
		<div class="card br20 mt140 p20" style="<?php if(!$result->error) echo "background-image: url(http://socialcodia.net/web/src/gif/celeb.gif)"; ?>">
			<div class="card-content center">
				<img src="http://socialcodia.net/web/src/gif/<?php if($result->error) echo "failed.gif"; else echo"success.gif";?>" alt="Success" width="190">
				<h5 class="bold blue-text"><?php echo $message; ?></h5>
				<?php if($result->error) echo "<p class='red-text bold'>".$result->message."</p>"; ?>
				<a class="btn blue br20" style="margin-top: 10px;" href="http://socialcodia.net/web/login">Go to Login</a>
			</div>
		</div>
	</div>
</div>


      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="http://socialcodia.net/web/js/materialize.min.js"></script>
      <script type="text/javascript" src="http://socialcodia.net/web/js/jquery.js"></script>
      <script type="text/javascript" src="http://socialcodia.net/web/js/socialcodia.js"></script>
    </body>
  </html>