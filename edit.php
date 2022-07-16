<?php
	require "dbconfig/config.php";
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>blog</title>
		<link rel="stylesheet" href="style.css" type="text/css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
		<style>
			
		</style>
	</head>
	<body>
		<?php include("navbar.php"); ?>
		
		<?php
          // fill in the blanks	- Update sql for the player name, description, image


		?>

		<div class = "container">
			<div class = "row">
				<div class = "col-3" id="pname">
					<h1>Player Names</h1>
					<br>
					<?php
						// fill in the blanks - select hyperlink of athlete

	
					?>
				</div>
				
				<div class = "col-9">
					<?php
					// fill in the blanks - select to display athlete to be edited
					

						echo '<form method="post" enctype="multipart/form-data" action="';
						echo htmlspecialchars("edit.php?name=$name");
						echo '">';
						echo '
						<h2> Player </h2>
						<input class="player" name="player" value="'.$playername.'">
						<h2> Description </h2>
						<textarea class="desc" name="description" value="'.$playerdesc.'"> </textarea>
						<input type="file" name="image">
						<input type="submit" name="edit" value="Submit">
						</form>';
					} else {
						echo '<h2> Choose a player to edit! </h2>';
					}

					?>
					
				</div>
			</div>
		</div>

	</body>
</html>