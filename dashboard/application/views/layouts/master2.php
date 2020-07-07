<?php

    $CI =& get_instance();
    
    $id = $_SESSION['id'];
    
    $chatCount = $CI->GetUnreadMessageCount($id);
    
?> 

<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Verity Geo | Dashboard</title>
  <link rel='shortcut icon' href='<?php echo base_url();?>assets/favicon/favicon.png' type='image/x-icon' />
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/Ionicons/css/ionicons.min.css">
    <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <!--<link rel="stylesheet" href="/resources/demos/style.css">-->

  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">


  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- fullCalendar -->
  <!-- fullCalendar -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/fullcalendar/dist/fullcalendar.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/fullcalendar/dist/fullcalendar.print.min.css" media="print">
  
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.1/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
    <!-- if using RTL (Right-To-Left) orientation, load the RTL CSS file after fileinput.css by uncommenting below -->


<!-- bootstrap datepicker -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pure/1.0.0/pure-min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>/assets2/css/isia-form-repeater.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>/assets2/css/demo.css">

<style>
    .example-modal .modal {
      position: relative;
      top: auto;
      bottom: auto;
      right: auto;
      left: auto;
      display: block;
      z-index: 1;
    }

    .example-modal .modal {
      background: transparent !important;
    }

    #page fieldset:first-child .repeat-remove 
		{
			float: none; 
		}



    .ui-timepicker-container{ 
     z-index:1151 !important; 
    }
    
    
    .fc-day-grid-event > .fc-content {
   white-space: normal;
  
   }


  </style>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="/" class="logo" style="background:#006400;">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>V</b>G</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Verity</b> Geo</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" style="background:green;">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <?php if($chatCount > 0){ ?>
                <li class="dropdown messages-menu">
                    <a href="http://veritygeo.com/demo/chat">
                      <i class="fa fa-comments-o"></i>
                      <span class="label label-success"><?php echo $chatCount; ?></span>
                    </a>
                </li>
             <?php } ?>
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-user-o fa-lg"></i>
            </a>
            <ul class="dropdown-menu" style="width: 10px !important;">
             
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                    <a href="<?php echo site_url();?>/user/logout" class="btn btn-outline-success" style="border: 1px solid green; background:#fff; color: green; border-radius:0;">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
        <a href="" data-toggle="modal" data-target="#modal-default"><img src="<?php 
         
          echo base_url('uploads/images/profile-photos/100/'. $user->photo);?>" class="img-circle" alt="User Image" width="55%"></a>
        </div>
        <div class="pull-left info">
          <p><?php echo $user->first_name . ' ' . $user->last_name; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
     
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active ">
          <a href="http://veritygeo.com/dashboard/">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
          
        </li>
        <li>
          <a href="<?php echo base_url('index.php/calendar'); ?>">
            <i class="fa fa-calendar"></i> <span>My Events</span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url();?>/welcome/profile">
            <i class="fa fa-user"></i> <span>My Profile</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Files Library</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url();?>/file"><i class="fa fa-circle-o"></i> Uploads/Downloads</a></li>
    
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i>
            <span>Requisitions</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('requisition'); ?>"><i class="fa fa-circle-o"></i> All Requisitions </a></li>
            <li><a href="<?php echo site_url();?>/requisition/Create"><i class="fa fa-circle-o"></i> Add New</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-briefcase"></i> <span>Budgets</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url();?>/budget"><i class="fa fa-circle-o"></i> All Budgets </a></li>
            <li><a href="<?php echo site_url();?>/budget/Create"><i class="fa fa-circle-o"></i> Add New</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-exclamation-circle"></i> <span>Complaints</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url();?>/complaints"><i class="fa fa-circle-o"></i> Add New</a></li>
          </ul>
        </li>
        <li>
          <a href="<?php echo site_url();?>/user/StaffProfile">
            <i class="fa fa-users"></i> <span>Staff Profiles</span>
          </a>
        </li>
        <li>
          <a href="http://veritygeo.com/demo/chat">
            <i class="fa fa-comments-o"></i> <span>Chat</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-tags"></i> <span>Leave Requests</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url();?>/leave"><i class="fa fa-circle-o"></i> All Requests</a></li>
            <li><a href="<?php echo site_url();?>/leave/Create"><i class="fa fa-circle-o"></i> Add New</a></li>
          </ul>
        </li>
        <li>
          <a href="<?php echo site_url();?>/procurement">
            <i class="fa fa-shopping-cart"></i> <span>Procurement</span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url();?>/journey">
            <i class="fa fa-shopping-cart"></i> <span>Journey Log</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-briefcase"></i> <span>Project Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url();?>/project"><i class="fa fa-circle-o"></i> All Projects</a></li>
            <li><a href="<?php echo site_url();?>/project/Create"><i class="fa fa-circle-o"></i> Add Project</a></li>
          </ul>
        </li>
        <?php if($user->isMD == 1 || $user->isAccountant == 1){?>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-money"></i> <span>Invoices</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo site_url();?>/invoice"><i class="fa fa-circle-o"></i> All Invoices</a></li>
              <li><a href="<?php echo site_url();?>/invoice/create"><i class="fa fa-circle-o"></i> Add New</a></li>
            </ul>
          </li>
        <?php } ?>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>


      <!-- DYNAMIC CONTENT -->

  <?php $this->load->view($content); ?> 

    <!-- END OF DYNAMIC CONTENT -->

 <footer class="main-footer">
    
    <strong>Copyright &copy; 2011-<?php echo date("Y"); ?> <a href="https://veritygeo.com/">VerityGEO</a>.</strong> All rights
    reserved.
 </footer>

  
