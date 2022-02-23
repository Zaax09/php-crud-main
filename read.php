<?php include "php/read.php"; ?>
<?php include "db_conn.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<link rel="stylesheet" href="style.css">

	 

</head>
<body>
	<div class="containerr">
	<div class="boox">
	<h4 style="background-color: #B42B51; color:#fff;" class="display-4 text-center">Read</h4><br>

	<!-- ======================================================== -->


	<a href='search.php' style="background: #000;padding: 10px 15px; margin-left: 100px; color: #fff; border-radius: 4px;  outline: none; border: #fff solid 2px;" type="submit" name="btng-search">Search</a>


		<!-- ======================================================== -->
			<?php if (isset($_GET['success'])) { ?>
		    <div class="alert alert-success" role="alert">
			  <?php echo $_GET['success']; ?>
		    </div>
		    <?php } ?>
			<?php if (mysqli_num_rows($result)) { ?>
			<table style="
			background-color: #000000; color:#fff;	height: auto;width: 80%;	margin-top:20px;	margin-left: 100px;border-radius: 8px; padding: 40px; text-align: center; margin-bottom: 30px;" id="Tablee">
			  <thead>
			    <tr>
			      <th style="padding: 14px 0;" scope="col">Matricule</th>
			      <th scope="col">FirstName</th>
			      <th scope="col">LastName</th>
			      <th scope="col">Date</th>

			      <th scope="col">Department</th>
			      <th scope="col">Salary</th>
			      <th scope="col">Function</th>
			      <th scope="col">Photo</th>

			    </tr>
			  </thead>
			  <tbody>
			  	<?php 
			  	   $i = 0;
			  	   while($rows = mysqli_fetch_assoc($result)){
			  	   $i++;
			  	 ?>
			    <tr>
			      <th scope="row"><?=$i?></th>
	
			      <td style="padding:10px 0 ;"><?=$rows['FirstName']?></td>
			      <td><?=$rows['LastName']?></td>
			      <td><?=$rows['date']?></td>


			      <td><?php echo $rows['department']; ?></td>
			      <td><?php echo $rows['salary']; ?></td>
			      <td><?php echo $rows['function']; ?></td>
			      <td><?php echo $rows['fotoUpload']; ?></td>


			      <td><a href="update.php?id=<?=$rows['id']?>" 
			      	     class="btn btn-success">Update</a>

			      	  <a href="php/delete.php?id=<?=$rows['id']?>" 
			      	     class="btn btn-danger">Delete</a>
			      </td>
			    </tr>
			    <?php } ?>
			  </tbody>
			</table>
			<?php } ?>
			<div class="link-right">
				<a href="index.php" class="link-primary" 
				style="
				background-color: #B42B51;
				padding: 15px 40px;
				margin-top: 30px;
				border-radius: 4px;
				color:#fff;


				
				
				">Create</a>
			</div>
		</div>
	</div>
</body>
</html>