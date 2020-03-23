<div class="content">
<div class="card">
  <div class="card-header">
    <h4 class="card-title" id="basic-layout-tooltip">Add New Sample Registration Entry</h4>
    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
  </div>
  <div class="card-body collapse in">
    <div class="card-block">
      <div class="card-text">
        <?php if(isset($this->session->success)):?>
        <div class="alert alert-success alert-dismissible fade in mb-2" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <strong>Success !</strong> <?php echo $this->session->success;?>
        </div>
        <?php $this->session->unset_userdata('success');elseif(isset($this->session->error)):?>
          <div class="alert alert-danger alert-dismissible fade in mb-2" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
              <strong>Error !</strong> <?php echo $this->session->error;?>
          </div>
        <?php $this->session->unset_userdata('error');endif;?>
      </div>
      <form class="form" method="POST" action="<?php echo base_url('home/add_newsample');?>">
        <div class="form-body">
            <form class="form" method="POST">
              <div class="form-body">
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="issueinput3">Sample Registration Date</label>
                      <input type="date" id="issueinput3" class="form-control" name="sampleregistrationdate" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Sample Registration Date">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label for="issueinput1">Sample Registration No:</label>
                      <input type="text" id="issueinput1" class="form-control" readonly name="sampleregistrationno" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Sample Registration Number">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="issueinput5">Select Customer</label>
                      <input id="issueinput5" name="customer" list="customers" placeholder="Select Customers" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Customer">
                        <datalist id="customers">
                          <?php foreach($customers as $c):?>
                            <option value="<?php echo $c->customer_name;?>">
                          <?php endforeach;?>
                        </datalist>
                    </div>
                  </div>
                  <div class="col-lg-5">
                    <div class="form-group">
                      <label for="issueinput4">Address</label>
                      <input type="text" id="issueinput4" class="form-control" readonly placeholder="Address" name="address" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Address">
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label for="issueinput4">Contact No.</label>
                      <input type="number" id="issueinput4" class="form-control" readonly placeholder="Conatct No" name="number" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Contact Number">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label for="issueinput4">D.Challan No.</label>
                      <input type="text" id="issueinput4" class="form-control"  placeholder="Enter Customer D.Challan no" name="challanno" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Challan No">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="issueinput3">Challan Date</label>
                      <input type="date" id="issueinput3" class="form-control" name="challandate" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Challan Date">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="issueinput3">Quantity</label>
                      <input type="number" id="issueinput3" class="form-control" name="quantity" placeholder="Enter Quantity"data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Quantity">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="issueinput3">Delivery Date</label>
                      <input type="date" id="issueinput3" class="form-control" name="deliverydate" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Deleivery Date">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="issueinput3">Sample No:</label>
                      <input type="number" id="issueinput3" class="form-control" readonly name="sampleno" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Sample No">
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="issueinput3">Lab Test Report No:</label>
                      <input type="text" id="issueinput3" class="form-control" readonly name="sampleno" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Lab Test Report No">
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="issueinput3">New Test Report No:</label>
                      <input type="text" id="issueinput3" class="form-control" readonly name="sampleno" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Sample No">
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="issueinput3">scope:</label>
                      <input type="number" id="issueinput3" class="form-control"  name="sampleno" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="New Test Report No">
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="issueinput3">ID No:</label>
                      <input type="number" id="issueinput3" class="form-control"  name="sampleno" data-toggle="tooltip" data-trigger="hover" placeholder="Enter ID No" data-placement="top" data-title="ID No">
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label for="issueinput3">Heat No:</label>
                      <input type="number" id="issueinput3" class="form-control"  placeholder="Enter Heat No" name="sampleno" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Heat No">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label for="issueinput3">Material Description:</label>
                      <input type="text" id="issueinput3" class="form-control"  placeholder="Enter Material Description" name="materialdescription" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Material Description">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label for="issueinput3">Size:</label>
                      <input type="text" id="issueinput3" class="form-control"  placeholder="Size" name="size" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Enter Size">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label for="issueinput3">Sample Recieved Date:</label>
                      <input type="date" id="issueinput3" class="form-control"   name="samplerecieveddate" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Sample Recieved Date">
                    </div>
                  </div>
                  <div class="col-lg-2">
                    <div class="form-group">
                      <label for="radio-button">Sample Prepared:</label>
                      <input type="radio" name="" value="">
                    </div>
                  </div>
                </div>
                <div style="padding-top:25px;">
                  <button type="submit" class="btn btn-primary">
                    <i class="icon-check2"></i> Add Sample
                  </button>
                  <button type="reset" class="btn btn-warning">
                    <i class="icon-cross2"></i> Reset
                  </button>
                </div>
              </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>
