@extends('layouts.app')

@section('content')
<main>
<section class="detail">
    <div class="container">

            @foreach($program as $program)
            <article class="md-5">
                <h2>
                    <a href="/program/{{ $program["slug"] }}">{{ $program["title"] }}</a></h2>
                <h5>By :{{ $program["author"] }}</h5>
                <p>{{ $program["body"] }}</p>
            </article>
            @endforeach

    </div>
  </section>
</main>
@endsection
