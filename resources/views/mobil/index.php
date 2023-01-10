<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Rental Mobil</h1>
                </div>

            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Mobil Rental</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <?php if ($this->session->userdata('role') == 'administrator') { ?>

                    <a class="btn btn-success" href="<?= (base_url() . 'index.php/mobil/add'); ?>" role="button" style="margin-bottom: 2%">Tambah Mobil</a>
                    <a class="btn btn-warning" href="<?= (base_url() . 'index.php/perawatan/index'); ?>" role="button" style="margin-bottom: 2%">Daftar Perawatan</a>
                <?php } ?>
                <table class="table table-striped table-bordered ">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>NOPOL</th>
                            <!-- <th>MERK ID</th> -->
                            <th>MERK</th>
                            <th>PRODUK</th>
                            <th>WARNA</th>
                            <th>BIAYA SEWA</th>
                            <th>CC</th>
                            <!-- <th>MOBIL ID</th> -->
                            <th>Tahun</th>
                            <th>Deskipsi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 1;
                        foreach ($list_mobil as $obj) {
                        ?>
                            <tr>
                                <td><?= $nomor ?></td>
                                <td><?= $obj->nopol ?></td>
                                <!-- <td><?= $obj->merk_id ?></td> -->
                                <td><?= $obj->merk ?></td>
                                <td><?= $obj->produk ?></td>
                                <td><?= $obj->warna ?></td>
                                <td><?= $obj->biaya_sewa ?></td>
                                <td><?= $obj->cc ?></td>
                                <!-- <td><?= $obj->mobil_id ?></td> -->
                                <td><?= $obj->tahun ?></td>
                                <td style="width:20%"><?= $obj->deskripsi ?> </td>
                                <td>
                                    <div style="margin-bottom: 2%">
                                        <a class="btn btn-info" href="<?= (base_url() . 'index.php/mobil/view?id='); ?><?= $obj->nopol ?>" style="margin-bottom: 2%">Detail</a>
                                        <a href="<?= (base_url() . 'index.php/sewa/book?id='); ?><?= $obj->nopol ?>"><input type="submit" class="btn btn-primary" value="BOOKING NOW!" role="button" style="margin-bottom: 2%"></a>
                                    </div>
                                    <?php if ($this->session->userdata('role') == 'administrator') { ?>
                                        <a class="btn btn-success" href="<?= (base_url() . 'index.php/mobil/edit?id='); ?><?= $obj->nopol ?>" style="margin-bottom: 2%">Edit</a>
                                        <a class="btn btn-warning" href="<?= (base_url() . 'index.php/perawatan/do_perawatan?id='); ?><?= $obj->nopol ?>" style="margin-bottom: 2%">Lakukan Perawatan</a>
                                        <a class="btn btn-danger" href="<?= (base_url() . 'index.php/mobil/delete?id='); ?><?= $obj->nopol ?>" onclick="if(!confirm('Anda Yakin Hapus Mobil dengan NOPOL <?= $obj->nopol ?>?')) {return false}">Delete</a>
                                        <!-- UNTUK LOGIC ROLE -->
                                    <?php
                                    }
                                    ?>
                                </td>
                            </tr>
                        <?php
                            $nomor++;
                        } ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Footer
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>