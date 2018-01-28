<?php


$link = mysql_connect('localhost', 'root', '');
if (!link) {
	die('No connection: ' . mysql_error());

}
echo 'connected successfully<br>';

for($i=0; $i < count($product); $i++) {

	//Inserting data into DataBase
	$sql = "INSERT INTO "



	mysql_select_db('acc');
	$retval = mysql_query( $sql, $link );

	if (! $retval ) {
		die('Could not enter data: ' . mysql_error());
	}
}



echo "Entered data successfully\n";

mysql_close($link);






?>