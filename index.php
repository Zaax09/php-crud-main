<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<h1 style="text-align: center;">Gestion des employés d'une PME</h1>
	<div class="container">
		<form action="php/create.php" 
		      method="post">
            
		   <h4 class="display-4 text-center">Create</h4><hr><br>
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>
			
		   <!-- <div class="form-group">
		     <label for="Matricule">Matricule</label>
		     <input type="Matricule" 
		           class="form-control" 
		           id="Matricule" 
		           name="Matricule" 
		           value="<?php if(isset($_GET['Matricule']))
		                           echo($_GET['Matricule']); ?>" 
		           placeholder="Enter Matricule">
		   </div> -->

		   <div class="form-group">
		     <label for="FirstName">FirstName</label>
		     <input type="FirstName" 
		           class="form-control" 
		           id="FirstName" 
		           name="FirstName" 
		           value="<?php if(isset($_GET['FirstName']))
		                           echo($_GET['FirstName']); ?>"
		           placeholder="Enter FirstName">
		   </div>
<!-- -------------------------------------------------------------------------------- -->
<div class="form-group">
		     <label for="FirstName">LastName</label>
		     <input type="LastName" 
		           class="form-control" 
		           id="LastName" 
		           name="LastName" 
		           value="<?php if(isset($_GET['LastName']))
		                           echo($_GET['LastName']); ?>"
		           placeholder="Enter LastName">
		   </div>
<!-- -------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------- -->
<div class="form-group">
		     <label for="date">Date</label>
		     <input type="date" 
		           class="form-control" 
		           id="date" 
		           name="date" 
		           value="<?php if(isset($_GET['date']))
		                           echo($_GET['date']); ?>"
		           placeholder="Enter date">
		   </div>
<!-- -------------------------------------------------------------------------------- -->
<div class="form-group">
		     <label for="department">Department</label>
		     <input type="department" 
		           class="form-control" 
		           id="department" 
		           name="department" 
		           value="<?php if(isset($_GET['department']))
		                           echo($_GET['department']); ?>"
		           placeholder="Enter department">
		   </div>
<!-- -------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------- -->
<div class="form-group">
		     <label for="salary">Salary</label>
		     <input type="salary" 
		           class="form-control" 
		           id="salary" 
		           name="salary" 
		           value="<?php if(isset($_GET['salary']))
		                           echo($_GET['salary']); ?>"
		           placeholder="Enter salary">
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
		           value="<?php if(isset($_GET['function']))
		                           echo($_GET['function']); ?>"
		           placeholder="Enter function">
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
		           value="<?php if(isset($_GET['fotoUpload']))
		                           echo($_GET['fotoUpload']); ?>"
		           placeholder="Enter Photo">
		   </div>








		   <button type="submit" 
		          class="btn btn-primary"
		          name="create">Create</button>
		    <a href="read.php" class="link-primary">View</a>
	    </form>
	</div>
</body>
</html>