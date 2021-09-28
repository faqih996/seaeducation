@extends('layouts.app')
@section('content')
<main>
<section class="">
    <div class="container">


            <article class="md-5">
                <h2>{{ $post["title"] }}</h2>
                <h5>{{ $post["author"] }}</h5>
                <p>{{ $post["body"] }}</p>
            </article>


    </div>
  </section>
</main>
@endsection
