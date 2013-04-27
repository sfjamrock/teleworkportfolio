<?php

$ipaddress = $_SERVER['REMOTE_ADDR'];
$json = file_get_contents("http://freegeoip.net/json/$ipaddress");
echo $json;
$data = json_decode($json);
echo $data->ip;
echo $data->city;

			$ipaddress = '309.183.238.119';
			$json = file_get_contents("http://freegeoip.net/json/$ipaddress");
			$location = json_decode($json);
echo $json;
echo $location->ip;
echo $location->city;
echo $location->region_code;



   //change this to your email. 
    $to =  "sean.e.fuller@gmail.com" ;
    $from = "sfuller@teleworkportfolio.com"; 
    $subject = "Welcome To Telework Portfolio - Where we make telework, work for you" ;
    //begin of HTML message 
    $message =" 
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<style type='text/css'>
body{margin:0; padding:0; background:#cccccc;}
</style>
</head><body>
<table width='980' border='0' align='center' cellpadding='0' cellspacing='0' style='font-family:Arial, Helvetica, sans-serif; font-size:15px; color:#333333; background:#fff;'>
  <tr>
    <td><img src='www.teleworkportfolio.com/resource/images/emal-header.png' alt='header' width='980' height='200' /></td>
  </tr>
  <tr>
    <td><table width='980' border='0' cellspacing='0' cellpadding='0'>
      <tr>
        <td width='10'>&nbsp;</td>
        <td width='960'><table width='960' border='0' cellspacing='0' cellpadding='0'>
          <tr>
            <td style='font-size:25px; font-weight:bold; color:#091e2f; background:#cccccc; padding:10px 0; text-align:center;'>Welcome to Telework Portfolio - Where we make telework, work for you</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>Congratulation on join Telework Portfolio family. Here at telework portfolio we are all about creating an awesome group of professionals excited about the great possibility telework offers, from:<br /><br />&nbsp;&nbsp; <strong>&bull;</strong> &nbsp;&nbsp; Avoiding bumper to bumper traffic<br />&nbsp;&nbsp; <strong>&bull;</strong> &nbsp;&nbsp; Saving money on work related expenses<br />&nbsp;&nbsp; <strong>&bull;</strong> &nbsp;&nbsp; Being more productive at work<br />&nbsp;&nbsp; <strong>&bull;</strong> &nbsp;&nbsp; Achieving a better work, life balance<br /><br />telework portfolio, is here to help you reach your telework goals. To help you get started here are some recommendations;<br /><br />
              <strong>Job Evaluation:</strong> Take some time to do a self telework evaluation of your job, using our job evaluator tools located under the options menu. A great place to start to see what you think about your telework prospects.<br />
              <br />
              <strong>Meet teleworkers:</strong> Meet other teleworker in your area or your field. You can search, view other teleworkers like you by visiting your Telework Statistics page.<br />
              <br />
              <strong>Start Telework Saving Tracking:</strong> Start tracking and measuring your telework saving to see if telework is right for you remember to check in and record your saving often to see the best results.<br />
              <br />Cheers<br />The Team at Telework Portfolio</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
        </table></td>
        <td width='10'>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
</body></html>
 ";
   //end of message 
    $headers  = "From: $from\r\n"; 
    $headers .= "Content-type: text/html\r\n"; 

    //options to send to cc+bcc 
    //$headers .= "Cc: [email]maa@p-i-s.cXom[/email]"; 
    //$headers .= "Bcc: [email]email@maaking.cXom[/email]"; 
     
    // now lets send the email. 
    mail($to, $subject, $message, $headers); 

    echo "Message has been sent....!"; 
?>
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<style type='text/css'>
body{margin:0; padding:0; background:#cccccc;}
</style>
</head><body>
<table width='980' border='0' align='center' cellpadding='0' cellspacing='0' style='font-family:Arial, Helvetica, sans-serif; font-size:15px; color:#333333; background:#fff;'>
  <tr>
    <td><img src='resource/images/emal-header.png' alt='header' width='980' height='200' /></td>
  </tr>
  <tr>
    <td><table width='980' border='0' cellspacing='0' cellpadding='0'>
      <tr>
        <td width='10'>&nbsp;</td>
        <td width='960'><table width='960' border='0' cellspacing='0' cellpadding='0'>
          <tr>
            <td style='font-size:25px; font-weight:bold; color:#091e2f; background:#cccccc; padding:10px 0; text-align:center;'>Welcome to Telework Portfolio - Where we make telework, work for you</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>Congratulation on join Telework Portfolio family. Here at telework portfolio we are all about creating an awesome group of professionals excited about the great possibility telework offers, from:<br /><br />&nbsp;&nbsp; <strong>&bull;</strong> &nbsp;&nbsp; Avoiding bumper to bumper traffic<br />&nbsp;&nbsp; <strong>&bull;</strong> &nbsp;&nbsp; Saving money on work related expenses<br />&nbsp;&nbsp; <strong>&bull;</strong> &nbsp;&nbsp; Being more productive at work<br />&nbsp;&nbsp; <strong>&bull;</strong> &nbsp;&nbsp; Achieving a better work, life balance<br /><br />telework portfolio, is here to help you reach your telework goals. To help you get started here are some recommendations;<br /><br />
              <strong>Job Evaluation:</strong> Take some time to do a self telework evaluation of your job, using our job evaluator tools located under the options menu. A great place to start to see what you think about your telework prospects.<br />
              <br />
              <strong>Meet teleworkers:</strong> Meet other teleworker in your area or your field. You can search, view other teleworkers like you by visiting your Telework Statistics page.<br />
              <br />
              <strong>Start Telework Saving Tracking:</strong> Start tracking and measuring your telework saving to see if telework is right for you remember to check in and record your saving often to see the best results.<br />
              <br />Cheers<br />The Team at Telework Portfolio</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
        </table></td>
        <td width='10'>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
</body></html>
