<?php require 'db.php';

$sql="SELECT * FROM people";
$result=mysqli_query($connect,$sql);
$resultCheck=mysqli_num_rows($result);

/*if ($resultCheck>0) {
	# code...
	while ($row=mysqli_fetch_assoc($result)) {
		# code...
		echo $row['name'];
	}
} */

 ?>

  <?php require 'header.php' ?>

  <div class="container">
  	<div class="card mt-5">
  		<div class="card-header">
  			<h2>All People</h2>
  			
  		</div>
  		<div class="card-body">
  			<table class="table table-bordered">
  				<tr>
  					<th>User ID</th>
  					<th>Name</th>
  					<th>Email Address</th>
  					<th>Action</th>
  					
  				</tr>
  				<?php 
  						 
  					 	# code... mysqli
						while ($row=mysqli_fetch_assoc($result)):

							# PDO ..
  				#foreach ($people as $var):# code...
  				

							 
  				?>
  				<tr>
  					<td>
  						<?php   echo $row['id']; ?>
  					</td>

  					<td>
  						<?php   echo $row['name']; ?>
  					</td>

  					<td>
  						<?php   echo $row['email']; ?>
  					</td>

  					<td>
  						<a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-info" >Edit</a>
  						<a href="delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a>
  					</td>
  				</tr>
  			<?php endwhile;?> 
  			<!-- <?php #endforeach;?> -->
  			</table>
  		</div>
  	</div>
  </div>

  <?php require 'footer.php' ?>