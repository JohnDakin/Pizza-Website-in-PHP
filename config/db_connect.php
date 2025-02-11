<?php
//connect to database

$conn = mysqli_connect('localhost', 'john', 'test1234', 'ninja_pizza');

//check connection
if(!$conn){
	echo 'conection error: ' . mysqli_connect_error();
}

?>