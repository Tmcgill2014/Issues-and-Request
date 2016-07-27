<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "Issues");


$jsondata = file_get_contents("../data/issues.json");

$data = json_decode($jsondata, true);

$userID = $data["userID"];
$issues = $data["issues"];



$result = $conn->query("INSERT INTO customers (userID, issues) VALUES('peak10', 'Server is down') ");

$outp = "";

    $outp .= '{"id":"'  . $rs["userID"] . '",';
    $outp .= '"issues":"'   . $rs["issues"]        . '",';

$outp ='{"records":['.$outp.']}';
$conn->close();

echo ($jsondata);
?>

