<?php 
$EmailFrom = Trim(stripslashes($_POST['element_1_2'])); 

$EmailTo ='employment@2arrowsconstruction.com';
$Subject = "Website Contact Form";
$Name = Trim(stripslashes($_POST['element_1_1'])); 
$Phone = Trim(stripslashes($_POST['element_1_3'])); 
$Company = Trim(stripslashes($_POST['element_1_4']));
$How = Trim(stripslashes($_POST['element_2']));
$Comments = Trim(stripslashes($_POST['element_3'])); 

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $EmailFrom;
$Body .= "\n";
$Body .= "Phone: ";
$Body .= $Phone;
$Body .= "\n";
$Body .= "Company: ";
$Body .= $Company;
$Body .= "\n";
$Body .= "How did you find us: ";
$Body .= $How;
$Body .= "\n";
$Body .= "Comments: ";
$Body .= $Comments;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=thank_you.html\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
}
?>