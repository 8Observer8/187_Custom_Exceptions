<?php

$mysql_host = 'localhost';
$mysql_user = 'incorrect_username';
$mysql_pass = '';
$mysql_db = 'a_database';

class ServerException extends Exception {
    
}

class DatabaseException extends Exception {
    
}

try {
    if (!mysql_connect($mysql_host, $mysql_user, $mysql_pass)) {
        throw new ServerException('Could not connect to server.');
    } else if (!mysql_select_db($mysql_db)) {
        throw new DatabaseException('Could not select to database.');
    } else {
        echo 'Connected';
    }
} catch (ServerException $exc) {
    echo 'Error: ' . $exc->getMessage();
} catch (DatabaseException $exc) {
    echo 'Error: ' . $exc->getMessage();
}

/* Output
Error: Could not select to database.
*/
?>
