<?php 
session_start(); 
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Pricing example · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/pricing/">

    <!-- Bootstrap core CSS -->
<link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
  </head>
  <body>
    <?php include 'Header.php'; ?>

	<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
		<?php 
			if(isset($_SESSION['user_online'])){
				echo '<h1 class="display-4">hey ' . $_SESSION['user_online'] . '</h1>';
				echo '<p class="lead">Below are some course related forum chats, why not join in? </p>';
			} else {
				echo '<h1 class="display-4">You will have to <a href="login.php">login</a> to access these cool chats!</h1>';
			}
		?>
	</div>
	<div class="container">
		<div class="card-deck mb-3 text-center">
			<div class="card mb-4 shadow-sm">
				<div class="card-header">
					<h4 class="my-0 font-weight-normal">Computer Science</h4>
				</div>
				<div class="card-body">
					<h1 class="card-title pricing-card-title">CompSci Group</h1>
					<ul class="list-unstyled mt-3 mb-4">
						<li>Updated Regularly</li>
						<li>Society and non-society based chat</li>
						<li>Still under construction</li>
					</ul><button class="btn btn-lg btn-block btn-primary" type="button">Get started</button>
				</div>
			</div>
			<div class="card mb-4 shadow-sm">
				<div class="card-header">
					<h4 class="my-0 font-weight-normal">Games Computing</h4>
				</div>
				<div class="card-body">
					<h1 class="card-title pricing-card-title">GameComp Group</h1>
					<ul class="list-unstyled mt-3 mb-4">
						<li>Updated Regularly</li>
						<li>Society and non-society based chat</li>
						<li>Still under construction</li>
					</ul><button class="btn btn-lg btn-block btn-primary" type="button">Get started</button>
				</div>
			</div>
			<div class="card mb-4 shadow-sm">
				<div class="card-header">
					<h4 class="my-0 font-weight-normal">Art</h4>
				</div>
				<div class="card-body">
					<h1 class="card-title pricing-card-title">Art Group</h1>
					<ul class="list-unstyled mt-3 mb-4">
						<li>Updated Regularly</li>
						<li>Society and non-society based chat</li>
						<li>Still under construction</li>
					</ul><button class="btn btn-lg btn-block btn-primary" type="button">Contact us</button>
				</div>
			</div>
		</div>
	</div>
</body>
</html>