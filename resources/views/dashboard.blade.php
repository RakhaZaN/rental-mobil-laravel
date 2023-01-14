<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Business Frontpage - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="{{ asset('dist/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Font Awesome -->
    {{-- <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free-6.1.1-web/css/all.min.css') }}"> --}}
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-5">
            <a class="navbar-brand" href="#!">Web Rental Mobil</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                    @guest
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center my-5">
                        <h1 class="display-5 fw-bolder text-white mb-2">Sewa Mobil Mudah dengan hanya menggunakan
                            website.</h1>
                        <p class="lead text-white-50 mb-4">Berbagai Macam Tipe dan Merk Mobil Tersedia.</p>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                            <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#listcar">Booking Now!</a>
                            <!-- <a class="btn btn-outline-light btn-lg px-4" href="#!">Learn More</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Pricing section-->
    <section class="bg-light py-5 border-bottom">
        <div class="container ">
            <div class="text-center mb-5">
                <h2 class="fw-bolder">DAFTAR MOBIL</h2>
                <p class="lead mb-0">With our no hassle pricing plans</p>
            </div>
            <div class="container" id="listcar">
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
                        @foreach ($list_mobil as $key => $obj)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $obj->nopol }}</td>
                                <!-- <td>{{ $obj->merk_id }}</td> -->
                                <td>{{ $obj->merk }}</td>
                                <td>{{ $obj->produk }}</td>
                                <td>{{ $obj->warna }}</td>
                                <td>{{ $obj->biaya_sewa }}</td>
                                <td>{{ $obj->cc }}</td>
                                <!-- <td>{{ $obj->mobil_id }}</td> -->
                                <td>{{ $obj->tahun }}</td>
                                <td style="width:20%">{{ $obj->deskripsi }} </td>
                                <td>
                                    <div style="margin-bottom: 2%">
                                        <a class="btn btn-info"
                                            href="{{ route('mobil.show', ['detail' => $obj->nopol]) }}"
                                            style="margin-bottom: 2%">Detail</a>
                                        <!-- UNTUK LOGIC ROLE -->
                                        <a href="{{ route('sewa.form', ['nopol' => $obj->nopol]) }}"
                                            class="btn btn-primary">BOOKING NOW!</a>
                                    </div>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- Pricing card free-->


            </div>
        </div>
    </section>
    <!-- Features section-->
    <section class="py-5 border-bottom" id="features">
        <div class="container px-5 my-5">
            <div class="row gx-5">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i
                            class="bi bi-collection"></i></div>
                    <h2 class="h4 fw-bolder">Honda</h2>
                    <img src="{{ asset('mobil2.jpg') }}" alt="" class="img-thumbnail" width="250">

                </div>
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-building"></i>
                    </div>
                    <h2 class="h4 fw-bolder">Suzuki</h2>
                    <img src="{{ asset('mobil3.jpg') }}" alt="" class="img-thumbnail" width="250">
                </div>
                <div class="col-lg-4">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i>
                    </div>
                    <h2 class="h4 fw-bolder">Toyota</h2>
                    <img src="{{ asset('mobil1.jpg') }}" alt="" class="img-thumbnail" width="250">
                </div>
            </div>
        </div>
    </section>


    <!-- Testimonials section-->
    <section class="py-5 border-bottom">
        <div class="container px-5 my-5 px-5">
            <div class="text-center mb-5">
                <h2 class="fw-bolder">Customer testimonials</h2>
                <p class="lead mb-0">Our customers love working with us</p>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-6">
                    <!-- Testimonial 1-->
                    <div class="card mb-4">
                        <div class="card-body p-4">
                            <div class="d-flex">
                                <div class="flex-shrink-0"><i
                                        class="bi bi-chat-right-quote-fill text-primary fs-1"></i></div>
                                <div class="ms-4">
                                    <p class="mb-1">Thank you for putting together such a great product. We loved
                                        working with you and the whole team, and we will be recommending you to others!
                                    </p>
                                    <div class="small text-muted">- Client Name, Location</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial 2-->
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="d-flex">
                                <div class="flex-shrink-0"><i
                                        class="bi bi-chat-right-quote-fill text-primary fs-1"></i></div>
                                <div class="ms-4">
                                    <p class="mb-1">The whole team was a huge help with putting things together for
                                        our company and brand. We will be hiring them again in the near future for
                                        additional work!</p>
                                    <div class="small text-muted">- Client Name, Location</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact section-->

    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container px-5">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    {{-- <script src="js/scripts.js"></script> --}}
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    {{-- <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script> --}}
</body>

</html>
