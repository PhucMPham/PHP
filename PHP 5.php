<?php
$link = mysqli_connect("localhost", "root", "root", "assignment");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// attempt insert query execution
$sql = "UPDATE `employee` SET `First_Name`= 'Phil' WHERE `Last_Name`='Pham'";
// Check connection
if(mysqli_query($link, $sql)){
    echo "<br> Records updated successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>
