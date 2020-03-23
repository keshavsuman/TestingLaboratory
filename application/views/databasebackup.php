<div class="content">
<div class="card">
  <div class="card-header">
    <h4 class="card-title" id="basic-layout-tooltip">DataBase Backup</h4>
    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
  </div>
  <div class="card-body collapse in">
    <div class="card-block">
      <div class="card-text">
        <p>Download Database Backup File in Selected Format.</p>
      </div>
      <form  action="<?php echo base_url('home/downloadDB');?>" method="post">
      <div class="row">
        <div class="col-lg-4">
          <div class="form-group">
          <select id="issueinput7" name="backuptype" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Element type">
            <option value="sql">SQL</option>
            <option value="zip">ZIP</option>
            <option value="gz">GZ</option>
          </select>
        </div>
      </div>
        <button type="submit" class="btn btn-primary">
          <i class="icon-database"></i> Save DataBase Backup
        </button>
      </div>
    </form>

          </div>
        </div>
    </div>
  </div>
