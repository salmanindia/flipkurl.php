<?php
include( "Flipkurl.php" );

//Create a new object
$fk = new Flipkurl();

//Optionally set the cookie directory. Default is current dir.
$fk->cookies_dir = "cookiesdump/";

//Login
$result = $fk->login( "username", "password" );
if( $result ){
    echo "Login successful";
	}else{
    echo "Login failed";
	}
	



	
?>
