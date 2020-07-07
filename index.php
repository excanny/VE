<?php

// Include the wp-load'
include('blog/wp-load.php');

// Get the last 10 posts
// Returns posts as arrays instead of get_posts' objects
$recent_posts = wp_get_recent_posts(array(
    'numberposts' => 3
));

?>

<?php include('header.php'); ?>


<main class="main">
<section class="home-slider">
<div class="flexslider">
<ul class="slides">
<li class="has-overlay">
<img src="images/bckground.jpg" alt="seismic data processing companies in nigeria, seismic data processing companies in lagos" />
<div class="slider-content">
<div class="container">
<h2> Seismic Acquisition</h2>
<p> Our geophysical skills have been developed working in leading IOCs <br>
    and service provider companies in Nigeria, Angola, Germany among other countries. </p>
<a href="./mission-vision" class="btn primary-btn" style="background:green; color:white;"> KNOW MORE <i class="fa fa-angle-right"></i> </a>
</div>
</div>
 </li>
<li class="has-overlay">
<img src="images/verity-geosolutions-seismic-analysis.jpg" alt="seismic data processing companies in nigeria, Oil and Gas in Nigeria" />
<div class="slider-content">
<div class="container">
<h2>Seismic Services</h2>
<p> We offer seismic acquisition design services and execute seismic programs <br>
    as well as other equipment that enables the delivery of high-quality seismic data.</p>
<a href="./mission-vision" class="btn primary-btn" style="background:green; color:white;"> KNOW MORE <i class="fa fa-angle-right"></i> </a>
</div>
</div>
</li>
<li class="has-overlay">
<img src="images/shutterstock-590559782.png" alt="geophysical companies in nigeria, geophysical survey companies in nigeria" />
<div class="slider-content">
<div class="container">
<h2>Integrated Geophysical Services</h2>
<p> We offer geophysical services and execute expert seismic processing services.</p>
<a href="./mission-vision" class="btn primary-btn" style="background:green; color:white;"> KNOW MORE <i class="fa fa-angle-right"></i> </a>
</div>
</div>
</li>
</ul>
</div>
</section>
<section class="home-company">
<div class="container">
<div class="row company">
<div class="col-md-5 col-sm-8">
<div class="company-details">
<h2 class="company-title color-title" style="background:#008080;"> THE COMPANY </h2>
<h4 class="company-subtitle subtitle" style="color:#000;"> Verity Geosolutions </h4>
<p> Verity Geosolutions (VerityGeo) is a privately held 100% Nigerian energy services company established to provide first-class integrated Geophysical and Geomatics services to the West African Oil and Gas sector. VerityGeo commenced operations in June 2011. </p>
<a href="./mission-vision" class="btn btn-success" role="button"> READ OUR MISSION </a>
</div>
</div>
<div class="col-md-7 col-sm-12">
<div class="company-image">
<div class="img-left hover-effect hidden-xs hidden-sm">
<img src="images/5d966cbfdfe75.jpg" alt="seismic" />
</div>
<div class="img-right hover-effect">
<img src="images/5d965223911ae.jpg" alt="geophysical survey companies in nigeria, seismic acquisition" />
</div>
</div>
</div>
</div>
</div>
</section>
<section class="home-ceo">
<div class="container">
<div class="row ceo">
<div class="col-md-6">
<div class="ceo-photo">
<img src="images/verityCEO.png" alt="verity oil, Abayomi Adejonwo" />
</div>
</div>
<div class="col-md-6">
<div class="ceo-details">
<h2 class="ceo-title color-title" style="background:#008080;"> MESSAGE FROM THE CHIEF GEOSCIENTIST </h2>
<h4 class="ceo-subtitle subtitle text-capitalize" style="color:#000;"> Read The Message From Our Chief Geoscientist </h4>
<p style="margin-bottom: 0;"> "In a globally challenging business environment, using technology to drive performance improvements safely and at optimum costs has become our clients’ key business driver. Here at Verity Geosolutions we leverage decades of technical experience and mutually beneficial collaborations to add value to the assets of our clients. 
With clients like Chevron, Belema, Shell E& P, ExxonMobil we deliver excellence always, the first time, everytime."
</p>
<h4 class="ceo-sign"> <img src="images/VerityGeo-CEO-sign.png" alt="verity oil, verity oil and gas" /> </h4>
<p class="ceo-name">Abayomi Adejonwo, CGS</p>
</div>
</div>
</div>
</div>
</section>
<section class="home-services">
<div class="container">
<div class="row services">
 <div class="col-md-4">
