<div class="content">
<div class="card">
  <div class="card-header">
    <h4 class="card-title" id="basic-layout-tooltip">Work Order Report</h4>
    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
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
          <div class="col-lg-4">
            <div class="form-group">
              <label for="issueinput1">Challan No.</label>
              <input type="text" id="issueinput1" class="form-control" placeholder="Challan No." name="challanno" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Challan No">
            </div>
          </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label for="issueinput3">From :</label>
                <input type="date" id="issueinput3" class="form-control" name="fromdate" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="From Date">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="issueinput3">To:</label>
                <input type="date" id="issueinput3" class="form-control" name="todate" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="To Date">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="issueinput5">Invoice Create</label>
                <select id="issueinput5" name="nablornot" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Select NABL/Non NABL">
                  <option value="all">All</option>
                  <option value="no">No</option>
                  <option value="yes">Yes</option>
                </select>
              </div>
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
    </form>
</div>
</div>
</div>
