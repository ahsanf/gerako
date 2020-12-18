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
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">GERAKO</a> -->

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="index.html"><img src="{{ asset('images') }}/logo_gerako.svg" alt="alternative"></a>

        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#header">Beranda<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#features">Fitur</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="about-gerako.html">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#contact">Kontak</a>
                </li>
                <li class="nav-item">
                    <a class="btn-outline-sm" href="login.html">Masuk</a>

                </li>
            </ul>


        </div>
    </nav>
    <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <h1>APLIKASI UNTUK <br><span id="js-rotating">OLAHRAGAWAN, PENGELOLA, SEMUA</span></h1>
                            <p class="p-large">GERAKO adalah aplikasi reservasi dan manajemen sarana olahraga. Segera daftarkan dirimu untuk menikmati bagaimana serunya berolahraga bersama GERAKO !</p>
                            <a class="btn-solid-lg page-scroll" href="register.html">Daftar</a>
                            <a class="btn-outline-lg page-scroll" href="login.html">Masuk</a>
                            <!-- <a class="btn-solid-lg page-scroll" href="#"><i class="fab fa-google-play"></i>PLAY STORE</a> -->
                        </div>
                    </div>
                    <!-- end of col -->
                    <div class="col-lg-6">
                        <div class="image-container">
                            <img class="img-fluid" src="{{ asset('images/header_gerako.png  ') }}" alt="alternative">
                        </div>
                        <!-- end of image-container -->
                    </div>
                    <!-- end of col -->
                </div>
                <!-- end of row -->
            </div>
            <!-- end of container -->
        </div>
        <!-- end of header-content -->
    </header>
    <!-- end of header -->
    <!-- end of header -->


    <!-- Testimonials -->
    <div class="slider-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="{{ asset('images/testimonial-1.jpg') }}" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Dengan GERAKO, reservasi sarana olahraga menjadi lebih mudah.</p>
                                            <p class="testimonial-author">Ahsan F - Olahragawan</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="{{ asset('images/testimonial-2.jpg') }}" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Tampilan User Interface GERAKO sangat friendly dan mudah digunakan.</p>
                                            <p class="testimonial-author">Rifki Ari- Developer</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="{{ asset('images/testimonial-3.jpg') }}" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Aplikasi GERAKO membuat sarana olaharaga saya menjadi lebih padat. Terimakasih GERAKO.</p>
                                            <p class="testimonial-author">Fikri Yansyah - Pengelola Sarana Olahraga</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="{{ asset('images/testimonial-4.jpg') }}" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Booking Sarana Olahraga sekarang menjadi lebih mudah.</p>
                                            <p class="testimonial-author">Amien - Olahragawan</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="{{ asset('images/testimonial-5.jpg') }}" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Dengan GERAKO saya menjadi dimudahkan dalam mengaturr jadwal lapangan saya.</p>
                                            <p class="testimonial-author">Ricardo Yunanto- Pengelola Forza Futsal</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="{{ asset('images/testimonial-6.jpg') }}" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">GERAKO menyediakan banyak pilihan saat kita ingin berolahraga. Hal tersebut membuat saya tidak lagi bingung saat berkeinginan untuk berolahraga.</p>
                                            <p class="testimonial-author">Vian - Olahrgawan</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of swiper-slide -->
                                <!-- end of slide -->

                            </div>
                            <!-- end of swiper-wrapper -->

                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->

                        </div>
                        <!-- end of swiper-container -->
                    </div>
                    <!-- end of slider-container -->
                    <!-- end of card slider -->

                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of slider-1 -->
    <!-- end of testimonials -->


    <!-- Features -->
    <div id="features" class="tabs">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>FITUR</h2>
                    <div class="p-heading p-large">GERAKO dirancang untuk semua orang yang ingin berolahraga secara mudah. Tidak hanya itu, GERAKO juga dirancang untuk memudahkan memanajemen sarana olahraga berbasis digital</div>
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
            <div class="row">

                <!-- Tabs Links -->
                <ul class="nav nav-tabs" id="GERAKOTabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="nav-tab-1" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true"><i class="fas fa-cog"></i>FITUR UTAMA</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" id="nav-tab-2" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false"><i class="fas fa-binoculars"></i>TRACKING</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-tab-3" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false"><i class="fas fa-search"></i>MONITORING</a>
                    </li> -->
                </ul>
                <!-- end of tabs links -->


                <!-- Tabs Content-->
                <div class="tab-content" id="GERAKOTabsContent">

                    <!-- Tab -->
                    <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
                        <div class="container">
                            <div class="row">

                                <!-- Icon Cards Pane -->
                                <div class="col-lg-4">
                                    <div class="card left-pane first">
                                        <div class="card-body">
                                            <div class="text-wrapper">
                                                <h4 class="card-title">Nearby</h4>
                                                <p>GERAKO mencarikan sarana olahraga terdekat dari lokasimu </p>
                                            </div>
                                            <div class="card-icon">
                                                <i class="fas fa-map-marker-alt"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card left-pane">
                                        <div class="card-body">
                                            <div class="text-wrapper">
                                                <h4 class="card-title">Booking Mudah</h4>
                                                <p>Dengan GERAKO booking sarana olahraga jadi lebih mudah</p>
                                            </div>
                                            <div class="card-icon">
                                                <i class="fas fa-save"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card left-pane">
                                        <div class="card-body">
                                            <div class="text-wrapper">
                                                <h4 class="card-title">Easy Payment</h4>
                                                <p>GERAKO bekerja sama dengan banyak gerbang pembayaran untuk memudahkan transaksimu !</p>
                                            </div>
                                            <div class="card-icon">
                                                <i class="far fa-gem"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of icon cards pane -->

                                <!-- Image Pane -->
                                <div class="col-lg-4">
                                    <img class="img-fluid" src="{{ asset('images/fitur_utama.png') }}" alt="alternative">
                                </div>
                                <!-- end of image pane -->

                                <!-- Icon Cards Pane -->
                                <div class="col-lg-4">
                                    <div class="card right-pane first">
                                        <div class="card-body">
                                            <div class="card-icon">
                                                <i class="far fa-calendar-check"></i>
                                            </div>
                                            <div class="text-wrapper">
                                                <h4 class="card-title">Cek Jadwal</h4>
                                                <p>Kamu dapat melihat jadwal booking di sarana olahraga dengan GERAKO</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card right-pane">
                                        <div class="card-body">
                                            <div class="card-icon">
                                                <i class="far fa-bookmark"></i>
                                            </div>
                                            <div class="text-wrapper">
                                                <h4 class="card-title">Activity</h4>
                                                <p>Track Record pengguna dalam berolahraga menggunakan GERAKO</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card right-pane">
                                        <div class="card-body">
                                            <div class="card-icon">
                                                <i class="fas fa-cube"></i>
                                            </div>
                                            <div class="text-wrapper">
                                                <h4 class="card-title">Match Lobby</h4>
                                                <p>Kamu dapat booking bersama-sama dengan teman melalui GERAKO</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of icon cards pane -->

                            </div>
                            <!-- end of row -->
                        </div>
                        <!-- end of container -->
                    </div>
                    <!-- end of tab-pane -->
                    <!-- end of tab -->

                    <!-- Tab -->
                    <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2">
                        <div class="container">
                            <div class="row">

                                <!-- Text And Icon Cards Area -->
                                <div class="col-md-8">
                                    <div class="text-area">
                                        <h3>Track Result Based On Your</h3>
                                        <p>After you've configured the app and settled on the data gathering techniques you can not start the information trackers and start collecting those <a class="turquoise" href="#">interesting details</a>. You can always
                                            change them.</p>
                                    </div>
                                    <!-- end of text-area -->

                                    <div class="icon-cards-area">
                                        <div class="card">
                                            <div class="card-icon">
                                                <i class="fas fa-cube"></i>
                                            </div>
                                            <div class="card-body">
                                                <h4 class="card-title">Good Foundation</h4>
                                                <p>Get a solid foundation for your self development efforts. Try GERAKO mobile app for any mobile platform</p>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-icon">
                                                <i class="far fa-bookmark"></i>
                                            </div>
                                            <div class="card-body">
                                                <h4 class="card-title">Easy Reading</h4>
                                                <p>Reading focus mode for long form articles, ebooks and other materials which involve large text areas</p>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-icon">
                                                <i class="far fa-calendar-check"></i>
                                            </div>
                                            <div class="card-body">
                                                <h4 class="card-title">Calendar Input</h4>
                                                <p>Schedule your appointments, meetings and periodical evaluations using the provided in-app calendar option</p>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-icon">
                                                <i class="far fa-file-code"></i>
                                            </div>
                                            <div class="card-body">
                                                <h4 class="card-title">Visual Editor</h4>
                                                <p>GERAKO provides a well designed and ergonomic visual editor for you to edit your notes and input data</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of icon cards area -->
                                </div>
                                <!-- end of col-md-8 -->
                                <!-- end of text and icon cards area -->

                            </div>
                            <!-- end of row -->
                        </div>
                        <!-- end of container -->
                    </div>
                    <!-- end of tab-pane -->
                    <!-- end of tab -->

                    <!-- Tab -->
                    <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-3">
                        <div class="container">
                            <div class="row">

                                <!-- Text And Icon Cards Area -->
                                <div class="col-md-8">
                                    <div class="icon-cards-area">
                                        <div class="card">
                                            <div class="card-icon">
                                                <i class="far fa-calendar-check"></i>
                                            </div>
                                            <div class="card-body">
                                                <h4 class="card-title">Calendar Input</h4>
                                                <p>Schedule your appointments, meetings and periodical evaluations using the provided in-app calendar option</p>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-icon">
                                                <i class="far fa-file-code"></i>
                                            </div>
                                            <div class="card-body">
                                                <h4 class="card-title">Visual Editor</h4>
                                                <p>GERAKO provides a well designed and ergonomic visual editor for you to edit your notes and input data</p>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-icon">
                                                <i class="fas fa-cube"></i>
                                            </div>
                                            <div class="card-body">
                                                <h4 class="card-title">Good Foundation</h4>
                                                <p>Get a solid foundation for your self development efforts. Try GERAKO mobile app for any mobile platform</p>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-icon">
                                                <i class="far fa-bookmark"></i>
                                            </div>
                                            <div class="card-body">
                                                <h4 class="card-title">Easy Reading</h4>
                                                <p>Reading focus mode for long form articles, ebooks and other materials which involve large text areas</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of icon cards area -->

                                    <div class="text-area">
                                        <h3>Monitoring Tools Evaluation</h3>
                                        <p>Monitor the evolution of your finances and health state using tools integrated in GERAKO. The generated real time reports can be filtered based on any <a class="turquoise" href="#">desired criteria</a>.</p>
                                    </div>
                                    <!-- end of text-area -->
                                </div>
                                <!-- end of col-md-8 -->
                                <!-- end of text and icon cards area -->
                            </div>
                            <!-- end of row -->
                        </div>
                        <!-- end of container -->
                    </div>
                    <!-- end of tab-pane -->
                    <!-- end of tab -->

                </div>
                <!-- end of tab-content -->
                <!-- end of tabs content -->

            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of tabs -->
    <!-- end of features -->


    <!-- Details 1 -->
    <div id="details" class="basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img class="img-fluid" src="{{ asset('images/splash.png') }}" alt="alternative">
                </div>
                <!-- end of col -->
                <div class="col-lg-6">
                    <div class="text-container">
                        <h3>Revolusi Reservasi Sarana Olahraga</h3>
                        <p>GERAKO hadir untuk mempermudah mengetahui jadwal ketersediaan lapangan, booking lapangan/tempat olahraga dengan efektif dan efisien, memudahkan pengelola lapangan/tempat olahraga dalam menyusun dan memanajemen proses usaha, meningkatkan
                            tingkat kesehatan masyarakat dengan segala akses olahraga yang mudah
                        </p>
                        <a class="btn-solid-reg popup-with-move-anim" href="#">Selengkapnya</a>
                    </div>
                    <!-- end of text-container -->
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of basic-2 -->
    <!-- end of details 1 -->


    <!-- Details 2 -->
    <div class="basic-3">
        <div class="second">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <h3>Memudahkan Kita untuk Berolahraga</h3>
                            <p>Aplikasi ini merupakan wujud dari Revolusi 4.0 yang memudahkan sistem booking sarana olahraga di setiap daerah di Indonesia. Aplikasi ini mampu menjadi terobosan dalam meningkatkan kualitas masyarakat dan pengelola sarana olahraga
                                dalam mengembangkan usaha di bidang olahraga.</p>
                            <a class="btn-solid-reg popup-with-move-anim" href="#">Selengkapnya</a>
                        </div>
                        <!-- end of text-container -->
                    </div>
                    <!-- end of col -->
                    <div class="col-lg-6">
                        <img class="img-fluid" src="{{ asset('images/detail.png') }}" alt="alternative">
                    </div>
                    <!-- end of col -->
                </div>
                <!-- end of row -->
            </div>
            <!-- end of container -->
        </div>
        <!-- end of second -->
    </div>
    <!-- end of basic-3 -->
    <!-- end of details 2 -->

    <!-- Download -->
    <div class="basic-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-5">
                    <div class="text-container">
                        <h2>Unduh <span class="blue">GERAKO</span> Sekarang</h2>
                        <p class="p-large">Mulai olahragamu dengan GERAKO ! Banyak manfaat yang dapat kamu peroleh bersama GERAKO</p>
                        <a class="btn-solid-lg" href="#"><i class="fab fa-apple"></i>App Store</a>
                        <a class="btn-solid-lg" href="#"><i class="fab fa-google-play"></i>Play Store</a>
                    </div>
                    <!-- end of text-container -->
                </div>
                <!-- end of col -->
                <div class="col-lg-6 col-xl-7">
                    <div class="image-container">
                        <img class="img-fluid" src="{{ asset('images/download_now.png') }}" alt="alternative">
                    </div>
                    <!-- end of img-container -->
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of basic-4 -->
    <!-- end of download -->


    <!-- Statistics -->
    <div class="counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Counter -->
                    <div id="counter">
                        <div class="cell">
                            <div class="counter-value number-count" data-count="2231">1</div>
                            <p class="counter-info">Pengguna</p>
                        </div>
                        <div class="cell">
                            <div class="counter-value number-count" data-count="709">1</div>
                            <p class="counter-info">Sarana Olahraga</p>
                        </div>
                        <div class="cell">
                            <div class="counter-value number-count" data-count="5921">1</div>
                            <p class="counter-info">Ulasan</p>
                        </div>
                        <h3>di Seluruh Indonesia</h3>
                    </div>
                    <!-- end of counter -->

                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of counter -->
    <!-- end of statistics -->


    <!-- Contact -->
    <div id="contact" class="form">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>KONTAK KAMI</h2>
                    <ul class="list-unstyled li-space-lg">
                        <li class="address">Jangan ragu untuk menelepon kami atau cukup gunakan formulir kontak di bawah ini</li>
                        <li><i class="fas fa-map-marker-alt"></i>Divistant Coworking Space, Yogyakarta, Indonesia</li>
                        <li><i class="fas fa-phone"></i><a class="blue" href="tel:081359888622">0813-5988-8622</a></li>
                        <li><i class="fas fa-envelope"></i><a class="blue" href="mailto:social.ahsanf@gmail.com">office@gerako.com</a></li>
                    </ul>
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
            <div class="row">
                <div class="col-lg-6 offset-lg-3">

                    <!-- Contact Form -->
                    <form id="contactForm" data-toggle="validator" data-focus="false">
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="cname" required>
                            <label class="label-control" for="cname">Nama</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control-input" id="cemail" required>
                            <label class="label-control" for="cemail">Email</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control-textarea" id="cmessage" required></textarea>
                            <label class="label-control" for="cmessage">Pesan Anda</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group checkbox">
                            <input type="checkbox" id="cterms" value="Agreed-to-Terms" required>Saya telah membaca dan menyetujui ketentuan GERAKO di <a href="privacy-policy.html">Ketentuan Pengguna</a> dan <a href="terms-conditions.html">Syarat & Ketentuan</a>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">Kirim Pesan</button>
                        </div>
                        <div class="form-message">
                            <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
                    <!-- end of contact form -->

                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of form -->
    <!-- end of contact -->


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
                <div class="col-md-6">
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
                    <p class="p-small">Copyright © 2020 <a href="https://divistant.com/dev">GERAKO</a> - All rights reserved</p>
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

