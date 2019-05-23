<?php
function home_getArticles(){
	return getArticles();
}

function cat_getArticles(){
	getArticles();
}

function getArticles(){

	// Connection to the DB
	$connection = dbConnect();

	// Request to the DB
	$request = $connection->prepare('SELECT * FROM b_post');

	$request->execute();

	$results = $request->fetchAll();

	return $results;
}

/**
 * Checks for a user auth
 *
 */
function getAuth($email, $password){

	// Connection to the DB
	$connection = dbConnect();

	// Request to the DB
	$request = $connection->prepare('SELECT * FROM b_user WHERE u_email=:email AND u_password=H:password');

	$request->execute();

	$results = $request->fetchAll();

	return $results;
}

// On réceptionne le password envoyé par le formulaire

$password = $_POST['password'];

// On hash le password
$pw_hash = password_hash($password, PASSWORD_BCRYPT);

// bindvalue

$pw_hash->bindValue(":password", $_POST['password'], PDO::PARAM_STR);

// On compare le hash du pseudo entré par l'utilisateur 
// avec le hash enregistré dans la bdd


if ($password == $pw_hash) {
 
 echo "Connexion réussie !";
 
}

else {
    echo "Mauvais password !";

}


