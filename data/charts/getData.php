<?php 
include_once '../connect.php';

$sql = "SELECT personalHours, hoursLogged FROM personaldata WHERE id = 1";
    $result = mysqli_query($mysqli, $sql) or die("Error in Selecting " . mysqli_error($connection));

    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }

    echo json_encode($emparray);

    $fp = fopen('empdata.json', 'w');
    fwrite($fp, json_encode($emparray));
    fclose($fp);

?>