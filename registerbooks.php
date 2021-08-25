<!DOCTYPE Html>
<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Register books</title>

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>


 

<div id='main-content'>

	<form action="connect.php" method="POST">
		 <input type="text" name="tittle" placeholder="Book Tittle"></br>
		 <input type="text" name="author" placeholder="Author"></br>
		  
		 <input type="text" name="copies" placeholder="Copies Available"></br>
		<button type="submit"  name="submit">submit</button>
		<button type="reset" value="Reset">Reset</button>
	</form>

</div> 

<div class="container">
	<div class="col-md-12">
		<div class="row">
			<div col-md-6>
				<h2>Upload Image</h2>

				<form class="my-5" method="POST" encrypt="multifile/formdata" action="upload.php">
					<input type="file" name="image" class="form-control"><br>
					<input type="text" name="copies" placeholder="Number of Copies Available"><br>
					<input type="submit" name="upload" value="UPLOAD" class="btn btn-success-my-3">
				</form>
			</div>	
			<div col-md-6>
				<h2>Display  Image</h2>
				
			</div>
		</div>

			
	</div>
	

</div>


</body>
</html>