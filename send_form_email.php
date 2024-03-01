<?php 
if(isset($_POST['email'])){
    $to = "contact@venuscloudtechnologies.co.in"; // this is your Email address
    $from = $_POST['inputemail']; // this is the sender's Email address
    $inputname = $_POST['inputname'];
    $inputmobile = $_POST['inputmobile'];
    $subject = "Form submission From Website(Venus Cloud Technologies)";
    $inputmessage = $inputname . " " . $inputmobile . " wrote the following:" . "\n\n" . $_POST['inputmessage'];
    

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$inputmessage,$headers);
    
   

    echo '<script type="text/javascript"> alert("Thanks For Reaching out to us  '.$inputname.'  We will Contact you Shortly.");</script>';
   
   
    }
?>
