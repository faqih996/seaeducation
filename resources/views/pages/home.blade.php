@extends('layouts.app')

@section('content')

<!--header-->
<section class="header">
  <div class="container">
    <div class="row">
      <section class="col kiri align-self-center">
        <!--kiri-->
        <div class="text-md-left my-5">
          <h1 class="mt-4">
            We Provide the only program's taught by leading industry professionals
            <br />

            <br />

          </h1>
          <h3 class="mt-3">
            guaranteeing a job on board cruise ship and international 5 Stars hotels
            <br />
            on successful completion
          </h3>

          <div class="text-left my-5">
            <a class="btn btn-register-now" href="{{ url('register') }}" role="button"
              >REGISTER NOW</a
            >
          </div>
        </div>
      </section>

      <!--kanan-->
      <section class="col img-kanan d-none d-sm-block d-sm-none d-md-block">
        <img src="{{ url('frontend/assets/kapal.jpg') }}" alt="" />
      </section>
    </div>
  </div>
</section>
<!--endheader-->

<!--kenapa kapal pesiar-->
<section class="kenapakapalpesiar">
  <div class="container">
      <div class="row mt-5">
        <div class="col-md-6 col-lg-4" data-aos="fade-up">
              <div class="card service-card">
                <div class="card-body">
                  <h2 class="card-head-title">WHY IS WORKING ON A CRUISE SHIP AN OPTION?</h2>
                </div>
              </div>
        </div>

          <div class="col-sm-2 col-md-4">
            <div class="card service-card">
              <div class="service-card__img">
                <img src="{{ url('frontend/assets/cash.png') }}" alt=""  />
              </div>
              <div class="card-body">
                <h5 class="card-title">Dollar/Euro salary</h5>
                <p class="card-text">
                    Get a dollar / euro salary + a large bonus tip while working on the ship
                </p>
              </div>
            </div>
          </div>

          <div class="col-sm-2 col-md-4">
            <div class="card service-card">
              <div class="service-card__img">
                <img src="{{ url('frontend/assets/hotel.png') }}" alt="" />
              </div>
              <div class="card-body">
                <h5 class="card-title">Free Accomodation</h5>
                <p class="card-text">
                    Provided a place to stay and free of charge
                </p>
              </div>
            </div>
          </div>

          <div class="col-sm-2 col-md-4">
            <div class="card service-card">
              <div class="service-card__img">
                <img src="{{ url('frontend/assets/travel.png') }}" alt="" />
              </div>
              <div class="card-body">
                <h5 class="card-title">Travel The World</h5>
                <p class="card-text">
                    Opportunity to work while visiting a country for free
                </p>
              </div>
            </div>
          </div>

          <div class="col-sm-2 col-md-4">
            <div class="card service-card">
              <div class="service-card__img">
                <img src="{{ url('frontend/assets/study.png') }}" alt="" />
              </div>
              <div class="card-body">
                <h5 class="card-title">Minimum Education</h5>
                <p class="card-text">
                    It is enough that a minimum high school graduate can work on a cruise ship
                </p>
              </div>
            </div>
          </div>

          <div class="col-sm-2 col-md-4">
            <div class="card service-card">
              <div class="service-card__img">
                <img src="{{ url('frontend/assets/career.png') }}" alt="" />
              </div>
              <div class="card-body">
                <h5 class="card-title">Carrer</h5>
                <p class="card-text">
                    Many job and career opportunities are available on cruise ships
                </p>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</section>
<!--kenapa kapal pesiar end-->

<!--daftarsekarang-->
        <section class="daftarsekarang">
          <div class="text-align-center my-5">
            <a class="btn btn-register-now" href="{{ url('register') }}" role="button"
              >Register Now</a
            >
          </div>
        </section>
<!--daftarsekarang end-->

