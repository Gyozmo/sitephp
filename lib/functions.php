<?php

/* 
vous ajouterez ici les fonctions qui vous sont utiles dans le site,
je vous ai créé la première qui est pour le moment incomplète et qui devra contenir
la logique pour choisir la page à charger
*/

function getContent(){
	if(!isset($_GET['page'])){
		include __DIR__.'/../pages/home.php';
	} else {
		$pages = $_GET['page'];
		include __DIR__.'/../pages/'.$pages.'.php';
	}
}

function getPart($name){
	include __DIR__ . '/../parts/'. $name . '.php';
}

function getUserData(){
	include __DIR__.'/../data/user.json';
	$jsonData = json_decode('user.json');
	echo $jsonData;
}
