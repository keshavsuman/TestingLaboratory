<div class="content">
<div class="card">
  <div class="card-header">
    <h4 class="card-title" id="basic-layout-tooltip">Test Method  Master</h4>
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
      <form class="form" method="POST" action="<?php echo base_url('master/add_testMethodMaster');?>">
        <div class="form-body">
          <div class="row">
            <div class="col-lg-4">
              <div class="form-group">
              <label for="issueinput7">Sub Test Name :</label>
              <select id="issueinput7" name="subtest_id" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Sub Test Name">
                <option value="0">Select Sub Test</option>
                <?php foreach($subtest as $st):?>
                  <option value="<?php echo $st->sub_test_id;?>"><?php echo $st->subtest_name;?></option>
                <?php endforeach;?>
              </select>
            </div>
          </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="issueinput1">Test Method Name </label>
                <input type="text" id="issueinput1" class="form-control" placeholder="Enter Main Test Name" name="testmethodname" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Test Method Name">
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
                  <th>Sub Test</th>
                  <th>Test Method</th>
                  <th>Edit</th>
                  <th>Delete</th>
              </tr>
          </thead>
          <tbody>
            <?php $count=1;
            foreach($testmethod as $tm):
            ?>
              <tr>
                  <th scope="row"><?php echo $count++;?></th>
                  <td><?php echo $tm->sub_test_id?></td>
                  <td id="edit<?php echo $tm->test_method_id;?>"><?php echo $tm->test_method?></td>
                  <td>
                    <button type="button" class="btn btn-outline-primary" id="edit-button" value="<?php echo $tm->test_method_id;?>" onclick="singleentryedit(this.value)" data-toggle="modal" data-target="#editModal">
                      <i class="icon-pencil2"></i>
                    </button>
                  </td>
                  <td>
                    <button type="button" class="btn btn-outline-danger" value="<?php echo $tm->test_method_id;?>" onclick="delet(this.value)" data-toggle="modal" data-target="#deleteModal">
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
          <h4 class="modal-title" id="myModalLabel2"><i class="icon-pencil2"></i> Edit Test Method Master Entry</h4>
          </div>
          <div class="modal-body">
          <h5>Edit Enteries From Test Method Master</h5>
          <form class="form" action="<?php echo base_url('master/update_testMethodMaster'); ?>" method="post">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="issueinput1">Test Method</label>
                <input type="hidden" id="edit" name="test_method_id" value="">
                <input type="text"  id="editfield" class="form-control" placeholder="Enter Test Method" name="testmethod" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Test Method">
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
          <p>This action will remove entry from Test Method Master.</p>
          </div>
          <div class="modal-footer">
          <form action="<?php echo base_url('master/delete_testMethodMaster');?>" method="post">
            <input type="hidden" name="test_method_id" id="delete" value="">
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
