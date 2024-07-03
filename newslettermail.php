<?php require('config.php');?>
<?php
    $emailOfDomain = "noreply@worldbigroup.com";
    $subject  = "Newsletter - Form";
    $headers  = "From: no-reply<noreply@worldbigroup.com>\r\n";
    $headers .= "Reply-To: no-reply<noreply@worldbigroup.com>\r\n";
    $headers .= "Return-Path: no-reply<noreply@worldbigroup.com>\r\n";
    $headers .= "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";
    
    $email         = $_POST['email'];
    $company       = $_POST['company'];
    
    // if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) 
    if(isset($_POST['email']) && isset($_POST['company']) ) 
    {
        // $secret = '6LewnvMbAAAAANvESWr135xEIlhP1cKM1wdayos9';
        // $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        // $responseData = json_decode($verifyResponse);
        // if($responseData->success) 
        // {

            $query = "INSERT INTO newsletters (email, company) VALUES ('$email', '$company')";
            $stmt = $pdo->prepare($query);
            if ($stmt->execute()) {
                
                
                $message='
                   <!DOCTYPE html>
                <html>
                <head>
                    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
                    <META NAME="referrer" CONTENT="no-referrer">
                    <title>Auto Reply</title>
                    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
                </head>
                <body style="margin:0;padding:0;"  bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" align="left">
                    <table style="border-collapse: collapse;" width="600" border="0" align="left" cellpadding="0" cellspacing="0">
                        <tr style="border-bottom:outset;">
                            <td><a href="https://worldbigroup.com/"><img width="150" src="https://worldbigroup.com/worldbi.svg" /></a></td>
                        </tr>
                        <tr height=10></tr>
                        <tr>
                            <td colspan="10">Thank you for joining our mailing list. Check your email periodically for our newsletters and other updates.</td>
                        </tr>
                        <tr height=10></tr>
                        <tr>
                            <td colspan="10">Best regards,</td>
                        </tr>
                        <tr height=3></tr>
                        <tr>
                            <td colspan="10"><b><u>World BI Team</u></b></td>
                        </tr>
                        <tr height=10></tr>
                        <tr>
                            <td colspan="10">London Office: <a href="tel:004402031298222"><b>00 44 (0) 20 3129 8222</b></a></td>
                        </tr>
                        <tr>
                            <td colspan="10">Canada Office: <a href="tel:0016478493326"><b>00 (1) 647 849 3326</b></a></td>
                        </tr>
                        <tr height=10></tr>
                        <tr>
                            <td colspan="10">Website:<b><a href="https://worldbigroup.com"> https://worldbigroup.com</a></b></td>
                        </tr>
                        <tr height=10></tr>
                    </table>
                </body>
                </html>';
            
                
                  $messageAdmin='
                <!DOCTYPE html>
                <html>
                <head>
                    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
                    <META NAME="referrer" CONTENT="no-referrer">
                    <title>Auto Reply</title>
                    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
                </head>
                <body style="margin:0;padding:0;"  bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" align="left">
                    <center>
                        <table rule="all" style="border-collapse: collapse;" width="600" cellpadding="10">
                            <tr>
                                <td colspan="10"></td>
                            </tr>  		
                                
                            <tr>
                                <td><b>Email</b></td>
                                <td>'.$email.'</td>
                            </tr> 
                            
                            <tr style="background: #eee;">
                                <td><b>Company Name</b></td>
                                <td>'.$company.'</td>
                            </tr>  
                             
                        </center>
                    </table>
                </body>
                </html>';
                
                  mail($email,"Thank you for contacting",$message,$headers,'-f'.$emailOfDomain);
                  mail("marketing@worldbigroup.com",$subject,$messageAdmin,$headers,'-f'.$emailOfDomain);
                  mail($emailOfDomain,$subject,$messageAdmin,$headers,'-f'.$emailOfDomain);
                  
                //echo mail("","Welcome Subscriber",$message,$headers,'-f'.$emailOfDomain);
                // echo "<script>alert('Thank you, we have received your request. A member of our team will get back to you shortly.'); window.location.href = 'index.php'</script>";
                echo "ok";
            } else {
                echo "Error: " . $query . "<br>" . $conn->error;
            }
             
        }else {
        // No post data specified
        exit('Please provide a valid email address!');
    }
?>
