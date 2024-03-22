<?php

$servername = "";
$username = "";
$db_password = "";
$db = "";

$mysqli = mysqli_connect($servername, $username, $db_password, $db);

if(!$mysqli){
    die("Connection failed. " . mysqli_connect_error());
}

$mode = isset($_REQUEST['mode']) ? $_REQUEST['mode'] : false;

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    echo '<pre>';
    print_r($_REQUEST);

    echo '</pre>';

    $name = trim($_REQUEST['name']);
    $email = trim($_REQUEST['email']);
    $gender = trim($_REQUEST['gender']);
    $theme = trim($_REQUEST['theme']);
    $file = trim($_REQUEST['file']);
    $question = trim($_REQUEST['question']);

    
    $create = $mysqli->query("INSERT INTO contacts(name, email, gender, theme, file, question) VALUES('$name', '$email', '$gender', '$theme', '$file', '$question')");
    
    
}

if ($mode === 'table'){
    
    $contacts = $mysqli->query("SELECT * FROM contacts");

    while($result = mysqli_fetch_array($contacts, MYSQLI_ASSOC)) {

        $users[] = $result;
    }      
    require 'users_table.html';
}else{
    require 'index.html';
}

exit;