<div class="content">
<div class="card">
  <div class="card-header">
    <h4 class="card-title" id="basic-layout-tooltip">Supplier Master</h4>
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
      <form class="form" method="POST" action="<?php echo base_url('master/add_supplier');?>">
        <div class="form-body">
          <div class="row">
            <div class="col-lg-4">
              <div class="form-group">
                <label for="issueinput1">Supplier Name</label>
                <input type="text" id="issueinput1" class="form-control" placeholder="Enter Supplier Name" name="suppliername" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Enter Supplier Name">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <label for="issueinput1">Address Lane 1</label>
                <input type="text" id="issueinput1" class="form-control" placeholder="Address lane 1" name="lane1" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Address lane 1">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <label for="issueinput1">Address Lane 2</label>
                <input type="text" id="issueinput1" class="form-control" placeholder="Address lane 2" name="lane2" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Address lane 2">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="issueinput3">City</label>
                <select id="issueinput3" name="city_name" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="City">
                  <option value="0">Select City</option>
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
                  <option>Select State</option>
                  <?php foreach($state as $s):?>
                    <option value="<?php echo $s->state_name;?>"><?php echo $s->state_name;?></option>
                  <?php endforeach;?>
                </select>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <label for="issueinput1">Pincode</label>
                <input type="number" id="issueinput1" class="form-control" placeholder="Pincode" name="pincode" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Pincode">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4">
              <div class="form-group">
                <label for="issueinput1">Email Id</label>
                <input type="email" id="issueinput1" class="form-control" placeholder="Enter Email Id " name="emailid" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Email ID">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <label for="issueinput1">Contact No</label>
                <input type="number" id="issueinput1" class="form-control" placeholder="Enter Contact Number" name="contactno" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Contact Number">
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
                  <th>Supplier Name</th>
                  <th>Address</th>
                  <th>Email ID</th>
                  <th>Contact No.</th>
                  <th>Edit</th>
                  <th>Delete</th>
              </tr>
          </thead>
          <tbody>
            <?php $count=1;
            foreach($supplier as $s):
            ?>
              <tr>
                  <th scope="row"><?php echo $count++;?></th>
                  <td><?php echo $s->supplier_name;?></td>
                  <td><?php echo $s->supplier_address_id;?></td>
                  <td><?php echo $s->supplier_email_id;?></td>
                  <td><?php echo $s->supplier_mobile_no?></td>
                  <td>
                    <a href="<?php echo base_url('master/editsupplier/').$s->supplier_id;?>">
                    <button type="button" class="btn btn-outline-primary" id="edit-button" value="<?php echo $s->supplier_id;?>"  data-toggle="modal" data-target="#editModal">
  										<i class="icon-pencil2"></i>
  									</button></a>
                  </td>
                  <td>
                    <button type="button" class="btn btn-outline-danger" value="<?php echo $s->supplier_id;?>" onclick="delet(this.value)" data-toggle="modal" data-target="#deleteModal">
                      <i class="icon-bin"></i>
                    </button>
                  </td>
              </tr>
            <?php endforeach;?>
          </tbody>
        </table>
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
          <p>This action will remove entry from Supplier.</p>
          </div>
          <div class="modal-footer">
          <form action="<?php echo base_url('master/delete_supplier');?>" method="post">
            <input type="hidden" name="supplier_id" id="delete" value="">
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
