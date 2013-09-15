<?php
	$image = '../images';
	$link_index = '../';
	$link_index2 = '../';
	$link = '';
	$title = 'Success | Lightbulb Studios';
	$css = '../css';
	$lang = '../';
?>	

<?php include('../elements/header.php'); ?>

<?php			
if(isset($_POST['email'])) {
     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "tyler.philipp.white@gmail.com";
    $email_subject = "New Contract";
     
     
    function died($error) {
        // your error code can go here
        echo "<div class='hero-home hero-contact hero-success hero-fail'>";
        echo "<div class='row'>";
        echo "<div class='large-12 columns'>";
        echo "<h2>We are very sorry, but there were error(s) found with the form you submitted.</h2>";
        echo "<p>These errors appear below.</p><span>";
        echo $error."<br /><br /></span>";
        echo "<button class='button secondary' onclick='history.back(-1)'>Go Back</button>";
        echo "<p><small>Please go back and fix these errors.</small></p><br /><br />";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
     
    $first_name = $_POST['first_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $comments = $_POST['comments']; // required
     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
     
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
<div class="hero-home hero-contact hero-success">
	<div class="row">
		<div class="large-12 columns">
<!-- include your own success html here -->
			<h2 data-text="UI Designer &amp; Web Integrator">Success!</h2>
			<p>We will be in touch with you very soon...</p>
		</div>
	</div>
</div>
 
<?php
}
?>

<?php include('../elements/footer.php'); ?>   
<?php include('../elements/analytics.php'); ?>


