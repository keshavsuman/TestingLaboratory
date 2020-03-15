<head>
<?php include('header.php'); ?>
</head>
<?php include('sidebar.php'); ?>
  <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">Trasaction Report</h2>
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
                    <div class="form-group">
                      <label for="issueinput3">From Date:</label>
                      <input type="date" id="issueinput3" class="form-control" name="dateopened" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Date Opened">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="issueinput4">To Date:</label>
                      <input type="date" id="issueinput4" class="form-control" name="datefixed" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Date Fixed">
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
                <h4 class="card-title">invoice</h4>
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
                                <th>Transaction No  </th>
                                <th>Payment Type</th>
                                <th>  Payment Description</th>
                                <th> Credit Amount</th>
                                <th> Debit Amount  </th>
                                <th>Transaction Date
</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php foreach($user as $users): ?>
                            <tr>
                                <th scope="row"><?php echo $users->sr_no; ?></th>
                                <td><?php echo $users->invoice_no; ?></td>
                                <td><?php echo $users->invoice_date; ?></td>
                                <td><?php echo $users->mrn; ?> </td>
                                <td><?php echo $users->customer_name; ?></td> 
                                <td><?php echo $users->net_amount; ?></td>
                                <td><?php echo $users->email_id; ?></td>
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