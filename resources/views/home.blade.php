<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css" rel="stylesheet">

<!-- Menghubungkan view dengan template utama  -->
@extends('main')

<!-- cara penulisan isi section yang pendek -->
<!-- @section('title', 'Halaman Home') -->

<!-- cara penulisan isi section yang panjang -->
@section('content')

<!-- main-slider -->
<section class="w3l-main-slider" id="home">
    <div class="companies20-content">
        <div class="owl-one owl-carousel owl-theme">
            <div class="item">
                <li>
                    <div class="slider-info banner-view bg bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg">
                                    <h6>أُطْلُبِ الْعِلْمَ مِنَ الْمَهْدِ إِلَى اللَّحْدِ</h6>
                                    <p class="mt-4 pr-lg-4">Artinya: “Tuntutlah ilmu dari buaian (bayi) hingga liang lahat.”</p>
                                    <a class="btn btn-style btn-primary mt-sm-5 mt-4 mr-2" href="https://vrdarulmuarifalaziziyah.vercel.app/"> Ayo Mondok !</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
            <div class="item">
                <li>
                    <div class="slider-info  banner-view banner-top1 bg bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg">
                                    <h6>وَمَنْ سَلَكَ طَرِيقًا يَلْتَمِسُ فِيهِ عِلْمًا سَهَّلَ اللَّهُ لَهُ بِهِ طَرِيقًا إِلَى الْجَنَّةِ </h6>
                                    <p class="mt-4 pr-lg-4">Artinya: “Siapa yang menempuh jalan untuk mencari ilmu, maka Allah akan mudahkan baginya jalan menuju surga.” (HR. Muslim, no. 2699) </p>
                                    <a class="btn btn-style btn-primary mt-sm-5 mt-4 mr-2" href="https://vrdarulmuarifalaziziyah.vercel.app/"> Ayo Mondok !</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
            <div class="item">
                <li>
                    <div class="slider-info banner-view banner-top2 bg bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg">
                                    <h6>طَلَبُ اْلعِلْمْ فَرِثْضَةٌ عَلَى كُلِّ مُسْلِمٍ</h6>
                                    <p class="mt-4 pr-lg-4">Artinya: "Menuntut ilmu adalah kewajiban bagi setiap individu muslim."</p>
                                    <a class="btn btn-style btn-primary mt-sm-5 mt-4 mr-2" href="https://vrdarulmuarifalaziziyah.vercel.app/"> Ayo Mondok !</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
            <div class="item">
                <li>
                    <div class="slider-info banner-view banner-top3 bg bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg">
                                    <h6>مَنْ أَرَادَ الدُّنْيَا فَعَلَيْهِ بِالْعِلْمِ, وَمَنْ أَرَادَ الأَخِرَةَ فَعَلَيْهِ بِالْعِلْمِ, وَمَنْ أَرَادَهُمَا فَعَلَيْهِ بِالْعِلْمِ</h6>
                                    <p class="mt-4 pr-lg-4">“Barang siapa menginginkan kebahagian dunia, maka tuntutlah ilmu dan barang siapa yang ingin kebahagian akhirat, tuntulah ilmu dan barangsiapa yang menginginkan keduanya, tuntutlah ilmu pengetahuan.</p>
                                    <a class="btn btn-style btn-primary mt-sm-5 mt-4 mr-2" href="https://vrdarulmuarifalaziziyah.vercel.app/"> Ayo Mondok !</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
        </div>
    </div>

    <div class="waveWrapper waveAnimation">
        <svg viewBox="0 0 500 150" preserveAspectRatio="none">
            <path d="M-5.07,73.52 C149.99,150.00 299.66,-102.13 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none;"></path>
        </svg>
    </div>
