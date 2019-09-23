<div class="col-sm-10 col-md-11 main">
  <div class="row" >
    <div class="col-sm-10 col-md-10" style="padding-left:0px;">
      <h1 class="page-header">Team of Sakura Link</h1>
    </div>
    <div class="col-sm-2 col-md-2">
      <a href="<?php echo base_url('index.php/admin/members/add_member'); ?>"><button type="button" class="btn btn-primary top_button"><span class="icon-plus-2"></span>Tambah Orang</button></a>
    </div>
  </div>
  <div class="row">
    <?php
    if ($this->session->flashdata('message') != '') echo '<div class="alert alert-success" role="alert">' . $this->session->flashdata('message') . '</div>';
    ?>
  </div>
  <div class="row">
    <div class="table-responsive">
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th style="width: 10px">#</th>
            <th>Nama</th>
            <th>Posisi</th>
            <th><?php echo lang('Options');?></th>
          </tr>
        </thead>
        <tbody>
          <?php
          // $i=1;
          if ($this->pagination->per_page > $this->pagination->total_rows) $i =1 ;
          else $i = 1 + ($this->pagination->cur_page-1)*$this->pagination->per_page;
          foreach($users as $user):
            ?>
            <tr>
              <td><?php echo $i ?></td>
              <td><?php echo $user->firstname ?></td>
              <td><?php echo $user->lastname ?></td>
              <td style="text-align:center">
                <div class="btn-group" role="group">
                  <a href="<?php echo base_url('index.php/admin/members/edit_member/'.$user->id); ?>" class="btn btn-default btn-xs"><span class="icon-pencil" style="color:green"></span> <?php echo lang('Edit'); ?></a>
                  <a href="<?php echo base_url('index.php/admin/members/delete_member/'.$user->id); ?>" onclick="return confirm('Are you sure you want to delete this member?')" class="btn btn-default btn-xs"><span class="icon-cancel-2" style="color:red"></span> <?php echo lang('Delete'); ?></a>
                </div>
              </td>
            </tr>
            <?php $i++; endforeach; ?>
          </tbody>
        </table>
      </div>
      <ul class="pagination"><?php echo $links ?></ul>
    </div>
  </div>