<div class="hover-effect" style="height: 240px;">
<img src="images/service-a.png" alt="geophysical-data-acquisition" style="object-fit: fill;" />
</div>
<h4 class="services-title-one subtitle text-uppercase" style="color:#005f69;">Geophysical Data Acquisition</h4>
<p>The main objective of the acquisition and analysis of geological and geophysical (G&G) data is the development of maps to identify areas favorable for the accumulation of hydrocarbons.</p>
<a href="./services" class="btn btn-success btn-normal">Read More</a>
</div>
<div class="col-md-4">
<div class="hover-effect border border-primary" style="height: 240px;">
<img src="images/service-b.png" alt="seismic-processing" style="object-fit: cover; "/>
</div>
<h4 class="services-title-one subtitle text-uppercase" style="color:#005f69;">Seismic Processing</h4>
<p>The purpose of seismic processing is to manipulate acquired data into an image or set of images of the subsurface geology. It consists of applying a sequence of routines to achieve results.</p>
<a href="./services" class="btn btn-success btn-normal">Read More</a>
</div>
<div class="col-md-4">
<div class="hover-effect">
<img src="images/service-c.png" alt="interpertation service providers in lagos, seismic interpertation service providers in lagos" />
</div>
<h4 class="services-title-one subtitle text-uppercase" style="color:#005f69;">Integrated Reservoir Studies</h4>
<p>Over the last decade, professionals in the various reservoir disciplines (geology, geophysics, petrophysics and reservoir engineering) have learned to work together and strive for synergy.</p>
<a href="./services" class="btn btn-success btn-normal">Read More</a>
</div>
</div>
</div>
</section>
<section class="home-links">
<div class="container">
<div class="row links">
<div class="col-md-2">
<h4 class="links-title subtitle" style="color:#005f69;">Quick Links</h4>
</div>
<div class="col-md-2">
<a href="./careers" class="btn btn-primary blog-subject2" role="button">CAREERS</a>
</div>
<div class="col-md-2">
<a href="./contact" class="btn btn-primary blog-subject2" role="button">CONTACT</a>
</div>
<div class="col-md-2">
<a href="./services" class="btn btn-primary blog-subject2" role="button">SERVICES</a>
</div>

<div class="col-md-2">
<a href="./blog" class="btn btn-primary blog-subject2" role="button">LATEST NEWS</a>
</div>
</div>
</div>
</section>
<section class="home-process">
<div class="container">
<div class="row process">
<div class="col-sm-6">
<h2 class="process-title title-2" style="color:#000;"> OUR PROCESS </h2>
<h4 class="process-subtitle subtitle-2"> We innovatively provide solutions to diverse oil and gas service imperatives. </h4>
<p> From workplace improvement to community outreach to HSE, we are committed to conducting ourselves responsibly, safely and ethically. This Verity culture of best service delivery using the integration of teams, platforms, data and applications is what makes us one of the leading Geophysical data processing and Inversion company in Nigeria and West Africa as we couple the best available technologies to provide cost optimization for our clients. </p>
<a href="#" class="btn btn-success" role="button">About Us</a>
</div>
<div class="col-sm-6">
<div id="skills" class="process-bar">
 <div class="skillbar-title"> SEISMIC SURVEY DESIGN </div>
