
        <div class="col-sm-10 col-md-11 main">
          <div class="row" >
            <div class="col-sm-12 col-md-12" style="padding-left:0px;">
                <h1 class="page-header"><a href="<?php echo base_url().'admin/members' ?>"><i class="icon-arrow-left-3"></i></a> <?php echo lang('Add member')?></h1>
            </div>
          </div>
          <div class="row">
            <?php //echo  validation_errors(); ?>
            <div class="col-sm-5 col-md-5">
             <?php echo form_open('admin/members/add_member'); ?>
                <div class="form-group">
                  <label for="firstname">Nama</label>
                  <input type="text" class="form-control" name="firstname" value="<?php echo set_value('firstname'); ?>">
                  <?php echo form_error('firstname'); ?>
                </div>
                <div class="form-group">
                  <label for="lastname">Posisi</label>
                  <input type="text" class="form-control" name="lastname" value="<?php echo set_value('lastname'); ?>">
                  <?php echo form_error('lastname'); ?>
                </div>

                <div class="form-group">
                  <label for="lastname">Link Foto</label>
                  <input type="text" class="form-control" name="email" value="<?php echo set_value('email'); ?>">
                  <?php echo form_error('email'); ?>
                </div>

              <button type="submit" class="btn btn-success" value="submit"><span class="icon-checkmark"></span> <?php echo lang('Submit')?></button>
              </form>
            </div>
          </div>
         </div>