</section>
<!-- /visi dan misi -->
<section class="w3l-vision-mission" id="team">
    <div class="vision-mission pb-5" id="vision-mission">
        <div class="container py-lg-5 py-md-4 py-2">
            <h5 class="title-small text-center mb-1">Tentang Kami</h5>
            <h3 class="title-big text-center mb-sm-5 mb-4">Visi dan Misi</h3>
            <div class="row">
                <div class="col-lg-6 col-md-6 item">
                    <div class="card">
                        <div class="card-body vision-details bg-secondary text-dark">
                            <h4 class="mb-4">Visi</h4>
                           <ul>
                            <li><i class="bi bi-arrow-right"></i></i> Mendirikan shalat 5 waktu berjamaah dan ibadah wajib lainnya</li>
                            <li><i class="bi bi-arrow-right"></i></i> Mendirikan segala shalat sunnah, berzikir, dan ibadah sunnah lainnya</li>
                            <li><i class="bi bi-arrow-right"></i></i> Mengikuti rutinitas belajar</li>
                            <li><i class="bi bi-arrow-right"></i></i> Melaksanakan rutinitas kebersihan</li>
                            <li><i class="bi bi-arrow-right"></i></i> Memakai pakaian Islami</li>
                            <li><i class="bi bi-arrow-right"></i></i> Melaksanakan Aklakul Kharimah</li>
                            <li><i class="bi bi-arrow-right"></i></i> Membayar sedekah bulanan</li>

                           </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 item">
                    <div class="card">
                        <div class="card-body mission-details bg-secondary text-dark">
                            <h4 class="mb-4">Misi</h4>
                            <ul class="mission-list">
                                <li><i class="bi bi-arrow-right"></i></i> Meninggalkan Rokok dan Narkoba</li>
                                <li><i class="bi bi-arrow-right"></i></i> Meninggalkan Berhubungan, Berbicara, Berlkhawat  Pria Dan Wanita yang Bukan Mahram</li>
                                <li><i class="bi bi-arrow-right"></i></i> Meninggalkan Berbuat Makar dan Keributan yang Menggangg Ketentraman Orang Lain</li>
                                <li><i class="bi bi-arrow-right"></i></i> Meninggalkan Segala Larangan Allah</li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /sejarah -->
<section class="w3l-courses">
    <div class="blog pb-5" id="history">
        <div class="container py-lg-5 py-md-4 py-2">
            <h5 class="title-small text-center mb-1">Mengetahui Sejarah Kami</h5>
            <h3 class="title-big text-center mb-sm-5 mb-4">Sejarah Pondok Pesantren</h3>
            <div class="row">
                <div class="col-lg-12 item">
                    <div class="card">
                        <div class="card-body course-details">
                            <p class="course-desc">
                                Pondok pesantren, or Islamic boarding schools, have a long-standing tradition in Indonesia,
                                serving as centers of religious education and cultural preservation. 
                                Established since the spread of Islam in the archipelago, these institutions have evolved 
                                into significant educational entities that combine traditional Islamic teachings with modern 
                                educational practices.
                            </p>
                            <p>
                                The term "pondok" refers to a small hut or lodging, where students, known as "santri," 
                                live and study under the guidance of a religious teacher, often called "kiai." 
                                Throughout the years, pondok pesantren have played a crucial role in shaping 
                                the moral and ethical foundations of Muslim communities, fostering a sense of community 
                                and shared values among the youth.
                            </p>
                            <p>
                                Today, many pondok pesantren continue to thrive, adapting their curriculums to 
                                include secular subjects while maintaining their commitment to Islamic education. 
                                They serve as vital institutions in the socio-cultural landscape of Indonesia, 
                                promoting not only religious knowledge but also critical thinking and community service.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- middle -->
