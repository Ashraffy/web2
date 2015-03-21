<?php
    define("PATH", "/Volumes/Students/students/141/wxw9531/Sites/240/project/project2/");
    define("PATH_INC",PATH."assets/util/");
    
    define("URL", "http://nova.it.rit.edu/~wxw9531/240/project/project2/");
    define("URL_CSS", URL."assets/css/");
    define("URL_JS", URL."assets/js/");
    
    define("SITE_TITLE", "Touring Europe");

	// Include any PHP function libraries or classes
  	include "/Volumes/Students/students/141/wxw9531/db_conn.php";
	
	//Initialize the database connection
	$link = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
	//verify that the connection is valid
	if(!$link){
		echo "connection error: ". mysqli_connect_error();
		die();	
	}
?>