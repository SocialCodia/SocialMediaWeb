<?php require_once('include/header_outer.php'); ?>

      <div class="row mt130">
        <div class="col s12 m6 offset-m3 l6 offset-l3">
            <div class="card br20">
              <div class="card-content">
                <div class="row">
                  <div class="col s12 m6 l6">
                    <div class="center p20">
                      <img src="src/img/logo.png" class="responsive-img" alt="Social Codia" width="120">
                      <p class="bold">Social Media helps you to connect and share thoughts with the people.</p>
                      <img src="src/img/register.png" class="responsive-img p20" alt="Social Codia" width="240">
                    </div>
                  </div>
                   <div class="col s12 m6 l6">
                    <div class="p20">
                    <h5 class="bold">Register</h5>
                      <p class="grey-text" id="registerMessage">Register an account to continue...</p>
                          <div class="input-field">
                            <i class="material-icons prefix red-text">person</i>
                            <input type="text" name="name" id="name">
                            <label for="name">Enter Name</label>
                          </div>
                          <div class="input-field">
                            <i class="material-icons prefix red-text">email</i>
                            <input type="email" name="email" id="email">
                            <label for="email">Enter Email</label>
                          </div>
                           <div class="input-field">
                            <i class="material-icons prefix red-text">lock</i>
                            <input type="password" name="password" id="password">
                            <label for="password">Enter Password</label>
                          </div>
                          <div class="input-field">
                            <input type="submit" onclick="doRegister()" class="btn red registerBtn" value="Register" name="register" id="register">
                          </div>
                          <div class="center">
                            <span>Already have an account? </span><a class="bold" href="login">Login</a>
                          </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>

<?php require_once('include/footer_outer.php'); ?>