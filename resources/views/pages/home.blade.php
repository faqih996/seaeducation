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
            Mulai karir internasionalmu
            <br />
            di Hotel dan
            <br />
            Kapal Pesiar
          </h1>
          <p class="mt-3">
            Sea Education adalah pelatihan dan penyaluran kerja
            <br />
            ke hotel dan kapal pesiar.
          </p>

          <div class="text-left my-5">
            <a class="btn btn-register-now" href="{{ url('register') }}" role="button"
              >Daftar Sekarang</a
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
                  <h2 class="card-head-title">KENAPA BEKERJA DIKAPAL PESIAR MENJADI PILIHAN?</h2>
                </div>
              </div>
        </div>

          <div class="col-sm-2 col-md-4">
            <div class="card service-card">
              <div class="service-card__img">
                <img src="{{ url('frontend/assets/cash.png') }}" alt=""  />
              </div>
              <div class="card-body">
                <h5 class="card-title">Gajian Dollar/Euro</h5>
                <p class="card-text">
                  Mendapat gaji dollar / euro + bonus tip yang besar selama bekerja dikapal
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
                <h5 class="card-title">Free Akomodasi</h5>
                <p class="card-text">
                  Disediakan tempat tinggal dan tidak dipungut biaya apapun
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
                <h5 class="card-title">Keliling Dunia</h5>
                <p class="card-text">
                  Kesempatan bekerja sambil berkunjung kesuatu negara secara Gratis
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
                <h5 class="card-title">Minimal Pendidikan</h5>
                <p class="card-text">
                  Cukup lulusan minimal SMA sudah dapat bekerja dikapal pesiar
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
                <h5 class="card-title">Karir</h5>
                <p class="card-text">
                  Banyak peluang kerja dan karir tersedia di kapal pesiar
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
              >Daftar Sekarang</a
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

    <h2 class="section-seaedu-title2">Kenapa Sea Education?</h2>
    <span class="section-seaeducation-line"></span>
  </div>

  <div class="row mt-5">
    <div class="col-md-2 col-md-2">
      <div class="card seaedu-card">
        <div class="seaedu-card__img">
          <img src="{{ url('frontend/assets/mentor.png') }}" alt="" />
        </div>
        <div class="card-body">
          <h5 class="card-seaedu-title">Mentor Professional</h5>
          <p class="card-seatext">
            Mentor merupakan professional dan expert di bidangnya
          </p>
        </div>
      </div>
    </div>

    <div class="col-md-2 col-md-2">
      <div class="card seaedu-card">
        <div class="seaedu-card__img">
          <img src="{{ url('frontend/assets/consultancy.png') }}" alt="" />
        </div>
        <div class="card-body">
          <h5 class="card-seaedu-title">Free Konsultasi karir</h5>
          <p class="card-seatext">
            Berkonsulatsi karir dan peluang kerja tanpa khawatir dan ribet
          </p>
        </div>
      </div>
    </div>

    <div class="col-sm-2 col-sm-2">
      <div class="card seaedu-card">
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

    <div class="col-sm-2 col-sm-2">
      <div class="card seaedu-card">
        <div class="seaedu-card__img">
          <img src="{{ url('frontend/assets/hotel.png') }}" alt="" />
        </div>
        <div class="card-body">
          <h5 class="card-seaedu-title">Praktek Kerja</h5>
          <p class="card-seatext">
            Program Praktek langsung di Hotel dan Restaurant berbintang 4-5
          </p>
        </div>
      </div>
    </div>

    <div class="col-sm-2 col-sm-2">
      <div class="card seaedu-card">
        <div class="seaedu-card__img">
          <img src="{{ url('frontend/assets/hiring.png') }}" alt="" />
        </div>
        <div class="card-body">
          <h5 class="card-seaedu-title">Jaminan Kerja</h5>
          <p class="card-seatext">
            100% jaminan PASTI kerja dan Disalurkan secara TEPAT
          </p>
        </div>
      </div>
    </div>

    <div class="col-sm-2 col-sm-2">
      <div class="card seaedu-card">
        <div class="seaedu-card__img">
          <img src="{{ url('frontend/assets/document.png') }}" alt="" />
        </div>
        <div class="card-body">
          <h5 class="card-seaedu-title">FREE Dokumen Kepelautan</h5>
          <p class="card-seatext">
            Tak perlu khawatir dengan tambahan biaya pengurusan dokumen
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!--apa itu sea education end-->

