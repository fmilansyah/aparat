			<div class="row">
                <div class="col-lg-12">
                    <h2>Surat Masuk</h2>
                </div>
            </div>
            <table class="table table-hover" id="data-tabel">
                <thead>
                    <tr>
                        <th scope="col">No Agenda</th>
                        <th scope="col">ID</th>
                        <th scope="col">No Surat</th>
                        <th scope="col">Pengirim</th>
                        <th scope="col">Perihal</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($datasurat as $surat) { ?>
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
                                    <?= $surat['pengirim'] ?>
                                    <input type="text" style="display:none" id="pengirim-<?= $surat['no_agenda'] ?>" value="<?= $surat['pengirim'] ?>">
                                </td>
                                <td>
                                    <?= $surat['perihal'] ?>
                                    <input type="text" style="display:none" id="perihal-<?= $surat['no_agenda'] ?>" value="<?= $surat['perihal'] ?>">
                                </td>
                                <td>
                                    <a href="<?= site_url(); ?>suratmasuk/hapus/<?= $surat['no_agenda'] ?>" class="btn btn-sm btn-danger" title="Hapus">
                                        <i class="ion-trash-b"></i>
                                    </a>
									<a href="<?= site_url(); ?>manager/detailSurat/<?= $surat['no_agenda'] ?>" class="btn btn-primary btn-sm" title="Disposisi">
										<i class="ion-forward"></i>
									</a>
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
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Surat Masuk</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= site_url(); ?>suratmasuk/tambah" method="post">
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
                                <input type="text" name="tanggal_kirim" class="form-control" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label>Tanggal Terima</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" name="tanggal_terima" class="form-control" required="">
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
