<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
            <?php if ($this->session->flashdata('flash')) : ?>
            <?php endif; ?>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>penumpang/tambah" class="btn btn-primary">Tambah
                Data Penumpang</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari data penumpang.." name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col">
            <div class="card bg-info">
                <div class="card-header text-white"><strong>Data Penumpang</strong></div>
                <div class="card-body bg-light text-dark">
                    <table class="table table-striped table-primary table-sm">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Negara</th>
                                <th>Passport</th>
                                <th class="float-right">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($penumpang as $p) {
                            ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $p['nama']; ?></td>
                                    <td><?= $p['negara']; ?></td>
                                    <td><?= $p['passport']; ?></td>
                                    <td>
                                        <a href="<?= base_url(); ?>penumpang/hapus/<?= $p['id_penumpang']; ?>" class="badge badge-danger float-right tombol-hapus">Hapus</a>
                                        <a href="<?= base_url(); ?>penumpang/ubah/<?= $p['id_penumpang']; ?>" class="badge badge-success float-right">Ubah</a>
                                        <a href="<?= base_url(); ?>penumpang/detail/<?= $p['id_penumpang']; ?>" class="badge badge-primary float-right">Detail</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>