<div class="col-md-12" style="padding: 0px;width: 100%;">
  <div class="col-md-7" style="padding: 15px;">
    <h1 style="color: #d74871;font-size: 27px;font-family: FF DIN Bold;margin-top: 10px;background-color: white;display: inline;padding: 10px;border-radius: 5px 5px 0px 0px;box-shadow: 10px 10px 10px -10px rgba(0,0,0,0.75);">
      <a href="<?php echo base_url(); ?>index.php/review">REVIEW</a>
    </h1>
    <div class="col-md-12" style="background-color: white;border-radius: 0px 5px 5px 5px;padding: 15px;box-shadow: 10px 10px 10px -10px rgba(0,0,0,0.75);">
      <?php $i = 1; foreach($posts as $post): ?>
      <div style="padding: 10px;margin-bottom: 20px;background-color: #f5f5f5;border-radius: 5px;">
        <h2 style="margin-top: 0px;">
          <a style="color: black;font-family: FF DIN Bold;font-size: 20px;padding-top: 20px;padding-bottom: 10px;" href="<?=  base_url()?>index.php/index/postingan/<?=$post['post_id']?>"><?=$post['post_title'];?></a>
        </h2>
        <p style="font-family: FF DIN Reluglar;font-size: 13px;color: gray;"><?=  substr(strip_tags($post['konten']), 0, 200).'...';?></p>
        <p>
          <a href="<?=  base_url()?>index.php/index/postingan/<?=$post['post_id']?>" style="background-color: #d74871;padding: 6px 30px;border-radius: 50px;color: white;font-family: FF DIN Bold;font-size: 12px;">Selengkapnya...</a>
        </p>
      </div>
      <?php $i++; endforeach; ?>
      <?=$pages?>
    </div>
  </div>

  <div class="col-md-5" style="padding: 15px;">
    <h1 style="background-color:white;color: #d74871;font-size: 27px;font-family: FF DIN Bold;margin-top: 10px;display: inline;padding: 10px;border-radius: 5px 5px 0px 0px;box-shadow: 10px 10px 10px -10px rgba(0,0,0,0.75);">PELAYANAN</h1>
    <div class="col-md-12" style="background-color: white;padding: 15px 0px 15px 0px;border-radius: 0px 5px 5px 5px;box-shadow: 10px 10px 10px -10px rgba(0,0,0,0.75);">
      <p style="font-weight:bold;color: #958088;text-align:center;font-size: 13px;">Kami Juga Melayani Berbagai Keperluan Untuk:</p>
      <div class="col-md-12" style="padding: 15px;">
        <span class="baris">
          <a class="ikon">
            <i class="fa fa-ticket fa-2x"></i>
          </a>
          <p class="texkon">TIKET PESAWAT/KERETA API</p>
        </span>
        <span class="baris">
          <a class="ikon">
            <i class="fa fa-hotel fa-2x"></i>
          </a>
          <p class="texkon">RESERVASI HOTEL</p>
        </span>
        <span class="baris">
          <a class="ikon">
            <i class="fa fa-map-o fa-2x"></i>
          </a>
          <p class="texkon">PAKET WISATA DOMESTIK & INTERNASIONAL</p>
        </span>
        <span class="baris">
          <a class="ikon">
            <i class="fa fa-soccer-ball-o fa-2x"></i>
          </a>
          <p class="texkon">IN BOUND & OUTBOUND (MICE)</p>
        </span>
        <span class="baris">
          <a class="ikon">
            <i class="fa fa-bus fa-2x"></i>
          </a>
          <p class="texkon">PENYEWAAN BUS PARIWISATA</p>
        </span>
      </div>
    </div>
  </div>


  <div class="col-md-5" style="padding: 15px;">
    <h1 style="background-color:white;color: #d74871;font-size: 27px;font-family: FF DIN Bold;margin-top: 10px;display: inline;padding: 10px;border-radius: 5px 5px 0px 0px;box-shadow: 10px 10px 10px -10px rgba(0,0,0,0.75);">
      <a href="<?php echo base_url(); ?>index.php/packet">PAKET WISATA</a>
    </h1>
    <div class="col-md-12" style="background-color: white;border-radius: 5px;box-shadow: 10px 10px 10px -10px rgba(0,0,0,0.75);padding: 15px;">
      <h4 style="color: black;text-align: justify;font-size: 13px;font-family: FF DIN Reluglar;color: #636363;">Kami menawarkan beberapa tempat wisata yang menarik baik dalam maupun luar negeri dengan harga yang dapat disesuaikan sesuai kebutuhan anda
      </h4>
      <div style="height: 207px;overflow:auto;">
        <table class="table table-bordered table-striped">
          <tbody>
            <div class="row" style="padding: 15px;width: 100%;">
              <?php $this->load->model('tour'); ?>
              <?php $i = 1; foreach($tours as $tour): ?>
              <div class="col-md-12" style="margin-bottom: 10px;background-image: url(https://www.coxandkingsusa.com/resources/images/countries/indonesia.jpg);background-size: 100% 100%;border: 1px solid gray;padding-right: 0px;padding-left: 0px;">
                <div class="col-md-6 quarter" style="color: white;background-color: #1da9eaad;">
                  <h4 style="font-family: FF DIN Bold;font-size: 12px;margin: 0px;padding: 15px;"><?php echo $tour->from ?></h4>
                </div>
                <div class="col-md-6" style="background-color: #ffffffd1;">
                  <div class="col-md-12">
                    <h6 style="margin-top: 0px;margin-bottom: 5px;font-family: FF DIN Reluglar;background-color: red;display: initial;font-size: 10px;padding: 0px 5px 0px 5px;color: white;">mulai dari</h6>
                  </div>
                  <div class="col-md-12">
                    <h6 style="margin-top: 0px;margin-bottom: 5px;font-family: FF DIN Reluglar;font-size: 10px;"> Rp. <?php echo strtoupper($tour->start_price) ?> / pax</h6>
                  </div>
                </div>
                <div class="col-md-12" style="text-align: center;padding-right: 0px;padding-left: 0px;">
                  <h4 style="font-family: FF DIN Reluglar;background-color: #ffffffde;padding: 10px;font-size: 10px;margin-bottom: 0px;margin-top: 50px;"><?php echo $tour->to ?></h4>
                </div>
              </div>
              <?php $i++; endforeach; ?>
            </div>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>