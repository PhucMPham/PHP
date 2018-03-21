<?php
$link = mysqli_connect("localhost", "root", "root", "assignment");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// attempt insert query execution
$sql = "SELECT * FROM `employee`";
$result = $link->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> First Name: ". $row["First_Name"]. ", Last Name: ". $row["Last_Name"] . ", Email: ". $row["email"]. ", Phone: " . $row["phone"] . "<br>";
    }
} else {
    echo "0 results";
}
// Check connection
if(mysqli_query($link, $sql)){
    echo "<br> Records pulled successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>
