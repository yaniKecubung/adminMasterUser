<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
	<div class="x_panel">
	  <div class="x_title">
		<h2>Basic Tables <small>basic table subtitle</small></h2>
		<ul class="nav navbar-right panel_toolbox">
		  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
		  </li>
		  <li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
			<ul class="dropdown-menu" role="menu">
			  <li><a href="#">Settings 1</a>
			  </li>
			  <li><a href="#">Settings 2</a>
			  </li>
			</ul>
		  </li>
		  <li><a class="close-link"><i class="fa fa-close"></i></a>
		  </li>
		</ul>
		<div class="clearfix"></div>
	  </div>
	  <div class="x_content">
		<?php //print_r($dataAdmin);  ?>
		<table id="list-data" class="table table-bordered table-striped">
		  <thead>
			<tr>
			  <th>#</th>
			  <th>Username</th>
			  <th>Password</th>
			  <th>Foto</th>
			  <th>Console</th>
			</tr>
		  </thead>
		  <tbody id="list-data">
			<?php foreach ($dataAdmin as $adminUser){?>
				<tr>
					<td><?php echo $adminUser->id; ?></td>
					<td><?php echo $adminUser->username; ?></td>
					<td><?php echo $adminUser->password; ?></td>
					<td><img src=<?php echo $adminUser->foto; ?> width='50' height='20'></td>
					<td>
						<button class="btn btn-warning update-dataPegawai" data-id="<?php echo $adminUser->id; ?>"><i class="glyphicon glyphicon-repeat"></i> Update</button>
						<button class="btn btn-danger konfirmasiHapus-pegawai" data-id="<?php echo $adminUser->id; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>					
					</td>
				</tr>
			<?php } ?>
		  </tbody>
		</table>

	  </div>
	</div>
</div>
