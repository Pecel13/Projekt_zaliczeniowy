<!DOCTYPE html>
<html>
<head>
	<title>Cats Viewer</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    </head>
<body>
	<div class="container">
		<form action="createnewcat.php" 
		      method="post">
            
		   	<h4 class="display-4 text-center">Start</h4><hr><br>
		  
			<button type="submit" 
		          class="btn btn-primary"
		          name="create">Create</button>
		    <a href="read.php" class="link-primary">View</a>
	    </form>
	</div>
</body>
</html>