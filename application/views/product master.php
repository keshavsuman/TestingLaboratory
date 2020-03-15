<head>
<?php include('header.php'); ?>
</head>
<?php include('sidebar.php'); ?>
  <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">Invoice</h2>
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
                  <label for="issueinput1">Chemical Name</label>
                  <input type="text" id="issueinput1" class="form-control" placeholder="Chemical Name" name="issuetitle" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Issue Title">
                </div>
                </div>
             
                <div class="col-md-6">
                  <div class="form-group">
                  <label for="issueinput1">quantity</label>
                  <input type="text" id="issueinput1" class="form-control" placeholder="Invoice Number" name="issuetitle" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Issue Title">
                </div>
              </div>
              </div>
              <div class="col-xs-12">
                 <div class="form-group">
                  <label for="issueinput1">discription</label>
                  <input type="text" id="issueinput1" class="form-control" placeholder="Description" name="issuetitle" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Issue Title">
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
                                <th> Name  </th>
                                <th> Description</th>
                                <th> Re-order Quantity  </th>
                                <th>Edit</th>
                                <th>  Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php foreach($user as $users): ?>
                            <tr>
                                <th scope="row"><?php echo $users->so_no; ?></th>
                                <td><?php echo $users->name; ?></td>
                                <td><?php echo $users->description; ?></td>
                                <td><?php echo $users->reorder_quantity; ?> </td>
                                <td><?php echo "Edit"; ?></td>
                                <td><?php echo "Delete"; ?></td>
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