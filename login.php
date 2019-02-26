<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #f5f5f5;">
 <div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="page-header text-center">
      <h1>Login/Registration Page</h1>
  </div>
  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login"
        aria-selected="true">Login</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register"
        aria-selected="false">Register</a>
    </li>
  </ul>
  <br>
  <div class="tab-content" id="form-tabs">
    <div class="tab-pane fade" id="login" role="tabpanel" aria-labelledby="login-tab">
      <form>
        <div class="form-group">
          <label for="email_login">Email address</label>
          <input type="email" class="form-control" id="email_login" aria-describedby="Email Address" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="password_login">Password</label>
          <input type="password" class="form-control" id="password_login" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-success" style="width:100%;">Login</button>
      </form>
    </div>
    <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
      <form>
        <div class="form-group">
          <label for="first_name">First Name</label>
          <input type="text" class="form-control" id="first_name" aria-describedby="First Name" placeholder="Enter your first name">
        </div>
        <div class="form-group">
          <label for="last_name">Last Name</label>
          <input type="text" class="form-control" id="last_name" aria-describedby="Last Name" placeholder="Enter your last name">
        </div>
        <div class="form-group">
          <label for="email_login">Email address</label>
          <input type="email" class="form-control" id="email_login" aria-describedby="Email Address" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="confirm_email_login">Confirm Email address</label>
          <input type="email" class="form-control" id="confirm_email_login" aria-describedby="Confirm Email Address" placeholder="Confirm your email">
        </div>
        <div class="form-group">
          <label for="password_login">Password</label>
          <input type="password" class="form-control" id="password_login" placeholder="Password">
        </div>
        <div class="form-group">
          <label for="confirm_password_login">Confirm Password</label>
          <input type="password" class="form-control" id="confirm_password_login" placeholder="Confirm your password">
        </div>
        <button type="submit" class="btn btn-danger" style="width:100%;">Register</button>
      </form>
  </div>
</div>
    </div>
  </div>
  <div class="row text-center">
    <div class="col-md-6 col-md-offset-3">
      <p>Copyright &copy; <?php echo date('Y'); ?></p>
    </div>
  </div>
</div>
</body>
</html>