<div class="skillbar" data-percent="100%" style="color:#005f69;">
<div class="skillbar-bar" style="background:#005f69;"> </div>
<div class="skill-bar-percent"></div>
</div>
<div class="skillbar-title"> SEISMIC DATA ACQUISITION   </div>
<div class="skillbar" data-percent="100%">
<div class="skillbar-bar" style="background:#005f69;"> </div>
<div class="skill-bar-percent"></div>
</div>
<div class="skillbar-title"> SEISMIC DATA PROCESSING   </div>
<div class="skillbar" data-percent="100%">
<div class="skillbar-bar" style="background:#005f69;"> </div>
<div class="skill-bar-percent"></div>
</div>
<div class="skillbar-title"> RESERVOIR STUDIES AND QUANTITATIVE INTERPRETATION</div>
<div class="skillbar" data-percent="100%">
<div class="skillbar-bar" style="background:#005f69;"> </div>
<div class="skill-bar-percent"></div>
</div>

</div>
</div>
</div>
</div>
</div>
</section>
<section class="home-stats">
<div class="container">
<div class="row stats">
<div class="col-md-3 col-xs-6">
<img src="images/globe.png" alt="" />
<div class="stats-info">
<h4 class="counter" style="color: #005f69">50</h4>
<p>Clients Worldwide</p>
</div>
</div>
<div class="col-md-3 col-xs-6">
<img src="images/friends.png" alt="" />
<div class="stats-info">
<h4 class="counter" style="color: #005f69">20</h4>
<p>Employees</p>
</div>
</div>
<div class="col-md-3 col-xs-6">
<img src="images/fire.png" alt="" />
<div class="stats-info">
<h4 class="counter" style="color: #005f69">126</h4>
<p>Seismic Operations</p>
</div>
</div>
<div class="col-md-3 col-xs-6">
<img src="images/badge.png" alt="" />
<div class="stats-info">
<h4 class="counter" style="color: #005f69">22</h4>
<p>Awards &amp; Recognitions</p>
</div>
</div>
</div>
</div>
</section>
<section class="home-services-other">
<div class="container">
<div class="section-title text-center">
<h2 class="title-services-other title-2" style="color:#000;">SERVICES</h2>
<h4 class="subtitle-services-other subtitle-2">Objectively transparent service models for prospective clients.<br /> An Overview Of Verity Geosolutions.</h4>
<div class="spacer-50"> </div>
</div>
<div class="row services-other">
<div class="col-sm-4">
<div class="img-box">
<img src="images/icon-a.png" alt="SEISMIC-Acquisition" />
</div>
<div class="services-info">
<h4 class="services-title-one subtitle text-uppercase" style="color:#005f69;">SEISMIC Acquisition</h4>
 <p>3D, 2D, 2D HR,  Marine and Land Seismic Acquisition.</p>
</div>
</div>
<div class="col-sm-4">
<div class="img-box">
<img src="images/icon-g.png" alt="Seismic Data Processing" />
</div>
<div class="services-info">
<h4 class="services-title-one subtitle text-uppercase" style="color:#005f69;">Seismic Data Processing</h4>
<p>3D, 2D, HR and GeoHazard Seismic Data Processing.</p>
</div>
</div>
<div class="col-sm-4">
<div class="img-box">
<img src="images/icon-c.png" alt="3D, 2D, HR, GeoHazard Seismic Data Processing" />
</div>
<div class="services-info">
<h4 class="services-title-one subtitle text-uppercase" style="color:#005f69;"> Reservoir Studies</h4>
<p>Seismic Interpretation. Quantitative Interpretation. Reservoir Modelling.</p>
</div>
</div>
<div class="clearfix spacer-70"></div>
<div class="col-sm-4">
<div class="img-box">
<img src="images/icon-d.png" alt="Seismic Interpretation, Quantitative Interpretation, Reservoir Modelling" />
</div>
<div class="services-info">
<h4 class="services-title-one subtitle text-uppercase" style="color:#005f69;">Training</h4>
<p>Specially Designed Applications. Reservoir Characterization. Risk Assessment Solutions.</p>
</div>
</div>
<div class="col-sm-4">
<div class="img-box">
<img src="images/icon-e.png" alt="Technical Assurance and Consulting" />
</div>
<div class="services-info">
<h4 class="services-title-one subtitle text-uppercase" style="color:#005f69;">Technical Assurance and Consulting</h4>
<p>Technical Assurance. Core Technical Consultancy.</p>
</div>
</div>
<div class="col-sm-4">
<div class="img-box">
<img src="images/icon-f.png" alt="Software Development & Sales" />
</div>
<div class="services-info">
<h4 class="services-title-one subtitle text-uppercase" style="color:#005f69;">Software Development & Sales</h4>
<p>Industry Software Work Tools Development</p>
</div>
</div>
<div class="clearfix spacer-70"></div>


