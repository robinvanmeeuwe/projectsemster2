<!-- De Database -->
<?php
include ("./connect_db_admintparking.php");

$sql = "SELECT * FROM `parkeerplaatsen`";

$result = mysqli_query($conn,  $sql);

if (!empty($result) && $result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
?>

<?php echo $row["ID"] ?>
<?php
// $result = mysql_query("SELECT Beschikbaarheid FROM parkeerplaatsen WHERE id =1");
// switch ($row["Beschikbaarheid"]) {
//     case 0:
//         echo "<class=alert alert-warning role=alert>The selected parking garage has no more space remaining</div>";
//         break;
//     }
$resultCheck = mysqli_num_rows($result);
if($resultCheck > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: ". $row["ID"]. ";
    }
}
else {
    echo "0 results";
}
?>

<?php
  }
} else {
  echo "0 results";
}
?>