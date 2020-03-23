<div class="content">
<div class="card">
  <div class="card-header">
    <h4 class="card-title" id="basic-layout-tooltip">Add New Customer </h4>
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
      <form class="form" method="POST" action="<?php echo base_url('customer/insert_new_customer');?>">
        <div class="form-body">
          <!-- First Row -->
          <div class="row">
            <div class="col-lg-4">
              <div class="form-group">
                <label for="issueinput1">Customer Name</label>
                <input type="text" id="issueinput1" class="form-control" placeholder="Customer Name" name="customername" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Customer Name">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <label for="issueinput2">Contact Person Name</label>
                <input type="text" id="issueinput2" class="form-control" placeholder="Contact Person Name" name="contactpersonname" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Contact Person Name">
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="issueinput3">City</label>
                <select id="issueinput3" name="customercity" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="City">
                  <option value="0">Select City</option>
                  <?php foreach($cities as $c):?>
                    <option value="<?php echo $c->city_name;?>"><?php echo $c->city_name;?></option>
                  <?php endforeach;?>
                </select>
              </div>
            </div>
          </div>
          <!-- Second Row -->
          <div class="row">
            <div class="col-lg-4">
              <div class="form-group">
                <label for="issueinput4">Address Line 1</label>
                <input type="text" id="issueinput4" class="form-control" placeholder="Address Line 1" name="addressline1" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Address line 1">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <label for="issueinput5">Address Line 2</label>
                <input type="text" id="issueinput5" class="form-control" placeholder="Address Line 2" name="addressline2" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Address line 2">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <label for="issueinput6">Pincode</label>
                <input type="number" id="issueinput6" class="form-control" placeholder="Pincode" name="pincode" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="pincode">
              </div>
            </div>
          </div>
          <!-- Third Row-->
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="issueinput7">State</label>
                <select id="issueinput7" name="state" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="State">
                  <option>Select State</option>
                  <?php foreach($state as $s):?>
                    <option value="<?php echo $s->state_name;?>"><?php echo $s->state_name;?></option>
                  <?php endforeach;?>
                </select>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <label for="issueinput1">Landline Phone No.</label>
                <input type="tel" id="issueinput1" class="form-control" placeholder="Landline Phone No." name="landlinephoneno" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Landline Phone No.">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <label for="issueinput1">Mobile Number</label>
                <input type="number" id="issueinput1" class="form-control" placeholder="Mobile Number" name="mobilenumber" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Mobile Number">
              </div>
            </div>
          </div>
          <!-- fourth row -->
          <div class="row">
            <div class="col-lg-3">
              <div class="form-group">
                <label for="issueinput1">Email ID</label>
                <input type="email" id="issueinput1" class="form-control" placeholder="Email ID" name="emailid" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Email ID">
              </div>
            </div>
            <div class="col-lg-3">
              <div class="form-group">
                <label for="issueinput1">Credit Limit</label>
                <input type="text" id="issueinput1" class="form-control" placeholder="Credit Limit" value="<?php echo $credit_limit;?>" name="creditlimit" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Credit Limit">
              </div>
            </div>
            <div class="col-lg-3">
              <div class="form-group">
                <label for="issueinput1">Overdue Days Limit</label>
                <input type="text" id="issueinput1" class="form-control" placeholder="Overdue Days Limit" value="<?php echo $overdue_day_limit;?>" name="overduedayslimit" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Overdue Days Limit">
              </div>
            </div>
            <div class="col-lg-3">
              <div class="form-group">
                <label for="issueinput1">Discount(%):</label>
                <select id="issueinput5" name="discount" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Discount(%)">
                  <option value="4">0 %</option>
                  <?php foreach($discount as $d):?>
                    <option value="<?php echo $d->discount_id;?>"><?php echo $d->discount_percentage.' %';?></option>
                  <?php endforeach;?>
                </select>
              </div>
            </div>
          </div>
          <!-- Fourth Row -->
          <div class="row">
            <div class="col-lg-3">
              <div class="form-group">
                <label for="issueinput1">GST No.</label>
                <input type="text" id="issueinput1" class="form-control" placeholder="GST No." name="gstno" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="GST No.">
              </div>
            </div>
            <div class="col-lg-3">
              <div class="form-group">
                <label for="issueinput1">PAN No.</label>
                <input type="text" id="issueinput1" class="form-control" placeholder="PAN No." name="panno" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="PAN No.">
              </div>
            </div>
            <div class="col-lg-3">
              <div class="form-group">
                <label for="issueinput1">Opening Balance</label>
                <input type="text" id="issueinput1" class="form-control" placeholder="Opening Balance" value="<?php echo $opening_balance;?>" name="openingbalance" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Opening Balance">
              </div>
            </div>
            <div class="col-lg-3">
              <div class="form-group">
                <label for="issueinput1">Group</label>
                <input type="text" id="issueinput1" class="form-control" placeholder="Group" name="group" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Group">
              </div>
            </div>
          </div>
          <!-- Fifth Row -->
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="issueinput1">Party PO No.</label>
                <input type="text" id="issueinput1" class="form-control" placeholder="Party PO No." name="partypono" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Party PO No.">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="issueinput3">Party PO Date</label>
                <input type="date" id="issueinput3" class="form-control" name="partypodate" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Party PO Date">
              </div>
            </div>
          </div>
          <div style="margin-top:25px;">
            <button type="submit" class="btn btn-primary">
              <i class="icon-check2"></i> Submit
            </button>
            <button type="reset" class="btn btn-warning mr-1">
              <i class="icon-cross2"></i> Reset
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
