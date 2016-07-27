<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "Issues");


$jsondata = file_get_contents("../data/issues.json");

$data = json_decode($jsondata, true);

$userID = $data["userID"];
$request = $data["request"];
$requestDueDate = $data["requestDueDate"];
$plannedImplementation = $data["plannedImplementation"];
$outcome = $data["outcome"];
$outcomeComments = $data["outcomeComments"];



$result = $conn->query("INSERT INTO request_issue (userID, request, requestDueDate, plannedImplementation, outcome, outcomeComments) VALUES('peak10', 'New Portal View', '03-09-2016', '03-24-2016', 'Successful', 'Internet is down!') ");

$outp = "";

    $outp .= '{"id":"'  . $rs["userID"] . '",';
    $outp .= '"issues":"'  . $rs["request"] . '",';
    $outp .= '"requestDueDate":"'  . $rs["requestDueDate"] . '",';
    $outp .= '"plannedImplementation":"'  . $rs["plannedImplementation"] . '",';
    $outp .= '"outcome":"'  . $rs["outcome"] . '",';
    $outp .= '"outcomeComments":"'   . $rs["outcomeComments"]    .  '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo ($jsondata);
?>

