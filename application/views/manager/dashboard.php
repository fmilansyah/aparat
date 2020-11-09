            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card bg-secondary">
                            <div class="card-body">
                                <h2 class="float-right"><?= $jumlahsurat; ?></h2>
                                <h2>Surat Masuk</h2>
                            </div>
                            <div class="card-footer">
                                <a href="<?= site_url(); ?>manager/suratMasuk" class="btn btn-secondary float-right"><i class="ion-ios-arrow-right"></i></a>
                            </div>
                        </div>
                        <br />
                        <div class="card bg-primary">
                            <div class="card-body">
                                <h2 class="float-right"><?= $jumlahdisposisi; ?></h2>
                                <h2>Disposisi</h2>
                            </div>
                            <div class="card-footer">
                                <a href="<?= site_url(); ?>manager/disposisi" class="btn btn-primary float-right"><i class="ion-ios-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card bg-success">
                            <div class="card-body">
                                <h2 class="float-right"><?= $jumlahsuratkeluar; ?></h2>
                                <h2>Surat Keluar</h2>
                            </div>
                            <div class="card-footer">
                                <a href="<?= site_url(); ?>manager/suratKeluar" class="btn btn-success float-right"><i class="ion-ios-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    