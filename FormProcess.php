<?php 
if(isset($_POST['Email'])) {
    // 1. SET YOUR EMAIL DATA
    $email_to = "Lucasmbrown1@gmail.com";
    $email_subject = "Overclocked Nights - Contact Form Submission";
       
    function died($error) {
        echo "We are very sorry, but there were error(s) found with the form you submitted.<br><br>";
        echo $error."<br><br>";
        echo "Please go back and fix these errors.<br><br>";
        die();
    }

    // SECTION A - assign variables to fields Posted from your contact.htm      
    $FirstName = $_POST['FirstName']; // required
    $LastName  = $_POST['LastName'];  // required
    $City      = $_POST['City'];      
    $State     = $_POST['State'];     
    $Zip       = $_POST['Zip'];       // required
    $email_from = $_POST['Email'];    // required
    $Gender    = $_POST['Gender'];    
    $Education = $_POST['Education']; 
    $Comments  = $_POST['Comments'];  // required
    $Phone     = $_POST['Phone'];     

    $email_message = "Form details for Overclocked Nights below:\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }

    // SECTION B - prepare email body
    $email_message .= "First Name: ".clean_string($FirstName)."\n";
    $email_message .= "Last Name: ".clean_string($LastName)."\n";
    $email_message .= "City: ".clean_string($City)."\n";
    $email_message .= "State: ".clean_string($State)."\n";
    $email_message .= "Zip: ".clean_string($Zip)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Gender: ".clean_string($Gender)."\n";
    $email_message .= "Education: ".clean_string($Education)."\n";
    $email_message .= "Phone: ".clean_string($Phone)."\n";
    $email_message .= "Comments: ".clean_string($Comments)."\n";
	
    // Create email headers
    $headers = 'From: '.$email_from."\r\n".
    'Reply-To: '.$email_from."\r\n" .
    'X-Mailer: PHP/' . phpversion();

    // Send the email
    @mail($email_to, $email_subject, $email_message, $headers); 
?>
 
<html>
<head>
<meta http-equiv="REFRESH" content="0;url=contactSent.htm">
</head>
<body>
    <p>Redirecting to confirmation page...</p>
</body>
</html>

<?php
}
die();
?>