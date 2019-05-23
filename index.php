<?php 
session_start();
require_once'./app/includes.php'; 
?> 

<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Blog_y</title>
	<link rel="stylesheet" href="css/style.css">
	
</head>

<body style="..">


	<div class="navbar" style="background: lightgray; width:100%;">
		<?php require_once'./view/navbar.php'; ?> 
	</div>

	<div class="rooter" style="background: gray; width:100%;">
		<?php require_once'./app/rooter.php'; ?> 
	</div>

	<div class="footer" style="background: lightblue; width:100%;">
		<?php require_once'./view/footer.php';  ?>


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="js/script.js"></script>

</body>
</html>