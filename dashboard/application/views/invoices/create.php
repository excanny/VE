<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1> 
        Invoice Entry Form
        <small>Details</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Create Invoice</li>
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


            <div id="page" style="border-top: 2px solid green; margin-bottom: 5px;">
                <form class="pure-form pure-form-stacked" action="<?php echo site_url();?>/Invoice/Store" method="post">
                    <fieldset>
                        <legend>Record Invoice</legend>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Supplier Name <a href="<?php echo site_url();?>/invoice/CreateSupplier"><i class="fa fa-plus pull-right" ></i></a></label>     
                                    <select  class="form-control" name="supplierID" required>
                                     <option value="">Select Supplier</option>
                                        <?php foreach ($suppliers as $supplier) { ?>
                                            <option value="<?php echo $supplier->id; ?>"><?php echo $supplier->name; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                        <label>Issue Date </label>     
                                        <input type="text" class="form-control datepicker" name="issue_date" required>
                                    </div>
                                </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Invoice Number </label>     
                                    <input type="text" class="form-control" name="invoice_no" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="isiaFormRepeater repeat-section" id="test" data-field-id="test_field_id" data-items-index-array="[1]">
                            <div class="repeat-items">
                                <div class="repeat-item" data-field-index="1">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <label>Description</label>
                                            <textarea name="description[]"  rows="2" class="form-control rounded-0" required></textarea>
                                        </div>
                                        <div class="col-lg-2">
                                            <label>Quantity</label>
                                            <input type="number" name="quantity[]" min="1" class="form-control input-sm rounded-0" required>
                                        </div>
                                        <div class="col-lg-3">
                                            <label>Unit Price</label>
                                            <input type="number" step="0.01" min="1" name="price[]" class="form-control input-sm rounded-0" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <div class="row">
                        <div class="col-lg-12">
                           <div class="form-group">
                               <input type="submit" value="Submit" class="btn btn-success pull-right">
                           </div>
                        </div>
                    </div>
                </form>
            </div>
                     
        </div>              


