<?php
include_once "../../../wp-load.php";
date_default_timezone_set('Asia/Calcutta');
$fullName = $_POST["fullName"];
$phoneNumber = $_POST["phoneNumber"];
$email = $_POST["email"];
$companyorganization = $_POST["companyorganization"];
$contactVal = $_POST["contactVal"];
$comments = $_POST["comments"];
$created_date = date("Y-m-d H:i:s");
$user_captcha=$_POST["user_captcha"];
$var1 = md5($_POST['user_captcha']);
$var2 = $_COOKIE["requestQuoteGreen"];
if(strcmp($var1,$var2)!=0)
		{
		echo "<div class='isa_error'>
   <i class='fa fa-times-circle'></i>Wrong captcha.</div>";
                 ?>
    <script>
 $(".isa_error").fadeOut(6000); 
</script>
    <?php
		}else{
//echo $fullName.''.$phoneNumber.''.$email.''.$companyorganization.''.$contactVal.''.$comments.''.$created_date;

        $email_to = 'info@digitology.co.uk';
		$email_subject = 'Digitology - GetinTouch Contact Request';
		$date		=	date('d-m-Y H:i:s');
		
		$body_message = '<p>From: '.$fullName."</p>";
		$body_message .= '<p>Phone No.: '.$phoneNumber."</p>";
		$body_message .= '<p>E-mail: '.$email."</p>";
		$body_message .= '<p>Company Or Organization: '.$companyorganization."</p>";
		$body_message .= '<p>Contact Type: '.$contactVal."</p>";
		$body_message .= '<p>Comments: '.$comments."</p>";
		$body_message .= '<p>Date: '.$created_date."</p>";
		$headers = "From: " . $email . "\r\n";
	//	$headers .= 'Bcc: sanspirit@gmail.com' . "\r\n";
	    $headers .= 'Bcc: dinanathsingh33@gmail.com' . "\r\n";
  		$headers .= "Content-type:text/html" . "\r\n";




$sql = 'INSERT INTO tb_request_quote (`id`, `name`, `phone`, `email`, `contact_type`, `company_organization`, `comments`, `created_date`) VALUES (NULL, "'.$fullName.'", "'.$phoneNumber.'", "'.$email.'","'.$contactVal.'","'.$companyorganization.'","'.$comments.'","'.$created_date.'")';
$result = mysql_query($sql);

if(!empty($result)){

	$mailResult = mail($email_to, $email_subject, $body_message, $headers);
	if($mailResult){ 
	echo "<span class='isa_success' style='color:#fff;'>Thank you for your enquiry. We will contact you shortly.</span>";
        ?>
<script>
    $(".isa_success").fadeOut(5000); 
	$("#requestQuoteHideGreen").hide(); 
    $(".refresh").val("");			
    </script>
<?php
	}else{
		echo "<div class='isa_error'>
   <i class='fa fa-times-circle'></i>Mail could not be sent.</div>";
                 ?>
    <script>
 $(".isa_error").fadeOut(5000); 
</script>
    <?php
		}
	}else{
            
		echo "<div class='isa_error'>
   <i class='fa fa-times-circle'></i>Failed to send your message. Please try later or contact the administrator by another method.</div>";
                ?>
    <script>
 $(".isa_error").fadeOut(5000); 
</script>
    <?php
	}
}
?>
