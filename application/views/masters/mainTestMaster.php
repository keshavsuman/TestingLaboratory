<div class="content">
<div class="card">
  <div class="card-header">
    <h4 class="card-title" id="basic-layout-tooltip">Main Test Master</h4>
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
      <form class="form" method="POST" action="<?php echo base_url('master/add_mainTest');?>">
        <div class="form-body">
          <div class="row">
            <div class="col-lg-4">
              <div class="form-group">
              <label for="issueinput7">Department</label>
              <select id="issueinput7" name="department" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Department">
                <option value="0">Select Department</option>
                <?php foreach($department as $d):?>
                  <option value="<?php echo $d->department_id;?>"><?php echo $d->department_name;?></option>
                <?php endforeach;?>
              </select>
            </div>
          </div>

            <div class="col-lg-6">
              <div class="form-group">
                <label for="issueinput1">Main Test Name </label>
                <input type="text" id="issueinput1" class="form-control" placeholder="Enter Main Test Name" name="maintest" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Main Test Name">
              </div>
            </div>
          </div>
          <div>
            <button type="submit" class="btn btn-primary">
              <i class="icon-check2"></i> Submit
            </button>
            <button type="reset" class="btn btn-warning">
              <i class="icon-cross2"></i> Reset
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
      <div class="table-responsive">
      <table class="table mb-0">
          <thead class="thead-inverse">
              <tr>
                  <th>Sr No.</th>
                  <th>Department Name</th>
                  <th>Main Test Name</th>
                  <th>Edit</th>
                  <th>Delete</th>
              </tr>
          </thead>
          <tbody>
            <?php $count=1;
            foreach($maintestdata as $mtd):
            ?>
              <tr>
                  <th scope="row"><?php echo $count++;?></th>
                  <input type="hidden" id="edit3<?php echo $mtd->main_test_id; ?>" name="department_id" value="<?php echo $mtd->department_id;?>">
                  <td id="edit1<?php echo $mtd->main_test_id;?>"><?php echo $mtd->department_name?></td>
                  <td id="edit2<?php echo $mtd->main_test_id;?>"><?php echo $mtd->main_test_name?></td>
                  <td>
                    <button type="button" class="btn btn-outline-primary" id="edit-button" value="<?php echo $mtd->main_test_id;?>" onclick="doubleentryedit(this.value)" data-toggle="modal" data-target="#editModal">
                      <i class="icon-pencil2"></i>
                    </button>
                  </td>
                  <td>
                    <button type="button" class="btn btn-outline-danger" value="<?php echo $mtd->main_test_id;?>" onclick="delet(this.value)" data-toggle="modal" data-target="#deleteModal">
                      <i class="icon-bin"></i>
                    </button>
                  </td>
              </tr>
            <?php endforeach;?>
          </tbody>
        </table>
      </div>
      <!-- Modal edit -->
      <div class="modal fade text-xs-left" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title" id="myModalLabel2"><i class="icon-pencil2"></i> Edit Main Test Master Entry</h4>
          </div>
          <div class="modal-body">
          <h5>Edit Enteries From Main Test Master</h5>
          <form class="form" action="<?php echo base_url('master/update_mainTestMaster'); ?>" method="post">
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                <label for="issueinput9">Department</label>
                <select id="issueinput9" name="department_id" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Department">
                  <option id="editvalue1"></option>
                  <?php foreach($department as $d):?>
                    <option value="<?php echo $d->department_id;?>"><?php echo $d->department_name;?></option>
                  <?php endforeach;?>
                </select>
              </div>
            </div>
            </div>
            <div class="row">
            <div class="col-lg-12">
                  <div class="form-group">
                    <label for="issueinput1">Main Test Name </label>
                    <input type="hidden" id="edit" name="main_test_id" value="">
                    <input type="text"  id="editvalue2" class="form-control" placeholder="Enter Main Test Name" name="maintestname" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Main Test Name">
                  </div>
                </div>
            </div>

        </div>
          <div class="modal-footer">
          <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-outline-primary">Save changes</button>
          </div>
        </form>
        </div>
        </div>
      </div>
      <!-- End Modal Edit -->
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
          <p>This action will remove entry from Main Test Master.</p>
          </div>
          <div class="modal-footer">
          <form action="<?php echo base_url('master/delete_mainTest');?>" method="post">
            <input type="hidden" name="main_test_id" id="delete" value="">
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