<!--partner-->
<section class="section-networks" id="networks">
    <div class="container align-content-center">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>Perusahaan Rekanan</h2>
                    <p>
                    Bekerja sama dengan Hotel
                    <br />
                    dan Agency terbaik di Indonesia & Dunia
                    </p>
                </div>
                <div class="col-md-4">
                    <h2>Perusahaan Rekanan</h2>
                    <p>
                    Bekerja sama dengan Hotel
                    <br />
                    dan Agency terbaik di Indonesia & Dunia
                    </p>
                </div>
            </div>
        </div>

            <div class="col-md-4">
                <img src="{{ url('frontend/assets/logosas@2x.png') }}" class="img-patner"  />
            </div>
            <div class="col-md-4">
                <img src="{{ url('frontend/assets/LMjkt@2x.png') }}" class="img-patner" />
            </div>
            <div class="col-md-4">
                <img src="{{ url('frontend/assets/sedayu@2x.png') }}" class="img-patner" />
            </div>
        </div>
    </div>
</section>
<!--partnerend-->

<!--program-->

<!--programend-->


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
                                      <a href="#" class="text-link"></a>
                                      <div class="testimonials-avatar">
                                          <h3>Sohmo Happy</h3>
                                          <h4>Batch 5 Medan</h4>
                                      </div>
                                  </div>
                                  <div class="testimonials-text-after"><i class="fa fa-quote-left"></i></div>
                              </div>
                          </div>

                          <!--second--->
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
                                      <a href="#" class="text-link"></a>
                                      <div class="testimonials-avatar">
                                          <h3>Joshua Raya</h3>
                                          <h4>Batch 5 Medan</h4>
                                      </div>
                                  </div>
                                  <div class="testimonials-text-after"><i class="fa fa-quote-left"></i></div>
                              </div>
                          </div>

                          <!--third-->
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
                                      <a href="#" class="text-link"></a>
                                      <div class="testimonials-avatar">
                                          <h3>Reyhansyah Putra</h3>
                                          <h4>Batch 3 Medan</h4>
                                      </div>
                                  </div>
                                  <div class="testimonials-text-after"><i class="fa fa-quote-left"></i></div>
                              </div>
                          </div>

                          <!--nine-->
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
                                      <a href="#" class="text-link"></a>
                                      <div class="testimonials-avatar">
                                          <h3>Aulia Khairunisa</h3>
                                          <h4>Batch 4 Jakarta</h4>
                                      </div>
                                  </div>
                                  <div class="testimonials-text-after"><i class="fa fa-quote-left"></i></div>
                              </div>
                          </div>

                          <!--ten-->
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
                                      <a href="#" class="text-link"></a>
                                      <div class="testimonials-avatar">
                                          <h3>Elsa Sinaga</h3>
                                          <h4>Batch 4 Jakarta</h4>
                                      </div>
                                  </div>
                                  <div class="testimonials-text-after"><i class="fa fa-quote-left"></i></div>
                              </div>
                          </div>

                          <!--eleven-->
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
                                      <a href="#" class="text-link"></a>
                                      <div class="testimonials-avatar">
                                          <h3>Daru Kusuma S</h3>
                                          <h4>Batch 4 Jakarta</h4>
                                      </div>
                                  </div>
                                  <div class="testimonials-text-after"><i class="fa fa-quote-left"></i></div>
                              </div>
                          </div>

                          <!--fourth-->
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
                                      <a href="#" class="text-link"></a>
                                      <div class="testimonials-avatar">
                                          <h3>Putu Sudarma Yasa</h3>
                                          <h4>Batch 1 Bali</h4>
                                          <h4>Waiter at Explorer Dream Cruise Line</h4>
                                      </div>
                                  </div>
                                  <div class="testimonials-text-after"><i class="fa fa-quote-left"></i></div>
                              </div>
                          </div>

                          <!--seven-->
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
                                      <a href="#" class="text-link"></a>
                                      <div class="testimonials-avatar">
                                          <h3>Andre Dian Wijaya</h3>
                                          <h4>Batch 1 Bali</h4>
                                          <h4>Housekeeping at Explorer Dream Cruise Line</h4>
                                      </div>
                                  </div>
                                  <div class="testimonials-text-after"><i class="fa fa-quote-left"></i></div>
                              </div>
                          </div>

                          <!--eight-->
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
                                      <a href="#" class="text-link"></a>
                                      <div class="testimonials-avatar">
                                          <h3>Putu Ayu Astiti</h3>
                                          <h4>Batch 1 Bali</h4>
                                          <h4>Bar Waiter at Explorer Dream Cruise Line</h4>
                                      </div>
                                  </div>
                                  <div class="testimonials-text-after"><i class="fa fa-quote-left"></i></div>
                              </div>
                          </div>
                          <!--testi end-->

                      </div>
                  </div>
              </div>

              <div class="tc-pagination"></div>
          </div>
        </div>
      </div>
  </section>
<!--testimoniend-->


<!--daftarsekarang-->
        <section class="daftarsekarang2">
          <div class="text-align-center">
            <h3>Siap Kemudikan Masa Depanmu?</h3>
            <a class="btn btn-register-now" href="{{ url('register') }}" role="button"
              >Daftar Sekarang</a
            >
          </div>
        </section>
<!--daftarsekarang end-->



@endsection
