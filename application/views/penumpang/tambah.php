<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data Penumpang
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="negara">Negara</label>
                            <input type="text" name="negara" class="form-control" id="negara">
                            <small class="form-text text-danger"><?= form_error('negara'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="passport">Passport</label>
                            <input type="text" name="passport" class="form-control" id="passport">
                            <small class="form-text text-danger"><?= form_error('passport'); ?></small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>