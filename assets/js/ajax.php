<script type="text/javascript">
	//alert("hallo");
	
	//-- onload on first
	window.onload = function(){
		tampilAdmin();
	};

	function tampilAdmin(){
		// alert("");
		$('#list-data').dataTable({
		  "paging": true,
		  "lengthChange": true,
		  "searching": true,
		  "ordering": true,
		  "info": true,
		  "autoWidth": false
		});
	}
	
</script>