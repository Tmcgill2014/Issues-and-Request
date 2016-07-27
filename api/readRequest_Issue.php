<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "Issues");

$result = $conn->query("SELECT recordID, createdBy, createDate, title, customerName, assignedUser, status, priority, detailDescription, recordType, issue issueStartTime ,issueEndTime, issueType, requestDueDate, plannedImplementDate, outcome, outcomeComments FROM request_issue");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"recordID":"'  . $rs["recordID"] . '",';
    $outp .= '"createdBy":"'   . $rs["createdBy"]        . '",';
    $outp .= '"createDate":"'  . $rs["createDate"] . '",';
    $outp .= '"title":"'  . $rs["title"] . '",';
    $outp .= '"customerName":"'  . $rs["customerName"] . '",';
    $outp .= '"assignedUser":"'  . $rs["assignedUser"] . '",';
    $outp .= '"status":"'  . $rs["status"] . '",';
    $outp .= '"priority":"'  . $rs["priority"] . '",';
    $outp .= '"detailDescription":"'  . $rs["detailDescription"] . '",';
    $outp .= '"recordType":"'  . $rs["recordType"] . '",';
    $outp .= '"issue":"'  . $rs["issue"] . '",';
    $outp .= '"issueStartTime":"'  . $rs["issueStartTime"] . '",';
    $outp .= '"issueEndTime":"'  . $rs["issueEndTime"] . '",';
    $outp .= '"issueType":"'  . $rs["issueType"] . '",';
    $outp .= '"requestDueDate":"'  . $rs["requestDueDate"] . '",';
    $outp .= '"plannedImplementDate":"'  . $rs["plannedImplementDate"] . '",';
    $outp .= '"outcome":"'  . $rs["outcome"] . '",';
    $outp .= '"outcomeComments":"'. $rs["outcomeComments"]     . '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);
?>

