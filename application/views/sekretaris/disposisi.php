<div class="row">
    <div class="col-lg-6">
        <h2>Disposisi</h2>
    </div>
    <div class="col-lg-6">
        <a href="<?= site_url(); ?>disposisi/pdf" class="btn btn-primary float-right" title="Cetak Semua"><i class="ion-printer"></i></a>
    </div>
</div>
<table class="table table-hover" id="data-tabel">
    <thead>
        <tr>
            <th scope="col">No Disposisi</th>
            <th scope="col">No Agenda</th>
            <th scope="col">No Surat</th>
            <th scope="col">Kepada</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Status Surat</th>
            <th scope="col">Tanggapan</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($disposisi as $data) { ?>
                <tr>
                    <td>
                        <?= $data['no_disposisi'] ?>
                    </td>
                    <td>
                        <?= $data['no_agenda'] ?>
                    </td>
                    <td>
                        <?= $data['no_surat'] ?>
                    </td>
                    <td>
                        <?= $data['kepada'] ?>
                    </td>
                    <td>
                        <?= $data['keterangan'] ?>
                    </td>
                    <td>
                        <?= $data['status_surat'] ?>
                    </td>
                    <td>
                        <?= $data['tanggapan'] ?>
                    </td>
                    <td>
                        <a href="<?= site_url(); ?>disposisi/hapus/<?= $data['no_disposisi'] ?>" class="btn btn-sm btn-danger" title="Hapus">
                            <i class="ion-trash-b"></i>
                        </a>
                        <a href="<?= site_url(); ?>sekretaris/buktiDisposisi/<?= $data['no_agenda'] ?>" class="btn btn-sm btn-primary" title="Cetak">
                            <i class="ion-printer"></i>
                        </a>
                    </td>
                </tr>
            <?php }
        ?>
    </tbody>
</table>
</div>
</div>
