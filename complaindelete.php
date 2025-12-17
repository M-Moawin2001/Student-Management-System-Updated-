 <?php
$con = mysqli_connect("localhost", "root", "", "adminpage");

$id = $_GET['id'];

mysqli_query($con, "DELETE FROM complainform WHERE Id = '$id'");

header("Location: showcomplain.php");
exit;
?>