@extends('layouts.admin')

@section('content')


<section class="overview overflow-auto">
        <main class="main-wrapper">
            <div class="ps-lg-0">
                @if(session()->has('success'))
                            <div class="alert alert-success col-lg-8 alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        @if(session()->has('loginError'))
                            <div class="alert alert-danger col-lg-8 alert-dismissible fade show" role="alert">
                                {{ session('loginError') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                <h2 class="text-4xl fw-bold color-palette-1 mb-30">Profile</h2>
                <div class="top-up-categories mb-30">

                    <p class="text-lg fw-medium color-palette-1 mb-14"></p>
                    <div class="main-content">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">

                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
            </div>
        </div>
</section>

{{-- <section class="overview-section">
    <div class="profile-sidebar-wrapper">
        <div class="profile-sidebar">
            <div class="sidebar-main-content">
                <div data-v-75395cb3="" class="main-profile-picture">
                    <div data-v-75395cb3="" class="profile-picture small-wrapper">
                        <img data-v-75395cb3="" src="https://arkademy-production.s3.ap-southeast-1.amazonaws.com/arkademy-image-profile/com/76a5b62c8bca88ef4889782e034bb2a2" class="noselect small-pict">
                        <div data-v-75395cb3="" class="progress-wrap"><!----></div>
                        <p data-v-75395cb3="" class="upload-text small-text">
                            <i data-v-75395cb3="" class="fas fa-edit"></i> Update </p>
                    </div>
                        <input data-v-75395cb3="" id="fileEditInput" accept="image/x-png, image/gif, image/jpeg" type="file" style="display: none;">
                        <svg data-v-75395cb3="" viewBox="0 0 36 36" class="circular-chart green">
                            <path data-v-75395cb3="" d="M18 2.0845
                                a 15.9155 15.9155 0 0 1 0 31.831
                                a 15.9155 15.9155 0 0 1 0 -31.831" class="circle-bg">
                            </path>
                            <path data-v-75395cb3="" stroke-dasharray="93, 100" d="M18 2.0845
                                a 15.9155 15.9155 0 0 1 0 31.831
                                a 15.9155 15.9155 0 0 1 0 -31.831" class="circle">
                            </path>
                        </svg>
                </div>
                <p class="user-full-name">Faqihuddin Syakir Ni'am</p>
                <p class="user-description">Pengawai Swasta</p>
                    <div class="row row-two-button">
                        <div class="col-lg-10 text-right">
                            <a href="/profile/update" class="">
                                <button data-v-630ce5a7="" class="secondary medium" id="btnLengkapiProfile">
                                    <span data-v-630ce5a7=""><span data-v-630ce5a7="">Lengkapi Profile</span></span>
                                </button>
                            </a>
                        </div>
                        <div class="col-lg-2"><button data-v-630ce5a7="" class="square" id="btnDownloadPdf">
                            <span data-v-630ce5a7="" class="icon icon-download"></span>
                            <span data-v-630ce5a7=""><span data-v-630ce5a7=""></span></span>
                            </button>
                        </div>
                    </div>
            </div>

            <div class="sidebar-info-content">
                <p class="user-long-description text-new-line">Saya Seorang pekerja keras dan ulet, siap bekerja dan belajar untuk menggembangkan skill yang saya punya untuk berkarier dan memajukan perusahaan</p>
                <div class="user-bio">
                    <p><i class="far fa-envelope"></i><span data-v-bbdc3bd0="">
                    <span data-v-bbdc3bd0="">faqih.syakir11@gmail.com</span>
                    </span></p><p><i class="far fa-phone"></i>
                    <span data-v-bbdc3bd0=""><span data-v-bbdc3bd0="">14234234234234</span>
                </span></p><p><i class="far fa-mars"></i>
                    <span data-v-bbdc3bd0=""><span data-v-bbdc3bd0="">Laki-laki</span>
                </span></p><p><i class="far fa-map-marker-alt"></i><span data-v-bbdc3bd0="">
                    <span data-v-bbdc3bd0="">Banten</span></span></p><p><i class="far fa-bolt"></i>
                        <span data-v-bbdc3bd0="">
                            <span data-v-bbdc3bd0="">Membaca, Musik, Olahraga, Travelling</span>
                        </span></p>
                </div>
            </div>
        </div>
    </div>
</section> --}}

@endsection
