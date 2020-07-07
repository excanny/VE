<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Calendar Edit
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Calendar</a></li>
        <li class="active">Edit</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

<div class="col-lg-4">

      <!-- Default box -->
      <div class="box">
        
         <div class="box-header with-border">
           <h3 class="box-title">Edit General Event</h3>
         </div>
         <!-- /.box-header -->
         <!-- form start -->
         <form action="<?php echo base_url('index.php/calendar/updateGeneral/'. $event->id);?>" method="post">
           <div class="box-body">
             <div class="form-group">
               <label for="exampleInputEmail1">Title</label>
               <input type="text" class="form-control" name="title" value="<?php echo $event->title; ?>" required>
             </div>
             <div class="form-group">
               <label for="exampleInputEmail1">Description</label>
               <textarea name="description" class="form-control" required><?php echo $event->description; ?></textarea> 
             </div>
               
             <hr>
             <div class="form-group">
               
                <!-- Date -->
                 <div class="form-group">
                   <label> Start Date:</label>

                   <div class="input-group date">
                     <div class="input-group-addon">
                       <i class="fa fa-calendar"></i>
                     </div>
                     <input type="text" class="form-control pull-right datepicker" name="start_date"  value="<?php echo date('d-m-Y', strtotime($event->start)); ?>" required>
                   </div>
                   <!-- /.input group -->
                 </div>
                 <!-- time Picker -->
                 <div class="bootstrap-timepicker">
                   <div class="form-group">
                     <label>Start Time:</label>

                     <div class="input-group">
                       <input type="text" class="form-control timepicker" name="start_time"  value="<?php echo date('H:m', strtotime($event->start)); ?>" required>

                       <div class="input-group-addon">
                         <i class="fa fa-clock-o"></i>
                       </div>
                     </div>
                     <!-- /.input group -->
                   </div>
                   <!-- /.form group -->
                 </div>
             </div>
             <hr>
             <div class="form-group">
                <!-- Date -->
                 <div class="form-group">
                   <label>End Date:</label>

                   <div class="input-group date">
                     <div class="input-group-addon">
                       <i class="fa fa-calendar"></i>
                     </div>
                     <input type="text" class="form-control pull-right datepicker" name="end_date"  value="<?php echo date('d-m-Y', strtotime($event->end)); ?>" required>
                   </div>
                   <!-- /.input group -->
                 </div>
                 <!-- time Picker -->
                 <div class="bootstrap-timepicker">
                   <div class="form-group">
                     <label>End Time:</label>

                     <div class="input-group">
                       <input type="text" class="form-control timepicker" name="end_time" value="<?php echo date('H:m', strtotime($event->end)); ?>" required>

                       <div class="input-group-addon">
                         <i class="fa fa-clock-o"></i>
                       </div>
                     </div>
                     <!-- /.input group -->
                   </div>
                   <!-- /.form group -->
                 </div>
             </div>
       
           </div>
           <!-- /.box-body -->

           <div class="box-footer">
             <input type="submit" class="btn btn-primary" value="Update">
           </div>
         </form>
       </div>

       </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->