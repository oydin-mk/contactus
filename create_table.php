<?php

$servername = "";
$username = "";
$db_password = "";
$db = "";


$link = mysqli_connect($servername, $username, $db_password);

$db_selected = mysqli_select_db($link, $db);

$sql = "CREATE TABLE contacts(
    id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(256) NOT NULL,
    email VARCHAR(256) NOT NULL UNIQUE,
    gender CHAR(1) NOT NULL,
    theme CHAR(1) NOT NULL,
    file VARCHAR(256) NOT NULL,
    question VARCHAR(256) NOT NULL
)";

if (mysqli_query($link, $sql)) {
    echo "Table created successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);

?>