<div class="content">
<div class="card">
  <div class="card-header">
    <h4 class="card-title" id="basic-layout-tooltip">Working Notification</h4>
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
  <div style="padding:1em">
    <form class="form" method="POST">
      <div class="form-body">
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label for="issueinput5">Employee Name</label>
              <select id="issueinput5" name="employeename" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Employee Name">
                <option value="#">Select Employee Name</option>
                <option value="medium">Medium</option>
                <option value="high">High</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="issueinput3">Date :</label>
              <input type="date" id="issueinput3" class="form-control" name="date" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Date">
            </div>
          </div>
          </div>
          <div class="row">
            <div class="col-lg-8">
              <div class="form-group">
                <label for="issueinput1">Note</label>
                <input type="text" id="issueinput1" class="form-control" placeholder="Note" name="note" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Note">
              </div>
            </div>
            <div class="col-lg-8">
              <div class="form-group">
                <label for="issueinput1">Status</label>
                <input type="text" id="issueinput1" class="form-control" placeholder="Status" name="challanno" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Status">
              </div>
            </div>
        </div>
        <div style="padding-top:25px;">
          <button type="submit" class="btn btn-primary">
            <i class="icon-search4"></i> Submit
          </button>
          <button type="reset" class="btn btn-warning">
            <i class="icon-cross2"></i> Reset
          </button>
        </div>
      </div>
    </form>
</div>
<div style="padding:1em">
  <div class="table-responsive">
    <table class="table mb-0">
        <thead class="thead-inverse">
            <tr>
                <th>Sr No.</th>
                <th>Employee Name</th>
                <th>Notification Date</th>
                <th>Notes</th>
                <th>Remark</th>
                <th>Edit</th>
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
</div>
