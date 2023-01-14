@extends('layout.main')

@section('container')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Detail Mobil</h1>
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
                    <h3 class="card-title">Detail Mobil</h3>

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
                    <div class="row mb-2">
                        <div class="col-sm-8">
                            <table class="table table-striped table-hover">
                                <tbody>
                                    <tr>
                                        <td>NOPOL</td>
                                        <td> {{ $detail->nopol }}</td>
                                    </tr>
                                    <tr>
                                        <td>Merk Id</td>
                                        <td> {{ $detail->merk_id }}</td>
                                    <tr>
                                        <td>Merk</td>
                                        <td> {{ $detail->merk }}</td>
                                    </tr>
                                    <tr>
                                        <td>Produk</td>
                                        <td> {{ $detail->produk }}</td>
                                    </tr>
                                    <tr>
                                        <td>Warna</td>
                                        <td> {{ $detail->warna }}</td>
                                    </tr>
                                    <tr>
                                        <td>Biaya Sewa</td>
                                        <td> {{ $detail->biaya_sewa }}</td>
                                    </tr>
                                    <tr>
                                        <td>CC</td>
                                        <td> {{ $detail->cc }}</td>
                                    </tr>
                                    <tr>
                                        <td>Tahun</td>
                                        <td> {{ $detail->tahun }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="{{ route('sewa.form', ['nopol' => $detail->nopol]) }}" class="btn btn-primary">BOOKING
                                NOW!</a>
                        </div>
                        <div class="col-sm-4">
                            <p><b>Foto</b></p>
                            <img src="{{ asset('storage/' . $detail->foto) }}" alt="mobil" class="img-fluid">
                            {{-- {{
                            $filefoto = base_url('uploads/foto/' . $mbl->foto);

                        // echo $filefoto;
                        $array = get_headers($filefoto);
                        $string = $array[0];
                        if (strpos($string, "200")) {
                            {{ <img src="' . $filefoto . '" class="img-thumbnail" width="250" alt="Foto">}}
                        } else {
                            {{ <img src="' . base_url('uploads/foto/default.jpg') . '" class="img-thumbnail" width="250" alt="Foto"> }}
                        }
                        // if (file_exists($filefoto)) {
                        //     echo '<img src="' . base_url($filefoto) . '" class="img-thumbnail" width="250" alt="Foto">';
                        // } else {
                        //     echo '<img src="' . base_url('uploads/foto/default.png') . '" class="img-thumbnail" width="250" alt="Foto">';
                        // }
                        }} --}}
                            <br>
                            {{-- {{ if ($this->session->userdata('role') == 'administrator') }}
                            <b>Nama File:  {{ $mbl->foto }} </b>
                            <br>
                            {{
                            echo form_open_multipart('mobil/upload');
                            }}
                            <b>Upload Foto Dengan Tipe JPG/PNG saja</b>
                            <br>
                            <input type="hidden" name="nopol" value=" {{ $mbl->nopol }}">
                            <input type="file" name="fotombl">
                            <input type="submit" class="btn btn-primary" value="Upload">
                            {{ echo form_close() }}
                        {{ }} --}}
                        </div>

                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