<!--apa itu sea education-->
<section class="seaedu">
  <div class="container">
    <!--<h2 class="section-seaedu-title">Apa itu Sea Education?</h2>
    <span class="section-seaeducation-line"></span>
    <p class="text-secondary text-center w-75 mx-auto">
      Sea Education adalah sekolah kapal pesiar yang menjamin para alumni untuk dapat bekerja di kapal pesiar atau hotel bintang 5. Mengingat banyaknya peminat Sea Education, maka kami kini hadir di 3 kota besar yaitu Jakarta, Medan, dan Bali.
    </p>-->

    <h2 class="section-seaedu-title2">Why Sea Education?</h2>
    <span class="section-seaeducation-line"></span>
  </div>

  <div class="row">
    <div class="col-lg-2 col-12">
      <div class="card seaedu-card shadow p-3 mb-5 bg-body">
        <div class="seaedu-card__img">
          <img src="{{ url('frontend/assets/mentor.png') }}" alt="" />
        </div>
        <div class="card-body ">
          <h5 class="card-seaedu-title">profesionals Mentor</h5>
          <p class="card-seatext">
            Reliable and professional instructors Mentors are professionals and experts in their fields
          </p>
        </div>
      </div>
    </div>

    <div class="col-lg-2 col-12">
      <div class="card seaedu-card shadow p-3 mb-5 bg-body">
        <div class="seaedu-card__img">
          <img src="{{ url('frontend/assets/consultancy.png') }}" alt="" />
        </div>
        <div class="card-body">
          <h5 class="card-seaedu-title">Free career consultation services</h5>
          <p class="card-seatext">
            Career consultation and job opportunities without worry and hassle
          </p>
        </div>
      </div>
    </div>

    <div class="col-lg-2 col-12">
      <div class="card seaedu-card shadow p-3 mb-5 bg-body">
        <div class="seaedu-card__img">
          <img src="{{ url('frontend/assets/certificate.png') }}" alt="" />
        </div>
        <div class="card-body">
          <h5 class="card-seaedu-title">Bersertifikat Resmi</h5>
          <p class="card-seatext">
            Selesaikan program pendidikan dan dapatkan sertifikat dari kami
          </p>
        </div>
      </div>
    </div>

    <div class="col-lg-2 col-12">
      <div class="card seaedu-card shadow p-3 mb-5 bg-body">
        <div class="seaedu-card__img">
          <img src="{{ url('frontend/assets/training.png') }}" alt="" />
        </div>
        <div class="card-body">
          <h5 class="card-seaedu-title">On the Job Training</h5>
          <p class="card-seatext">
            at International Hotels Malaysia, Singapore, China, Maldives, Thailand, etc and get paid
          </p>
        </div>
      </div>
    </div>

    <div class="col-lg-2 col-12">
      <div class="card seaedu-card shadow p-3 mb-5 bg-body">
        <div class="seaedu-card__img">
          <img src="{{ url('frontend/assets/hiring.png') }}" alt="" />
        </div>
        <div class="card-body">
          <h5 class="card-seaedu-title">Guaranteed Job</h5>
          <p class="card-seatext">
            On board cruise ship or international hotel
          </p>
        </div>
      </div>
    </div>

    <div class="col-lg-2 col-12">
      <div class="card seaedu-card shadow p-3 mb-5 bg-body">
        <div class="seaedu-card__img">
          <img src="{{ url('frontend/assets/document.png') }}" alt="" />
        </div>
        <div class="card-body">
          <h5 class="card-seaedu-title">Lowest and affordable course fee</h5>
          <p class="card-seatext">
            No need to worry about costs
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!--apa itu sea education end-->



