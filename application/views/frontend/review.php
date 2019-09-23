<div class="col-md-12"style="padding: 15px;">
  <h1 style="color: #d74871;font-size: 27px;font-family: FF DIN Bold;margin-top: 10px;background-color: white;display: inline;padding: 10px;border-radius: 5px 5px 0px 0px;box-shadow: 10px 10px 10px -10px rgba(0,0,0,0.75);">REVIEW</h1>
  <div class="col-md-12" style="background-color: white;border-radius: 0px 5px 5px 5px;padding: 15px;box-shadow: 10px 10px 10px -10px rgba(0,0,0,0.75);">
  	<h6><a href="<?php echo base_url(); ?>">Home</a> > Review</h6>
    <?php $i = 1; foreach($posts as $post): ?>
    <div style="background-color: #80808024;padding: 10px;margin-bottom: 20px;"><h2 style="margin-top: 0px;"><a style="color: black;font-family: FF DIN Bold;font-size: 20px;padding-top: 20px;padding-bottom: 10px;" href="<?=  base_url()?>index.php/index/postingan/<?=$post['post_id']?>"><?=$post['post_title'];?></a></h2>
      <p style="font-family: FF DIN Reluglar;font-size: 13px;color: gray;"><?=  substr(strip_tags($post['konten']), 0, 200).'...';?></p>
      <p><a href="<?=  base_url()?>index.php/index/postingan/<?=$post['post_id']?>" style="background-color: #d74871;padding: 6px 30px;border-radius: 50px;color: white;font-family: FF DIN Bold;font-size: 12px;">Selengkapnya...</a></p>
    </div>
    <?php $i++; endforeach; ?>
    <?=$pages?>
  </div>
</div>