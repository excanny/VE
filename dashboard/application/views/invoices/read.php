 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Invoice
        <small>#<?php echo $invoice->invoice_no; ?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Invoice</li>
      </ol>
    </section>

    <div class="pad margin no-print">
      <div class="callout callout-info" style="margin-bottom: 0!important;">
        <h4><i class="fa fa-info"></i> Invoice:</h4>
       
      </div>
    </div>

    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> <?php echo $invoice->name; ?>
            <small class="pull-right"><strong>Date: </strong>
                <?php 
                  $datetime = new DateTime($invoice->issue_date);
                  echo $datetime->format('F j, Y');
                ?>
            </small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          From
          <address>
            <strong><?php echo $invoice->name; ?></strong><br>
            <?php echo $invoice->street; ?></strong><br>
            <?php echo $invoice->city; ?> <?php echo $invoice->state; ?></strong><br>
            Phone: <?php echo $invoice->phone; ?></strong><br>
            Email: <?php echo $invoice->email; ?>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          To
          <address>
            <strong>Verity Geosolutions</strong><br>
            Plot 19B Babatunde Kuboye Street,<br>
            Off Providence/Otunba Doyin Ogungbe Streets,<br>
            LEKKI PHASE1, LAGOS, Nigeria<br>
            Phone: +234-1-2773850-1<br>
            Email: info@veritygeosolutions.com
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <b>Invoice #<?php echo $invoice->invoice_no; ?></b><br>
          <b>Payment Due:</b> <?php 
          $datetime = new DateTime($invoice->issue_date);
          $datetime->modify('+14 day');
          echo $datetime->format('F j, Y');
          
           ?><br>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>Qty</th>
              <th>Description</th>
              <th>Unit Price</th>
              <th>Subtotal</th>
            </tr>
            </thead>
            <tbody>
            <?php $subtotal = $total = 0; foreach($details as $detail){?>
              <?php 

                $total += $detail->quantity * $detail->price; 

                ?>
            <tr>
              <td><?php echo $detail->quantity; ?></td>
              <td><?php echo $detail->description; ?></td>
              <td><?php echo $detail->price; ?></td>
              <td><?php echo '₦'. number_format(($detail->quantity * $detail->price),2); ?></td>
            </tr>
            <?php } ?>
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <!-- accepted payments column -->
        <!--<div class="col-xs-6">-->
        <!--  <p class="lead">Payment Methods:</p>-->
        <!--  <img src="<?php echo base_url(); ?>images/credit/visa.png" alt="Visa">-->
        <!--  <img src="<?php echo base_url(); ?>images/credit/mastercard.png" alt="Mastercard">-->
        <!--  <img src="<?php echo base_url(); ?>images/credit/american-express.png" alt="American Express">-->
        <!--  <img src="<?php echo base_url(); ?>images/credit/paypal2.png" alt="Paypal">-->

        <!--  <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">-->
        <!--    Bank Transfer-->
        <!--  </p>-->
        <!--</div>-->
        <!-- /.col -->
        <div class="col-xs-offset-6">
          <p class="lead"><b>Amount Due:</b> <?php 
          $datetime = new DateTime($invoice->issue_date);
          $datetime->modify('+14 day');
          echo $datetime->format('d-m-Y');
          
           ?></p>

          <div class="table-responsive">
            <table class="table">
              <tr>
                <th style="width:50%">Basic Total:</th>
                <td><?php echo '₦' . number_format(($total),2); ?></td>
              </tr>
              <tr>
                <th>Tax</th>
                <td>₦0.00</td>
              </tr>
              <tr>
                <th>Shipping:</th>
                <td>₦0.00</td>
              </tr>
              <tr>
                <th><h3>Total:</h3></th>
                <td>
                <h3>
                <?php 
                $grandTotal = $total + 0 + 0;
                
                echo '₦' . number_format(($grandTotal),2); ?>
                </h3>
                </td>
              </tr>
            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <!--<div class="row no-print">-->
      <!--  <div class="col-xs-12">-->
      <!--  <button class="btn btn-default printMe"><i class="fa fa-print"></i> Print</button>-->
      <!--    <button type="button" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Pay-->
      <!--    </button>-->
      <!--  </div>-->
      <!--</div>-->
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
  </div>