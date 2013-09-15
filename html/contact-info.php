<?php
	$image = '../images';
	$link_index = '../';
	$link_index2 = '../';
	$link = '';
	$title = 'Contact | Lightbulb Studios';
	$css = '../css';
	$lang = '../';

?>
<?php include('../elements/header.php'); ?>
<div class="hero-home hero-contact">
	<div class="row">
		<div class="large-12 columns">
			<h2 data-text="UI Designer &amp; Web Integrator">Ready to partner up?</h2>
			<p>Feel free to contact us with any requests or questions you may have.</p>
		</div>
	</div>
</div>
<br>
<br>
<div class="row contact-cntn">
	<div class="large-3 columns">
		<h6>Lightbulb Studios</h6>
		<address>
		<i class="icon icon-map-marker"></i>Montreal,QC | Canada <br><br>
		<i class="icon icon-book"></i>Phone: (514) 805-5586<br>	
		<i class="icon icon-envelope"></i>info@lightbulbstudios.ca
		</address>					
	</div>
	<div class="large-9 columns">
		<h5>Get in touch with us at Lightbulb Studios</h5>
		<p>We look forward to working with you!</p>
		  <form name="contactform" action="mailer.php" method="post">
			<div class="row">
				<div class="six columns">
					<input placeholder="Full Name" type="text" name="first_name" maxlength="50" size="30">
				</div>
				<div class="six columns">
					<input placeholder="Email-Address" type="text" name="email" maxlength="80" size="30">
				</div>
				<div class="six columns">
					<input placeholder="Telephone #" type="text" name="telephone" maxlength="30" size="30">
				</div>
			</div>
			<textarea name="comments" placeholder="Your message to Lightbulb Studios" rows="5" class="required"></textarea>
			<input type="submit" value="Send" class="button secondary">
		</form>
	</div>
</div>

<?php include('../elements/footer.php'); ?>   
<?php include('../elements/analytics.php'); ?>