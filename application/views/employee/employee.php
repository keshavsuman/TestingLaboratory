<div class="content">
<div class="card">
  <div class="card-header">
    <h4 class="card-title" id="basic-layout-tooltip">Employee Registration</h4>
    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
  </div>
  <div style="padding:30px;">
    <a href="<?php echo base_url('employee/add_employee');?>">
    <button class="btn btn-primary">
      <i class="icon-search4"></i> &nbsp;Add New Employee
    </button>
    </a>
  </div>
  <div style="padding:1em">
    <div class="table-responsive">
      <table class="table mb-0">
          <thead class="thead-inverse">
              <tr>
                  <th>Sr No.</th>
                  <th>Employee Name</th>
                  <th>Address</th>
                  <th>Mobile No.</th>
                  <th>Email ID</th>
                  <th>Reg. Date</th>
                  <th>Role</th>
                  <th>Department</th>
                  <th>Edit</th>
                  <th>Delete</th>
              </tr>
          </thead>
          <tbody>
            <?php $count=1;
            foreach($employee as $e):
            ?>
              <tr>
                  <th scope="row"><?php echo $count++;?></th>
                  <td><?php echo $e->employee_name; ?></td>
                  <td><?php echo $e->lane1.','.$e->lane2.','.$e->city_name.','.$e->state_name; ?></td>
                  <td><?php echo $e->employee_mobile_no; ?></td>
                  <td><?php echo $e->employee_email_id; ?></td>
                  <td><?php echo $e->employee_reg_date; ?></td>
                  <td><?php echo $e->role_name; ?></td>
                  <td><?php echo $e->department_name; ?></td>
                  <td>
                    <a href="<?php echo base_url('employee/updateemployee/'.$e->employee_id)?>">
                    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#editModal">
                    <i class="icon-pencil2"></i>
                  </button>
                  </a>
                 </td>
                  <td>
                    <button type="button" class="btn btn-outline-danger" value="<?php echo $e->employee_id;?>" onclick="delet(this.value)" data-toggle="modal" data-target="#deleteModal">
  										<i class="icon-bin"></i>
  									</button>
                  </td>
              </tr>
            <?php endforeach;?>
          </tbody>
        </table>
      </div>
    </div>
    <!-- Modal Delete-->
    <div class="modal fade text-xs-left" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
      <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel2"><i class="icon-bin"></i>Delete Entry</h4>
        </div>
        <div class="modal-body">
        <h5>Are You Sure ?</h5>
        <p>This action will remove entry from Employee Registration.</p>
        </div>
        <div class="modal-footer">
        <form action="<?php echo base_url('employee/deleteEmployee');?>" method="post">
          <input type="hidden" name="employee_id" id="delete" value="">
          <button type="button" class="btn grey btn-outline-primary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-outline-danger"> <i class="icon-bin"></i> Delete</button>
        </form>
        </div>
      </div>
      </div>
    </div>
    <!-- End Modal Delete -->

      </div>
</div>
