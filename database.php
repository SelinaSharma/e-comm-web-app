<?php

//Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "customcheckout";

//Create a connection
$conn = mysqli_connect($servername,$username,$password,$database);

//Die if connection was not successful
if(!$conn){
    die("Sorry we failed to connect:".mysqli_connect_error());
}
else{
    echo "Connection was successful";
}
echo "<br>";
//Create a db
//$sql = "CREATE DATABASE customcheckout";
//$result = mysqli_query($conn, $sql);

//Check for db creation success
//if($result){
  //  echo "The db was created successfully!";
//}
//else{
    //echo "The db was not created successfully! Because of this error--->".mysqli_error($conn);
//}
//echo "<br>";

//Create a table in the db
/*----$sql = "CREATE TABLE details 
(s_no INT(6) AUTO_INCREMENT PRIMARY KEY NOT NULL , 
name_on_card VARCHAR(55) NOT NULL , 
credit_card_number int(50) NOT NULL , 
exp_Month VARCHAR(22) NOT NULL , 
exp_Year INT(11) NOT NULL , 
cvv_number INT(15) NOT NULL)";---*/

//$result = mysqli_query($conn, $sql);
//sql query executed
$sql = "INSERT INTO details VALUES 
('1', 'SELINA SHARMA', '875786798787','07','25','788')";

$result = mysqli_query($conn, $sql);


//check for the table creation success

/*--if($result){
    echo "The table was created successfully!";
}
else{
    echo "The table was not created successfully! Because of this error--->"
    .mysqli_error($conn);
}
echo "<br>";---*/

//Add a new db in the db

if($result){
    echo "The record has been inserted successfully!";
}
else{
    echo "The record was not been created successfully! Because of this error--->"
    .mysqli_error($conn);
}
echo "<br>";



//echo "The result is";
//echo var_dump($result);
//echo "<br>";


?>
