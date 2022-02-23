
<nav style="background-color: #000; height: 40px;margin-bottom: 40px;
">

</nav>
		<?php 
		include "db_conn.php";
		if(isset($_GET['btn-search'])){
			$SEARCH = $database->prepare("SELECT * FROM users WHERE FirstName LIKE :value
			OR LastName LIKE :value");
			$SEARCH_VALUE = "%".$_GET['search']."%";

			$SEARCH->bindParam("value", $SEARCH_VALUE);
			$SEARCH->execute();

			foreach($SEARCH AS $data){
			echo	`<table style="
			background-color: #000000; color:#fff;	height: auto;width: 80%;	margin-top:20px;	margin-left: 100px;border-radius: 8px; text-align: center; margin-bottom: 30px;" id="Tablee">
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
			  </thead>`;


         //   ooooooooooooooooooooooo

        echo `<tbody>
			  	
         <tr>
           <th scope="row"><?=$i?></th>

           <td style="padding:10px 0 ;"><?=$rows[FirstName]?></td>
           <td><?=$rows[LastName]?></td>
           <td><?=$rows[date]?></td>


           <td><?php echo $rows[department]; ?></td>
           <td><?php echo $rows[salary]; ?></td>
           <td><?php echo $rows[function]; ?></td>
           <td><?php echo $rows[fotoUpload]; ?></td>
          
         </tr>
        
       </tbody>
     </table>`;
				}
			}
		?>


<form method="GET" style="margin-left: 100px;">
	<input style="background-color: #000000; padding: 10px 15px; color:#fff; border-radius: 4px; outline: none;
   border: #fff solid 2px;" type="text" name="search" placeholder="search ……" />
	<button style="background: #000;
	margin-left: 100px; color: #fff;padding: 10px 15px; border-radius: 4px;  outline: none; border: #fff solid 2px;" type="submit" name="btng-search">Search</button>
	</form>


   <!-- <table style="
			background-color: #000000; color:#fff;	height: auto;width: 80%;	margin-top:20px;	margin-left: 100px;border-radius: 8px; text-align: center; margin-bottom: 30px;" id="Tablee">
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
			  </thead> -->