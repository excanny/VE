

<!DOCTYPE html>
<html lang="en">
<head>
 <title>VerityGeo - Complete Profile</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
 <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" />
 <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" />
 <link href="https://fonts.googleapis.com/css?family=Orbitron|Khand" rel="stylesheet">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
 <!-- bootstrap 4.x is supported. You can also use the bootstrap css 3.3.x versions -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.1/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
<!-- if using RTL (Right-To-Left) orientation, load the RTL CSS file after fileinput.css by uncommenting below -->
<!-- link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.1/css/fileinput-rtl.min.css" media="all" rel="stylesheet" type="text/css" /-->
<!-- the font awesome icon library if using with `fas` theme (or Bootstrap 4.x). Note that default icons used in the plugin are glyphicons that are bundled only with Bootstrap 3.x. -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
<!-- piexif.min.js is needed for auto orienting image files OR when restoring exif data in resized images and when you
    wish to resize images before upload. This must be loaded before fileinput.min.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.1/js/plugins/piexif.min.js" type="text/javascript"></script>
<!-- sortable.min.js is only needed if you wish to sort / rearrange files in initial preview. 
    This must be loaded before fileinput.min.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.1/js/plugins/sortable.min.js" type="text/javascript"></script>
<!-- purify.min.js is only needed if you wish to purify HTML content in your preview for 
    HTML files. This must be loaded before fileinput.min.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.1/js/plugins/purify.min.js" type="text/javascript"></script>
<!-- popper.min.js below is needed if you use bootstrap 4.x (for popover and tooltips). You can also use the bootstrap js 
   3.3.x versions without popper.min.js. -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<!-- bootstrap.min.js below is needed if you wish to zoom and preview file content in a detail modal
    dialog. bootstrap 4.x is supported. You can also use the bootstrap js 3.3.x versions. -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<!-- the main fileinput plugin file -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.1/js/fileinput.min.js"></script>
<!-- following theme script is needed to use the Font Awesome 5.x theme (`fas`) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.1/themes/fas/theme.min.js"></script>
<!-- optionally if you need translation for your language then include the locale file as mentioned below (replace LANG.js with your language locale) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.1/js/locales/LANG.js"></script>

 <style>
 
 </style>

</head>
<body style="background: #f5f5f5;">

<section>
    <div class="container mt-3">
        
    </div>
</section>

<section>
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                   <div class="card-header"> 
                    <div class="row">
                            <div class="col-lg-12">
                            <h4>Complete Your Profile</h4>
                            </div>
                        </div>
                    </div>
            
                <div class="card-body">
                    

        <!--<h4>REAL ESTATE PROJECTS</h4>-->
        <form action="<?php echo site_url();?>/welcome/ProfileStore" method="post" enctype="multipart/form-data">        
                
            <div class="container">    
                <h4>EMPLOYEE INFORMATION</h4>
                        <div class="row">
                    		<div class="col-lg-6">     
                                <label for="cmsmasters_country"><strong>Role:</strong> <span class="text-danger">*</span></label><br>
                    			<input type="text" name="role" class="form-control" autofocus required /> 
                    		</div>
                        </div>

                    	<div class="row mt-2">
                    		<div class="col-lg-4">
                    			<div class="form-group">
                    				<label for="cmsmasters_country"><strong>Phone Number:</strong><span class="text-danger">*</span></label><br>
                    				<input type="number" name="phone"  value="" class="form-control" required/>
                    			</div>
                    		</div>
                            <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="role"><strong>Gender:</strong> <span class="text-danger">*</span></label><br>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="customRadio" name="gender" value="M" required>
                                            <label class="custom-control-label" for="customRadio">Male</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="customRadio2" name="gender" value="F">
                                            <label class="custom-control-label" for="customRadio2">Female</label>
                                        </div> 
                                    </div>
                            	</div>
                    	</div>
                    	
                    		<div class="row">
                            	<div class="col-lg-6">
                            		<div class="form-group">
                            			<label><strong>Achievements & Recognitions:</strong></label><br>
                            			<textarea class="form-control" rows="5" name="achievements"></textarea>
                            		</div>
                            	</div>
                                <div class="col-lg-6">
                            		<div class="form-group">
                            			<label><strong>Bio</strong><span class="text-danger">*</span></label><br>
                                        <textarea class="form-control" rows="5" name="bio"></textarea>
                            		</div>
                            	</div>
                            </div>

                            <div class="row">
                            	<div class="col-lg-4">
                                <label for="role"><strong>Upload Profile Picture:</strong> <span class="text-danger">*</span></label><br>
                                    <input id="input-b1" name="photo" type="file" class="file" data-browse-on-zone-click="true" data-show-upload="false">
                            	</div>
                                <div class="col-lg-4">
                                    <label for="role"><strong>Education:</strong> <span class="text-danger">*</span></label><br>
                                    <input list="degree" class="form-control" placeholder="Select Degree Class" name="edu_class" required>
                                    <datalist id="degree" required>
                                        <option value="Certificate">
                                        <option value="Diploma">
                                        <option value="Bachelor Degree">
                                        <option value="Masters">
                                        <option value="Doctorate Degree">
                                    </datalist>
                                    <br>
                                    <input type="text" class="form-control" placeholder="Enter Course" name="edu_course" required>
                                    <br>
                                    <input type="text" class="form-control" placeholder="Enter Institution" name="edu_school" required>
                                        <br>
                                    <label for="role"><strong>City Of Residence:</strong> <span class="text-danger">*</span></label><br>
                                    <input type="text" class="form-control" name="location" required>
                            	</div>
                                <div class="col-lg-4">
                                <label for="role"><strong>Skills:</strong><span class="text-danger">*</span><br>
                                <label for="role"> 1.</label><input  name="skill1" type="text" class="form-control" required>
                                    2.<input  name="skill2" type="text" class="form-control" required>
                                    3.<input  name="skill3" type="text" class="form-control" required>
                                    4.<input  name="skill4" type="text" class="form-control" required>
                            	</div>
                            </div>                	
                     </div>      
                        
                   
                </div>
                <div class="card-footer text-right"><input type="submit" class="btn btn-success" value="Submit"></div>
                    </form>
            </div>
        </div>
    </div>
</section>
 
 <script>
 
// with plugin options
$("#input-id").fileinput({
    'showUpload': false
    });

 </script>

</body>
</html>