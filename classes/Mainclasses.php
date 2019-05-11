<?php
session_start();

$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../lib/Database.php');

/*include_once ($filepath.'/../url/PHPMailer-5.2.0/class.phpmailer.php');

$mail = new PHPMailer();*/
/**
 * Mainclasses
 */
class Mainclasses{

	private $db;
	
	function __construct()
	{
		$this->db = new Database();
		
	}
    
	public function contactUsInfo($name,$email,$subject,$message){

     $name     = mysqli_real_escape_string($this->db->link, $name);
     $email    = mysqli_real_escape_string($this->db->link, $email);
     $subject  = mysqli_real_escape_string($this->db->link, $subject);
     $message  = mysqli_real_escape_string($this->db->link, $message);

     $email    = filter_var($email, FILTER_SANITIZE_EMAIL);

     if (empty($name) || empty($email) || empty($subject) || empty($message)) {
     	$msg = '<div class="alert alert-danger">Field Must not Be Empty!</div>';
     	echo $msg;
     }else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        	$msg = '<div class="alert alert-danger" role="alert">
                  Invalid Email.
                 </div>';
                 echo $msg;
        }else{

        	$sql = "INSERT INTO contacts(name,email,subject,message) VALUES('$name','$email','$subject','$message')";
        	$result = $this->db->insert($sql);
        	if ($result) {
        	$msg = '<div class="alert alert-success">Message Sent Successfully!</div>';
        	echo $msg;
        	
        	/* /// Start Mail Send ///// */
        	
			/*	if (!filter_var($email, FILTER_VALIDATE_EMAIL) !== true) {
			        if(!empty($email)){
                     
                    $mail->IsSMTP();                                      // set mailer to use SMTP
                    $mail->Host = "localhost";  // specify main and backup server
                    $mail->SMTPAuth = true;     // turn on SMTP authentication
                    $mail->Username = "info@domain.com";  // SMTP username
                    $mail->Password = "domain.com"; // SMTP password
                    
                    $mail->From = $email;
                    $mail->FromName = $name;
                    $mail->AddAddress("info@domain.com");
                    
                    $mail->WordWrap = 50;                                 // set word wrap to 50 characters
                    $mail->IsHTML(true);                                  // set email format to HTML
                    
                    $mail->Subject = $subject;
                    
                    $mail->Body    = $message;
                    
                    if(!$mail->Send())
                    {
                       $msg = "Message could not be sent. <p>";
                       $msg = "Mailer Error: " . $mail->ErrorInfo;
                       
                       exit;
                    }else{
                    
                    $msg = "Message has been sent";
                    
                    	 //end phpmailer use
	 
                    }
                     
                     
                     
                     
                     
		        	}
				}*/
        	
        	/* end */
        	
        	
        }else{
        	$msg = '<div class"alert alert-danger">Something Woring!</div>';
        	echo $msg;
        }

        }
	}

}