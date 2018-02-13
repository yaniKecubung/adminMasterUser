			<?php foreach ($dataAdmin as $adminUser){?>
				<tr>
					<td><?php echo $adminUser->id; ?></td>
					<td><?php echo $adminUser->username; ?></td>
					<td><?php echo $adminUser->password; ?></td>
					<td><img src=<?php echo $adminUser->foto; ?> width='50' height='20'></td>
					<td>
						<button class="btn btn-warning update-dataAdmin" data-id="<?php echo $adminUser->id; ?>"><i class="glyphicon glyphicon-repeat"></i> Update</button>
						<button class="btn btn-danger konfirmasiHapus-Admin" data-id="<?php echo $adminUser->id; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>					
					</td>
				</tr>
			<?php } ?>