<div class="content">
<div class="card">
  <div class="card-header">
    <h4 class="card-title" id="basic-layout-tooltip">Sample Registration Entry</h4>
    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
  </div>
  <div style="padding:30px;">
    <a href="<?php echo base_url('customer/addnewsample');?>">
      <button class="btn btn-primary">
      <i class="icon-search4"></i>  Add New Sample Registration
    </button></a>
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
              <label for="issueinput5">Sample Registration No (DC No.)</label>
              <select id="issueinput5" name="sampleregistrationno" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Sample Registration No (DC No.)">
                <option value="#">Sample Registration No (DC No.)</option>
                <option value="medium">Medium</option>
                <option value="high">High</option>
              </select>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <label for="issueinput1">Sample Reg.No/ID</label>
              <input type="text" id="issueinput1" class="form-control" placeholder="Sample Reg.No/ID" name="mobilenumber" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Sample Reg.No/ID">
            </div>
          </div>
          </div>
          <div class="row">
            <div class="col-lg-3">
              <div class="form-group">
                <label for="issueinput1">Challan No.</label>
                <input type="text" id="issueinput1" class="form-control" placeholder="Challan No." name="challanno" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Challan No">
              </div>
            </div>
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
                <label for="issueinput5">Select NABL/Non NABL</label>
                <select id="issueinput5" name="nablornot" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Select NABL/Non NABL">
                  <option value="#">Select NABL/Non NABL</option>
                  <option value="medium">Medium</option>
                  <option value="high">High</option>
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
          <button type="reset" class="btn btn-warning">
            <i class="icon-printer"></i> Print
          </button>
        </div>
      </div>
    </form>
    <div style="padding:1em;">
    <div class="table-responsive">
      <table class="table mb-0">
          <thead class="thead-inverse">
              <tr>
                  <th>Sample No.</th>
                  <th>Sample Reg. No.</th>
                  <th>Customer Name</th>
                  <th>Date</th>
                  <th>Delivery Date</th>
                  <th>D Challan No.</th>
                  <th>Challan Date</th>
                  <th>No of Sample</th>
                  <th>Name for Analysis Print</th>
                  <th>Remark</th>
                  <th>Edit</th>
                  <th>Delete</th>
                  <th>Print work order</th>
              </tr>
          </thead>
          <tbody>
              <!-- <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
              </tr> -->
          </tbody>
        </table>
      </div>
</div>
</div>
</div>
</div>
