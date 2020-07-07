<?php
    $CI =& get_instance();
?> 


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Invoices
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> All Invoices</li>
      </ol>
    </section>

      <br>

    <div class="container" style="padding: 2px;">
      <div class="row">
       <div class="col-lg-6">
            <?php  if (isset($_SESSION['success']))  { ?>
                  <div class="alert alert-dismissable alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <p><?php echo $_SESSION['success']; unset($_SESSION['success']); ?></p>
                  </div>
            <?php }  ?>
       </div> 
      </div>
    </div>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box" style="border-top: 3px solid lightblue;">
            <div class="box-header">
              <h3 class="box-title">All Invoices <a href="<?php echo site_url();?>/invoice/create"><i class="fa fa-plus pull-right text-primary"></i></a></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table  class="table table-bordered table-striped datatable">
                <thead>
                <tr class="text-center">
                  <th class="text-center">Invoice number</th>
                  <th class="text-center">Issue Date</th>
                  <th class="text-center">Company name</th>
                  <th class="text-center">Paid Status</th>
                  <th class="text-center">Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                  <th class="text-center">Invoice number</th>
                  <th class="text-center">Date</th>
                  <th class="text-center">Company name</th>
                  <th class="text-center">Paid Status</th>
                  <th class="text-center">Action</th>
                </tr>
                </tfoot>
                <tbody>
                  <?php foreach($invoices as $invoice){ ?>
                    <tr>
                      <td class="text-center"><?php echo $invoice->invoice_no; ?></td>
                      <th class="text-center"><?php echo date('d-m-Y', strtotime($invoice->issue_date)); ?></th>
                      <td class="text-center"><?php echo $CI->GetSupplierNameWithID($invoice->supplierID); ?></td>
                      <td class="text-center"><?php if($invoice->payment_status == 1){echo "Paid"; }else{ echo "Pending";} ?></td>
                      <td class="text-center"><a href="<?php echo site_url('invoice/View/'.  $invoice->id); ?>"><i class="fa fa-eye fa-lg" style="color:purple;"></i></a></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>