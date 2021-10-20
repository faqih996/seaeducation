@extends('layouts.app')

@section('content')

<!--program-->
<section class="section-program">
    <div class="container">
        <h1 class="section-tittle mt-4 my-4 align-content-center">
            Program Sea Education
        </h1>

        <div class="row mb-4">
            @foreach($program as $program)
            <div class="justify-content-between col-md-6">
                <div class="col">
                    <div class="card program-card mb-6 shadow p-3 mb-5 bg-body">
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
                            <div class="button-group justify-content-center">
                                <a href="{{ url('program', $program->slug) }}" class="button button-outline-primary btn-sm">Kurikulum</button>
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
@endsection
