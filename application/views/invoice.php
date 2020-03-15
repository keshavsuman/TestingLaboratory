<div class="content">
<div class="card">
  <div class="card-header">
    <h4 class="card-title" id="basic-layout-tooltip">Invoice Report</h4>
    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
    <!-- <div class="heading-elements">
      <ul class="list-inline mb-0">
        <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
        <li><a data-action="reload"><i class="icon-reload"></i></a></li>
        <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
        <li><a data-action="close"><i class="icon-cross2"></i></a></li>
      </ul>
    </div> -->
  </div>
  <div class="card-body collapse in">
    <div class="card-block">

      <div class="card-text">
        <p></p>
      </div>

      <form class="form" method="POST">
        <div class="form-body">
          <div class="row">
            <div class="col-md-5">
              <div class="form-group">
                <label for="issueinput5">Customer Name:</label>
                <select id="issueinput5" name="customername" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Customer Name:">
                  <option value="low">Low</option>
                  <option value="medium">Medium</option>
                  <option value="high">High</option>
                </select>
              </div>
            </div>

            <div class="col-md-5">
              <div class="form-group">
                <label for="issueinput5">Work Order No:</label>
                <select id="issueinput5" name="won" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Work Order No.">
                  <option value="low">Low</option>
                  <option value="medium">Medium</option>
                  <option value="high">High</option>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-5">
              <div class="form-group">
                <label for="issueinput3">From</label>
                <input type="date" id="issueinput3" class="form-control" name="datefrom" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="From">
              </div>
            </div>
            <div class="col-md-5">
              <div class="form-group">
                <label for="issueinput4">To</label>
                <input type="date" id="issueinput4" class="form-control" name="dateto" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="To">
              </div>
            </div>
          </div>

        <div class="col-lg-5">
          <div class="form-group">
            <label for="issueinput1">Invoice No:</label>
            <input type="text" id="issueinput1" class="form-control" placeholder="Invoice No." name="invoiceno" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Invoice No.">
          </div>
        </div>

          <div style="margin-top:25px;">
            <button type="button" class="btn btn-warning mr-1">
              <i class="icon-cross2"></i> Cancel
            </button>
            <button type="submit" class="btn btn-primary">
              <i class="icon-check2"></i> Save
            </button>
          </div>
        </div>


      </form>
    </div>
  </div>
</div>
<!-- <div class="container"> -->
  <div class="table-responsive">
    <table class="table mb-0">
        <thead class="thead-inverse">
            <tr>
                <th>Sr No.</th>
                <th>Invoice No.</th>
                <th>Customer Name</th>
                <th>W.O. No.</th>
                <th>Invoice Date</th>
                <th>Po No.</th>
                <th>Total Amount</th>
                <th>Net Amount</th>
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
<!-- </div> -->
</div>