</div>
</div>
</section>
<section class="home-testimonials">
<div class="container">
<div class="section-title text-center">
<h2 class="title-testimonials color-title" style="background: #008000;">DON’T TAKE OUR WORD</h2>
<h2 class="subtitle-testimonials title-2" style="color:#000;">Clients' Testimonials</h2>
<div class="spacer-50"> </div>
</div>
<div class="row">
<div class="col-md-4">
<blockquote>When looking to control costs in a highly competitive oil and gas environment, I turned to Verity geosolutions. Their staff provides reliable access to an efficient supply of geoscience solutions by providing expert advice and executing projects effectively in energy markets. In addition, the high level of service they offer makes them a pleasure to do business with.</blockquote>
<h4 class="client-name" style="color:#008000;">Bamidele Enoch</h4>
<p class="designation">CEO, ABC Chemicals</p>
</div>
<div class="col-md-4">
<blockquote style="height: 452px;">Working with Verity Geosolutions has always been a pleasant experience. Delivery has never been an issue. Their team is a pleasure to work with – responsive, courteous and extremely knowledgeable. I look forward to continuing to do business with them.</blockquote>
<h4 class="client-name" style="color:#008000;">Dr Dele Jeremiah</h4>
<p class="designation">Divisional Manager, Corpo Inc.</p>
</div>
<div class="col-md-4">
<blockquote style="height: 452px;">Verity Geosolution is a passionate group of people who really take their craft to a higher level of customer service and engagement. We were thoroughly impressed with the end product and would recommend them to any other business looking to get premium geoscience services.</blockquote>
<h4 class="client-name" style="color:#008000;">Jerry Koffi</h4>
<p class="designation">Founder &amp; CEO, Marine Engineering</p>
</div>
</div>
</div>
</section>
<section class="home-publications">
<div class="container">
<div class="row publications">
<div class="col-md-7 col-sm-6">
<div class="panel-group" id="accordion">
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" style="color:#000;"> Consultancy Services</a>
</h4>
</div>
<div id="collapseOne" class="panel-collapse collapse in">
<div class="panel-body">
<p>We provide high resolution 3D images of the seafloor and shallow seismic for shallow hazard identification. Subsets of conventional 3D seismic data are processed using a workflow that results in high resolution images.</p>
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" style="color:#000;">Seismic Software, Technical Assurance </a> </h4>
</div>
<div id="collapseTwo" class="panel-collapse collapse">
<div class="panel-body">
<p>Powered by 3TFlops of computing power and robust software, we deliver innovative seismic data processing and imaging solutions for improved seismic signal quality, noise attenuation and event positioning.</p>
</div>
</div>
</div>
<div class="panel panel-default">
<div class="panel-heading">
<h4 class="panel-title">
<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" style="color:#000;">Integrated Reservoir Studies </a> </h4>
</div>
<div id="collapseThree" class="panel-collapse collapse">
<div class="panel-body">
<p>
        Seismic interpretation, Quantitative interpretation, Structural and Static modelling, Reservoir Modelling.