<section class="section-lecturers pt-50">
    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-lg-12 col-12 text-left">
                <h2 class="lecturer-header">
                    Learn From Our Experts <br class="desktop">
                </h2>
                <span class="section-seaeducation-line"></span>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-12">
                <div class="item text-center">
                    <img
                        src="{{ url('frontend/assets/monica.png') }}"
                        height="150px" width="150px"
                        class="my-3 text-center"
                        alt=""
                        class="mb-4 rounded-circle"
                    />
                    <h2 class="title ">
                    Monica Alifiah</h2>
                    <h5>Mandarin Mentor</h5>
                    <p class="capt mt-3 text-left">
                        "Belajar Mandarin itu seru!
                        Walaupun Mandarin punya banyak Hanzi, Pinyin berserta tonesnya tapi tidak usah khawatir. "只要愿意并努力练习，所有的事都可以做到的" <br class="desktop"><br> Melalui Sea Education kamu akan belajar bahasa mandarin dari dasar hingga lancar "</p>
                </div>
            </div>

            <div class="col-lg-3 col-12">
                <div class="item text-center">
                    <img
                        src="{{ url('frontend/assets/pak nurman.png') }}"
                        height="150px" width="150px"
                        class="my-3 text-center"
                        alt=""
                        class="mb-4 rounded-circle"
                    />
                    <h2 class="title ">
                    Nurmansyah</h2>
                    <h5>Housekeeping Mentor</h5>
                    <p class="capt mt-3 text-left">
                        "Bekerja dikapal pesiar merupakan hal yang sangat fantastis dan berkesan untuk saya, bertemu dan bekerja dengan teman dari berbagai negara membuat saya memiliki banyak cerita berharga<br class="desktop"><br> Navigate Your Future Right Now"</p>
                </div>
            </div>

            <div class="col-lg-3 col-12">
                <div class="item text-center">
                    <img
                        src="{{ url('frontend/assets/steven.png') }}"
                        height="150px" width="150px"
                        class="my-3 text-center"
                        alt=""
                        class="mb-4 rounded-circle"
                    />
                    <h2 class="title ">
                    Stephen Gonnella</h2>
                    <h5>Native English Mentor</h5>
                    <p class="capt mt-3 text-left">
                        " I Having studied languages and applied linguistics at university, I value the role languages play in bridging people beyond our shores. I look forward to helping you make your career goals a reality.

                         <br class="desktop"> it's a great decision by you to Join Sea Education, where success is a fact, not a myth"</p>
                </div>
            </div>

            <div class="col-lg-3 col-12">
                <div class="item text-center">
                    <img
                        src="{{ url('frontend/assets/ari.png') }}"
                        height="150px" width="150px"
                        class="my-3 text-center"
                        alt=""
                        class="mb-4 rounded-circle"
                    />
                    <h2 class="title ">
                    Ari Wibisono</h2>
                    <h5>FnB Service Mentor</h5>
                    <p class="capt mt-3 text-left">
                        "Bekerja dikapal pesiar merupakan salah satu impian yang berhasil saya capai,  bertemu dengan orang-orang baru dan tempat-tempat menakjubkan.

                         <br class="desktop"><br>Ayo Wujudkan mimpi mu. bergabung bersama kami di sea education."</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- item bwa
            <div class="col-lg-3 col-12">
                <div class="item">
                    <img src="https://buildwithangga.com/themes/front/images/ic_konsultasi.svg" class="icon mb-5">
                    <h2 class="title">
                        Konsultasi
                    </h2>
                    <p class="capt mt-3">
                        Gabung dengan private group untuk <br class="desktop">
                        berkonsultasi dengan mentor kelas
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-12">
                <div class="item">
                    <img src="https://buildwithangga.com/themes/front/images/ic_access.svg" class="icon mb-5">
                    <h2 class="title">
                    Lifetime Access
                    </h2>
                    <p class="capt mt-3">
                    Mempelajari dan memahami materi <br class="desktop">
                    kelas lebih santai tanpa batasan waktu
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-12 d-none d-sm-block">
                <div class="item">
                    <img src="https://buildwithangga.com/themes/front/images/ic_project.svg" class="icon mb-5">
                    <h2 class="title">
                    Portfolio
                    </h2>
                    <p class="capt mt-3">
                    Pelajari dan miliki hasil karya untuk <br class="desktop">
                    membangun karir masa depan
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-12 d-none d-sm-block">
                <div class="item">
                    <img src="https://buildwithangga.com/themes/front/images/ic_design.svg" class="icon mb-5">
                    <h2 class="title">
                    Pixel Matters
                    </h2>
                    <p class="capt mt-3">
                    Projek kelas yang kita bangun <br class="desktop">
                    memiliki konsep design yang baik
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-12 d-none d-sm-block">
                <div class="item">
                    <img src="https://buildwithangga.com/themes/front/images/ic_offline.svg" class="icon mb-5">
                    <h2 class="title">
                    Offline Mode
                    </h2>
                    <p class="capt mt-3">
                    Pelajari materi kelas tanpa <br class="desktop">
                    harus terhubung dengan Internet
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-12 d-none d-sm-block">
                <div class="item">
                    <img src="https://buildwithangga.com/themes/front/images/ic_bahasa.svg" class="icon mb-5">
                    <h2 class="title">
                    #ProdukLokal
                    </h2>
                    <p class="capt mt-3">
                    Materi dibuat langsung oleh para <br class="desktop">
                    kreator di negara Indonesia
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-12 d-none d-sm-block">
                <div class="item">
                    <img src="https://buildwithangga.com/themes/front/images/ic_sertifikat.svg" class="icon mb-5">
                    <h2 class="title">
                    Bersertifikat Resmi
                    </h2>
                    <p class="capt mt-3">
                    Selesaikan kelas dan projek dan <br class="desktop">
                    dapatkan sertifikat dari kami
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>
-->

