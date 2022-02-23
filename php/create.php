<?php 

if (isset($_POST['create'])) {
	include "../db_conn.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$FirstName = validate($_POST['FirstName']);
	$LastName = validate($_POST['LastName']);
	$date = validate($_POST['date']);

	$department = validate($_POST['department']);
	$salary = validate($_POST['salary']);
	$function = validate($_POST['function']);
	$fotoUpload = validate($_POST['fotoUpload']);


	$user_data ='&FirstName='.$FirstName. '&LastName='.$LastName. '&date='.$date. '&department='.$department. '&salary='.$salary. '&function='.$function. '&fotoUpload='.$fotoUpload;

	if (empty($FirstName)) {
		header("Location: ../index.php?error=FirstName is required&$user_data");
	}else if (empty($LastName)) {
		header("Location: ../index.php?error=LastName is required&$user_data");
	}else if (empty($date)) {
		header("Location: ../index.php?error=date is required&$user_data");
	}

	else if (empty($department)) {
		header("Location: ../index.php?error=department is required&$user_data");
	}else if (empty($salary)) {
		header("Location: ../index.php?error=salary is required&$user_data");
	}else if (empty($function)) {
		header("Location: ../index.php?error=function is required&$user_data");
	}else if (empty($fotoUpload)) {
		header("Location: ../index.php?error=Photo is required&$user_data");
	}


	else {

      $sql = "INSERT INTO fichtali1(FirstName,LastName,`date`,department,salary,function,fotoUpload) VALUES ('$FirstName','$LastName','$date','$department',$salary,'$function','$fotoUpload')";

       $result = mysqli_query($conn,$sql);
       if ($result) {
       	  header("Location: ../read.php?success=successfully created");
       }else {
          header("Location: ../index.php?error=unknown error occurred&$user_data");
       }
	}

}