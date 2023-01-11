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
                <h3 class="card-title">Data Penyewaan Mobil</h3>

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
                <table class="table table-striped table-bordered ">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>NIK</th>
                            <th>Nama Pelanggan</th>
                            <th>NOPOL</th>
                            <th>Merk ID</th>
                            <th>Warna</th>
                            <th>Biaya Sewa </th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Akhir</th>
                            <th>Tujuan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 1;
                        foreach ($list_daftar_sewa as $lds) {
                        ?>
                            <tr>
                                <td>{{ $nomor }}</td>
                                <td>{{ $lds->NIK }}</td>
                                <td>{{ $lds->nama_pelanggan }}</td>
                                <td>{{ $lds->nopol }}</td>
                                <td>{{ $lds->merk_id }}</td>
                                <td>{{ $lds->warna }}</td>
                                <td>{{ $lds->biaya_sewa }}</td>
                                <td>{{ $lds->tanggal_mulai }}</td>
                                <td>{{ $lds->tanggal_akhir }}</td>
                                <td>{{ $lds->tujuan }}</td>
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
@endsection