</div>
<!-- ./wrapper -->

<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Change Profile Picture</h4>
        </div>
        <div class="modal-body">
           <form action="<?php echo site_url('welcome/ChangeProfilePicture/'. $user->id);?>" method="post" enctype="multipart/form-data">
        
           <input type="file" class="input-id" name="photo" data-browse-on-zone-click="true" data-show-upload="false" required>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Update</button>
        </div>
      </div>
      </form>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->


<div class="modal fade" id="modal-default2">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Add New Client</h4>
        </div>
        <div class="modal-body">
        <form action="<?php echo site_url();?>/Client/Store" method="post">
        <div class="row">
          <div class="col-lg-12">
            <div class="form-group">
            <label for="">Client Company Name</label>
              <input type="text"  class="form-control" name="name" placeholder="Enter Client Company Name" required>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-7">
             <div class="form-group">
                <label for="">Client Email</label>
              <div class="input-group">
                <input type="text" class="form-control" name="email" placeholder="Enter Client Company Email" required>
                <span class="input-group-addon" style="width:60%; background:lightgray;">@veritygeo.com</span>
              </div>
           </div>
          </div>
          <div class="col-lg-5">
          <div class="form-group">
          <label for="">Client Password</label>
            <input type="password"  class="form-control" name="pass_word" placeholder="Enter Client Password" required>
          </div>
        </div>
        </div>
       
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Add</button>
        </div>
      </div>
      </form>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->





<!-- jQuery 3 -->
<script src="<?php echo base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url();?>assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url();?>assets/bower_components/raphael/raphael.min.js"></script>

<!-- Select2 -->
<script src="<?php echo base_url();?>assets/bower_components/select2/dist/js/select2.full.min.js"></script>

<!-- Sparkline -->
<script src="<?php echo base_url();?>assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<!--<script src="<?php echo base_url();?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>-->
<!--<script src="<?php echo base_url();?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>-->
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url();?>assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url();?>assets/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url();?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url();?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url();?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url();?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/dist/js/adminlte.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>assets/dist/js/demo.js"></script>

<!-- DataTables -->
<script src="<?php echo base_url();?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>


<!-- bootstrap time picker -->
<script src="<?php echo base_url();?>assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>

<!-- fullCalendar -->
<script src="<?php echo base_url();?>assets/bower_components/moment/moment.js"></script>
<script src="<?php echo base_url();?>assets/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>

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
<!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>-->
<!-- the main fileinput plugin file -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.1/js/fileinput.min.js"></script>
<!-- following theme script is needed to use the Font Awesome 5.x theme (`fas`) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.1/themes/fas/theme.min.js"></script>
<!-- optionally if you need translation for your language then include the locale file as mentioned below (replace LANG.js with your language locale) -->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.1/js/locales/LANG.js"></script>-->

<script src="<?php echo base_url();?>/assets2/js/isia-form-repeater.min.js"></script>
<script src="<?php echo base_url();?>/assets2/js/demo.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
  $(function () {

    $('.datatable').DataTable({
      "lengthMenu": [ 5, 10, 50, 100 ],
      "order": [[ 0, "desc" ]],
      });


    
    
 $('[data-toggle="tooltip"]').tooltip(); 

     //Timepicker
     $('.timepicker').timepicker({
      showInputs: false,
      scrollbar: true,
    })

    //Date picker
    $( ".datepicker" ).datepicker({
      dateFormat: "dd-mm-yy",
      changeYear: true,
      changeMonth: true,
    });

     

   /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)

    
    //var events = ;

    var date = new Date()
    var d    = date.getDate(),
        m    = date.getMonth(),
        y    = date.getFullYear()
    $('#calendar').fullCalendar({
      header    : {
        left  : 'prev,next today',
        center: 'title',
        right : 'month,agendaWeek,agendaDay'
      },
      buttonText: {
        today: 'today',
        month: 'month',
        week : 'week',
        day  : 'day'
      },
      //Random default events
      events    : <?php echo json_encode($data); ?>,
      editable  : true,
      selectable : true, 
          
      displayEventEnd: {
                    month: false,
                    basicWeek: true,
                    "default": true
                },
        timeFormat: 'h(:mm)a',

      
    });


$('.printMe').click(function(){
     window.print();
});


    
    // with plugin options
  $(".input-id").fileinput({

    'showUpload': false

    });


  }); //Fundtion end

 

</script>





</body>
</html>
