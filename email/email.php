<?php

$email_from="admin@integer-innovation.in";
$message = 
"
<html>
    <head>
        <title>
            
        </title>
        <style type='text/css'>
        body {margin: 0; padding: 0; min-width: 100%!important;}
        .content {width: 100%; max-width: 600px;}  
        </style>
    </head>
    <body yahoo bgcolor='#f6f8f1'>
        <table width='100%' bgcolor='#f6f8f1' border='0'cellpadding='0' cellspacing='0'>
            <tr>
                <td>
                    <table class='content' align='center' cellpadding='0' cellspacing='0' border='0' bgcolor='white'>
                        <tr>
                            <td class='header' bgcolor='#004d99' style='padding: 40px 30px 20px 30px'>
<table width='70' align='left' border='0' cellpadding='0' cellspacing='0'>
    <tr>
        <td height='70' style='padding: 0 20px 20px 0;'>
            <img src='705025.jpg' width='140' height='70' border='0' alt='INTEGER Innovation' />
        </td>
    </tr>
</table>
            <tr>
                <td class='innerpadding borderbottom' style='padding: 30px 30px 30px 30px'>
        <table width='100%' border='0' cellspacing='0' cellpadding='0'>
            <tr>
                <td class='h2' style='padding: 0 0 15px 0; font-size: 24px; line-height: 28px; font-weight: bold'>
                    Welcome to Integer Innovation
                </td>
            </tr>
            <tr>
                <td class='bodycopy' style='font-size: 16px; line-height: 22px'>
                  Our goal is to bridge the gap between what is being taught in the graduation 
                  these days and what is actually required in the corporate world. We offer training according to current 
                  trend in the IT industry.With us you can shape the future. </td>
            </tr>
        </table>
    </td>
</tr>
<tr>
  <td class='innerpadding borderbottom' style='padding: 30px 30px 30px 30px'>
    <table width='140' align='right' border='0' cellpadding='0' cellspacing='0'>  
      <tr>
        <td height='170' style='padding: 0 20px 20px 0;'>
            <img src='courses.png' width='140' height='170' border='0' alt='Courses' />
        </td>
      </tr>
    </table>
    <!--[if (gte mso 9)|(IE)]>
      <table width='380' align='left' cellpadding='0' cellspacing='0' border='0'>
        <tr>
          <td>
    <![endif]-->
    <table class='col380' align='left' border='0' cellpadding='0' cellspacing='0' style='width: 100%; max-width: 380px'>  
      <tr>
        <td>
          <table width='100%' border='0' cellspacing='0' cellpadding='0'>
            <tr>
              <td class='bodycopy' style='font-size: 16px; line-height: 22px'>
                Boost start your career with our Professional Training and distinguish yourself from the crowd. Sharpen your IT skills 
                and stay on Step ahead. 
                Get best IT Training from People who know how to train best.
                <br>Join to be an <span style='color: #004d99; font-size: 18px; font-weight: bold'>Expert</span>. 
              </td>
            </tr>
            <tr>
              <td style='padding: 20px 0 0 0;'>
                <table class='buttonwrapper' bgcolor='#004d99' border='0' cellspacing='0' cellpadding='0'>
                  <tr>
                      <td class='button' height='45' style='text-align: center; font-size: 18px; font-family: sans-serif; font-weight: bold; padding: 0 30px 0 30px;'>
                          <a href='#' style='color: #ffffff; text-decoration: none'>Choose your Course!</a>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
    <!--[if (gte mso 9)|(IE)]>
          </td>
        </tr>
    </table>
    <![endif]-->
  </td>
</tr>

<tr>
    <td class='innerpadding borderbottom' style='padding: 0px 0px 0px 0px; border-bottom: 1px solid #f2eeed'>
        <img src='courses1.jpg' width='100%' border='0' height='auto' alt='Courses' />
    </td>
</tr>

<tr>
    <td class='footer' bgcolor='#004d99' style='padding: 20px 30px 15px 30px'>
        <table width='100%' border='0' cellspacing='0' cellpadding='0'>
            <tr>
                <td align='center' class='footercopy' style='font-family: sans-serif; font-size: 14px; color: #ffffff'>
                    &amp;reg; Someone, somewhere 2013<br/>
                    <a href='#' style='color: #ffffff; text-decoration: underline'><font color='#ffffff'>Unsubscribe</font></a> from this newsletter instantly
                </td>
            </tr>
            <tr>
                <td align='center' style='padding: 20px 0 0 0;'>
                    <table border='0' cellspacing='0' cellpadding='0'>
                        <tr>
                            <td width='45' style='text-align: center; padding: 0 10px 0 10px;'>
                                <a href='http://www.facebook.com/'>
                                    <img src='facebook.png' width='45' height='37' alt='Facebook' border='0' />
                                </a>
                            </td>
                            <td width='37' style='text-align: center; padding: 0 10px 0 10px;'>
                                <a href='http://www.twitter.com/'>
                                    <img src='twitter.png' width='37' height='37' alt='Twitter' border='0' />
                                </a>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </td>
</tr>
</td>
                        </tr>
                    </table>
                </td>
                
            </tr>
        </table>
    </body>
</html>

";



// In case any of our lines are larger than 70 characters, we should use wordwrap()
//$message = wordwrap($message, 70, "\r\n");
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";


$headers .= 'From: INTEGER Innovation<'.$email_from.'>' . "\r\n";
 
mail('yatin.sagar@yahoo.in', 'Query Recieved', $message,$headers);




?>
