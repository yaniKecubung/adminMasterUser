<script type="text/javascript">
	//alert("hallo");
	// gone first 
	$("#update-admin").modal('hide');
	
	
	var MyTable = $('#list-data').dataTable({
		  "paging": true,
		  "lengthChange": true,
		  "searching": true,
		  "ordering": true,
		  "info": true,
		  "autoWidth": false
		});	
	
	//-- onload on first
	window.onload = function(){
		tampilAdmin();
	};
	
	function refresh() {
		MyTable = $('#list-data').dataTable();
	}
	function effect_msg() {
		// $('.msg').hide();
		$('.msg').show(1000);
		setTimeout(function() { $('.msg').fadeOut(1000); }, 3000);
	}
	

	//-- datatable setting
	function tampilAdmin(){
		// alert("");

		
		$.get('<?php echo base_url('User/show'); ?>', function(data) {
			MyTable.fnDestroy();
			$('#data-admin').html(data);
			refresh();
		});
	}
	
	//click
	$(document).on("click", ".update-dataAdmin", function() {
		var id = $(this).attr("data-id");
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('User/update'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			$('#tempat-modal').html(data);
			$('#update-admin').modal('show');
			
		})
		
	});
	var id_user;
	$(document).on("click",".konfirmasiHapus-Admin",function(){
		//alert();
		id_user = $(this).attr("data-id");
		//alert(id_user);
	});
	$(document).on("click", ".hapus-dataPegawai", function() {
		var id = id_user;

		$.ajax({
			method : "POST",
			url : "<?php echo base_url('User/delete');?>",
			data : "id=" +id
		}).done(function(data){
			$('#konfirmasiHapus').modal('hide');
			tampilAdmin();
			effect_msg();
		})
	});
</script>