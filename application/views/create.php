<?php include_once('header.php'); ?>
	<div class="container">
		<?php echo form_open('Admin/save', ['class'=>'form-horizontal']);?>
		  <fieldset>
			<legend>Add Mahasiswa</legend>
			<div class="form-group">
			  <label for="inputNRP" class="col-md-2 control-label">NRP</label>
			  <div class="col-md-5">
				<?php echo form_input(['name'=>'nrp', 'placeholder'=>'NRP', 'class'=>'form-control']); ?>
			  </div>
			  <div class="col-md-5">
			  <?php echo form_error('nrp', '<div class="text-danger">', '</div>');?>
			  
			  </div>
			</div>
			<div class="form-group">
			  <label for="inputNama" class="col-md-2 control-label">Nama Depan</label>
			  <div class="col-md-5">
				<?php echo form_input(['name'=>'nama_depan', 'placeholder'=>'Nama Depan', 'class'=>'form-control']); ?>
			  </div>
			  <div class="col-md-5">
			  <?php echo form_error('nama_depan', '<div class="text-danger">', '</div>');?>
			  </div>
			</div>
			<div class="form-group">
			  <label for="inputNama" class="col-md-2 control-label">Nama Belakang</label>
			  <div class="col-md-5">
				<?php echo form_input(['name'=>'nama_belakang', 'placeholder'=>'Nama Belakang', 'class'=>'form-control']); ?>
			  </div>
			  <div class="col-md-5">
			  <?php echo form_error('nama_belakang', '<div class="text-danger">', '</div>');?>
			  </div>
			</div>
			<div class="form-group">
			  <label for="inputPassword" class="col-md-2 control-label">Password</label>
			  <div class="col-md-5">
				<?php echo form_password(['name'=>'kata_sandi', 'placeholder'=>'Password', 'class'=>'form-control']); ?>
			  </div>
			  <div class="col-md-5">
			  <?php echo form_error('kata_sandi', '<div class="text-danger">', '</div>');?>
			  </div>
			</div>
			


			<div class="form-group">
			  <div class="col-md-10 col-md-offset-2">
				<?php echo form_submit(['name'=>'submit', 'value'=>'Submit', 'class'=>'btn btn-default']); ?>
				<?php echo anchor('Admin', 'Back', ['class'=>'btn btn-default']);?>
			  </div>
			</div>
		  </fieldset>
		<?php echo form_close(); ?>
	



	</div>
<?php include_once('footer.php'); ?>