<?php require_once('include/header_outer.php'); ?>
<?php require_once('include/api.php'); ?>


<?php 

$message = 'Login into your account to continue...';
$color = 'grey-text';

if(isset($_POST['login']))
{
  $email = $_POST['email'];
  $password = $_POST['password'];
  $api = new Api;

  $loginResponse = $api->doLogin($email,$password);

  if(!$loginResponse->error)
  {
    $user = $loginResponse->user;
    $_SESSION['id'] = $user->id;
    $_SESSION['name'] = $user->name;
    $_SESSION['email'] = $user->email;
    $_SESSION['image'] = $user->image;
    $_SESSION['username'] = $user->username;
    $token = $user->token;
    setcookie('token',$token);
    header('LOCATION:home.php');
  }
  else
  {
    $message = $loginResponse->message;
    $color = 'red-text';
  }

}

 ?>

      <div class="row mt140">
        <div class="col s12 m6 offset-m3 l6 offset-l3">
            <div class="card br20">
              <div class="card-content">
                <div class="row">
                  <div class="col s12 m6 l6">
                    <div class="center p20">
                      <img src="src/img/logo.png" class="responsive-img" alt="Social Codia" width="120">
                      <p class="bold">Social Media helps you to connect and share thoughts with the people.</p>
                      <img src="src/img/login.svg" class="responsive-img p20" alt="Social Codia" width="240">
                    </div>
                  </div>
                   <div class="col s12 m6 l6">
                    <div class="p20">
                    <h5 class="bold ">Login</h5>
                      <p class=" <?php echo $color; ?>"><?php echo $message; ?></p>
                        <form method="post">
                          <div class="input-field">
                            <i class="material-icons prefix red-text">email</i>
                            <input type="text" name="email" id="email">
                            <label for="email">Enter Email</label>
                          </div>
                           <div class="input-field">
                            <i class="material-icons prefix red-text">lock</i>
                            <input type="password" name="password" id="password">
                            <label for="password">Enter Password</label>
                          </div>
                          <a class="blue-text right" href="forgot.php">Forgot Password?</a>
                          <div class="input-field">
                            <input type="submit" class="btn red loginBtn" value="Login" name="login" id="login">
                          </div>
                          <div class="center">
                            <span>Don't have an account? </span><a class="bold" href="register">Register</a>
                          </div>
                        </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>

      <?php require_once('include/footer_outer.php'); ?>