@extends('layouts.app')

@section('content')
<main>
<section class="program border-top">
    <div class="container mt-5 mb-4">
        <div class="row justify-content-center mb-lg-5">
            <h3>Pilih Program yang ingin kamu ikuti</h3>
        </div>

        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 mb-3">
                <div class="justify-content-between col-md-5">
                    <div class="col">
                        <div class="card program-card">
                            <div class="card-body">
                                <h3 class="card-title">Regular Program</h3>
                                <p class="card-text">
                                Durasi 3 Bulan + 6 Bulan On The Job Training
                                </p>
                                <h7 class="card-text md-5">
                                    Batch-8
                                </h7>
                                <p class="card-text">
                                    Deadline Pendaftaran 20 September 2021
                                </p>

                                <div class="button">
                                    <button href="{{ url('/program/', $item->id) }}" class="button btn-secondary ">Kurikulum</button>
                                    <button href="" class="button btn-login border-1">Daftar Sekarang</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-md-5">
                    <div class="col">
                        <div class="program-card card">
                            <div class="card-body">
                                <h3 class="card-title">Excecutive Program</h3>
                                <p class="card-text">
                                Durasi 3 Bulan
                                </p>
                                <h7 class="card-text md-5">
                                    Batch-8
                                </h7>
                                <p class="card-text">
                                    Deadline Pendaftaran 20 September 2021
                                </p>

                                <div class="button">
                                    <button href="" class="button btn-secondary">Kurikulum</button>
                                    <button href="" class="button btn-login">Daftar Sekarang</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</main>
@endsection
