
<section class="top-banner">
    <div class="container">
    <div class="row">
    <div class="col-lg-12 col-12 text-center">
        Beli 1 Kelas Premium BONUS 1 Kelas Premium (bebas pilih) <a href="https://www.instagram.com/p/CVUyAjnFGEL/" target="_blank">Lihat Promo</a>
    </div>
    </div>
    </div>
    </section>

<!--navbar-->
<div class="container-fluid">
  <nav class="navbar navbar-expand-lg navbar-light bg-White">
    <div class="container-fluid">
      <a class="navbar-brand align-self-center" href="{{ url('/') }}">
        <img
          src="{{ url('frontend/assets/logoseaedu2@2x.png') }}"
          alt=""
          width=""
          height=""
          class="d-inline-block align-self-center"
        />
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item align-self-center">
            <a class="nav-link " href="{{ url('about') }}"
              >About <span class="sr-only"></span
            ></a>
          </li>
          <li class="nav-item align-self-center">
            <a class="nav-link " href="{{ url('program') }}" >Program</a>
          </li>
          </li>

          <li>
          @auth
            <li class="nav-item align-self-center">
                <a class="nav-link " href="{{ url('dashboard') }}">Profile</a>
            </li>
            <!-- daftar<a class="nav-link " href="">Welcome, //{/{ //auth()->user()->name }}</a>-->
            <li>
            <form action="/logout" method="post">
                @csrf
                <button class="btn px-4 btn-secondary ml-2" type="submit" role="button">Keluar</button>
            </form>
            </li>
          @endauth

          @guest
            <a class="btn px-4 btn-secondary ml-5" href="{{ url('register') }}" role="button">Daftar</a>
            <a class="btn px-4 btn-login ml-2" href="{{ url('login') }}" role="button">Masuk</a>
          @endguest

          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>
