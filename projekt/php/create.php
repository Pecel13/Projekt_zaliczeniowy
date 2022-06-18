<?php 

if (isset($_POST['create'])) {
	include "../db_conn.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$name = validate($_POST['name']);
	$breed = validate($_POST['breed']);

	$user_data = 'name='.$name. '&breed='.$breed;

	if (empty($name)) {
		header("Location: ../createnewcat.php?error=Name is required&$user_data");
	}else if (empty($breed)) {
		header("Location: ../createnewcat.php?error=Breed is required&$user_data");
	}else {

       $sql = "INSERT INTO cats(name, breed) 
               VALUES('$name', '$breed')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../read.php?success=successfully created");
       }else {
          header("Location: ../createnewcat.php?error=unknown error occurred&$user_data");
       }
	}

}