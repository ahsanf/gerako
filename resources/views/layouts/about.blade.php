@include('layouts.app')

<body data-spy="scroll" data-target=".fixed-top">

    <!-- Preloader -->
    <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->


    <!-- Navigation -->
    <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll"href="index.html">Leno</a> -->

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="index.html"><img src="images/logo_gerako.svg" alt="alternative"></a>

        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{ route('home') }}">Beranda<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#features">Fitur</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#">Tentang</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#contact">Kontak</a>
                </li>

                <li class="nav-item">
                    <a class="btn-outline-sm" href="{{ route('login') }}">Masuk</a>

                </li>


            </ul>


        </div>
    </nav>
    <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img src="images/logo_full.svg" alt="">
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </header>
    <!-- end of ex-header -->
    <!-- end of header -->


    <!-- Breadcrumbs -->
    <div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                        <a href="index.html">Beranda</a><i class="fa fa-angle-double-right"></i><span>Tentang GERAKO</span>
                    </div>
                    <!-- end of breadcrumbs -->
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->


    <!-- Terms Content -->
    <div class="ex-basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="text-container">
                        <h3>Deskripsi Singkat</h3>
                        <p style="text-align: justify;">GERAKO merupakan aplikasi marketplace sarana olahraga, yang memudahkan masyarakat dan pengelola sarana olahraga dalam memanajemen kegiatan olahraga ditengah kesibukan masyarakat yang padat. Aplikasi ini memiliki banyak fitur tidak
                            hanya untuk reservasi 1 jenis lapangan olahraga saja, tersedia juga sarana olahraga lain seperti futsal, voli, basket, renang, badminton, dll. Pengguna dapat reservasi lapangan olahraga sesuai dengan waktu dan budget yang ditentukan.
                            Terdapat juga Track Record sudah berapa kali pengguna berolahraga beserta Gerako Rewards/point. GERAKO juga mendukung pembayaran secara online dan offline. Aplikasi ini sangat cocok bagi masyarakat yang ingin olahraga ditengah
                            kesibukan.
                        </p>

                    </div>
                    <div class="text-container">
                        <h3>Arti GERAKO</h3>
                        <p style="text-align: justify;">GERAKO diambil dari bahasa jawa 'gerako' dari kata obaho yang berati geraklah, agar pengucapannya mudah diingat oleh masyarakat, kami menyebutnya dengan GERAKO, jadi GERAKO ini adalah ajakan untuk bergerak terutama pada aktivitas
                            olaharga, warna biru muda di gerako ini melambangkan kekuatan dan kebebasan

                        </p>

                    </div>
                    <!-- end of text-container -->

                </div>
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of ex-basic -->
    <!-- end of terms content -->


    <!-- Breadcrumbs -->
    <div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                        <a href="index.html">Beranda</a><i class="fa fa-angle-double-right"></i><span>Tentang Gerako</span>
                    </div>
                    <!-- end of breadcrumbs -->
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->



    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-col">
                        <h4>Tentang GERAKO</h4>
                        <p>GERAKO merupakan aplikasi marketplace sarana olahraga, yang memudahkan masyarakat dan pengelola sarana olahraga dalam memanajemen kegiatan olahraga ditengah kesibukan masyarakat yang padat.</p>
                    </div>
                </div>
                <!-- end of col -->

                <!-- end of col -->
                <div class="col-md-8">
                    <div class="footer-col last">
                        <h4>Media Sosial</h4>
                        <span class="fa-stack">
                            <a href="#">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-google-plus-g fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="https://instagram.com/ahsanf_" target="_blank">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-linkedin-in fa-stack-1x"></i>
                            </a>
                        </span>
                    </div>
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of footer -->
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2020 <a href="https://gerako.id">Gerako</a> - All rights reserved</p>
                </div>
                <!-- end of col -->
            </div>
            <!-- enf of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of copyright -->
    <!-- end of copyright -->


  @include('layouts.script')
</body>

</html>
