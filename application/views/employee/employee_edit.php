<div class="content">
<div class="card">
  <div class="card-header">
    <h4 class="card-title" id="basic-layout-tooltip">Add New Employee</h4>
    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
  </div>
  <div class="card-body collapse in">
    <div class="card-block">
      <div class="card-text">
        <p></p>
      </div>
      <form class="form" method="POST" action="<?php echo base_url('employee/update_employee');?>">
        <div class="form-body">
          <!-- First Row -->
          <div class="row">
            <div class="col-lg-4">
              <div class="form-group">
                <label for="issueinput1">Employee Name</label>
                <input type="text" id="issueinput1" class="form-control" value="<?php echo $employee->employee_name;?>" placeholder="Employee Name" name="employeename" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Employee Name">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <label for="issueinput2">Date of Birth</label>
                <input type="date" id="issueinput2" class="form-control" placeholder="Date of Birth" name="dob" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Date of Birth">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <label for="issueinput3">Mobile Number</label>
                <input type="number" id="issueinput3" class="form-control" value="<?php echo $employee->employee_dob;?>" placeholder="Mobile Number" name="mobilenumber" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Mobile Number">
              </div>
            </div>
          </div>
          <!-- Second Row -->
          <div class="row">

            <div class="col-md-4">
              <div class="form-group">
                <label for="issueinput4">City</label>
                <select id="issueinput4" name="employeecity" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="City">
                  <option>Select City</option>
                  <?php foreach($cities as $c):?>
                    <option value="<?php echo $c->city_id;?>"><?php echo $c->city_name;?></option>
                  <?php endforeach;?>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="issueinput5">State</label>
                <select id="issueinput5" name="employeestate" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="State">
                  <option>Select State</option>
                  <?php foreach($state as $s):?>
                    <option value="<?php echo $s->state_id;?>"><?php echo $s->state_name;?></option>
                  <?php endforeach;?>
                </select>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <label for="issueinput6">Lane 1</label>
                <input type="text" id="issueinput6" class="form-control" placeholder="Lane 1" name="lane1" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Lane 1">
              </div>
            </div>
          </div>
          <!-- Third Row-->
          <div class="row">
            <div class="col-lg-4">
              <div class="form-group">
                <label for="issueinput7">Lane 2</label>
                <input type="text" id="issueinput7" class="form-control" placeholder="Lane 2" name="lane2" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Lane 2">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <label for="issueinput8">Pincode</label>
                <input type="text" id="issueinput8" class="form-control" placeholder="Pincode" name="pincode" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Pincode">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <label for="issueinput9">Email ID</label>
                <input type="email" id="issueinput9" value="<?php echo $employee->employee_email_id;?>"class="form-control" placeholder="Email ID" name="emailid" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Email ID">
              </div>
            </div>
            </div>
            <div class="row">
            <div class="col-lg-4">
              <div class="form-group">
                <label for="issueinput10">Role</label>
                <select id="issueinput10" name="role" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Role">
                  <option value="-">Select Role</option>
                  <?php foreach($roles as $r):?>
                    <option value="<?php echo $r->role_id;?>"><?php echo $r->role_name;?></option>
                  <?php endforeach;?>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="issueinput11">Department</label>
                <select id="issueinput11" name="employeedepartment" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Department">
                  <option>Select Department</option>
                  <?php foreach($departments as $d):?>
                    <option value="<?php echo $d->department_id;?>"><?php echo $d->department_name;?></option>
                  <?php endforeach;?>
                </select>
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
