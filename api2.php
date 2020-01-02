<?php
header("Content-Type: application/json");
include('db.php');
//  && $_GET['s_id']!=""
if (isset($_GET['s']) && $_GET['s']!="") {
    
    $s = $_GET['s'];
    $result = mysqli_query( $connection, "SELECT * FROM std_table WHERE s_rollnum = '{$s}'");
    if(mysqli_num_rows($result) > 0)
    {
        
        $row = mysqli_fetch_array($result);

        $s_id = $row['s_id'];
        $rollNum = $row['s_rollnum'];
        $stdPass = $row['s_password'];
        $timeStamp = $row['s_time'];
        
        // // $json_response = json_encode($row);
        response($s_id, $rollNum, $stdPass, $timeStamp);
        // header("Content-Type: application/json");
        // echo $json_response;
        mysqli_close($connection);
    }
    else
    {
        response(NULL, NULL, 200, "No Record Found");
    }
}
else
{
    response(NULL, NULL, 400, "Invalid Request");
}
 
function response($student_id, $rollNum, $stdPass, $timeStamp){
    $response['student_id'] = $student_id;
    $response['rollNum'] = $rollNum;
    $response['stdPass'] = $stdPass;
    $response['timeStamp'] = $timeStamp;
    
    // $json_response = json_encode($response);
    // JSON.parse($response);
    // echo $json_response;
    // print_r($response);
    $json_response = json_encode($response);
    echo $json_response;
}
?>