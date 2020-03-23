<div class="content">
<div class="card">
  <div class="card-header">
    <h4 class="card-title" id="basic-layout-tooltip">Renewal Master</h4>
    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
  </div>
  <div style="padding:30px;">
<a href="<?php echo base_url('customer/createnewcustomer');?>" style="color:white">
    <button class="btn btn-primary">
      <i class="icon-search4"></i> Create New Notification
    </button>
    </a>
  </div>
  <div style="padding:1em">
    <form class="form" method="POST">
      <div class="form-body">
        <div class="row">
          <div class="col-md-4">
           <div class="form-group">
             <label for="issueinput5">Product Name</label>
             <select id="issueinput5" name="productname" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Product name">
               <option>Select Product</option>
               <?php foreach($cities as $c):?>
                 <option value="<?php echo $c->record;?>"><?php echo $c->record;?></option>
               <?php endforeach;?>
             </select>
           </div>
         </div>
           <div class="col-md-4">
            <div class="form-group">
              <label for="issueinput5">Notification Type</label>
              <select id="issueinput5" name="notificationtype" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Notification Type">
                <option>Select Notification Type</option>
                <?php foreach($cities as $c):?>
                  <option value="<?php echo $c->record;?>"><?php echo $c->record;?></option>
                <?php endforeach;?>
              </select>
            </div>
          </div>
          <div style="padding-top:25px;">
            <button type="submit" class="btn btn-primary">
              <i class="icon-search4"></i> Search
            </button>
             <button type="reset" class="btn btn-warning">
              <i class="icon-cross2"></i> Reset
            </button>
          </div>
          </div>
      </div>
    </form>
    <div class="table-responsive">
      <table class="table mb-0">
          <thead class="thead-inverse">
              <tr>
                  <th>Sr No.</th>
                  <th>Product</th>
                  <th>Starting Date</th>
                  <th>Notification Type</th>
                  <th>Notification Duration</th>
                  <th>Remark</th>
                  <th>Status</th>
                  <th>Edit</th>
                  <th>Delete</th>
              </tr>
          </thead>
          <tbody>
            <?php
            $count=1;
            foreach($row as $r):
              ?>
              <tr>
                  <th scope="row"><?php echo $count++;?></th>
                  <td><?php echo $r->customer_name; ?></td>
                  <td><?php echo $r->customer_reg_date; ?></td>
                  <td><?php echo $r->customer_email_id; ?></td>
                  <td><?php echo $r->customer_phone_number; ?></td>
                  <td>
                    <a href="<?php echo base_url('customer/edit_customer/'.$r->customer_id)?>">
                    <button type="button" class="btn btn-outline-primary" value="<?php echo $r->customer_id;?>" onclick="delet(this.value)" data-toggle="modal" data-target="#editModal">
  										<i class="icon-pencil2"></i>
  									</button>
                    </a>
                  </td>
                  <td>
                    <button type="button" class="btn btn-outline-danger" value="<?php echo $r->customer_id;?>" onclick="delet(this.value)" data-toggle="modal" data-target="#deleteModal">
  										<i class="icon-bin"></i>
  									</button>
                  </td>
              </tr>
            <?php endforeach; ?>
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
          <p>This action will remove entry from Customer Master.</p>
          </div>
          <div class="modal-footer">
          <form action="<?php echo base_url('customer/customer_delete');?>" method="post">
            <input type="hidden" name="customer_id" id="delete" value="">
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
</div>
