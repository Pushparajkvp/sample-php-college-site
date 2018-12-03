<?php
require "credentials.php";
if(isset($_POST['num'])){
$num= $_POST['num'];
$conn = mysqli_connect($host,$user,$pass,$db) or die("error in connect");
$query = "select distinct name from numTable where rnum = '$num';";
$result = mysqli_query($conn,$query);

while($row =mysqli_fetch_assoc($result)){
echo $row["name"];
}
mysqli_close($conn);
}
?>