<div class="col-md-12" style="padding: 15px;">
  <h1 style="color: #d74871;font-size: 27px;font-family: FF DIN Bold;margin-top: 10px;background-color: white;display: inline;padding: 10px;border-radius: 5px 5px 0px 0px;box-shadow: 10px 10px 10px -10px rgba(0,0,0,0.75);">TENTANG KAMI</h1>
  <div class="col-md-12" style="background-color: white;border-radius: 0px 5px 5px 5px;padding: 15px;box-shadow: 10px 10px 10px -10px rgba(0,0,0,0.75);">
    <h4 style="color: black;text-align: justify;font-size: 13px;font-family: FF DIN Reluglar;color: #636363;text-align: center;">
      Sakura Link Tour & Travel Organizer merupakan sebuah biro perjalanan wisata di bawah naungan PT. Prima Bagus Jaya yang berkantor pusat di Situbondo, Jawa Timur.
    </h4>
    <h4 style="font-family: FF DIN Bold;font-size: 20px;color: black;text-align: center;">PROFIL KAMI adalah sebagai berikut:</h4>
    <div class="col-md-12">
      <div class="col-md-6" style="color: black;text-align:right;font-size: 13px;font-family: FF DIN Reluglar;color: #636363;">
        <span>
          <center>
            <img src="https://scontent-sin6-2.cdninstagram.com/vp/f320cabb9661b52047767939a5a28d73/5DBCB26F/t51.2885-15/e35/47431847_1945049112469639_1074406097698976256_n.jpg?_nc_ht=scontent-sin6-2.cdninstagram.com" style="width: 100px;border-radius: 50px;height: 100px;border: 3px solid cadetblue;">
          </center>
          <center>
            <p style="font-family: FF DIN Bold;">Yulia Siti Madriyah</p><p style="font-family: FF DIN Reluglar;">(Presdir & CEO PT. Prima Bagus Jaya)</p>
          </center>
        </span>
        <h6 style="text-align: justify;">Pariwisata merupakan sektor ekonomi paling penting di indonesia. Tahun 2016 jumlah wisatawan mancanegara yang datang ke indonesia sebesar 11.525.963 juta lebih.</h6>
        <h6 style="font-style: italic;font-weight: bold;text-align: center;">"Ayo jangan sia-siakan kekayaan alam indonesia"</h6>
      </div>
      <div class="col-md-6" style="color: black;text-align:right;font-size: 13px;font-family: FF DIN Reluglar;color: #636363;">
        <span>
          <center>
            <img src="https://scontent-sin6-2.cdninstagram.com/vp/bf4ba88ce36f574322224ec46915ec17/5DA2D1ED/t51.2885-15/sh0.08/e35/c135.0.810.810a/s640x640/25006365_148153839241009_240189637937594368_n.jpg?_nc_ht=scontent-sin6-2.cdninstagram.com" style="width: 100px;border-radius: 50px;height: 100px;border: 3px solid cadetblue;">
          </center>
          <center>
            <p style="font-family: FF DIN Bold;">H. Aulia Bagus Wibowo, S.E</p>
            <p style="font-family: FF DIN Reluglar;">(Manager Sakura Link & Tour Travel Organizer)</p>
          </center>
        </span>
        <h6 style="text-align: justify;">Kami hadir siap melayani semua keinginan anda. Dengan tenaga professional kami siap mendampingi piknik anda dengan sepenuh hati</h6>
      </div>
    </div>
    <h4 style="font-family: FF DIN Bold;font-size: 20px;color: black;text-align: center;">Team of SakuraLink</h4>
    <h4 style="color: black;text-align: justify;font-size: 13px;font-family: FF DIN Reluglar;color: #636363;text-align: center;">
      Kami pastikan perjalanan anda akan senantiasa menyenangkan dan penuh keceriaan.
    </h4>
    
    <?php $this->load->model('user'); ?>
    <div class="row">
      <center>
        <div style="display: flex;width: 50%;">
          <?php $i = 1; foreach($users as $user): ?>
          <span style="padding-right: 30px;">
            <img src="<?php echo $user->email ?>" style="width: 100px;border-radius: 50px;height: 100px;border: 3px solid cadetblue;">
            <center>
              <p style="font-family: FF DIN Bold;"><?php echo $user->firstname ?></p>
              <p style="font-family: FF DIN Reluglar;">(<?php echo $user->lastname ?>)</p>
            </center>
          </span>
          <?php $i++; endforeach; ?>
        </div>
      </center>
    </div>
  </div>
</div>