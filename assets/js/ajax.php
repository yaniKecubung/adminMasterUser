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
</script>