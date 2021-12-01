<?php
if(isset($_POST))
{
$email = $_POST['email'];
$name = $_POST['name'];
$contact = $_POST['contact'];
$message = $_POST['message'];

$to = "kkhurana696@gmail.com";

$subject = "From Best Infra Solutions";

$message = "<table colspan='5px' cellpadding='5px'>
<tr><td>Name</td><td>$name</td></tr>
<tr><td>Email</td><td>$email</td></tr>
<tr><td>Contact</td><td>$contact</td></tr>
<tr><td>Message</td><td>$message</td></tr>
</table>";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <kkhurana696@gmail.com>' . "\r\n";
// $headers .= 'Bcc: xyz@gmail.com' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";

header('Location: https://suspicious-boyd-2d35d1.netlify.app/contact.html');
@mail($to,$subject,$message,$headers);

echo "your request has been accepted successfully!";
}
else
{
    echo "your request denied something went wrong!";
}

?>