    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1>Manager</h1>
            </div>
            <div class="col-lg-6">
                <a href="#tambah" data-toggle="modal" class="btn btn-success float-right" title="Tambah"><i class="ion-plus-round"></i></a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-hover" id="data-tabel">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nama Depan</th>
                            <th scope="col">Nama Belakang</th>
                            <th scope="col">Password</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($daftarmanager as $manager) { ?>
                                <tr>
                                    <td>
                                        <?= $manager['id'] ?>
                                        <input type="text" style="display:none" id="id-tbl" value="<?= $manager['id'] ?>" id="id_<?= $manager['id'] ?>">
                                    </td>
                                    <td>
                                        <?= $manager['nama_depan'] ?>
                                        <input type="text" style="display:none" id="nama_depan-<?= $manager['id'] ?>" value="<?= $manager['nama_depan'] ?>" id="nama_depan_<?= $manager['id'] ?>">
                                    </td>
                                    <td>
                                        <?= $manager['nama_belakang'] ?>
                                        <input type="text" style="display:none" id="nama_belakang-<?= $manager['id'] ?>" value="<?= $manager['nama_belakang'] ?>" id="nama_belakang_<?= $manager['id'] ?>">
                                    </td>
                                    <td>
                                        <?= $manager['password'] ?>
                                        <input type="text" style="display:none" id="password-<?= $manager['id'] ?>" value="<?= $manager['password'] ?>" id="password_<?= $manager['id'] ?>">
                                    </td>
                                    <input type="text" style="display:none" id="hak-<?= $manager['id'] ?>" value="<?= $manager['hak'] ?>">
                                    <td>
                                        <a href="#edit" data-toggle="modal" id="edit_<?= $manager['id'] ?>" class="edit btn btn-sm btn-info" title="Edit">
                                            <i class="ion-edit"></i>
                                        </a>
                                        <a href="<?= site_url(); ?>admin/hapusPetugas/<?= $manager['id'] ?>/<?= $manager['hak'] ?>" class="btn btn-sm btn-danger" title="Hapus">
                                            <i class="ion-trash-b"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Manager</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= site_url(); ?>admin/tambahPetugas" method="post">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <label>ID</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" name="id" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label>Nama Depan</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" name="nama_depan" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label>Nama Belakang</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" name="nama_belakang" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label>Pasword</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" name="password" class="form-control">
                            </div>
                        </div>
                        <input type="text" name="hak" value="Manager" style="display: none;">
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
                    <h5 class="modal-title" id="exampleModalLabel">Edit Manager</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= site_url(); ?>admin/editPetugas" method="post">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <label>ID</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" name="id" id="id" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label>Nama Depan</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" name="nama_depan" id="nama_depan" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label>Nama Belakang</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" name="nama_belakang" id="nama_belakang" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label>Password</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" name="password" id="password" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label>Hak</label>
                            </div>
                            <div class="col-lg-8">
                                <select class="form-control" name="hak" id="hak">
                                    <option value="Admin">Admin</option>
                                    <option value="Sekretaris">Sekretaris</option>
                                    <option value="Manager">Manager</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="ion-close-round"></i></button>
                        <button type="submit" class="btn btn-primary"><i class="ion-edit"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
