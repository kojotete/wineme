<?php
if (isset ($POST['contact name']) && isset ($POST['contact_email']) {{ isset ($_POST['contact_text])
{
$contact_name=$_POST['contact_name'];
$contact_email=$_POST['contact_email'];
$contact_text=$_POST['contact_text'];

if (!empty($contact_name)$$!empty($contact_email)&&!empty($contact_text)){
if (string ($contact_name)>25   || string ($contact_email)>50 || String ($contact_text)>1000){
echo 'Sorry, maxlength for some field has been exceeded.';
$to='asare.sethuk@gmail.com';
$subject='contact form submitted.';
$body=$contact _name"\n". $contact_text;
$headers='From:$contact_email;

if (@mail ($to,$subject,$body,$headers))
{
echo: thanks for contacting us. We\'ll be in touch soon.';
}
else
{
echo' Sorry, an error occurred. Please try again later.';
}
} else
echo 'All fields are required.';
<form action = "index.php" method= "POST">
Name: <br> <input type= "text" name="contact_email" maxlength="50"><br><br>
message:<br>
<text area name ="contact_text" rows="6" cols="30" ></textarea><br><br>
<input type="submit" value="send">
</form>
?>