<?php

include ('configdb.php');
$pageblog = $page = basename($_SERVER['PHP_SELF']);
$ip1 = $_SERVER["REMOTE_ADDR"];
$agent1 = $_SERVER["HTTP_USER_AGENT"];
$datetime1 = date("Y/m/d") . ' ' . date('H:i:s');
$dbtablehits1 = 'blogvisitor';
$dbtableinfo1 = 'bloginfo';
$maxrows1 = 50; // Restrics how many entry´s are allowed in $dbtableinfo. if more then $maxrows , new entry´s will replace the oldest to keep your database small. 
$v_rowcount11 = $conn->query("SELECT ip_address FROM $dbtableinfo1 WHERE page = '$pageblog' and ip_address='$ip1'");

if ($v_rowcount11->num_rows <= 0) {
    $adddata1 = $conn->query("INSERT INTO $dbtableinfo1 (ip_address, user_agent, datetime,page) VALUES('$ip1' , '$agent1','$datetime1' ,'$pageblog') ");
    if (!$adddata1) {
        die('Could not add IP : ' . $conn->error); // remove ?
    }

    if ($conn->query("SELECT count FROM $dbtablehits1 WHERE page = '$pageblog'")->num_rows) {
        $updatecounter1 = $conn->query("UPDATE $dbtablehits1 SET count = count+1 WHERE page = '$pageblog'");
        if (!$updatecounter1) {
            die("Can't update the counter : " . $conn->error); // remove ?
        }
    } else {

        $insert1 = $conn->query("INSERT INTO $dbtablehits1 (count,page)VALUES ('30','$pageblog')");

        if (!$insert1) {
            die("Can\'t insert into $dbtablehits1 : " . $conn->error); // remove ?
        }
    }
}


$result = $conn->query("SELECT * FROM $dbtableinfo1");
if ($result->num_rows > 0) {
    $num_rows = $result->num_rows;
    $to_delete = $num_rows - $maxrows1;
    if ($to_delete > 0) {
        for ($i = 1; $i <= $to_delete; $i++) {

            $delete = $conn->query("DELETE FROM $dbtableinfo1 ORDER BY id LIMIT 1");
            if (!$delete) {
                die('Could not delete : ' . $conn->error); // remove ?
            }
        }
    }
}
$v_rowcount1 = $conn->query("SELECT count FROM $dbtablehits1 WHERE page = '$pageblog'");
if ($v_rowcount1->num_rows > 0) {
    while ($v_row1 = $v_rowcount1->fetch_assoc()) {

        $v_count1 = $v_row1["count"];
    }
}
?>
 
