@extends('layouts.app')

@section('content')
<!--header-->
    <section class="program-details">
        <div class="container">
            <div class="row">
            <section class="col kiri align-self-center">
                <!--kiri-->
                <div class="text-md-left my-5">
                <h1 class="mt-4">


                </h1>

                <div class="text-left my-5">
                    <a class="btn btn-register-now" href="{{ url('register') }}" role="button"
                    >REGISTER NOW</a
                    >
                </div>
                </div>
            </section>

            <!--kanan-->
            <section class="col img-kanan d-none d-sm-block d-sm-none d-md-block">
                <img src="" alt="" />
            </section>
            </div>
        </div>
        </section>
    </main>
@endsection


@push('prepend-style')
    <link rel="stylesheet" href="{{ url('frontend/libraries/xzoom/dist/xzoom.css') }}" />
@endpush

@push('addon-script')
    <script src="{{ url('frontend/libraries/xzoom/dist/xzoom.min.js') }}"></script>
    <script>
      $(document).ready(function() {
        $('.xzoom, .xzoom-gallery').xzoom({
          zoomWidth: 500,
          title: false,
          tint: '#333',
          Xoffset: 15
        });
      });
    </script>
@endpush
