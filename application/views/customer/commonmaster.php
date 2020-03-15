<div class="content">
<div class="card">
  <div class="card-header">
    <h4 class="card-title" id="basic-layout-tooltip">Common Master</h4>
    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
  </div>
  <!-- <div class="card-body collapse in">
    <div class="card-block">
      <div class="card-text">
        <p></p>
      </div>
      <form class="form" method="POST" action="<?php echo base_url('customer/commonmaster_insert');?>">
        <div class="form-body">
           <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="issueinput5">Title</label>
                <select id="issueinput5" name="title" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Customer">
                  <?php //foreach($title as $t):?>
                  <option value="<?php //echo $t->title;?>"><?php //echo $t->title;?></option>
                <?php //endforeach;?>
                </select>
              </div>
            </div>
            <div style="padding:30px;">
            <button type="submit" class="btn btn-primary">
              <i class="icon-search4"></i> Search
            </button>
          </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="issueinput1">Record</label>
                <input type="text" id="issueinput1" class="form-control" placeholder="Enter Record" name="record" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Record ">
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
  </div> -->
      <div class="table-responsive">
      <table class="table mb-0 ">
          <thead class="thead-inverse">
              <tr>
                  <th>Sr No.</th>
                  <th>Title</th>
                  <th>Record</th>
                  <th>Edit</th>
              </tr>
          </thead>
          <tbody>
            <?php
            $count=1;
            foreach($title as $t):
              ?>
              <tr>
                  <th scope="row"><?php echo $count++;?></th>
                  <td><?php echo $t->title;?></td>
                  <td><?php echo $t->record;?></td>
                  <td> <button type="button" class="btn btn-outline-primary" id="edit-button" data-toggle="modal" data-target="#editModal">
										<i class="icon-pencil2"></i>
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
          <form class="form" action="index.html" method="post">
            <input type="hidden" name="record_id" id="record_id" value="">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="issueinput6">Title</label>
                <input type="text" id="issueinput6" class="form-control" placeholder="Enter Record" name="title" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="title" readonly>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="issueinput7">Record</label>
                <input type="text" id="issueinput7" class="form-control" placeholder="Enter Record" name="record" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Record ">
              </div>
            </div>
          </form>
          </div>
          <div class="modal-footer">
          <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-outline-primary">Save changes</button>
          </div>
        </div>
        </div>
      </div>
      <!-- End Modal Edit -->
</div>
</div>
