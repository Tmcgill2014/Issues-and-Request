<?php
include_once '../connect.php'; 
$database = new Database(); 
$conn = $database->getConnection();


$jsondata = file_get_contents('../issues.json');

$data = json_decode($jsondata, true);

$userID = $data['userID'];
    $issues = $data['issues'];
    
    
$sql = "UPDATE user SET issues='Server is slow' WHERE userID=2";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
}
echo $jsondata;
?>


