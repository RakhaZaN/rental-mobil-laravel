@extends('layout.main')

@section('container')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data Mobil Rental</h1>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                {{-- <div class="card-header">
                    <h3 class="card-title">Data Mobil Rental</h3>

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
                    {{-- <?php if ($this->session->userdata('role') == 'administrator') { ?> --}}

                    <a class="btn btn-success" href="{{ route('mobil.create') }}">Tambah Mobil</a>
                    {{-- <a class="btn btn-warning" href="{{ url('/perawatan/index') }}" role="button"
                        style="margin-bottom: 2%">Daftar Perawatan</a> --}}
                    {{-- <?php } ?> --}}
                    <table class="table table-striped table-bordered mt-3">
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
                            @foreach ($list_mobil as $key => $list)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $list->nopol }}</td>
                                    <!-- <td>{{ $list->merk_id }}</td> -->
                                    <td>{{ $list->merk }}</td>
                                    <td>{{ $list->produk }}</td>
                                    <td>{{ $list->warna }}</td>
                                    <td>{{ $list->biaya_sewa }}</td>
                                    <td>{{ $list->cc }}</td>
                                    <!-- <td>{{ $list->mobil_id }}</td> -->
                                    <td>{{ $list->tahun }}</td>
                                    <td style="width:20%">{{ $list->deskripsi }} </td>
                                    <td>
                                        <div style="margin-bottom: 2%">
                                            <a class="btn btn-info"
                                                href="{{ route('mobil.show', ['detail' => $list->nopol]) }}"
                                                style="margin-bottom: 2%">Detail</a>
                                            <a href="{{ route('sewa.form', ['nopol' => $list->nopol]) }}"><input
                                                    type="submit" class="btn btn-primary" value="BOOKING NOW!"
                                                    role="button" style="margin-bottom: 2%"></a>
                                        </div>
                                        {{-- <?php if ($this->session->userdata('role') == 'administrator') { ?> --}}
                                        <a class="btn btn-success"
                                            href="{{ route('mobil.edit', ['edit' => $list->nopol]) }}"
                                            style="margin-bottom: 2%">Edit</a>

                                        <!-- UNTUK LOGIC ROLE -->
                                        <form action="{{ route('mobil.delete', ['delete' => $list->nopol]) }}"
                                            method="POST">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
@endsection
