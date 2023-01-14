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
                {{-- <div class="card-header">
                    <h3 class="card-title">FORM SEWA MOBIL</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div> --}}
                <div class="card-body">
                    <div id="booking" class="section">
                        <div class="section-center">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="card overflow-hidden">
                                            <img src="{{ asset('storage/' . $mobil->foto) }}" alt="mobil"
                                                class="card-img-top">
                                            <div class="card-body">
                                                <h5 class="">{{ $mobil->nopol }} <small>- {{ $mobil->warna }}</small>
                                                </h5>
                                                <h4 class="text-info">Rp{{ $mobil->biaya_sewa }}</h4>
                                                <p>{{ $mobil->deskripsi }}</p>
                                                <p>{{ $mobil->cc }}CC | Tahun {{ $mobil->tahun }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-sm-8">
                                        <div class="booking-form">
                                            <form
                                                action="{{ route('sewa.book', ['mobil_id' => $mobil->id, 'users_id' => 7]) }}"
                                                method="POST">
                                                @method('POST')
                                                @csrf
                                                <div class="form-group row">
                                                    <label for="nik" class="col-4 col-form-label">NIK</label>
                                                    <div class="col-8">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <i class="fa fa-address-card"></i>
                                                                </div>
                                                            </div>
                                                            <input id="nik" name="noktp" type="text"
                                                                class="form-control" spellcheck="false"
                                                                data-ms-editor="true">
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- <div class="form-group row">
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
                                                </div> --}}
                                                {{-- <div class="form-group row">
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
                                                </div> --}}
                                                {{-- <div class="form-group row">
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
                                                                value="{{ $mobil->nopol }}" spellcheck="false"
                                                                data-ms-editor="true" readonly>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                                {{-- <div class="form-group row">
                                                    <label for="merkid" class="col-4 col-form-label">Merk ID</label>
                                                    <div class="col-8">
                                                        <input id="merkid" name="merkid" placeholder="merk id"
                                                            type="text" class="form-control" value=""
                                                            spellcheck="false" data-ms-editor="true">
                                                    </div>
                                                </div> --}}
                                                {{-- <div class="form-group row">
                                                    <label for="mobil_id" class="col-4 col-form-label">Mobil</label>
                                                    <div class="col-8">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <i class="fa fa-car"></i>
                                                                </div>
                                                            </div>
                                                            <input id="merkmobil" name="mobil" type="text"
                                                                class="form-control" value="">
                                                        </div>
                                                    </div>
                                                </div> --}}
                                                {{-- <div class="form-group row">
                                                    <label for="mobil_id" class="col-4 col-form-label">Mobil ID</label>
                                                    <div class="col-8">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <i class="fa fa-car"></i>
                                                                </div>
                                                            </div>
                                                            <input id="mobil_id" name="mobil_id" type="text"
                                                                value="" class="form-control">
                                                        </div>
                                                    </div>
                                                </div> --}}
                                                {{-- <div class="form-group row">
                                                    <label for="warna" class="col-4 col-form-label">Warna</label>
                                                    <div class="col-8">
                                                        <input id="warna" name="warna" type="text"
                                                            class="form-control" value="" spellcheck="false"
                                                            data-ms-editor="true">
                                                    </div>
                                                </div> --}}
                                                {{-- <div class="form-group row">
                                                    <label for="biaya" class="col-4 col-form-label">Biaya</label>
                                                    <div class="col-8">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <i class="fas fa-money-bill"></i>
                                                                </div>
                                                            </div>
                                                            <input id="biaya" name="biaya" type="text"
                                                                class="form-control" value="" spellcheck="false"
                                                                data-ms-editor="true">
                                                        </div>
                                                    </div>
                                                </div> --}}
                                                <div class="form-group row">
                                                    <label for="tglmulai" class="col-4 col-form-label">Tanggal
                                                        Mulai</label>
                                                    <div class="col-8">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <i class="fa fa-calendar"></i>
                                                                </div>
                                                            </div>
                                                            <input id="tglmulai" name="tanggal_mulai" type="date"
                                                                class="form-control datepicker-here" data-language='en'
                                                                data-date-format="yyyy-mm-dd" spellcheck="false"
                                                                data-ms-editor="true" spellcheck="false"
                                                                data-ms-editor="true">
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
                                                            <input id="tglselesai" name="tanggal_akhir" type="date"
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
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->>
                    </div>
                </div>
            </div>
    </div>

    </div> <!-- /.card -->

    </section>
    <!-- /.content -->
    </div>
@endsection
