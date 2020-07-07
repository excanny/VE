<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.web3canvas.com/themeforest/offshore/blank-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Aug 2019 13:09:19 GMT -->
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Responsive Gas &amp; Oil Industry HTML Template">
<meta name="author" content="Surjith S.M">

<title> FTP </title>

<script src="../../cdn-cgi/apps/head/-mEFVS8y7qx5pVzWHQTCQu5gnVM.js"></script><link rel="icon" type="image/png" href="favicon.png">

<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/font-awesome/css/font-awesome.min.css">

<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

<!-- bootstrap 4.x is supported. You can also use the bootstrap css 3.3.x versions -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.1/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
<!-- if using RTL (Right-To-Left) orientation, load the RTL CSS file after fileinput.css by uncommenting below -->
<!-- link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.1/css/fileinput-rtl.min.css" media="all" rel="stylesheet" type="text/css" /-->
<!-- the font awesome icon library if using with `fas` theme (or Bootstrap 4.x). Note that default icons used in the plugin are glyphicons that are bundled only with Bootstrap 3.x. -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">

</head>
<body class="blank">



<main class="main">

          

<section class="blank-page">
    <div class="container">
        <div class="row">

        <!-- left column -->
        
                <div class="col-md-12 p-5">
                        
                    <!-- quick email widget -->
                    <div class="box box-info">
                      <div class="box-header">
                        
                        <!-- /. tools -->
                      </div>
                      <div class="box-body">

                      <?php if(isset($error)) { ?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>Sorry!</strong> <?php echo $error; ?>
                            </div>
                        <?php } ?>
                        
                       <form action="<?php echo site_url('File/StoreExternal/'. $id);?>" method="post" enctype="multipart/form-data">
                          <div class="row">
                              <div class="col-lg-5">
                                   <img src="<?php echo base_url('/uploads/logos/'.$logo);?>" alt="logo" width="42%" style="display: block; margin:auto;" class="rounded-circle">
                                   <br>
                                   <br>
                                   
                            <div class="row mt-4">
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="first_name" placeholder="Enter First Name" style="height:3rem;" required>     
                                     </div>
                                </div> 
                                <div class="col-lg-6">
                                     <div class="form-group"> 
                                     <input type="text" class="form-control" name="last_name" placeholder="Enter Last Name" style="height:3rem;"required>    
                                   </div>
                                </div>
                                
                            </div>
                                
                              </div>
                              <div class="col-lg-7">
                                 <div class="form-group">
                                  
                                     <input type="hidden" class="form-control" name="file_ext" value ="<?php echo $file_ext; ?>">    
                                     <input id="input-id" name="upload" type="file" data-browse-on-zone-click="true" data-show-upload="false" required>
                                     
                                    </div>
                                    <div class="box-footer clearfix">
                                    <button type="submit" class="pull-right btn btn-success btn-lg">Upload
                                      <i class="fa fa-arrow-circle-up"></i></button>
                                  </div>
                              </div>
                          </div>
                            
                            
                            
                      </form>
                    </div>
                </div>
            <!-- /.box-body -->
          </div>

        </div>
    </div>
</section>

</main>





<a href="#0" class="cd-top"> Top </a>
</div>



<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>

<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

<script src="<?php echo base_url(); ?>assets/js/back-to-top.js"></script>

<script src="<?php echo base_url(); ?>assets/js/validate.js"></script>

<script src="<?php echo base_url(); ?>assets/js/subscribe.js"></script>

<script src="<?php echo base_url(); ?>assets/js/main.js"></script>

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


<script>
  // with plugin options
   $("#input-id").fileinput({'showUpload':false, 'previewFileType':'any'});
</script>

</body>

<!-- Mirrored from demo.web3canvas.com/themeforest/offshore/blank-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Aug 2019 13:09:19 GMT -->
</html>
