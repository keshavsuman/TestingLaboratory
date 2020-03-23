<div class="content">
<div class="card">
  <div class="card-header">
    <h4 class="card-title" id="basic-layout-tooltip">Sample Registration Entry</h4>
    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
  </div>
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
  <div style="padding:30px;">
    <button class="btn btn-primary">
      <i class="icon-search4"></i>  Add New Sample Registration
    </button>
  </div>
  <div style="padding:1em">
    <form class="form" method="POST">
      <div class="form-body">
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label for="issueinput5">Customer Name</label>
              <select id="issueinput5" name="customername" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Customer Name">
                <option value="#">Select Customer Name</option>
                <option value="medium">Medium</option>
                <option value="high">High</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="issueinput5">Work Order No.</label>
              <select id="issueinput5" name="workorderno" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Work Order No.">
                <option value="#">All</option>
                <option value="medium">Medium</option>
                <option value="high">High</option>
              </select>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <label for="issueinput1">Challan No.</label>
              <input type="text" id="issueinput1" class="form-control" placeholder="Challan No." name="challanno" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Challan No">
            </div>
          </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="issueinput3">From Date:</label>
                <input type="date" id="issueinput3" class="form-control" name="fromdate" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="From Date">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="issueinput3">To Date:</label>
                <input type="date" id="issueinput3" class="form-control" name="todate" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="To Date">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <label for="issueinput1">T.R. No.</label>
                <input type="text" id="issueinput1" class="form-control" placeholder="T.R. No." name="trno" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="T.R. No">
              </div>
            </div>
        </div>
        <div class="row">
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
    <div style="padding:1em;">
    <div class="table-responsive">
      <table class="table mb-0">
          <thead class="thead-inverse">
              <tr>
                  <th>Work Order No.</th>
                  <th>Sample No.</th>
                  <th>Work Order Date</th>
                  <th>Customer D Challan No.</th>
                  <th>No of Sample</th>
                  <th>Customer Name</th>
                  <th>Material Name</th>
                  <th>ID No.</th>
                  <th>Heat No.</th>
                  <th>Size</th>
                  <th>View</th>
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
</div>
</div>
