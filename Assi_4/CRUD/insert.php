<?php
include 'db.php';  

$name = $_POST['name'];
$marks = $_POST['marks'];
$id=$_POST['id'];


$stat = $conn->prepare("INSERT INTO student (name, marks,id) VALUES (?, ?, ?)");
$stat->bind_param("sii", $name, $marks,$id); 


if ($stat->execute()) {
    echo "Data added successfully";
} else {
    echo "Error: " . $stat->error;
}


$stat->close();
$conn->close();
?>
