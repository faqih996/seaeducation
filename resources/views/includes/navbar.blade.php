<!--navbar-->
<div class="container-fluid">
  <nav class="navbar navbar-expand-lg navbar-light bg-White">
    <div class="container-fluid">
      <a class="navbar-brand align-self-center" href="{{ route('home') }}">
        <img
          src="{{ url('frontend/assets/logosea.png') }}"
          alt=""
          width=""
          height=""
          class="d-inline-block align-self-center"
        />
        Seaeducation
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
          <li class="nav-item active align-self-center">
            <a class="nav-link " href=""
              >Dukungan <span class="sr-only"></span
            ></a>
          </li>
          <li class="nav-item align-self-center dropdown">
            <a
              class="nav-link dropdown-toggle"
              href=""
              id="navbardrop"
              data-toggle="dropdown"
            >
              Program
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="">Regular</a>
              <a class="dropdown-item" href="">Executive</a>
              <a class="dropdown-item" href="">Sea Consultancy</a>
            </div>
          </li>
          <li class="nav-item align-self-center">
            <a class="nav-link " href="">Kelas</a>
          </li>
          <a class="btn px-4 btn-secondary ml-5" href="{{ route('register') }}" role="button"
            >Daftar</a
          >
          <a class="btn px-4 btn-login ml-2" href="{{ route('login') }}" role="button">Masuk</a>
        </ul>
      </div>
    </div>
  </nav>
</div>
