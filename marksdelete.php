 <?php
$con = mysqli_connect("localhost", "root", "", "adminpage");

$StudentId = $_GET['StudentId'];

mysqli_query($con, "DELETE FROM marksquery WHERE StudentId = '$StudentId'");

header("Location: showmarks.php");
exit;
?>