<?php 

	require 'db.php';
	$message='';
	#check whether the button has been clicked
	 if (isset($_POST['submit'])) {
	 	# code...
		
	 	//Security measure
	 	 $name= $_POST['name'];
	 	 $email=$_POST['email'];

	 	 $sqlInsert="INSERT INTO people(name,email)VALUES('$name','$email')";

	 	 if (!mysqli_query($connect,$sqlInsert)) {
	 	 	# code...
	 	 	die('Error inserting new record');
	 		 }else{
	 	 	$message='Record created successfully';
	 	 	  } 
 	 }

 ?>
<?php require 'header.php'; ?>
<div class="container">
	<div class="card mt-5">
		<div class="card-header">
			<h2>Create person</h2>
		</div>

		<div class="card-body">
			<?php if (!empty($message)): ?>
				<div class="alert alert-sucess">
					<?php echo $message; ?>
				</div>
			<?php endif; ?>
			<form method="post" action="create.php">
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" name="name" id="name" class="form-control">
				</div>

				<div class="form-group">	
					<label for="email">Email</label>
					<input type="email" name="email" id="email" class="form-control">
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-info" name="submit">Create Record</button>		
				</div>

				</div>
			</form>
		</div>
	</div>
</div>


<?php require 'footer.php'; ?>