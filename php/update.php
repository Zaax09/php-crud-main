<?php 

if (isset($_GET['id'])) {
	include "db_conn.php";

	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);

	$sql = "SELECT * FROM fichtali1 WHERE id=$id";
    $result = mysqli_query($conn,$sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }else {
    	header("Location: read.php");
    }


}else if(isset($_POST['update'])){
    include "../db_conn.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}
        // ======================================================

        // =======================================================
                
	$FirstName = validate($_POST['FirstName']);
	$LastName = validate($_POST['LastName']);
	$date = validate($_POST['date']);
	$department = validate($_POST['department']);

	$salary = validate($_POST['salary']);
	$function = validate($_POST['function']);
	$fotoUpload = validate($_POST['fotoUpload']);
        $id = validate($_POST['id']);
        // ======================================================
	if (empty($FirstName)) {
		header("Location: ../update.php?id=$id&error=FirstName is required");
	}else if (empty($LastName)) {
		header("Location: ../update.php?id=$id&error=LastName is required");
	}else if (empty($date)) {
		header("Location: ../update.php?id=$id&error=date is required");
	}else if (empty($department)) {
		header("Location: ../update.php?id=$id&error=department is required");
	}
        

        else if (empty($salary)) {
		header("Location: ../update.php?id=$id&error=salary is required");
	}else if (empty($function)) {
		header("Location: ../update.php?id=$id&error=function is required");
	}else if (empty($fotoUpload)) {
		header("Location: ../update.php?id=$id&error=Photo is required");
	}
        else {

       $sql = "UPDATE fichtali1
               SET FirstName='$FirstName',
                   LastName='$LastName',
                   date='$date',
                   department='$department',
                   salary='$salary',
                   function='$function',
                   fotoUpload='$fotoUpload',

               WHERE id=$id ";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../read.php?success=successfully updated");
       }else {
          header("Location: ../update.php?id=$id&error=unknown error occurred&$user_data");
       }
	}
}else {
	header("Location: read.php");
}