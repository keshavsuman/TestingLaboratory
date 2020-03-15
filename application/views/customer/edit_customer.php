<div class="content">
<div class="card">
  <div class="card-header">
    <h4 class="card-title" id="basic-layout-tooltip">Edit Customer</h4>
    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
  </div>
  <div class="card-body collapse in">
    <div class="card-block">
      <div class="card-text">
        <p></p>
      </div>
      <form class="form" method="POST" action="<?php echo base_url('customer/update_customer');?>">
        <div class="form-body">
          <!-- First Row -->
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="issueinput1">Customer Name</label>
                <input type="text" id="issueinput1" value="<?php echo $customer->customer_name; ?>" class="form-control" placeholder="Customer Name" name="customername" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Customer Name">
              </div>
            </div>
            <!-- <div class="col-lg-4">
              <div class="form-group">
                <label for="issueinput2">Contact Person Name</label>
                <input type="text" id="issueinput2" value="<?php echo $customer->customer_name; ?>"class="form-control" placeholder="Contact Person Name" name="contactpersonname" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Contact Person Name">
              </div>
            </div> -->
            <div class="col-md-6">
              <div class="form-group">
                <label for="issueinput3">City</label>
                <select id="issueinput3" name="customercity" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="City">
                  <option value="<?php echo $city->city_id ;?>"><?php echo $city->city_name;?></option>
                  <?php foreach($cities as $c):?>
                    <option value="<?php echo $c->city_id;?>"><?php echo $c->city_name;?></option>
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
                <input type="text" id="issueinput4" value="<?php echo $address->lane1; ?>" class="form-control" placeholder="Address Line 2" name="addressline1" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Customer Name">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <label for="issueinput5">Address Line 2</label>
                <input type="text" id="issueinput5" value="<?php echo $address->lane2; ?>" class="form-control" placeholder="Address Line 2" name="addressline2" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Customer Name">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <label for="issueinput6">pincode</label>
                <input type="number" id="issueinput6" class="form-control" value="<?php echo $address->pincode; ?>"placeholder="Pincode" name="pincode" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="pincode">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="issueinput7">State</label>
                <select id="issueinput7" name="state" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="State">
                  <option value="<?php echo $state->state_id;?>"><?php echo $state->state_name;?></option>
                  <?php foreach($states as $s):?>
                    <option value="<?php echo $s->state_id;?>"><?php echo $s->state_name;?></option>
                  <?php endforeach;?>
                </select>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <label for="issueinput8">Landline Phone No.</label>
                <input type="tel" id="issueinput8" class="form-control" value="<?php echo $customer->customer_landline; ?>"placeholder="Landline Phone No." name="landlinephoneno" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Landline Phone No.">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <label for="issueinput9">Mobile Number</label>
                <input type="number" id="issueinput9" class="form-control" value="<?php echo $customer->customer_phone_number; ?>"placeholder="Mobile Number" name="mobilenumber" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Mobile Number">
              </div>
            </div>
          </div>
          <!-- Third Row-->
          <div class="row">
            <div class="col-lg-3">
              <div class="form-group">
                <label for="issueinput10">Email ID</label>
                <input type="email" id="issueinput10" class="form-control" value="<?php echo $customer->customer_email_id; ?>" placeholder="Email ID" name="emailid" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Email ID">
              </div>
            </div>
            <div class="col-lg-3">
              <div class="form-group">
                <label for="issueinput11">Credit Limit</label>
                <input type="text" id="issueinput11" class="form-control" value="<?php echo $customer->customer_credit_limit; ?>" placeholder="Credit Limit"  name="creditlimit" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Credit Limit">
              </div>
            </div>
            <div class="col-lg-3">
              <div class="form-group">
                <label for="issueinput12">Overdue Days Limit</label>
                <input type="text" id="issueinput12" class="form-control" value="<?php echo $customer->customer_overdue_day; ?>" placeholder="Overdue Days Limit" name="overduedayslimit" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Overdue Days Limit">
              </div>
            </div>
            <div class="col-lg-3">
              <div class="form-group">
                <label for="issueinput13">Discount(%):</label>
                <select id="issueinput13" name="discount" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Discount(%)">
                  <option value="<?php  echo $dis->discount_id;?>"><?php echo $dis->discount_percentage.' %';?></option>
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
                <input type="text" id="issueinput1" value="<?php echo $customer->customer_gst_no; ?>" class="form-control" placeholder="GST No." name="gstno" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="GST No.">
              </div>
            </div>
            <div class="col-lg-3">
              <div class="form-group">
                <label for="issueinput1">PAN No.</label>
                <input type="text" id="issueinput1" value="<?php echo $customer->customer_pan_no; ?>" class="form-control" placeholder="PAN No." name="panno" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="PAN No.">
              </div>
            </div>
            <div class="col-lg-3">
              <div class="form-group">
                <label for="issueinput1">Opening Balance</label>
                <input type="text" id="issueinput1" class="form-control" value="<?php echo $customer->customer_opening_balance; ?>" placeholder="Opening Balance"  name="openingbalance" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Opening Balance">
              </div>
            </div>
            <div class="col-lg-3">
              <div class="form-group">
                <label for="issueinput1">Group</label>
                <input type="text" id="issueinput1" class="form-control" value="<?php echo $customer->customer_group; ?>" placeholder="Group" name="group" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Group">
              </div>
            </div>
          </div>
          <!-- Fifth Row -->
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="issueinput1">Party PO No.</label>
                <input type="text" id="issueinput1" value="<?php echo $customer->party_po_no; ?>" class="form-control" placeholder="Party PO No." name="partypono" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Party PO No.">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="issueinput3">Party PO Date</label>
                <input type="date" id="issueinput3" class="form-control" value="<?php echo $customer->party_po_date; ?>"  name="partypodate" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Party PO Date">
              </div>
            </div>
          </div>
          <input type="hidden" name="address_id" value="<?php echo $address->address_id;?>">
          <input type="hidden" name="customer_id" value="<?php echo $customer->customer_id;?>">
          <!-- <input type="hidden" name="contact_person_id" value="<?php // $contact->customer_id;?>"> -->
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
