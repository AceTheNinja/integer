<?php



include 'configdb.php';
 function get_post($connection, $var)
  {
    return $connection->real_escape_string($_POST[$var]);
  }
$name = get_post($conn, 'name');
$email = get_post($conn, 'email');
$sub = get_post($conn, 'subject');
$mob = get_post($conn, 'phone');
$comments = get_post($conn, 'message');
$pagedir = $_POST['pagedir'];
$pageurl = $_POST['pageurl'];
date_default_timezone_set('Asia/Calcutta');
$datetime=date('l jS \of F Y h:i:s A');


$msg=" Data of contact us ,     name : $name , mobile : $mob , email : $email  ";
$query = "insert into contact(Phone,Name,Email,Subject,Message,formdate) values ('$mob','$name','$email','$sub','$comments','$datetime')";
$result   = $conn->query($query);
if ($result){

    $email_from="admin@integer-innovation.in";
$uploadHandler = 'http://' . $_SERVER['HTTP_HOST'] .$pagedir.$pageurl.'?data=1';
 header("location:$uploadHandler");
 $message = 
"

<html> <head> <title></title> <style>body{background-color: #efefef;}.pull-left{float:left;}.pull-right{float:right;}.main .strip{background: #004d80; padding: 2px;}.main .strip p{font-family: arial, helvetica, sans-serif; font-size: 16px; color: #fff; text-align: center !important; line-height: 0.7em;}.main{width: 50%; margin: 10px auto; background: #fff;}.main .header{padding: 20px;}.main .header ul{list-style: none; padding-top: 20px; float: right;}.main .header ul li{display: inline-block; padding: 5px 20px; background: #004d80; border-radius: 3px;}.main .header ul li a{text-decoration: none; color: #fff;}.main .footer{background: #004d80;}.main .footer table{margin: 20px auto; padding: 20px}.main .footer table i{color: #fff; font-size: 20px; margin-right: 20px;}.main .footer .copyright{padding-bottom: 10px;}.main .footer .copyright p{color: #fff; font-size: 14px; text-align: center; font-family: sans-serif;}.main .footer .copyright p a{color: #fff; text-decoration: none}.main .tcontent{padding: 20px;}</style> <link rel='stylesheet' href='font/font-awesome/css/font-awesome.min.css'> </head> <body> <div class='main'> <table class='header'> <tr> <td class='pull-left'> <img src='http://integer-innovation.in/images/finalint.jpg' width='150' height='70'> </td><td class='pull-right'> <ul> <li><a href='http://integer-innovation.in/' target='_blank'>Home</a></li><li><a href='http://integer-innovation.in/course' target='_blank'>Courses</a></li><li><a href='http://integer-innovation.in/service' target='_blank'>Services</a></li><li><a href='http://integer-innovation.in/contact' target='_blank'>Contact Us</a></li></ul> </td></tr></table> <div class='strip'> <p>Greetings from Integer Innovation</p></div><div class='tcontent' <p> Dear <b>$name</b>,<br><br>Thank you for your request! .This is to notify that we have received your query and it has been forwarded to the concerned department. We request you to grant us 48 hours to get back to you. We anticipate your co-operation on the same.Feel free to contact us for any more questions you may have.<br><br>Sincerely,<br><br><b>Admin Team</b> </p></div><div class='footer'> <table > <tr> <td> <a href='http://www.facebook.com/INTEGER.Innovation'><i class='fa fa-facebook'></i></a> </td><td> <a href='https://www.linkedin.com/company/integer-innovation'><i class='fa fa-linkedin'></i></a> </td><td> <a href='https://twitter.com/INTEGERInnovatn'><i class='fa fa-twitter'></i></a> </td><td> <a href='https://plus.google.com/113670558187229529487'><i class='fa fa-google-plus'></i></a> </td><td> <a href='https://www.pinterest.com/integerinnovati/'><i class='fa fa-pinterest'></i></a> </td></tr></table> <div class='copyright'> <p><a href='http://integer-innovation.in/' target='_blank'>INTEGER Innovation &copy; 2016. All Rights Reserved</a></p></div></div></div></body> </html>

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
