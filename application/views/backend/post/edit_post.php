<div class="col-sm-10 col-md-11 main">
  <div class="row" >
    <div class="col-sm-10 col-md-10" style="padding-left:0px;">
      <h1 style="font-family: FF DIN Bold;">Edit Postingan</h1>
      <form action="<?php echo site_url('admin/post/update/'.$post['post_id'])?>" method="post">
        <input type="hidden" name="post_id" value="<?php echo $post['post_id']?>">
        <div class="form_settings">
          <script src="<?php echo base_url().'js/line_control_editor/editor.js' ?>"></script>

  <script type="text/javascript">
$(document).ready(function(){
    $("button:submit").click(function(){
        $('.txteditor').text($('.txteditor').Editor("getText"));
    });

    var editor = $(".txteditor").Editor();
    $('.txteditor').Editor("setText", <?php echo json_encode($post['konten']);?>);
})
    
</script>
          <p style="display: grid;font-family: FF DIN Bold;"><span>Judul</span><input class="" type="text" name="post_title" value="<?php echo set_value('post_title', isset($post['post_title']) ? $post['post_title'] : '') ?>" placeholder="Judul Postingan" /></p>
          <p style="display: grid;font-family: FF DIN Bold;"><span>Isi</span>
            <textarea class="txteditor" rows="10" name="konten" placeholder="Isi Postingan" value="<?php echo set_value('konten', isset($post['konten']) ? $post['konten'] : '') ?>"></textarea></p>
            <button type="submit" class="btn btn-primary">Submit</button> 
          </div>
        </form>
      </div>
    </div>
  </div>