@extends("layouts.main-layout")

@section ("content")

<main>

    @foreach ($fumetti as $fumetto)

        <div class="card">

          {{$fumetto["title"]}}

        </div>

        <p> {{$fumetto["description"]}}</p>

        <img src="{{ $fumetto['thumb'] }}" alt="non trovata">

      @endforeach

</main>



@endsection