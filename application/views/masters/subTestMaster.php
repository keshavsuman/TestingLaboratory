<div class="content">
<div class="card">
  <div class="card-header">
    <h4 class="card-title" id="basic-layout-tooltip">Sub Test Master</h4>
    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
  </div>
  <div class="card-body collapse in">
    <div class="card-block">
      <div class="card-text">
        <p></p>
      </div>
      <form class="form" method="POST" action="<?php echo base_url('master/add_subTestMaster');?>">
        <div class="form-body">
          <div class="row">
            <div class="col-lg-4">
              <div class="form-group">
              <label for="issueinput7">Main Test Name</label>
              <select id="issueinput7" name="main_test_id" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Main Test Name">
                <option value="0">Select Main Test</option>
                <?php foreach($maintest as $mt):?>
                  <option value="<?php echo $mt->main_test_id;?>"><?php echo $mt->main_test_name;?></option>
                <?php endforeach;?>
              </select>
            </div>
          </div>
            <div class="col-lg-4">
              <div class="form-group">
                <label for="issueinput1">Sub Test Name </label>
                <input type="text" id="issueinput1" class="form-control" placeholder="Enter Sub Test Name" name="subtest" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Sub Test Name">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="issueinput7">Test Form</label>
              <select id="issueinput7" name="testform" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Test From">
                <option value="0">Select Test Form</option>
                <?php foreach($testform as $tf):?>
                  <option value="<?php echo $tf->main_test_id;?>"><?php echo $tf->main_test_name;?></option>
                <?php endforeach;?>
              </select>
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
                  <th>Main Test Name</th>
                  <th>Sub Test Name</th>
                  <th>Test Form </th>
                  <th>Edit</th>
                  <th>Delete</th>
              </tr>
          </thead>
          <tbody>
            <?php $count=1;
            foreach($subtest as $st):
            ?>
              <tr>
                  <th scope="row"><?php echo $count++;?></th>
                  <td><?php echo $st->sub_test_name?></td>
                  <td><?php echo $st->sub_test_name?></td>
                  <td>
                    <button type="button" class="btn btn-outline-primary" id="edit-button" value="<?php echo $st->sub_test_id;?>" onclick="edit(this.value)" data-toggle="modal" data-target="#editModal">
                      <i class="icon-pencil2"></i>
                    </button>
                  </td>
                  <td>
                    <button type="button" class="btn btn-outline-danger" value="<?php echo $st->sub_test_id;?>" onclick="delet(this.value)" data-toggle="modal" data-target="#deleteModal">
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
          <h4 class="modal-title" id="myModalLabel2"><i class="icon-pencil2"></i> Edit Sub Test Master Entry</h4>
          </div>
          <div class="modal-body">
          <h5>Edit Enteries From Sub Test Master</h5>
          <form class="form" action="<?php echo base_url('master/delete_subTest'); ?>" method="post">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="issueinput1">Sub Test</label>
                <input type="hidden" id="edit" name="sub_test_id" value="">
                <input type="text"  class="form-control" placeholder="Enter Sub Test Name" name="subtestname" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Sub Test Master">
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
          <p>This action will remove entry from Sub Test Master.</p>
          </div>
          <div class="modal-footer">
          <form action="<?php echo base_url('master/delete_subTestMaster');?>" method="post">
            <input type="hidden" name="sub_test_id" id="delete" value="">
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
