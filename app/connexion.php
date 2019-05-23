<?php 

$connexion=db_Connexion();

   $sql = $connexion->prepare('INSERT INTO user(u_email, u_nom, u_prenom, u_password, u_dob,)
       VALUES (:email, :nom, :prenom, :password, :dob)');

   $sql->bindValue(':prenom', $_POST['prenom'], PDO::PARAM_STR);
   $sql->bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
   $sql->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
   $sql->bindValue(':password', $_POST['password'], PDO::PARAM_STR);
   $sql->bindValue(':dob', $_POST['dob'], PDO::PARAM_STR);




   $resultat =$sql->execute();
   var_dump($resultat); 


// Tester si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['email']) AND $_FILES['email']['error'] == 0)
{
 
}
elseif (isset($_FILES['password']) AND $_FILES['password']['error'] == 0) {
   # code...
}

   ?>