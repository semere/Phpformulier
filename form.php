<?php 
$name =""; 
$email =""; 
$message =""; 
$nameError ="";
$emailError ="";
$messageError ="";
$successMessage =""; 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
if (empty($_POST["name"])){
$nameError = "Name is required";
echo "Name is required"."<br>";
}
else
 {
$name = test_input($_POST["name"]); 
echo $name ."<br>";
 }
if (!preg_match("/^[a-zA-Z ]*$/",$name))

{
$nameError = "Only letters and white space allowed";

}
} 
if (empty($_POST["email"]))
{
$emailError = "Email is required";
echo "Email is required"."<br>";
}
else
 {
$email = test_input($_POST["email"]);
echo $email."<br>";
} 


if (empty($_POST["message"]))
{
$messageError = "Message is required";
echo $messageError."<br><br>";
}
else
 {
$message = test_input($_POST["message"]);
echo $message."<br><br>";
} 
if((!$name=='') && (!$email=='') && (!$message=='') )
{ 
$message_body = "you have submitted the form";
echo $message_body;
}
else
 {
echo "Form not submitted"."<br>";
} 

 // Function for filtering input values.
function test_input($data) {
$data = trim($data);
$data =stripslashes($data);
$data =htmlspecialchars($data);
return $data;
}
?>