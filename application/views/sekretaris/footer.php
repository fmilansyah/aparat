	<div class="modal fade" id="keluar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	    <div class="modal-dialog modal-dialog-centered" role="document">
	        <div class="modal-content">
	            <div class="modal-header">
	                <h5 class="modal-title" id="exampleModalLabel">Keluar</h5>
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                    <span aria-hidden="true">&times;</span>
	                </button>
	            </div>
	            <div class="modal-body">
	                Apakah anda yakin ingin keluar?
	            </div>
	            <div class="modal-footer">
	                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="ion-close-round"></i></button>
	                <a href="<?= site_url(); ?>admin/keluar" class="btn btn-primary"><i class="ion-checkmark-round"></i></a>
	            </div>
	        </div>
	    </div>
	</div>
	<script type="text/javascript">
       	$(document).ready(function () {
			$("#data-tabel").DataTable();
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
			$(".form_datetime").datetimepicker({
				format: 'dd-mm-yyyy hh:ii',
				autoclose: true,
				todayBtn: true
			});
        });
    </script>
</body>
</html>
