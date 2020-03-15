<head>
<?php include('header.php'); ?>
</head>
<?php include('sidebar.php'); ?>
  <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">Bill report</h2>
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Form Layouts</a>
                </li>
                <li class="breadcrumb-item active"><a href="#">Basic Forms</a>
                </li>
              </ol>
            </div>
          </div>
        </div>
        <div class="content-body"><!-- Basic form layout section start -->
<section id="basic-form-layouts">
  <div class="row match-height">
    <div class="col-xs-12">
<div class="card">
        <div class="card-header">
          <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
          <div class="heading-elements">
            <ul class="list-inline mb-0">
              <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
              <li><a data-action="reload"><i class="icon-reload"></i></a></li>
              <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
              <li><a data-action="close"><i class="icon-cross2"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="card-body collapse in">
          <div class="card-block">
            <form class="form">
              <div class="form-body">
                <div class="form-group">
                  <div class="row">
                  <div class="col-md-6">
                  <label for="issueinput5">Coustomer Name</label>
                  <select id="issueinput5" name="Coustomer_name" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Coustomer Name">
                    <option value="">All</option>
                    <?php foreach($coustomer_name as $coustomer_names): ?>
                    <option value="<?php echo $coustomer_names->customer_name; ?>"><?php echo $coustomer_names->customer_name; ?></option>
                   <?php endforeach ?>
                  </select>
                </div>
             	<div class="col-md-6">
                  <label for="issueinput5">Work Order Number</label>
                  <select id="issueinput5" name="priority" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Priority">
                    <option value="">ALl</option>
                    <?php foreach($work_order_no as $number): ?>
                    <option value="<?php echo $number->work_order_no; ?>"><?php echo$number->work_order_no; ?></option>
                   <?php endforeach ?>
                  </select>
                </div>
              </div>
              </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="issueinput3">From Date:</label>
                      <input type="date" id="issueinput3" class="form-control" name="dateopened" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Date Opened">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="issueinput4">To Date:</label>
                      <input type="date" id="issueinput4" class="form-control" name="datefixed" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Date Fixed">
                    </div>
                  </div>
                  <div class="col-md-4">
                 <div class="form-group">
                  <label for="issueinput1">Invoice Number</label>
                  <input type="text" id="issueinput1" class="form-control" placeholder="Invoice Number" name="issuetitle" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Issue Title">
                </div>
              </div>
                </div>

              </div>

              <div class="form-actions">
                <button type="submit" class="btn btn-primary">
                  <i class="icon-check2"></i> Save
                </button>
                <button type="button" class="btn btn-warning mr-1">
                  <i class="icon-cross2"></i> Reset
                </button>
                
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</section>
<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Bill Report</h4>
                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                        <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                        <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                        <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body collapse in">
                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th>Sr.No.</th>
                                <th>Invoice No</th>
                                <th>Customer Name</th>
                                <th>Work Order No	</th>
                                <th>Invoice Date</th>
                                <th>Challan No	</th>
                                <th>Challan Date	</th>
                                <th>Net Amount</th>
                                <th>Pay Amount	</th>
                                <th>Credit Days</th>
                                <th>Due Days</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php foreach($user as $users): ?>
                            <tr>
                                <th scope="row"><?php echo $users->sr_no; ?></th>
                                <td><?php echo $users->invoice_number; ?></td>
								<td><?php echo $users->coustomer_name; ?></td>
								<td><?php echo $users->work_order_no; ?></td>
								<td><?php echo $users->invoice_date; ?></td>
								<td><?php echo $users->challan_no; ?></td>
								<td><?php echo $users->challan_date; ?></td>
								<td><?php echo $users->net_amount; ?></td>
								<td><?php echo $users->pay_amount; ?></td>
								<td><?php echo $users->credit_day; ?></td>
								<td><?php echo $users->due_days; ?></td>
                            </tr>
                          <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<?php include('footer.php'); ?>