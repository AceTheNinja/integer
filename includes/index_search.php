<?php

include 'configdb.php';
 function get_post($connection, $var)
  {
    return $connection->real_escape_string($_POST[$var]);
  }


if(isset($_POST['keysearch']))
{
    $search = get_post($conn, 'keysearch'); 
    $sql = "SELECT * FROM indexsearch where tag like '%$search%' order by id LIMIT 5";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $resultdata=$row["url"];
        $resultimg=$row["image"];
        $resulttype=$row["type"];
        $resultnae=$row["tag"];
        echo "<div class='show'><a href='$resultdata' title='$resultnae'><img src='$resultimg' id='search' /><span class='resultitem'>$resultnae</span><small class='resultitemsmall'>$resulttype</small></a></div>";
    }
        
    }
}

?>
