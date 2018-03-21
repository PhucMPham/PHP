<?php
$link = mysqli_connect("localhost", "root", "root", "assignment");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// attempt insert query execution
$sql = "INSERT INTO `employee`(`First_Name`, `Last_Name`, `email`, `phone`) VALUES ('Phuc', 'Pham', 'pp03652n@pace.edu', '9293748750')";
// Check connection
if(mysqli_query($link, $sql)){
    echo "<br> Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>
