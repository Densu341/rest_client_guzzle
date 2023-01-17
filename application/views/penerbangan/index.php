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
            <a href="<?= base_url(); ?>penerbangan/tambah" class="btn btn-primary">Tambah
                Data Penerbangan</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari data penerbangan.." name="keyword">
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
                <div class="card-header text-white"><strong>Data Penerbangan</strong></div>
                <div class="card-body bg-light text-dark">
                    <table class="table table-striped table-primary table-sm">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Penumpang</th>
                                <th>Tujuan</th>
                                <th>Nomor Penerbangan</th>
                                <th>Tanggal</th>
                                <th class="float-right">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($penerbangan as $pnr) {
                            ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $pnr['nama']; ?></td>
                                    <td><?= $pnr['tujuan']; ?></td>
                                    <td><?= $pnr['nomor_penerbangan']; ?></td>
                                    <td><?= $pnr['tanggal']; ?></td>
                                    <td>
                                        <a href="<?= base_url(); ?>penerbangan/hapus/<?= $pnr['id_penerbangan']; ?>" class="badge badge-danger float-right tombol-hapus">Hapus</a>
                                        <a href="<?= base_url(); ?>penerbangan/ubah/<?= $pnr['id_penerbangan']; ?>" class="badge badge-success float-right">Ubah</a>
                                        <a href="<?= base_url(); ?>penerbangan/detail/<?= $pnr['id_penerbangan']; ?>" class="badge badge-primary float-right">Detail</a>
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