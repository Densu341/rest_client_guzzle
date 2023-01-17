<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Penumpang
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $penumpang['nama']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $penumpang['negara']; ?></h6>
                    <p class="card-text"><?= $penumpang['passport']; ?></p>
                    <a href="<?= base_url(); ?>penumpang" class="btn btn-primary">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>