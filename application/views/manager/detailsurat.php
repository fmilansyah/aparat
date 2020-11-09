    <div class="card border-warning" onload="telahdibaca()">
        <div class="card-header">
            <?= $detail['perihal']; ?>
        </div>
        <div class="card-body">
            <strong><?= $detail['pengirim'] ?></strong> <i class="ion-clock"></i> <?= $detail  ['tanggal_terima'] ?>
            <br />
            ID : <?= $detail['id'] ?>
            <br />
            Jenis Surat : <?= $detail['jenis_surat'] ?>
            <br />
            Tanggal Kirim : <?= $detail['tanggal_kirim'] ?>
            <br />
            No Surat : <?= $detail['no_surat'] ?>
        </div>
        <div class="card-footer">
            <a href="<?= site_url(); ?>manager/pdf/<?= $detail['no_agenda'] ?>" class="btn btn-primary" title="Cetak"><i class="ion-printer"></i></a>
            <button type="button" id="show-disposisi" class="btn btn-primary float-right" title="Disposisi"><i class="ion-forward"></i></button>
        </div>
    </div>
    <br />
    <div class="card border-primary" id="disposisi" style="display: none">
        <div class="card-header">
            Disposisi
        </div>
        <form action="<?= site_url(); ?>disposisi/tambahDisposisi" method="post">
            <div class="card-body">
                <input type="text" name="no_agenda" value="<?= $detail['no_agenda'] ?>" style="display: none">
                <input type="text" name="no_surat" value="<?= $detail['no_surat'] ?>" style="display: none">
                <div class="row">
                    <div class="col-lg-4">
                        <label>No Disposisi</label>
                    </div>
                    <div class="col-lg-8">
                        <input type="text" name="no_disposisi" class="form-control" required="">
                    </div>
                </div>
                <br />
                <div class="row">
                    <div class="col-lg-4">
                        <label>Kepada</label>
                    </div>
                    <div class="col-lg-8">
                        <select class="form-control" name="kepada">
                            <?php
                                foreach ($bagian as $data) { ?>
                                    <option value="<?= $data['nama_bagian'] ?>"><?= $data['nama_bagian'] ?></option>
                                <?php }
                            ?>
                        </select>
                    </div>
                </div>
                <br />
                <div class="row">
                    <div class="col-lg-4">
                        <label>Keterangan</label>
                    </div>
                    <div class="col-lg-8">
                        <textarea name="keterangan" class="form-control" style="resize: none"></textarea>
                    </div>
                </div>
                <br />
                <div class="row">
                    <div class="col-lg-4">
                        <label>Status Surat</label>
                    </div>
                    <div class="col-lg-8">
                        <select class="form-control" name="status_surat">
                            <option value="Penting">Penting</option>
                            <option value="Tidak Penting">Tidak Penting</option>
                        </select>
                    </div>
                </div>
                <br />
                <div class="row">
                    <div class="col-lg-4">
                        <label>Tanggapan</label>
                    </div>
                    <div class="col-lg-8">
                        <textarea name="tanggapan" class="form-control" style="resize: none"></textarea>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="button" id="hide-disposisi" class="btn btn-danger" title="Batal"><i class="ion-close-round"></i></a>
                <button type="submit" class="btn btn-primary float-right" title="Kirim"><i class="ion-checkmark-round"></i></button>
            </div>
        </form>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#show-disposisi").click(function(){
                $("#disposisi").toggle();
            });
            $("#hide-disposisi").click(function(){
                $("#disposisi").hide();
            });
        });
    </script>
