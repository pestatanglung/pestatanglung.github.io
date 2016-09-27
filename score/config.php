<?
	///////////////////////////////////////////////////////
	// Online Score Script
	// Jeff Vance 
	// Version 1.4
	//////////////////////////////////////////////////////

	// You need to fill in this data from your own mySQL server
	
	// Your host -- for example localhost or mysql.server.com
	$mysql_host = "";
	
	// Your user name for mySQL
	$mysql_user = "";
	
	// Your password for mySQL
               $mysql_password = "";
	
	// Your database name for mySQL
	$mysql_database = "";

	// ATTENTION
	// This is your secret key - Needs to be the same as the secret key in your game
	// You can change this but remember to change it in your game.
	// This is used to help secure the score and produce MD5 hashes
               $secret_key = "this is secret";
	
	// Your table name for mySQL
	// You can change this is you wish
	$tname= 'scores';
	
	// Number of scores to save for each gameid
	// Feel free to change this but the example file only lists 10 scores
	// You would need to code this
	$score_number = '10';
	
?>