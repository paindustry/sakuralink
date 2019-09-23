<div class="col-md-12" style="padding: 15px;">
  <h1 style="background-color:white;color: #d74871;font-size: 27px;font-family: FF DIN Bold;margin-top: 10px;display: inline;
  padding: 10px;
  border-radius: 5px 5px 0px 0px;box-shadow: 10px 10px 10px -10px rgba(0,0,0,0.75);">PAKET WISATA</h1>
  <div class="col-md-12" style="background-color: white;border-radius: 5px;box-shadow: 10px 10px 10px -10px rgba(0,0,0,0.75);padding: 15px;">
    <h4 style="color: black;text-align: justify;font-size: 13px;font-family: FF DIN Reluglar;color: #636363;">
    Kami menawarkan beberapa tempat wisata yang menarik baik dalam maupun luar negeri dengan harga yang dapat disesuaikan sesuai kebutuhan anda</h4>
    <div class="row" style="width:100%;padding-left: 15px;">
      <?php $this->load->model('tour'); ?>
      <?php $i = 1; foreach($tours as $tour): ?>
      <div class="col-md-4" style="margin-bottom: 10px;background-image: url(https://www.coxandkingsusa.com/resources/images/countries/indonesia.jpg);background-size: 100% 100%;border: 10px solid #fff;;padding-right: 0px;padding-left: 0px;">
        <div class="col-md-6 quarter" style="color: white;background-color: #1da9eaad;">
          <h4 style="font-family: FF DIN Bold;font-size: 12px;padding: 15px 5px;margin: 0px;"><?php echo $tour->from ?></h4>
        </div>
        <div class="col-md-6" style="background-color: #ffffffd1;">
          <div class="col-md-12">
            <h6 style="margin-top: 0px;margin-bottom: 5px;font-family: FF DIN Reluglar;background-color: red;display: initial;padding: 0px 5px 0px 5px;color: white;">mulai dari</h6>
          </div>
          <div class="col-md-12">
            <h6 style="margin-top: 0px;margin-bottom: 5px;font-family: FF DIN Reluglar;font-size: 10px;"> Rp. <?php echo strtoupper($tour->start_price) ?> / pax</h6>
          </div>
        </div>
        <div class="col-md-12" style="text-align: center;padding-right: 0px;padding-left: 0px;">
          <h4 style="font-family: FF DIN Reluglar;background-color: #ffffffb5;margin-bottom: 0px;margin-top: 50px;padding: 5px;font-size: 10px;"><?php echo $tour->to ?></h4>
        </div>
      </div>
      <?php $i++; endforeach; ?>
    </div>
  </div>
</div>