 <div class="col-sm-10 col-md-11 main">
          <div class="row" >
            <div class="col-sm-12 col-md-12" style="padding-left:0px;">
                <h1 class="page-header"><a href="<?php echo base_url().'index.php/admin/tours' ?>"><i class="icon-arrow-left-3"></i></a> <?php echo lang('Edit tour')?></h1>
            </div>
          </div>
          <div class="row">
            <?php //echo  validation_errors(); ?>
            <?php echo form_open('admin/tours/edit_tour/'.$this->uri->segment(4)); ?>
              <div class="col-sm-4 col-md-4">

                <div class="form-group">
                  <label for="city">Tujuan Kota</label>
                  <input type="text" class="form-control" name="from" value="<?php echo set_value('from', $tour->from ); ?>">
                  <?php echo form_error('city'); ?>
                </div>
                <div class="form-group">
                  <label for="city">Tujuan Wisata</label>
                  <input type="text" class="form-control" name="to" value="<?php echo set_value('to', $tour->to ); ?>">
                  <?php echo form_error('to'); ?>
                </div>


                <div class="form-group">
                  <label for="start_price">Harga Paket</label>
                  <input type="text" class="form-control" name="start_price" value="<?php echo set_value('start_price', $tour->start_price ); ?>">
                  <?php echo form_error('start_price'); ?>
                </div>


              </div>

              <div class="col-sm-12 col-md-12">
                <button type="submit" class="btn btn-success"><span class="icon-checkmark"></span> Update</button>
              </div>
            </form>
          </div>
         </div>
