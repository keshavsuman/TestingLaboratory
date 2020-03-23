<div class="content">
<div class="card">
  <div class="card-header">
    <h4 class="card-title" id="basic-layout-tooltip">Outward Product</h4>
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
      <form class="form" method="POST" action="<?php echo base_url('home/add_outward');?>">
        <div class="form-body">
          <!-- First Row -->
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="issueinput3">Employee Name</label>
                <select id="issueinput3" name="employee_id" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Employee Name">
                  <option value="0">Select Employee</option>
                  <?php foreach($employee as $e):?>
                    <option value="<?php echo $e->employee_id;?>"><?php echo $e->employee_name;?></option>
                  <?php endforeach;?>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="issueinput3">Product Name</label>
                <select id="issueinput3" name="product_id" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Product Name">
                  <option value="0">Select Product</option>
                  <?php foreach($product as $p):?>
                    <option value="<?php echo $p->product_id;?>"><?php echo $p->product_name;?></option>
                  <?php endforeach;?>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3">
              <div class="form-group">
                <label for="issueinput1">Outward Quantity</label>
                <input type="number" id="issueinput1" class="form-control" placeholder="Inward Quantity" name="inwardquantity" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Inward Quantity ">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="issueinput3">Date</label>
                <input type="date" id="issueinput3" class="form-control" name="date" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Date">
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
