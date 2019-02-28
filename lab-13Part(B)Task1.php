

<?php
if(isset($_POST['update'])){
$f_name = $_POST['firstname'];
$rollnum = $_POST['rollnum'];
echo $f_name;
$student_array= array();

$conn= mysqli_connect("localhost","root","","lab13")
or
die("Error connecting to database ".mysql_error());

$result = mysqli_query($conn,"SELECT * FROM info WHERE rollnum='rollnum' ") 
or die("Query not executed".mysqli_error());

while ($k=mysqli_fetch_assoc($result)){
	array_push($student_array, $k);
}

echo json_encode($student_array);

mysqli_close($conn);
}
?>

