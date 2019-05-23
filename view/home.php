<?php 	
$results = home_getArticles();

foreach($results as $post){
	echo $post['p_title'] . '<br/>';
}