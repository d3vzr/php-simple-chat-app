    <div class="col-md-6">
      <?php 
      if (isset($_GET['suc'])) {
        echo '<div class="alert alert-success">You registered successfully!</div>';
      }
      ?>
      <div class="signup">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h4>Register</h4>
          </div>
          <div class="panel-body">
            <form action="accounts/signup.php" method="POST">
              <div class="form-group">
                <label for="fullname">Full Name</label>
                <input name="name" type="text" class="form-control" id="fullname" placeholder="Enter your FullName" required>
              </div>
              <div class="form-group">
                <label for="email">Email address</label>
                <input name="email" type="email" class="form-control" id="email" placeholder="Email" required>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input name="password" type="password" class="form-control" id="password" placeholder="Password" required>
              </div>
              <div class="form-group">
                <label for="rpassword">Repeat Password</label>
                <input name="rpassword" type="password" class="form-control" id="rpassword" placeholder="Repeat Password" required>
              </div>
              <div class="form-group">
                <label for="bio">Bio</label>
                <input name="bio" type="text" class="form-control" id="bio" placeholder="Enter your Bio" required>
              </div>
              <button name="signup" type="submit" class="btn btn-success">Register</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="signin">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h4>Login</h4>
          </div>
          <div class="panel-body">
            <form action="accounts/login.php" method="POST">
              
              <div class="form-group">
                <label for="email">Email address</label>
                <input name="email" type="email" class="form-control" id="email" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input name="password" type="password" class="form-control" id="password" placeholder="Password">
              </div>
              <button name="login" type="submit" class="btn btn-success">Login</button>
            </form>
            
          </div>
        </div>
        
      </div>
    </div>