<!--lecturer
<section class="section-lecturers-heading" id="testimonialsHeading">
    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-lg-10 col-10 text-left">
                <h2 class="header-primary">
                     Platform Belajar Online <br class="desktop">
                    Berkurikulum Internasional </h2>
            </div>
        </div>
    </div>
  </section>

  <section class="section-lecturers-content" id="testimonialsContent">
    <div class="container-fluid">
      <div
        class="section-popular-travel row justify-content-center match-height"
      >
        <div class="col-sm-6 col-md-6 col-lg-4">
          <div class="card card-lecturers text-center">
            <div class="lecturers-content">
              <img
                src="{{ url('frontend/assets/monica.png') }}"
                height="150px" width="150px"
                class="my-3"
                alt=""
                class="mb-4 rounded-circle"
              />
              <h3 class="mb-4">Angga Risky</h3>
              <p class="lecturers">
                “ It was glorious and I could not stop to say wohooo for
                every single moment Dankeeeeee “
              </p>
            </div>
            <hr />
            <p class="trip-to mt-2">Trip to Ubud</p>
          </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-4">
          <div class="card card-lecturers text-center">
            <div class="lecturers-content">
              <img
                src="{{ url('frontend/assets/ari.png') }}"
                height="150px" width="150px"
                class="my-3"
                alt=""
                class="mb-4 rounded-circle"
              />
              <h3 class="mb-4">Shayna</h3>
              <p class="lecturers">
                “ The trip was amazing and I saw something beautiful in that
                Island that makes me want to learn more “
              </p>
            </div>
            <hr />
            <p class="trip-to mt-2">Trip to Nusa Penida</p>
          </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-4">
          <div class="card card-lecturers text-center">
            <div class="lecturers-content mb-auto">
              <img
                src="{{ url('frontend/assets/pak nurman.png') }}"
                height="150px" width="150px"
                class="my-3"
                alt=""
                class="mb-4 rounded-circle"
              />
              <h3 class="mb-4">Shabrina</h3>
              <p class="lecturers">
                “ I loved it when the waves was shaking harder — I was
                scared too “
              </p>
            </div>
            <hr />
            <p class="trip-to mt-2">Trip to Karimun Jawa</p>
          </div>
        </div>
      </div>

    </div>
  </section>
endlectur-->

<!--program-->
<section class="section-program">
    <div class="container-fluid">
        <h1 class="section-program-title mt-4 my-4">
            Program Sea Education
        </h1>
        <span class="section-seaeducation-line"></span>

        <div class="row">
            @foreach($programs as $program)
            <div class="col-lg-4 col-12">
                <div class="item">
                    <div class="card program-card shadow">
                        <div class="card-body ">
                            <p class="badge rounded-pill bg-color">{{ $program->class }} Class</p>
                            <h2 class="title">{{ $program->title }}</h2>
                                <p class="card-week">
                                Durasi 13 Minggu </p>
                                <p class="card-text">
                                On The Job Training
                                </p>
                                <p class="card-text batch">
                                    {{ $program->batch->name }}
                                </p>
                                <p class="card-text">
                                    Deadline Pendaftaran <span class="batasdaftar">{{ $program->end_reg }}</span>
                                </p>
                            <div class="button-group justify-content-center ">
                                <a href="{{ url('program/kurikulum', $program->slug) }}" class="button button-outline-primary text-decoration-none btn-sm">Kurikulum</button>
                                <a href="" class="button button-primary btn-sm">Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!--programend-->


<!--partner-->
<section class="section-networks" id="networks">
    <div class="container-fluid">
        <div class="row">
            <div class="col-4">
                <h2>Perusahaan Rekanan</h2>
                <p>
                Bekerja sama dengan Hotel
                <br />
                dan Agency terbaik di Indonesia & Dunia
                </p>
            </div>

            <div class="col-lg-2 col-3">
                <div class="item">
                    <img src="{{ url('frontend/assets/logosas@2x.png') }}" class="img-patner"  />
                </div>
            </div>

            <div class="col-lg-2 col-3">
                <div class="item align-top">
                    <img src="{{ url('frontend/assets/LMjkt@2x.png') }}" class="img-patner" />
                </div>
            </div>

            <div class="col-lg-2 col-3">
                <div class="item">
                    <img src="{{ url('frontend/assets/sedayu@2x.png') }}" class="img-patner" />
                </div>
            </div>
        </div>
    </div>
</section>
<!--partnerend-->

