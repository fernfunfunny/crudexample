<?php
 require_once "db_config.php";
// echo  "connect success";
 $sql="SELECT * FROM members";
$result= $conn->query($sql);
while ($row=$result->fetch_assoc()){
    //var_dump($row);
    echo "<br>".$row['id'].":" . $row['fname'].":". $row['lname'] . ":" .$row['contact'] . "<br>";
}
mysqli_close($conn);
?>