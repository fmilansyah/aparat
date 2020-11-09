			<div class="row">
                <div class="col-lg-6">
                    <h2>Bagian</h2>       
                </div>
                <div class="col-lg-6">    
                    <a href="#tambah" data-toggle="modal" class="btn btn-success float-right" title="Tambah"><i class="ion-plus-round"></i></a>
                </div>
            </div>
            <table class="table table-hover" id="data-tabel">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama Bagian</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($databagian as $bagian) { ?>
                            <tr>
                                <td>
                                    <?= $bagian['id'] ?>
                                </td>
                                <td>
                                    <?= $bagian['nama_bagian'] ?>
                                    <input type="text" style="display:none" id="nama_bagian-<?= $bagian['id'] ?>" value="<?= $bagian['nama_bagian'] ?>">
                                </td>
                                <td>
                                    <?= $bagian['keterangan'] ?>
                                    <input type="text" style="display:none" id="keterangan-<?= $bagian['id'] ?>" value="<?= $bagian['keterangan'] ?>">
                                </td>
                                <td>
                                    <a href="#edit" data-toggle="modal" id="edit_<?= $bagian['id'] ?>" class="edit btn btn-sm btn-info" title="Edit">
                                        <i class="ion-edit"></i>
                                    </a>
                                    <a href="<?= site_url(); ?>bagian/hapus/<?= $bagian['id'] ?>" class="btn btn-sm btn-danger" title="Hapus">
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
    <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Bagian</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= site_url(); ?>bagian/tambah" method="post">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <label>Nama Bagian</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" name="nama_bagian" class="form-control" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label>Keterangan</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" name="keterangan" class="form-control" required="">
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
                    <h5 class="modal-title" id="exampleModalLabel">Edit Bagian</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= site_url(); ?>bagian/edit" method="post">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <label>ID</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" id="id" name="id" class="form-control" readonly="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label>Nama Bagian</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" id="nama_bagian" name="nama_bagian" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label>Keterangan</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" id="keterangan" name="keterangan" class="form-control">
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
                $("#id").val(id);
                $("#nama_bagian").val($("#nama_bagian-"+id).val());
                $("#keterangan").val($("#keterangan-"+id).val());
            });
        });
    </script>