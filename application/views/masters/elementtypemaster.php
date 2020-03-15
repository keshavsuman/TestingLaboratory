<div class="content">
<div class="card">
  <div class="card-header">
    <h4 class="card-title" id="basic-layout-tooltip">Element Type Master</h4>
    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
  </div>
  <div class="card-body collapse in">
    <div class="card-block">
      <div class="card-text">
        <p></p>
      </div>
      <form class="form" method="POST" action="<?php echo base_url('master/add_elementTypeMaster');?>">
        <div class="form-body">
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="issueinput1">Element Type</label>
                <input type="text" id="issueinput1" class="form-control" placeholder="Enter Element Type" name="elementtype" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title=" Element Type">
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
                  <th>Element Type</th>
                  <th>Edit</th>
                  <th>Delete</th>
              </tr>
          </thead>
          <tbody>
            <?php $count=1;
            foreach($elementtype as $et):
            ?>
              <tr>
                  <th scope="row"><?php echo $count++;?></th>
                  <td><?php echo $et->element_type?></td>
                  <td>
                    <button type="button" class="btn btn-outline-primary" id="edit-button" value="<?php echo $et->element_type_id;?>" onclick="edit(this.value)" data-toggle="modal" data-target="#editModal">
  										<i class="icon-pencil2"></i>
  									</button>
                  </td>
                  <td>
                    <button type="button" class="btn btn-outline-danger" value="<?php echo $et->element_type_id;?>" onclick="delet(this.value)" data-toggle="modal" data-target="#deleteModal">
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
          <h4 class="modal-title" id="myModalLabel2"><i class="icon-pencil2"></i> Edit Common Master Entry</h4>
          </div>
          <div class="modal-body">
          <h5>Edit Enteries From Common Master</h5>
          <form class="form" action="<?php echo base_url('master/update_city'); ?>" method="post">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="issueinput1">City</label>
                <input type="hidden" id="edit" name="city_id" value="">
                <input type="text"  class="form-control" placeholder="Enter City" name="city" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="City">
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
          <p>This action will remove entry from Element Type Master.</p>
          </div>
          <div class="modal-footer">
          <form action="<?php echo base_url('master/delete_elementTypeMaster');?>" method="post">
            <input type="hidden" name="element_type_id" id="delete" value="">
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