<!--testimoni-->
<section class="testimonial">
    <div class="container">
      <h1 class="section-tittle mt-4">
          Pendapat mereka tentang Sea Education
      </h1>
      <span class="section-testimonial-line"></span>
    </div>

    <div class="testimonials-carousel-wrap">
        <div class="listing-carousel-button listing-carousel-button-next"><i class="fa fa-caret-right" style="color: #fff"></i></div>
        <div class="listing-carousel-button listing-carousel-button-prev"><i class="fa fa-caret-left" style="color: #fff"></i></div>

        <div class="testimonials-carousel">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <!--first-->
                    <div class="swiper-slide">
                        <div class="testi-item">
                            <div class="testi-avatar"><img src="{{ url('frontend/assets/7@2x.jpg') }}"></div>
                            <div class="testimonials-text-before"><i class="fa fa-quote-right"></i></div>
                                <div class="testimonials-text">
                                    <div class="listing-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                        <p>Sangat senang bisa belajar di Sea Education, dengan materi yang asik dan mentor yang profesional, penuh praktek sehingga mudah untuk dimengerti</p>

                                    <div class="testimonials-avatar">
                                        <h3>Sohmo Happy</h3>
                                        <h4>Batch 5 Medan</h4>
                                    </div>
                                </div>
                            <div class="testimonials-text-after"><i class="fa fa-quote-left"></i></div>
                        </div>
                    </div>
                    <!--2nd-->
                    <div class="swiper-slide">
                        <div class="testi-item">
                            <div class="testi-avatar"><img src="{{ url('frontend/assets/8@2x.jpg') }}"></div>
                            <div class="testimonials-text-before"><i class="fa fa-quote-right"></i></div>
                                <div class="testimonials-text">
                                    <div class="listing-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                        <p>Selama pelatihan mentor selalu detail dan langsung ke realita dunia kerja, membuat saya yakin untuk menghadapi dunia kerja dikapal pesiar </p>

                                    <div class="testimonials-avatar">
                                        <h3>Joshua Raya</h3>
                                        <h4>Batch 5 Medan</h4>
                                    </div>
                                </div>
                            <div class="testimonials-text-after"><i class="fa fa-quote-left"></i></div>
                        </div>
                    </div>
                    <!--3rd-->
                    <div class="swiper-slide">
                        <div class="testi-item">
                            <div class="testi-avatar"><img src="{{ url('frontend/assets/9@2x.jpg') }}"></div>
                            <div class="testimonials-text-before"><i class="fa fa-quote-right"></i></div>
                                <div class="testimonials-text">
                                    <div class="listing-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                        <p>Kualitas pelatihannya sangat luar biasa, tanpa basic perhotelan saya tetap dapat mengikutinya dan dengan pembayaran yang flexible</p>

                                    <div class="testimonials-avatar">
                                        <h3>Reyhansyah Putra</h3>
                                        <h4>Batch 3 Medan</h4>
                                    </div>
                                </div>
                            <div class="testimonials-text-after"><i class="fa fa-quote-left"></i></div>
                        </div>
                    </div>
                    <!--4th-->
                    <div class="swiper-slide">
                        <div class="testi-item">
                            <div class="testi-avatar"><img src="{{ url('frontend/assets/14@2x.jpg') }}"></div>
                            <div class="testimonials-text-before"><i class="fa fa-quote-right"></i></div>
                                <div class="testimonials-text">
                                    <div class="listing-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                        <p>Pendidikannya gak cuma fokus ke pekerjaan tapi juga personal dan kemampuan berbicara bahasa asing, sehingga saat interview sudah tidak pakai hafalan soal lagi deh</p>

                                    <div class="testimonials-avatar">
                                        <h3>Aulia Khairunisa</h3>
                                        <h4>Batch 4 Jakarta</h4>
                                    </div>
                                </div>
                            <div class="testimonials-text-after"><i class="fa fa-quote-left"></i></div>
                        </div>
                    </div>
                    <!--5th-->
                    <div class="swiper-slide">
                        <div class="testi-item">
                            <div class="testi-avatar"><img src="{{ url('frontend/assets/15@2x.jpg') }}"></div>
                            <div class="testimonials-text-before"><i class="fa fa-quote-right"></i></div>
                                <div class="testimonials-text">
                                    <div class="listing-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                        <p>Saya sempat bingung untuk berkarier namun saya sangat percaya saya mampu bekerja di hospitality internasional, saya pun mengikuti pelatihan sea education dan kini saya sedang menunggu jadwal keberangkatan saya.</p>

                                    <div class="testimonials-avatar">
                                        <h3>Elsa Sinaga</h3>
                                        <h4>Batch 4 Jakarta</h4>
                                    </div>
                                </div>
                            <div class="testimonials-text-after"><i class="fa fa-quote-left"></i></div>
                        </div>
                    </div>
                    <!--6th-->
                    <div class="swiper-slide">
                        <div class="testi-item">
                            <div class="testi-avatar"><img src="{{ url('frontend/assets/16@2x.jpg') }}"></div>
                            <div class="testimonials-text-before"><i class="fa fa-quote-right"></i></div>
                                <div class="testimonials-text">
                                    <div class="listing-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                        <p>Pendidikan di Sea Education sangat menarik bahkan walaupun saya sudah memiliki pengalaman kerja, saya masih mendapat banyak pelajaran baru, mentornya juga bersedia memberikan arahan secara pribadi diluar kelas</p>

                                    <div class="testimonials-avatar">
                                        <h3>Daru Kusuma S</h3>
                                        <h4>Batch 4 Jakarta</h4>
                                    </div>
                                </div>
                            <div class="testimonials-text-after"><i class="fa fa-quote-left"></i></div>
                        </div>
                    </div>
                    <!--7th-->
                    <div class="swiper-slide">
                        <div class="testi-item">
                            <div class="testi-avatar"><img src="{{ url('frontend/assets/11@2x.jpg') }}"></div>
                            <div class="testimonials-text-before"><i class="fa fa-quote-right"></i></div>
                                <div class="testimonials-text">
                                    <div class="listing-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                        <p>Kini saya sudah bekerja di kapal pesiar dan menikmati hasil usaha saya berlajar di Sea Education. Saya bangga pernah belajar di Sea Education</p>

                                    <div class="testimonials-avatar">
                                        <h3>Putu Sudarma Yasa</h3>
                                        <h4>Batch 1 Bali</h4>
                                        <h4>Waiter at Explorer Dream Cruise Line</h4>
                                    </div>
                                </div>
                            <div class="testimonials-text-after"><i class="fa fa-quote-left"></i></div>
                        </div>
                    </div>
                    <!--8th-->
                    <div class="swiper-slide">
                        <div class="testi-item">
                            <div class="testi-avatar"><img src="{{ url('frontend/assets/12@2x.jpg') }}"></div>
                            <div class="testimonials-text-before"><i class="fa fa-quote-right"></i></div>
                                <div class="testimonials-text">
                                    <div class="listing-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                        <p>Saat saya belajar di Sea Education pengetahuan saya bertambah dan sekarang saya telah meraih mimpi saya bekerja dikapal pesiar, saya akan berusaha untuk terus meningkatkan karir saya</p>

                                    <div class="testimonials-avatar">
                                        <h3>Andre Dian Wijaya</h3>
                                        <h4>Batch 1 Bali</h4>
                                        <h4>Housekeeping at Explorer Dream Cruise Line</h4>
                                    </div>
                                </div>
                            <div class="testimonials-text-after"><i class="fa fa-quote-left"></i></div>
                        </div>
                    </div>
                    <!--9th-->
                    <div class="swiper-slide">
                        <div class="testi-item">
                            <div class="testi-avatar"><img src="{{ url('frontend/assets/13@2x.jpg') }}"></div>
                            <div class="testimonials-text-before"><i class="fa fa-quote-right"></i></div>
                                <div class="testimonials-text">
                                    <div class="listing-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                        <p>Awalnya saya ragu untuk berkarier di kapal pesiar, setelah saya ikuti pelatihan sea education saya mendapat pengetahuan membuat saya akhirnya berkarir dikapal pesiar dan berkeliling dunia seperti yang saya inginkan</p>
                                    <div class="testimonials-avatar">
                                        <h3>Putu Ayu Astiti</h3>
                                        <h4>Batch 1 Bali</h4>
                                        <h4>Bar Waiter at Explorer Dream Cruise Line</h4>
                                    </div>
                                </div>
                            <div class="testimonials-text-after"><i class="fa fa-quote-left"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tc-pagination"></div>
    </div>
</section>
<!--testimoniend-->


<!--daftarsekarang-->
        <section class="daftarsekarang2">
          <div class="text-align-center">
            <h3>Siap Kemudikan Masa Depanmu?</h3>
            <a class="btn btn-register-now" href="{{ url('register') }}" role="button"
              >Register Now</a
            >
          </div>
        </section>
<!--daftarsekarang end-->



@endsection
