@extends("layout.main")

@section("content")
    <section class="home-container container-fluid d-flex flex-wrap  py-5  ">
        @foreach ($comics as $comic)
            <div class="box">
                <img src="{{ $comic->image }}" alt="">
                <h2>{{ $comic->title }}</h2>
                <h3>{{ $comic->type }}</h3>
            </div>
        @endforeach


    </section>
@endsection
