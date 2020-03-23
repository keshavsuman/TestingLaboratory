<div class="content">
<div class="card">
  <div class="card-header">
    <h4 class="card-title" id="basic-layout-tooltip">Vendor Master</h4>
    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
  </div>
  <div class="card-body collapse in">
    <div class="card-block">
      <div class="card-text">
        <p></p>
      </div>
      <form class="form" method="POST" action="<?php echo base_url('master/update_vendor');?>">
        <div class="form-body">
          <div class="row">
            <input type="hidden" name="vendor_id" value="<?php echo $vendor->vendor_id;?>">
            <input type="hidden" name="address_id" value="<?php echo $vendor->address_id;?>">
            <div class="col-lg-4">
              <div class="form-group">
                <label for="issueinput1">Vendor Name</label>
                <input type="text" id="issueinput1" class="form-control" placeholder="Enter Vendor Name" name="vendorname" value="<?php echo $vendor->vendor_name;?>" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Enter Vendor Name">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <label for="issueinput1">Address Lane 1</label>
                <input type="text" id="issueinput1" class="form-control" placeholder="Address Lane 1" name="lane1" value="<?php echo $vendor->lane1;?>"  data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Address Lane 1">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <label for="issueinput1">Address Lane 2</label>
                <input type="text" id="issueinput1" class="form-control" placeholder="Address Lane 2" name="lane2" value="<?php echo $vendor->lane2;?>" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Address Lane 2">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="issueinput3">City</label>
                <select id="issueinput3" name="city_name" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="City">
                  <option value="<?php echo $vendor->city_name;?>"><?php echo $vendor->city_name;?></option>
                  <?php foreach($cities as $c):?>
                    <option value="<?php echo $c->city_name;?>"><?php echo $c->city_name;?></option>
                  <?php endforeach;?>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="issueinput7">State</label>
                <select id="issueinput7" name="state_name" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="State">
                  <option value="<?php echo $vendor->state_name;?>"><?php echo $vendor->state_name;?></option>
                  <?php foreach($state as $s):?>
                    <option value="<?php echo $s->state_name;?>"><?php echo $s->state_name;?></option>
                  <?php endforeach;?>
                </select>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <label for="issueinput1">Pincode</label>
                <input type="number" id="issueinput1" class="form-control" value="<?php echo $vendor->pincode;?>" placeholder="Pincode" name="pincode" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Pincode">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4">
              <div class="form-group">
                <label for="issueinput1">Email Id</label>
                <input type="email" id="issueinput1" class="form-control" placeholder="Enter Email ID" value="<?php echo $vendor->vendor_email_id;?>" name="email_id" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Email ID">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <label for="issueinput1">Contact No</label>
                <input type="number" id="issueinput1" class="form-control" placeholder="Enter Contact No" name="contactno" value="<?php echo $vendor->vendor_mobile_no;?>" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Contact No">
              </div>
            </div>
          </div>
          <div>
            <button type="submit" class="btn btn-primary">
              <i class="icon-check2"></i> Update
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