</p>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-5 col-sm-6">
<div class="plubication-downloads">
<h2 class="publish" style="background:#008000;">Publications</h2>
<div class="download-file">
<a href="#" style="color:#1e3628;"> <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Download PDF <span>1.5 MB</span> </a>
</div>
<p class="download-title">Other Downloads</p>
<ul class="download-list">
<li><a href="#" style="color:#1e3628;"> Annual Report </a> <span>2.4 MB</span></li>
<li><a href="#" style="color:#1e3628;"> Sustainability Report </a> <span>150 KB</span></li>
<li><a href="#" style="color:#1e3628;"> Statistical Report </a> <span>250 KB</span></li>
 <li><a href="#" style="color:#1e3628;"> Energy Outlook </a> <span>1.8 MB</span></li>
<li><a href="#" style="color:#1e3628;"> Chairman’s Message </a> <span>550 KB</span></li>
</ul>
</div>
</div>
</div>
</div>
</section>
<section class="home-news">
<div class="container">
<div class="section-title text-center">
<h2 class="title-blog color-title" style="background:#008000;"> NEWS AND MEDIA </h2>
<h2 class="subtitle-blog title-2" style="color:#000;"> Latest From Blog </h2>
<div class="spacer-50"> </div>
</div>
<div class="row news">
    
    <?php foreach($recent_posts as $post) {?>
        <div class="col-md-4">
            <div class="blog-img-box">
              <div class="blog-date" style="background:#1e3628;"> <span class="month" > <?php  echo strtoupper(get_the_date( 'M', $post['ID'] )); ?> </span> <span class="date"> <?php echo get_the_date( 'd', $post['ID'] ); ?> </span> </div>
                  <a class="hover-effect" href="#">
                   <?php  echo get_the_post_thumbnail($post['ID'], 'medium'); ?>
                  </a>
            </div>
            <div class="blog-content">
                <h3><a target="_blank" href="<?php  echo get_permalink($post['ID']); ?>" class="blog-subject" style="color:green;"> <?php echo $post['post_title']; ?> </a> </h3>
                <!--<p> <a href="#" style="color:#1e3628;"> <?php echo get_the_author($post['ID']); ?></a></p>-->
            </div>
        </div>
     <?php } ?>

</div>
<div class="blog-btn text-center">
<!--<a href="blog.html" class="btn btn-priary" role="button" style="background:#008000;">READ THE BLOG</a>-->
</div>
</div>
</section>

<section class="home-partners">
<div class="container">
<div class="section-title text-center">
<h2 class="subtitle-testimonials title-2" style="color:#1e3628;"> OUR CLIENTS </h2>
<div class="spacer-20"> </div>
</div>
<div class="row partners">
<div class="logo-slides slides owl-carousel">
<div class="item">
<div class="partner-images">
<img src="images/chevronnew.jpg" alt="oil servicing companies in lagos	">
</div>
 </div>
<div class="item">
<div class="partner-images">
<img src="images/addaxnew.png" alt="oil servicing companies in lekki">
</div>
</div>
<div class="item">
<div class="partner-images">
<img src="images/as.png" alt="companies in lekki">
</div>
</div>
<div class="item">
<div class="partner-images">
<img src="images/tenoil.jpg" alt="geophysical companies in lekki">
</div>
</div>
<div class="item">
<div class="partner-images" style="height: 116px;">
<img src="images/total.png" alt="oil and gas geophysical companies in the island" >
</div>
</div>
<div class="item">
<div class="partner-images" style="height: 116px;">
<img src="images/shell.png" alt="geotechnical companies in nigeria, geotechnical companies in lagos">
</div>
</div>
<div class="item">
<div class="partner-images">
<img src="images/equinor.jpg" alt="oil servicing companies in lagos, oil servicing companies in Nigeria">
</div>
</div>
<div class="item">
<div class="partner-images">
<img src="images/belemanew.jpg" alt="belema oil, chevron, shell, exxonmobil, mobil, texaco, oando, geosolution, geosolutions, verity, veritas, veriti, geophysics, geosciences">
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</main>

<?php include('footer.php'); ?>
