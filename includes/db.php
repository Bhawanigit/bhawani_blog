



<?php

$db['db_host'] = "localhost";
$db['db_user'] = "your user name";
$db['db_pass'] = "password";
$db['db_name'] = "database name";
 

 foreach($db as $key => $value) {
 	 define(strtoupper($key), $value);
}
 $connection = mysqli_connect (DB_HOST, DB_USER, DB_PASS, DB_NAME);

?>