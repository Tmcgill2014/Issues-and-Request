<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "Issues");

//$host="localhost";
//$user="root";
//$pass="P@55word";
//$db="RBPortalDB";
//
//$conn = new mysqli($host, $user, $pass, $db);

$stmt = $conn->query("SELECT userID, password, fullName, status FROM customers");


$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"id":"'  . $rs["userID"] . '",';
    $outp .= '"password":"'   . $rs["password"] . '",';
    $outp .= '"fullName":"'  . $rs["fullName"] . '",';
    $outp .= '"status":"'. $rs["status"]     . '"}';
}
$outp ='{"records":['.$outp.']}';
$db->close();

echo($outp);
?>


