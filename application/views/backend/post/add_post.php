<div class="col-sm-10 col-md-11 main">
  <div class="row" >
    <div class="col-sm-10 col-md-10" style="padding-left:0px;">
      <h1 style="font-family: FF DIN Bold;">Buat Postingan</h1>
      <form action="<?=  base_url()?>index.php/admin/post/new_post/" method="post">
        <div class="form_settings">
          <p style="display: grid;font-family: FF DIN Bold;"><span>Judul</span><input class="" type="text" name="post_title" value="" placeholder="Judul Postingan" /></p>
          <p style="display: grid;font-family: FF DIN Bold;"><span>Isi</span>
            <textarea class="txteditor" rows="10" name="konten" placeholder="Isi Postingan"></textarea></p>
            <button type="submit" class="btn btn-primary">Submit</button> 
          </div>
        </form>
      </div>
    </div>
  </div>

    <script src="<?php echo base_url().'js/line_control_editor/editor.js' ?>"></script>

  <script type="text/javascript">
$(document).ready(function(){
    $("button:submit").click(function(){
        $('.txteditor').text($('.txteditor').Editor("getText"));
    });

    var editor = $(".txteditor").Editor();
    $('.txteditor').Editor("setText", "");
})
    
</script>