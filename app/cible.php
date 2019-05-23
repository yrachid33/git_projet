   
<?php 

define('LOGIN', 'admin@admin.fr');
define('PASSWORD', 'password');

if(!empty($_POST))
{
	$hasErrors = false;

	if(empty($_POST['email']))
	{
	  $message = 'Veuillez indiquer votre email svp !';
	  $hasErrors = true;
	}

	if(empty($_POST['password']))
	{
	  $message = 'Veuillez indiquer votre mot de passe svp !';
	  $hasErrors = true;
	}

	if($_POST['email'] !== LOGIN)
	{
	  $message = 'Votre email est faux !';
	  $hasErrors = true;
	}

	if($_POST['password'] !== PASSWORD)
	{
	  $message = 'Votre mot de passe est faux !';
	  $hasErrors = true;
	}

	if(!$hasErrors) {
	  $message = 'Bienvenue '. LOGIN .' !';
	  $_SESSION['login'] = LOGIN;
	  $_SESSION['name'] = $_POST['nom'];
	  $_SESSION['surname'] = $_POST['prenom'];
	}

	echo $message;


}
?>
