<?php include 'php/update.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<form action="php/update.php" 
		      method="post">
            
		   <h4 class="display-4 text-center">Update</h4><hr><br>
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>

			<!-- ============================================================ -->
		   <div class="form-group">
		     <label for="FirstName">FirstName</label>
		     <input type="FirstName" 
		           class="form-control" 
		           id="FirstName" 
		           name="FirstName" 
		           value="<?=$row['FirstName'] ?>" >
		   </div>
<!-- -------------------------------------------------------------------------------- -->
<div class="form-group">
		     <label for="LastName">LastName</label>
		     <input type="LastName" 
		           class="form-control" 
		           id="LastName" 
		           name="LastName" 
					  value="<?=$row['LastName'] ?>" >
		           
		   </div>
<!-- -------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------- -->
<div class="form-group">
		     <label for="date">Date</label>
		     <input type="date" 
		           class="form-control" 
		           id="date" 
		           name="date" 
					  value="<?=$row['date'] ?>" >
				     
		   </div>
<!-- -------------------------------------------------------------------------------- -->
<div class="form-group">
		     <label for="department">Department</label>
		     <input type="department" 
		           class="form-control" 
		           id="department" 
		           name="department" 
					  value="<?=$row['department'] ?>" >
		           
		   </div>
<!-- -------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------- -->
<div class="form-group">
		     <label for="salary">Salary</label>
		     <input type="salary" 
		           class="form-control" 
		           id="salary" 
		           name="salary" 
					  value="<?=$row['salary']?>" >
		           
		   </div>
<!-- -------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------- -->
<div class="form-group">
		     <label for="function">Function</label>
		     <input type="function" 
		           class="form-control" 
		           id="function" 
		           name="function" 
					  value="<?=$row['function']?>" >
		           
		   </div>
<!-- -------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------- -->
<div class="form-group">
		     <label for="fotoUpload">fotoUpload</label>
		     <input type="file" 
		           class="form-control" 
		           id="fotoUpload" 
		           name="fotoUpload" 
					  value="<?=$row['fotoUpload'] ?>" >
		           
		   </div>

		   <button type="submit" 
		           class="btn btn-primary"
		           name="update">Update</button>
		    <a href="read.php" class="link-primary">View</a>
	    </form>
	</div>

	<?php $sql = "SELECT * FROM fichtali1 WHERE id=$id";
    $result = mysqli_query($conn,$sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }else {
    	header("Location: read.php");
    }?>
</body>
</html>