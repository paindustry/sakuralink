<div class="col-sm-10 col-md-11 main">
  <div class="row" >
    <div class="col-sm-10 col-md-10" style="padding-left:0px;">
            <h1 class="page-header">Postingan</h1>
        </div>
        <div class="col-sm-2 col-md-2">
         <a href="<?php echo site_url('admin/post/tambah')?>"><button type="button" class="btn btn-primary top_button"><span class="icon-plus-2"></span>Buat Postingan</button></a>
     </div>
 </div>
 <div class="row">
    <?php echo $this->session->flashdata('message');?>
</div>
<div class="row">
  <div class="table-responsive">
    <table class="table table-bordered table-striped">
        <tr>
            <th style="width: 10px">#</th>
            <th>Judul</th>
            <th>Isi</th>
            <th>Tanggal</th>
            <th style="width: 100px">Action</th>
        </tr>
        <?php $i = 1; foreach($posts as $post): ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $post['post_title']?></td>
            <td><?=  substr(strip_tags($post['konten']), 0, 200).'...';?></td>
            <td><?php echo $post['date_added']?></td>
            <td style="text-align:center" width="20%">
                <div class="btn-group" role="group">
                <a href="<?php echo site_url('admin/post/ubah/'.$post['post_id'])?>" class="btn btn-default btn-xs"><span class="icon-pencil" style="color:green"></span>edit</a>
                <a href="<?php echo site_url('admin/post/hapus/'.$post['post_id'])?>" onclick="return confirm('Are you sure?')" class="btn btn-default btn-xs"><span class="icon-cancel-2" style="color:red"></span>delete</a>
            </div>
            </td>
        </tr>
        <?php $i++; endforeach; ?>
    </table>
</div><!-- /.box-body -->
<!--             <div class="box-footer clearfix">
                <?php echo $pagination ?>
            </div> -->
        </div><!-- /.box -->
    </div>
</div>