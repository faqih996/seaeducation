@extends('layouts.app')

@section('content')

<!--program-->
<section class="section-program">
    <div class="container ">
        <h1 class="section-tittle mt-4 my-4 align-content-center">
            Program Sea Education
        </h1>
        <span class="section-lecturer-line"></span>
      </div>

        <div class="container">
            <div class="row row-cols-3 row-cols-md-4 mb-4">
                @foreach($program as $program)
                <div class="justify-content-between col-md-5">
                    <div class="col">
                        <div class="card program-card mb-6 shadow p-3 mb-5 bg-body">
                            <div class="card-body ">
                                <p class="badge rounded-pill bg-color">Online Class</p>
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
                                        Deadline Pendaftaran <span class="batasdaftar"> 20 Sep 2021</span>
                                    </p>
                                <div class="button-group justify-content-center">
                                    <button href="" class="button button-outline-primary btn-sm">Kurikulum</button>
                                    <a href="" class="button button-primary btn-sm">Daftar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
</section>
<!--programend-->
@endsection
