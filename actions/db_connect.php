<?php
$localhost = "localhost";
// by default the userName for the databases is root
$user = "root";
// by default there is no password in the database
$pass = "";
// here we need to write the Database name
$db_name = "BE17_CR4_Ericka_BigLibrary";
// create connection, you need to be aware of the order of the parameters
$conn=  mysqli_connect($localhost, $user, $pass, $db_name);
if (!$conn){
    echo "There was an error";
} 
// The var_dump() function dumps information about one or more variables. The information holds type and value of the variable(s).
function var_dump_pretty($var)
{
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
}