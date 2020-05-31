<?php require 'db.php' ?>

<?php require 'header.php' ?>

<div class="container">
  	<div class="card mt-5">
  		<div class="card-header">
  			<!--<h2>Register Users</h2> -->
  			
  		</div>
  		<div class="card-body">
  			<div class="form">
				<h1>Registration</h1>
				<form name="register.php" action="" method="post">
					<div class="form-group">
						<input type="text" class="form-control" name="username" placeholder="Username"   required />
					</div>

					<div class="form-group">
						<input type="email" class="form-control" name="email" placeholder="Email" required />
					</div>
					
					<div class="form-group">
						<input type="password" class="form-control" name="password" placeholder="Password"   required />
					</div>	
					
					<div class="form-group">
					    <button type="submit" class="btn btn-info" name="submit">Register User</button>	
				    </div>
				</form>
				<?php 
				 
				 

				# Check whether fields are empty
				if (empty($_POST['username'])) {
					# code...
					echo " Username is required";
				}

				?>
			</div>

  		</div>
  	</div>
</div>	