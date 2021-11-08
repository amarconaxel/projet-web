<?php
 
$password = 123;
 
echo $hashed_password = password_hash($password, PASSWORD_DEFAULT);

$password1 = 123;
$toto =password_verify($password1, $hashed_password);
if($toto == false) {
    // If the password inputs matched the hashed password in the database
    echo "<br>Password verified";
} 
else {
    echo " probleme";
}