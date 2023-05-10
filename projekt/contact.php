<!-- =========================
    CONTACT SECTION   
============================== -->

<?php
if(isset($_POST['submit'])) {

	$name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

	$to = "dary.simakova@gmail.com";
    $headers = "From: " . $email;
    $note = "You have received an email from " . $name . "\n\n" .$message;

    if (mail($to, $subject, $note, $headers)) {
		
}

 

?>


<section id="contact" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="wow fadeInUp col-md-offset-1 col-md-5 col-sm-6" data-wow-delay="0.6s">
				<div class="contact_des">
					<h3>New Event</h3>
					<p>Proin sodales convallis urna eu condimentum. Morbi tincidunt augue eros, vitae pretium mi condimentum eget. Suspendisse eu turpis sed elit pretium congue.</p>
					<p>Mauris at tincidunt felis, vitae aliquam magna. Sed aliquam fringilla vestibulum. Praesent ullamcorper mauris fermentum turpis scelerisque rutrum eget eget turpis.</p>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat. Lorem ipsum dolor.</p>
				</div>
			</div>


			<div class="wow fadeInUp col-md-5 col-sm-6" data-wow-delay="0.9s">
				<div class="contact_detail">
					<div class="section-title">
						<h2>Keep in touch</h2>
					</div>
					<form action="contact.phpl" method="post">
						<input name="name" type="text" class="form-control" id="name" placeholder="Name" required>
					  	<input name="email" type="email" class="form-control" id="email" placeholder="Email" required>
						<input name="subject" type="subject" class="form-control" id="subject" placeholder="Subject" required>
					  	<textarea name="message" rows="5" class="form-control" id="message" placeholder="Message" required></textarea>
						<div class="col-md-6 col-sm-10">
							<input name="submit" type="submit" class="form-control" id="submit" value="SEND">
						</div>
					</form>
				</div>
			</div>

		</div>
	</div>
</section>