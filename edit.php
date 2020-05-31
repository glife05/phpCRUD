<?php 

	require 'db.php';
	$var=mysqli_real_escape_string($connect,$_REQUEST['id']);
	 
 	 $qs="SELECT * FROM people WHERE id='".$var."'";
 	 $results=mysqli_query($connect,$qs);
 	 $row=mysqli_fetch_assoc($results);
 ?>
<?php require 'header.php'; ?>
<div class="container">
	<div class="card mt-5">
		<div class="card-header">
			<h2>Update person</h2>
		</div>

		<div class="card-body">
			<?php #if (!empty($message)): ?>
				<div class="alert alert-sucess">
					<?php #echo $message; ?>
				</div>
			<?php #endif; ?>
			<form method="post" action="edit.php">
				<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" name="name" id="name" class="form-control" value="<?php echo $row['name'];?>">
				</div>

				<div class="form-group">	
				<label for="email">Email</label>
				<input type="email" name="email" id="email" class="form-control" value="<?php echo $row['email'];?>">
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-info" name="edit">Update Record</button>		
				</div>

				</div>
			</form>
			<?php 
			 if (isset($_POST['edit'])) {

			 		if (empty($name) && empty($email)) {
			 			# code...
			 			$mysql_error="All fields are required";
			 		}else{
			 			# code...
						 $record_id=$_REQUEST['id'];
						 $name=$_REQUEST['name'];
						 $email=$_REQUEST['email'];
						 $update_qs="UPDATE people SET name='".$name."',email='".$email."' WHERE id='".$record_id."'";
						 mysqli_query($connect,$update_qs) or die(mysql_error());

						 echo "Record updated successfully";
			 		}
			 	
			 }
			 
			?>
		</div>
	</div>
</div>


<?php require 'footer.php'; ?>