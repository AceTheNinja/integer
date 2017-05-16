<?php
include ('configdb.php');

$ip= $_SERVER["REMOTE_ADDR"]; 
$agent =$_SERVER["HTTP_USER_AGENT"];
$datetime =date("Y/m/d") . ' ' . date('H:i:s') ;
$dbtablehits= 'visitor';
$dbtableinfo= 'info';
$maxrows = 50; // Restrics how many entry´s are allowed in $dbtableinfo. if more then $maxrows , new entry´s will replace the oldest to keep your database small. 
$v_rowcount1 =$conn->query("SELECT ip_address FROM info WHERE ip_address = '$ip'");

if($v_rowcount1->num_rows <= 0)
        {
    
            $adddata = $conn->query("INSERT INTO $dbtableinfo (ip_address, user_agent, datetime) VALUES('$ip' , '$agent','$datetime' ) ");
            if (!$adddata) {
                die('Could not add IP : ' . $conn->error); // remove ?
                    }

    if ($conn->query("SELECT count FROM $dbtablehits")->num_rows) {
        $updatecounter = $conn->query("UPDATE $dbtablehits SET count = count+1");
        if (!$updatecounter) {
            die("Can't update the counter : " . $conn->error); // remove ?
        }
    } else {
        
    $insert = $conn->query("INSERT INTO $dbtablehits (count)VALUES ('7000')");

        if (!$insert) {
            die("Can\'t insert into $dbtablehits : " . $conn->error); // remove ?
        }
    }
    
}


$result = $conn->query("SELECT * FROM $dbtableinfo");
if ($result->num_rows > 0)
{
    $num_rows=$result->num_rows ;
$to_delete = $num_rows- $maxrows;
if($to_delete > 0)
{
	for ($i = 1; $i <= $to_delete; $i++) 
	{

		$delete = $conn->query("DELETE FROM $dbtableinfo ORDER BY id LIMIT 1") ;
		if (!$delete) 
		{
		    die('Could not delete : ' . $conn->error); // remove ?
		}
	}
}
}
$v_rowcount = $conn->query("SELECT count FROM $dbtablehits");
if ($v_rowcount->num_rows > 0) {
    while ($v_row = $v_rowcount->fetch_assoc()) {
        
$v_count=$v_row["count"];
    }
}






?>
 
