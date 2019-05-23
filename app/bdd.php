<?php
/**
 * Connection to the DB
 *
 * @return PDO The connection
 */
function dbConnect(){
	global $host, $dbname, $username, $password;

	try {
	    return new PDO('mysql:host='.$host.';dbname='.$dbname, $username, $password);
	} catch (PDOException $e) {
	    print "Erreur !: " . $e->getMessage() . "<br/>";
	    die();
	}
}