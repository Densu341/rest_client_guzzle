<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Penumpang
                </div>
                <div class="card-body">
                    <!-- multipart form -->
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id_penumpang" value="<?= $penumpang['id_penumpang']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="<?= $penumpang['nama']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="negara">Negara</label>
                            <input type="text" name="negara" class="form-control" id="negara" value="<?= $penumpang['negara']; ?>">
                            <small class="form-text text-danger"><?= form_error('negara'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="passport">Passport</label>
                            <input type="text" name="passport" class="form-control" id="passport" value="<?= $penumpang['passport']; ?>">
                            <small class="form-text text-danger"><?= form_error('passport'); ?></small>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>