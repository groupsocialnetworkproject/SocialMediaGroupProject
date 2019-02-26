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
    <div class="col-md-4 col-md-offset-4">
      <div class="page-header text-center">
          <h1>Login Page</h1>
      </div>
      <ul class="nav nav-tabs" role="tablist">
        <li class="active"><a href="#register-panel" role="tab" data-toggle="tab" class="big">Register</a>
        </li>
        <li><a href="#login-panel" role="tab" data-toggle="tab" class="big">Login</a>
        </li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane fade in active" id="register-panel">
          <fieldset>
            <div class="form-group">
              <div class="right-inner-addon">
                <input class="form-control input-lg" placeholder="Email Address" type="text">
              </div>
            </div>
            <div class="form-group">
              <div class="right-inner-addon">
                <input class="form-control input-lg" placeholder="Password" type="password">
              </div>
            </div>
            <div class="form-group">
              <div class="right-inner-addon">
                <input class="form-control input-lg" placeholder="Confirm Password" id="" type="password">
              </div>
            </div>
          </fieldset>
        </div>
        <!-- Login -->
        <div class="tab-pane fade" id="login-panel">
          <fieldset>
            <div class="form-group">
              <div class="right-inner-addon">
                <input class="form-control input-lg" placeholder="Email Address" type="text">
              </div>
            </div>
            <div class="form-group">
              <div class="right-inner-addon">
                <input class="form-control input-lg" placeholder="Password" type="password">
              </div>
            </div>
          </fieldset>
          <div class=" text-center">
            <button class="btn btn-success" style="width: 100%;">Login</button></div>
          </div>
      </div>
      <br>
    </div>
  </div>
</div>
</body>
</html>