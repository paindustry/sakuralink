
        <div class="col-sm-10 col-md-11 main">
          <div class="row" >
            <div class="col-sm-8 col-md-10" style="padding-left:0px;">
                <h1 class="page-header">Paket Wisata</h1>
            </div>
            <div class="col-sm-8 col-md-2  " >
               <a href="<?php echo base_url('index.php/admin/tours/add_tour'); ?>" class="btn btn-primary top_button"><span class="icon-plus-2"></span> Tambah Paket </a>
            </div>

          </div>

          <div class="row">
              <?php
                if ($this->session->flashdata('message') != '') echo '<div class="alert alert-success" role="alert">' . $this->session->flashdata('message') . '</div>';
              ?>
          </div>
          <div class="row">
            <div class="table-responsive">
              <table class="table table-bordered table-striped ">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Tujuan</th>
                    <th>Wisata</th>
                    <th>Harga Paket</th>
                    <th>Tanggal Ditambahkan</th>
                    <!-- <th>Status</th> -->
                    <th width="22%">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $this->load->model('tour'); ?>

                  <?php $i = 1; foreach($tours as $tour): ?>
                      <tr>
                      <td><?php echo $i ?></td>
                      <td><?php echo $tour->from ?></td>
                      <td><?php echo $tour->to ?></td>

                      <td><?php echo strtoupper($tour->start_price) ?></td>
                      <td><?php echo date('d.m.Y', strtotime($tour->date_created))  ?></td>
                      <!-- <td style="text-align:center"><?php tour::status($tour->from_start_time) ?></td> -->
                      <td style="text-align:center" width="20%">
                        <div class="btn-group" role="group">
                          <a href="<?php echo base_url('index.php/admin/tours/edit_tour/'.$tour->tour_id); ?>" class="btn btn-default btn-xs"><span class="icon-pencil" style="color:green"></span> <?php echo lang('Edit') ?></a>
                          <a href="<?php echo base_url('index.php/admin/tours/delete_tour/'.$tour->tour_id); ?>" class="btn btn-default btn-xs" onclick="return confirm('Yakin Mau Di Hapus')"><span class="icon-cancel-2" style="color:red"></span> <?php echo lang('Delete') ?></a>
                        </div>
                      </td>
                    </tr>
                  <?php $i++; endforeach; ?>

                </tbody>
              </table>
            </div>
          </div>
         </div>