<section class="w3l-team py-5" id="team">
    <div class="call-w3 py-lg-5 py-md-4">
        <div class="container">
            <div class="row main-cont-wthree-2">
                <div class="col-lg-5 feature-grid-left">
                    <h5 class="title-small mb-1">Pondok Pesantren</h5>
                    <h3 class="title-big mb-4">Darul Muarif Al Aziziyah</h3>
                    <p class="text-para">Dayah darul muarrif Al Aziziyah berdiri pada tahun 1990 di Padang Sakti, muara satu, Lhokseumawe, yang di pimpin oleh ustadz Zakaria.</p>
                    <p class="mt-1">
                    </p>
                </div>
                <div class="col-lg-7 feature-grid-right mt-lg-0 mt-5">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="box17">
                                <a href="#url"><img src="{{ asset ('img/pimpinan.jpg') }}" alt="" class="img-fluid radius-image" /></a>
                                <div class="box-content">
                                    <h3 class="title"><a href="#url">Abana Syarifuddin</a></h3>
                                    <span class="post">Pimpinan Ponpes</span>
                                     <ul class="social">
                                        <li>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-sm-0 mt-3">
                            <div class="box17">
                                <a href="#url"><img src="{{ asset ('img/dewan_guru1.jpg') }}" alt="" class="img-fluid radius-image" /></a>
                                <div class="box-content">
                                    <h3 class="title"><a href="#url">Ustadz Rajulaini</a></h3>
                                    <span class="post">Dewan Guru</span>
                                    <ul class="social">
                                        <li>
                                            <!-- <a href="#" class="facebook"> 
                                                <span class="fa fa-facebook-f"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="twitter">
                                                <span class="fa fa-twitter"></span>
                                            </a>-->
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-lg-4 mt-3">
                            <div class="box17">
                                <a href="#url"><img src="{{ asset ('img/dewan_guru2.jpg') }}" alt="" class="img-fluid radius-image" /></a>
                                <div class="box-content">
                                    <h3 class="title"><a href="#url">Ustadz Rahmat</a></h3>
                                    <span class="post">Dewan Guru</a></span>
                                    <ul class="social">
                                        <li>
                                            <!-- <a href="#" class="facebook"> 
                                                <span class="fa fa-facebook-f"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="twitter">
                                                <span class="fa fa-twitter"></span>
                                            </a>-->
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-lg-4 mt-3">
                            <div class="box17">
                                <a href="#url"><img src="{{ asset ('img/dewan_guru3.jpg') }}" alt="" class="img-fluid radius-image" /></a>
                                <div class="box-content">
                                    <h3 class="title"><a href="#url">Ustadz Deni Agustian</a></h3>
                                    <span class="post">Dewan Guru</a></span>
                                    <ul class="social">
                                        <li>
                                            <!--<a href="#" class="facebook">
                                                <span class="fa fa-facebook-f"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="twitter">
                                                <span class="fa fa-twitter"></span>
                                            </a>-->
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-lg-4 mt-3">
                            <div class="box17">
                                <a href="#url"><img src="{{ asset ('img/dewan_guru4.jpg') }}" alt="" class="img-fluid radius-image" /></a>
                                <div class="box-content">
                                    <h3 class="title"><a href="#url">Ustadz anwar</a></h3>
                                    <span class="post">Dewan Guru</a></span>
                                    <ul class="social">
                                        <li>
                                            <!--<a href="#" class="facebook">
                                                <span class="fa fa-facebook-f"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="twitter">
                                                <span class="fa fa-twitter"></span>
                                            </a>-->
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-lg-4 mt-3">
                            <div class="box17">
                                <a href="#url"><img src="{{ asset ('img/dewan_guru5.jpg') }}" alt="" class="img-fluid radius-image" /></a>
                                <div class="box-content">
                                    <h3 class="title"><a href="#url">Ustadz Damanhuri</a></h3>
                                    <span class="post">Dewan Guru</a></span>
                                    <ul class="social">
                                        <li>
                                            <!--<a href="#" class="facebook">
                                                <span class="fa fa-facebook-f"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="twitter">
                                                <span class="fa fa-twitter"></span>
                                            </a>-->
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-lg-4 mt-3">
                            <div class="box17">
                                <a href="#url"><img src="{{ asset ('img/dewan_guru6.jpg') }}" alt="" class="img-fluid radius-image" /></a>
                                <div class="box-content">
                                    <h3 class="title"><a href="#url">Ustadz junaidi</a></h3>
                                    <span class="post">Dewan Guru</a></span>
                                    <ul class="social">
                                        <li>
                                            <!--<a href="#" class="facebook">
                                                <span class="fa fa-facebook-f"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="twitter">
                                                <span class="fa fa-twitter"></span>
                                            </a>-->
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-lg-4 mt-3">
                            <div class="box17">
                                <a href="#url"><img src="{{ asset ('img/dewan_guru7.jpg') }}" alt="" class="img-fluid radius-image" /></a>
                                <div class="box-content">
                                    <h3 class="title"><a href="#url">Ustadz Muhammad Danil</a></h3>
                                    <span class="post">Dewan Guru</a></span>
                                    <ul class="social">
                                        <li>
                                            <!--<a href="#" class="facebook">
                                                <span class="fa fa-facebook-f"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="twitter">
                                                <span class="fa fa-twitter"></span>
                                            </a>-->
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-lg-4 mt-3">
                            <div class="box17">
                                <a href="#url"><img src="{{ asset ('img/dewanguru8.jpg') }}" alt="" class="img-fluid radius-image" /></a>
                                <div class="box-content">
                                    <h3 class="title"><a href="#url">Ustadz Jamali</a></h3>
                                    <span class="post">Dewan Guru</a></span>
                                    <ul class="social">
                                        <li>
                                            <!--<a href="#" class="facebook">
                                                <span class="fa fa-facebook-f"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="twitter">
                                                <span class="fa fa-twitter"></span>
                                            </a>-->
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
                    <!-- //prestasi -->
                    <section class="w3l-achievements">
                        <div class="blog pb-5" id="achievements">
                            <div class="container py-lg-5 py-md-4 py-2">
                                <h5 class="title-small text-center mb-1">Our Achievements</h5>
                                <h3 class="title-big text-center mb-1">Prestasi Kami</h3>
                                                <p class="text-center mb-sm-5 mb-4">
                                                    Di Dayah darul muarrif Al aziziyyah, juga mengadakan berbagai macam kegiatan perlombaan guna untuk membuat santriwan dan santriwati semakin bertumbuh dan mengembangkan bakatnya.
                                                    Di antaranya seperti, syarhil Qur'an, pidato, baca kitab, sayembara,  dalail khairat, tilawah sampai cerdas cermat.
                                                    Bagi santri yang memenangkan perlombaan akan di berikan berbagai macam hadiah sebagai apresiasi dan untuk menambah semangat para pelajar ke depannya.
                                                </p>
                                <!-- Gallery -->
                                    <div class="row">
                                      <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                                        <img
                                          src="{{ asset ('img/prestasi 1.jpg') }}"
                                          class="w-100 shadow-1-strong rounded mb-4"
                                          alt="Boat on Calm Water"
                                        />

                                        <img
                                          src="{{ asset ('img/prestasi 2.jpg') }}"
                                          class="w-100 shadow-1-strong rounded mb-4"
                                          alt="Wintry Mountain Landscape"
                                        />
                                      </div>

                                      <div class="col-lg-4 mb-4 mb-lg-0">
                                        <img
                                          src="{{ asset ('img/prestasi 3.jpg') }}"
                                          class="w-100 shadow-1-strong rounded mb-4"
                                          alt="Mountains in the Clouds"
                                        />

                                        <img
                                          src="{{ asset ('img/prestasi 4.jpg') }}"
                                          class="w-100 shadow-1-strong rounded mb-4"
                                          alt="Boat on Calm Water"
                                        />
                                      </div>

                                      <div class="col-lg-4 mb-4 mb-lg-0">
                                        <img
                                          src="{{ asset ('img/prestasi 5.jpg') }}"
                                          class="w-100 shadow-1-strong rounded mb-4"
                                          alt="Waves at Sea"
                                        />

                                        <img
                                          src="{{ asset ('img/prestasi 6.jpg') }}"
                                          class="w-100 shadow-1-strong rounded mb-4"
                                          alt="Yosemite National Park"
                                        />
                                      </div>
                                    </div>
                                    <!-- Gallery -->
                            </div>
                        </div>
                    </section>

@endsection