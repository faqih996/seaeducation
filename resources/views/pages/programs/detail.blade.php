@extends('layouts.app')

@section('content')
<!--header-->
    <section class="section-program-details">
        <div class="container">
            <div class="row">
            <section class="col kiri align-self-center">
                <!--kiri-->
                <div class="text-md-left my-5">
                <h1 class="mt-4">{{ $program->title }}</h1>

                @foreach($departments as $department)
                    <ul class="mt-4">
                        <li class="department-list"><a class="department-name" href="">{{ $department->name }}</a></li>
                    </ul>

                @endforeach

                <div class="text-left my-5">
                    <a class="btn btn-register-now" href="{{ url('register') }}" role="button"
                    >Register Now</a
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
