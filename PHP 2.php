<?php
$link = mysqli_connect("localhost", "root", "root", "demo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// attempt insert query execution
$sql = "INSERT INTO persons (first_name, last_name, email_address) VALUES ('Wormy', 'VonWormenstein', 'email@email.com')";
// Check connection
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>
