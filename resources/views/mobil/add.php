<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Rental Mobil</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Blank Page</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tambah Data Mobil Rental</h3>

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
                <div id="booking" class="section">
                    <div class="section-center">
                        <div class="container">
                            <div class="row">
                                <div class=" col-sm-8">
                                    <div class="booking-form">
                                        <?php echo form_open('mobil/save') ?>
                                        <div class="form-group row">
                                            <label for="merk_id" class="col-4 col-form-label">MERK ID</label>
                                            <div class="col-8">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <i class="fa fa-address-card-o"></i>
                                                        </div>
                                                    </div>
                                                    <input id="merk_id" name="merk_id" placeholder="merk id" type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="nopol_id" class="col-4 col-form-label">NOPOL</label>
                                            <div class="col-8">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <i class="fa "></i>
                                                        </div>
                                                    </div>
                                                    <input id="nopol_id" name="nopol" placeholder="nopol" type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="Warna_id" class="col-4 col-form-label">Warna</label>
                                            <div class="col-8">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <i class="fa fa-pie-chart"></i>
                                                        </div>
                                                    </div>
                                                    <input id="Warna_id" name="warna" placeholder="warna" type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="deskirpsi" class="col-4 col-form-label">Deskripsi</label>
                                            <div class="col-8">
                                                <textarea id="deskirpsi" name="deskripsi" cols="40" rows="5" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="biayasewa" class="col-4 col-form-label">Biaya Sewa</label>
                                            <div class="col-8">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <i class="fa fa-dollar"></i>
                                                        </div>
                                                    </div>
                                                    <input id="biayasewa" name="biaya_sewa" placeholder="biaya sewa" type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="tahun_id" class="col-4 col-form-label">Tahun</label>
                                            <div class="col-8">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                    </div>
                                                    <input id="tahun_id" name="tahun" placeholder="tahun " type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="cc_id" class="col-4 col-form-label">CC</label>
                                            <div class="col-8">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <i class="fa fa-cc"></i>
                                                        </div>
                                                    </div>
                                                    <input id="cc_id" name="cc" placeholder="cc" type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="fotoid" class="col-4 col-form-label">Foto</label>
                                            <div class="col-8">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <i class="fa fa-photo"></i>
                                                        </div>
                                                    </div>
                                                    <input id="fotoid" name="foto" placeholder="&quot;nopol.jpg&quot;" type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-4 col-8">
                                                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                        <?php echo form_close() ?>
                                    </div>
                                </div>
                                <div class=" col-sm-4">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <th>MERK ID</th>
                                            <th>MERK</th>
                                            <th>PRODUK</th>
                                        </thead>

                                        <tbody>
                                            <?php
                                            foreach ($merk as $mrk ) {
                                            ?>
                                                <tr>
                                                    <td><?= $mrk->id ?></td>
                                                    <td><?= $mrk->nama ?></td>
                                                    <td><?= $mrk->produk ?></td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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