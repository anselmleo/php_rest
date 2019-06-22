<?php

	header ('Access-Control-Allow-Origin: *');
	header ('Content-Type: application/json');

	include_once "../../dbconfig/Database.php";
	include_once "../../model/Post.php";

	$db = new Database();
	$post = new Post($db);
	