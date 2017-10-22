<?php include_once('header.php'); ?>
		<div class="container">
		<h3>User List</h3>
		<?php echo anchor('Admin/create', 'Add User', ['class' => 'btn btn-primary']);?>
			<table class="table table-striped table-hover ">
		  <thead>
			<tr>
			  <th>NRP</th>
			  <th>Nama Depan</th>
			  <th>Nama Belakang</th>
			  <th>Kata Sandi</th>
			  <th>Action</th>
			</tr>
		  </thead>
		  <tbody>
		  <?php if(count($mahasiswa)):?>
		  <?php foreach($mahasiswa as $us):?>
			<tr>
			  <td><?php echo $us->nrp; ?></td>
			  <td><?php echo $us->nama_depan; ?></td>
			  <td><?php echo $us->nama_belakang; ?></td>
			  <td><?php echo $us->kata_sandi; ?></td>
			  <td>
				<?php echo anchor("Admin/delete/{$us->nrp}", 'Delete', ['class' => 'label label-danger']);?>
			  </td>
			</tr>
			<?php endforeach;?>
			<?php else: ?>
				<tr>
					<td>No Records Found!</td>
			<?php endif;?>
		  </tbody>
			</table>
		</div>
<?php include_once('footer.php'); ?>