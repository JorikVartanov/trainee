<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>test</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>
		<body>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-4">
						<h6>Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст </h6>
					</div>
					<div class="col-md-4">
						<h6>Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст </h6>
					</div>
					<div class="col-md-4">
						<h6>Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст </h6>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<form method="post" class="form-horizontal" role="form">
							<div class="form-group">
								<label for="inputText" class="col-sm-2 control-label">Text</label>
								<div class="col-sm-10">
									<textarea class="form-control" name="comment" id="inputComment" placeholder="Comment" rows="3"></textarea>
								</div>
							</div>
							
							<div class="form-group">
								<label for="inputName" class="col-sm-2 control-label">Name</label>
								<div class="col-sm-10">
									<input type="text" name="username" class="form-control" id="inputName" placeholder="Name">
								</div>
							</div>
							
							<div class="form-group">
								<label for="inputEmail" class="col-sm-2 control-label">Email</label>
								<div class="col-sm-10">
									<input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email">
								</div>
							</div>
							
							<div class="form-group">
								<label for="inputPassword" class="col-sm-2 control-label">Password</label>
								<div class="col-sm-10">
									<input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<div class="checkbox">
										<label>
											<input type="checkbox"> Remember me
										</label>
									</div>
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<button type="submit" class="btn btn-default">Submit</button>
								</div>
							</div>
						</form>
					</div>
					<div class="col-md-4">
						
					</div>
					<div class="col-md-4">
						
					</div>
					
					
					
					
					
					
					
				</div>
	
	
	<?php
					if ($_SERVER['REQUEST_METHOD'] == 'POST') {
						$username = $_POST['username'];
						echo "Привет, $username ! </p>";
						
						$email = $_POST['email'];
						echo "Твое мыло: $email </p>";
						
						$comment = $_POST['comment'];
						echo "Твой комментарий: $comment </p>";
						
						$password = $_POST['password'];
						echo "Твой пароль: $password </p>";
					}
				?>
	
	
	
			</div>
	  
			<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
			<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>  -->
			<script src="http://code.jquery.com/jquery-2.1.0.min.js" type="text/javascript"></script>
			<!-- Include all compiled plugins (below), or include individual files as needed -->
			<!-- <script src="js/bootstrap.js"></script>  --> 
			<script src="js/bootstrap.js" type="text/javascript"></script>
		</body>
</html>