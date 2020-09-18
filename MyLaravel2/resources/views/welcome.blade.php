@extends('layout.main-layout')

@section('content')
  <section>

    <div>

      <h2>
        LE LUNGHE
      </h2>
      @foreach($data as $d)
        @if($d['tipo'] == "lunga")
            <img src="{{ $d['src'] }}" alt="">
          @endif
      @endforeach

    </div>

    <div>

      <h2>
        LE CORTE
      </h2>
      @foreach ($data as $d)
        @if($d['tipo'] == "corta")
          <img src="{{ $d['src'] }}" alt="">
        @endif

      @endforeach

    </div>

    <div>

      <h2>
        LE CORTISSIME
      </h2>

      @foreach ($data as $d)

        @if($d['tipo'] == "cortissima")
          <img src="{{ $d['src'] }}" alt="">
        @endif

      @endforeach

    </div>

  </section>
@endsection
