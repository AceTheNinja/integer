<?php



include 'configdb.php';
 function get_post($connection, $var)
  {
    return $connection->real_escape_string($_POST[$var]);
  }
$name = get_post($conn, 'name');
$email = get_post($conn, 'email');
$father = get_post($conn, 'faname');
$mob = get_post($conn, 'phone');
$dob = get_post($conn, 'dob');
$cour = get_post($conn, 'course');
$qualif = get_post($conn, 'qual');
$em_ststus = get_post($conn, 'emp');
$colcomp = get_post($conn, 'colname');
$comments = get_post($conn, 'comm');
$address = get_post($conn, 'message');
$pagedir = $_POST['pagedir'];
$pageurl = $_POST['pageurl'];
date_default_timezone_set('Asia/Calcutta');
$datetime=date('l jS \of F Y h:i:s A');


$msg=" Data of ENQIRY ,     name : $name , mobile : $mob , email : $email  ";
$query = "insert into enquiry(Name,Email,fatherorhubby,phone,dob,course,qualification,employee_status,collge_company,comments,address,formdate)"
        . " values ('$name','$email','$father','$mob','$dob','$cour','$qualif','$em_ststus','$colcomp','$comments','$address','$datetime')";
$result   = $conn->query($query);
if ($result){

    $email_from="admin@integer-innovation.in";
$uploadHandler = 'http://' . $_SERVER['HTTP_HOST'] .$pagedir.$pageurl.'?data=1';
 header("location:$uploadHandler");
 $message = 
"
     
 Dear <b>$name</b>,<br><br>

Thank you for your request! .This is to notify that we have received your query and it has been forwarded to the concerned department. We request you to grant us 48 hours to get back to you. We anticipate your co-operation on the same.Feel free to contact us for any more questions you may have.


<br><br>
Sincerely,
<br><br>
<b>Admin Team</b> 

";



// In case any of our lines are larger than 70 characters, we should use wordwrap()
//$message = wordwrap($message, 70, "\r\n");
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";


$headers .= 'From: INTEGER Innovation<'.$email_from.'>' . "\r\n";
 
mail($email, 'Query Recieved', $message,$headers);


mail('yatin.cse@gmail.com','Query data',$msg);

}else
{

$uploadHandler = 'http://' . $_SERVER['HTTP_HOST'] .$pagedir.$pageurl.'?data=2';
 header("location:$uploadHandler");
//echo $conn->error;

}

?>
