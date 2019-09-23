</div>
      <div class="col-md-12" style="background-color: #222328;padding: 15px;">
          <div class="col-md-4">
            <div class="col-md-12" style="color: #0982b1;font-family: FF DIN Bold;margin-top: 30px">REVIEW</div>
            <?php $i = 1; foreach($posts as $post): ?>
            <div class="col-md-12 list-footer">
              <a href="<?=  base_url()?>index.php/index/postingan/<?=$post['post_id']?>" style="color:white;">☻ <?=$post['post_title'];?></a>
            </div>
            <?php $i++; endforeach; ?>
          </div>
          <div class="col-md-4">
            <div class="col-md-12" style="color: #0982b1;font-family: FF DIN Bold;margin-top: 30px">CONTACT US</div>
            <div class="col-md-12 list-footer">
              <p style="color:white;">(0338) 4590147 - Office</p>
            </div>
            <div class="col-md-12 list-footer">
              <p style="color:white;">082257000092 - WhatsApp</p>
            </div>
            <div class="col-md-12 list-footer">
              <p style="color:white;">082143967878</p>
            </div>
          </div>
          <style type="text/css">
            table, th, td {
              border: 1px solid white;
            }
          </style>
          <div class="col-md-4">
            <div class="col-md-12" style="color: #0982b1;font-family: FF DIN Bold;margin-top: 30px">LEGALITAS PERUSAHAAN</div>
            <div class="col-md-12 quarter" style="font-size: 13px;font-family: FF DIN Reluglar;color: white;">
              <table>
                <tbody>
                  <tr>
                    <td>SIUP</td>
                    <td>: 503 / 726 / 431.405.2 /2016</td>
                  </tr>
                  <tr>
                    <td>TDP</td>
                    <td>: 132417900110</td>
                  </tr>
                  <tr>
                    <td>TDUP</td>
                    <td>: 503 / 05 / 431.405.2 /2016</td>
                  </tr>
                  <tr>
                    <td>ALAMAT</td>
                    <td>: Jl. Panji Anom No.6 Mimbaan, Situbondo 68332 - Jawa Timur</td>
                  </tr>
                </tbody>
              </table>
              <p>&nbsp;</p>
            </div>
          </div>
          <div class="row">
          <div class="col-md-12">
            <p style="text-align: center;color: #d4e1dd;">&copy; <?php echo date("Y"); ?> SakuraLink Tour & Travel Organizer</p>
          </div>
        </div>
        </div>
</body>
</html>