@extends('layout.main')

@section('container')
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
                    <h3 class="card-title">FORM SEWA MOBIL</h3>

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
                                            {{ $hidden = ['edit' => $mbledit->nopol] }}
                                            <form action="/mobil/save" method="POST">
                                                @method('POST')
                                                <div class="form-group row">
                                                    <label for="nik" class="col-4 col-form-label">NIK</label>
                                                    <div class="col-8">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <i class="fa fa-address-card"></i>
                                                                </div>
                                                            </div>
                                                            <input id="nik" name="nik" placeholder="NIK KTP"
                                                                type="text" class="form-control" spellcheck="false"
                                                                data-ms-editor="true">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="nama" class="col-4 col-form-label">Nama</label>
                                                    <div class="col-8">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <i class="fa fa-address-book"></i>
                                                                </div>
                                                            </div>
                                                            <input id="nama" name="nama" placeholder="Nama Anda"
                                                                type="text" class="form-control" spellcheck="false"
                                                                data-ms-editor="true">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="nama" class="col-4 col-form-label">Users ID</label>
                                                    <div class="col-8">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <i class="fa fa-address-book"></i>
                                                                </div>
                                                            </div>
                                                            <input id="user_id" name="user_id" value="<?php if ($this->session->has_userdata('id')) {
                                                                echo $this->session->userdata('id');
                                                            } ?>"
                                                                type="text" class="form-control" spellcheck="false"
                                                                data-ms-editor="true">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="nopol" class="col-4 col-form-label">Nopol</label>
                                                    <div class="col-8">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <i class="fa fa-car"></i>
                                                                </div>
                                                            </div>
                                                            <input id="nopol" name="nopol" placeholder="BXXXXABC"
                                                                type="text" class="form-control"
                                                                value="<?= $mbledit->nopol ?>" spellcheck="false"
                                                                data-ms-editor="true">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="merkid" class="col-4 col-form-label">Merk ID</label>
                                                    <div class="col-8">
                                                        <input id="merkid" name="merkid" placeholder="merk id"
                                                            type="text" class="form-control"
                                                            value="<?= $mbledit->merk_id ?>" spellcheck="false"
                                                            data-ms-editor="true">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="mobil_id" class="col-4 col-form-label">Mobil</label>
                                                    <div class="col-8">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <i class="fa fa-car"></i>
                                                                </div>
                                                            </div>
                                                            <input id="merkmobil" name="mobil" type="text"
                                                                class="form-control"
                                                                value="<?= $mbledit->merk ?> <?= $mbledit->produk ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="mobil_id" class="col-4 col-form-label">Mobil ID</label>
                                                    <div class="col-8">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <i class="fa fa-car"></i>
                                                                </div>
                                                            </div>
                                                            <input id="mobil_id" name="mobil_id" type="text"
                                                                value="<?= $mbledit->mobil_id ?>" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="warna" class="col-4 col-form-label">Warna</label>
                                                    <div class="col-8">
                                                        <input id="warna" name="warna" type="text"
                                                            class="form-control" value="<?= $mbledit->warna ?>"
                                                            spellcheck="false" data-ms-editor="true">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="biaya" class="col-4 col-form-label">Biaya</label>
                                                    <div class="col-8">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <i class="fa "></i>
                                                                </div>
                                                            </div>
                                                            <input id="biaya" name="biaya" type="text"
                                                                class="form-control" value="<?= $mbledit->biaya_sewa ?>"
                                                                spellcheck="false" data-ms-editor="true">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="tglmulai" class="col-4 col-form-label">Tanggal
                                                        Mulai</label>
                                                    <div class="col-8">
                                                        <div class="input-group">
                                                            <input id="tglmulai" name="tglmulai" type="text"
                                                                class="form-control datepicker-here" data-language='en'
                                                                data-date-format="yyyy-mm-dd" spellcheck="false"
                                                                data-ms-editor="true" spellcheck="false"
                                                                data-ms-editor="true">
                                                            <div class="input-group-append">
                                                                <div class="input-group-text">
                                                                    <i class="fa fa-calendar"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="tglselesai" class="col-4 col-form-label">Tanggal
                                                        Selesai</label>
                                                    <div class="col-8">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <i class="fa fa-calendar"></i>
                                                                </div>
                                                            </div>
                                                            <input id="tglselesai" name="tglselesai" type="text"
                                                                class="form-control datepicker-here" data-language='en'
                                                                data-date-format="yyyy-mm-dd" spellcheck="false"
                                                                data-ms-editor="true">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="tujuan" class="col-4 col-form-label">Tujuan</label>
                                                    <div class="col-8">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <i class="fa fa-location-arrow"></i>
                                                                </div>
                                                            </div>
                                                            <input id="tujuan" name="tujuan" type="text"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="offset-4 col-8">
                                                        <button name="submit" type="submit"
                                                            class="btn btn-primary">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <b>Foto</b>
                                        <br>
                                        <?php
                                        $filefoto = base_url('uploads/foto/' . $mbledit->foto);

                                        // echo $filefoto;
                                        $array = get_headers($filefoto);
                                        $string = $array[0];
                                        if (strpos($string, '200')) {
                                            echo '<img src="' . $filefoto . '" class="img-thumbnail" width="500" alt="Foto">';
                                        } else {
                                            echo '<img src="' . base_url('uploads/foto/default.jpg') . '" class="img-thumbnail" width="250" alt="Foto">';
                                        }
                                        // if (file_exists($filefoto)) {
                                        //     echo '<img src="' . base_url($filefoto) . '" class="img-thumbnail" width="250" alt="Foto">';
                                        // } else {
                                        //     echo '<img src="' . base_url('uploads/foto/default.png') . '" class="img-thumbnail" width="250" alt="Foto">';
                                        // }
                                        ?>
                                        <br>

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
                </div>
            </div>
    </div>

    </div> <!-- /.card -->

    </section>
    <!-- /.content -->
    </div>
@endsection
