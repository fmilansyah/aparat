			<div class="row">
                <div class="col-lg-6">
                    <h2>Surat Keluar</h2>
                </div>
                <div class="col-lg-6">
					<a href="<?= site_url(); ?>suratkeluar/pdf" class="btn btn-primary float-right" title="Cetak"><i class="ion-printer"></i></a>
                    <a href="#tambah" data-toggle="modal" class="btn btn-success float-right" title="Tambah"><i class="ion-plus-round"></i></a>
                </div>
            </div>
            <table class="table table-hover" id="data-tabel">
                <thead>
                    <tr>
                        <th scope="col">No Agenda</th>
                        <th scope="col">ID</th>
                        <th scope="col">No Surat</th>
                        <th scope="col">Perihasl</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($datasurat as $surat) { ?>
                            <input type="text" style="display:none" id="jenis_surat-<?= $surat['no_agenda'] ?>" value="<?= $surat['jenis_surat'] ?>">
                            <input type="text" style="display:none" id="tanggal_kirim-<?= $surat['no_agenda'] ?>" value="<?= $surat['tanggal_kirim'] ?>">
                            <input type="text" style="display:none" id="pengirim-<?= $surat['no_agenda'] ?>" value="<?= $surat['pengirim'] ?>">
                            <tr>
                                <td>
                                    <?= $surat['no_agenda'] ?>
                                </td>
                                <td>
                                    <?= $surat['id'] ?>
                                    <input type="text" style="display:none" id="id-<?= $surat['no_agenda'] ?>" value="<?= $surat['id'] ?>">
                                </td>
                                <td>
                                    <?= $surat['no_surat'] ?>
                                    <input type="text" style="display:none" id="no_surat-<?= $surat['no_agenda'] ?>" value="<?= $surat['no_surat'] ?>">
                                </td>
                                <td>
                                    <?= $surat['perihal'] ?>
                                    <input type="text" style="display:none" id="perihal-<?= $surat['no_agenda'] ?>" value="<?= $surat['perihal'] ?>">
                                </td>
                                <td>
                                    <a href="#edit" data-toggle="modal" id="edit_<?= $surat['no_agenda'] ?>" class="edit btn btn-sm btn-info" title="Edit">
                                        <i class="ion-edit"></i>
                                    </a>
                                    <a href="<?= site_url(); ?>suratkeluar/hapus/<?= $surat['no_agenda'] ?>" class="btn btn-sm btn-danger" title="Hapus">
                                        <i class="ion-trash-b"></i>
                                    </a>
                                    <a class="btn btn-primary btn-sm" href="<?= site_url(); ?>sekretaris/detailSuratKeluarPdf/<?= $surat['no_agenda'] ?>"><i class="ion-printer"></i></a>
                                </td>
                            </tr>
                        <?php }
                    ?>
                </tbody>
            </table>
		</div>
	</div>
    <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Surat Keluar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= site_url(); ?>suratkeluar/tambah" method="post">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <label>No Agenda</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" name="no_agenda" class="form-control" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label>ID</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" name="id" class="form-control" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label>Jenis Surat</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" name="jenis_surat" class="form-control" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label>Tanggal kirim</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" name="tanggal_kirim" class="form-control form_datetime" readonly="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label>No Surat</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" name="no_surat" class="form-control" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label>Pengirim</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" name="pengirim" class="form-control" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label>Perihal</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" name="perihal" class="form-control" required="">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="ion-close-round"></i></button>
                        <button type="submit" class="btn btn-primary"><i class="ion-checkmark-round"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
	<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Surat Masuk</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= site_url(); ?>suratkeluar/edit" method="post">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <label>No Agenda</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" name="no_agenda" id="no_agenda" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label>ID</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" name="id" id="id" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label>Jenis Surat</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" name="jenis_surat" id="jenis_surat" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label>Tanggal kirim</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" name="tanggal_kirim" id="tanggal_kirim" class="form-control form_datetime" readonly="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label>No Surat</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" name="no_surat" id="no_surat" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label>Pengirim</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" name="pengirim" id="pengirim" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label>Perihal</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" name="perihal" id="perihal" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="ion-close-round"></i></button>
                        <button type="submit" class="btn btn-primary"><i class="ion-checkmark-round"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".edit").click(function(){
				var id = this.id.substr(5);
				$("#no_agenda").val(id);
				$("#id").val($("#id-"+id).val());
				$("#jenis_surat").val($("#jenis_surat-"+id).val());
				$("#tanggal_kirim").val($("#tanggal_kirim-"+id).val());
				$("#no_surat").val($("#no_surat-"+id).val());
				$("#pengirim").val($("#pengirim-"+id).val());
				$("#perihal").val($("#perihal-"+id).val());
			});
		});
	</script>
