<div class="content">
<div class="card">
  <div class="card-header">
    <h4 class="card-title" id="basic-layout-tooltip">Customer Test Rate</h4>
    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
  </div>
  <div class="card-body collapse in">
    <div class="card-block">
      <div class="card-text">
        <p></p>
      </div>
      <form class="form" method="POST">
        <div class="form-body">
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="issueinput5">Select Customer</label>
                <input id="issueinput5" name="customer" list="customers" placeholder="Select Customers" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Customer">
                  <datalist id="customers">
                    <?php foreach($customer as $c):?>
                      <option value="<?php echo $c->customer_name;?>">
                    <?php endforeach;?>
                  </datalist>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
              <label for="issueinput7">Sub Test Name :</label>
              <select id="issueinput7" name="subtest_id" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Sub Test Name">
                <option value="0">Select Sub Test</option>
                <?php foreach($subtest as $st):?>
                  <option value="<?php echo $st->sub_test_id;?>"><?php echo $st->subtest_name;?></option>
                <?php endforeach;?>
              </select>
            </div>
          </div>
            </div>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
