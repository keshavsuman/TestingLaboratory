<div class="content">
<div class="card">
  <div class="card-header">
    <h4 class="card-title" id="basic-layout-tooltip">Customer Report</h4>
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
      <form class="form" method="POST">
        <div class="form-body">

          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label for="issueinput5">Select Customer</label>
                <select id="issueinput5" name="customer" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Customer">
                  <option value="#">Select Customer</option>
                  <option value="medium">Medium</option>
                  <option value="high">High</option>
                </select>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="issueinput5">City</label>
                <select id="issueinput5" name="city" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="City">
                  <option value="#">Select City</option>
                  <option value="medium">Medium</option>
                  <option value="high">High</option>
                </select>
              </div>
            </div>
            <div class="col-lg-2">
              <div class="form-group">
                <label for="issueinput1">Mobile Number</label>
                <input type="number" id="issueinput1" class="form-control" placeholder="Mobile Number" name="mobilenumber" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Mobile Number">
              </div>
            </div>
            <div class="col-lg-2">
              <div class="form-group">
                <label for="issueinput1">Balance Min Amount</label>
                <input type="text" id="issueinput1" class="form-control" placeholder="Balance Min Amount" name="mobilenumber" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Balance Min Amount">
              </div>
            </div>
            <div class="col-lg-2">
              <div class="form-group">
                <label for="issueinput1">Balance Max Amount</label>
                <input type="text" id="issueinput1" class="form-control" placeholder="Balance Max Amount" name="mobilenumber" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Balance Max Amount">
              </div>
            </div>
          </div>
            <div style="padding-top:30px;">
              <button type="submit" class="btn btn-primary">
                <i class="icon-search4"></i> Search
              </button>
              <button type="reset" class="btn btn-warning">
                <i class="icon-cross2"></i> Reset
              </button>
              <button class="btn btn-warning">
                <i class="icon-printer3"></i> Print
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
                  <th>Customer Name</th>
                  <th>Address</th>
                  <th>City</th>
                  <th>Mobile No.</th>
                  <th>Email ID</th>
                  <th>Reg. Date</th>
                  <th>Add</th>
                  <th>Delete</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
              </tr>
              <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
              </tr>
              <tr>
                  <th scope="row">3</th>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
              </tr>
          </tbody>
        </table>
      </div>
</div>
</div>
