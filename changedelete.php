 <?php
$con = mysqli_connect("localhost", "root", "", "adminpage");

$StudentId = $_GET['StudentId'];

mysqli_query($con, "DELETE FROM campuschange WHERE StudentId = '$StudentId'");

header("Location: showcampuschange.php");
exit;
?>