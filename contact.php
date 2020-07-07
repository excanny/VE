<?php include('header.php'); ?>


<main class="main">

<div class="page-title text-center">
<h2 class="title"> Contact us </h2>
<p class="description light"> Should you be left with questions about our services, please complete and submit the form below and we will contact you. </p>
</div>


<div class="breadcrumbs">
<div class="container">
<span class="parent"> <i class="fa fa-home"></i> <a href="/"> Home </a> </span>
<i class="fa fa-chevron-right"></i>
<span class="child"> Contact </span>
</div>
</div>

<div class="container">
<section class="contact">
<div class="row contact-centers">
 <div class="col-md-4">
<div class="contact-area-box">
<h4 class="contact-title subtitle text-success" style="color:green;">OFFICE ADDRESS</h4>
<div class="address">
<i class="fa fa-map-marker" aria-hidden="true"></i>
<p>Plot 19B Babatunde Kuboye Street, LEKKI PHASE 1, LAGOS</p>
</div>
<div class="phone">
<i class="fa fa-phone" aria-hidden="true"></i>
<p>01 277 3851 <br>
+234 01 277 3851</p>
</div>
<div class="email">
<i class="fa fa-envelope" aria-hidden="true"></i>
<p>info@veritygeosolutions.com </p>
</div>
</div>
</div>

</div>
</section>
<section class="contact-form">
<div class="row form">
<div class="col-md-6">
<h2 class="title-2 text-success" style="color:green;"> Send us a message </h2>
<form id="contact_form2" class="form well-form">

<div class="form-group">
<input name="name" placeholder="Full Name" class="form-control" type="text" required title="Please enter your full name">
 </div>

<div class="form-group">
<input name="email" placeholder="Email Address" class="form-control" type="email" required title="Please enter your email address" data-msg-email="Ouch, that doesn't look like an email">
</div>

<div class="form-group">
<input name="phone" placeholder="Phone Number" class="form-control" type="text" data-rule-phoneUS="false" title="Please enter your phone number" data-msg-phoneUS="Ouch, that doesn't look like a valid phone number" required>
</div>

<div class="form-group">
<textarea class="form-control" name="message" placeholder="Message" required data-rule-minlength="10" data-msg-minlength="Please enter atleast 10 characters" title="Please enter your message"></textarea>
</div>

<!--<button type="submit" class="btn btn-block btn-success" id="">  </button-->
<input type="submit" class="btn btn-block btn-success"  value="SEND MESSAGE"/>
<!--<div style="color:green; textid="contact-result"></div>-->
<h4 style="color:green;text-align:center;" id="contact-result"></h4>
</form>
</div>
<div class="col-md-6 contact-map">
<h2 class="title-2 text-success" style="color:green;"> View Map </h2>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.6806012593484!2d3.458191114467793!3d6.435055395344309!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf5aa725abbdb%3A0xf057146c4a785d71!2s19%20Babatunde%20Kuboye%20St%2C%20Lekki%20Phase%20I%2C%20Lagos!5e0!3m2!1sen!2sng!4v1568733806662!5m2!1sen!2sng" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

</div>
</div>
</section>
</div>
</main>




<?php include('footer.php'); ?>