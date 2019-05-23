<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="span3">
    <h2>S'inscrire</h2>
    <form action="index.php?id=100" method="POST" enctype="multipart/form-data">
    <label>Prénom</label>
    <input type="text" name="prenom" class="span3">
    <label>Nom de Famille</label>
    <input type="text" name="nom" class="span3">
    <label>Adresse Email</label>
    <input type="email" name="email" class="span3">
    <label>Mot de Passe</label>
    <input type="password" name="password" class="span3">
    <label><input type="checkbox" name="terms"> J'accepte les <a href="#">Termes et Conditions</a>.</label>
    <input type="submit" value="Sign up" class="btn btn-primary pull-right">
    <div class="clearfix"></div>
    </form>
</div>