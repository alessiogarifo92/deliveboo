@extends('layouts.main-layout')

@section('contenuto-pagina')

  <div class="container dish-index text-center">

    <div class="buttons-content">
      <a class="btn mb-3 mx-1 px-5" href="{{route('home')}}">Torna alla home <i class="fas fa-home"></i></a>
      <a class="btn mb-3 mx-1 px-5" href="{{route('dish-create')}}">Crea un nuovo piatto <i class="fas fa-utensils"></i></a>
    </div>

    <h1 class="text-center mb-3 mt-2">I Miei Piatti</h1>
    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2">
      @foreach ($user -> dishes as $dish)
        <div class="col mb-4 card-group">
          @if ($dish->visible === 1)
            <div class="card">
          @else
            <div class="card">
          @endif

              <div class="card-header text-center text-uppercase text-white bg-dark">
                {{$dish -> name}}
              </div>
              <div class="card-body text-left">
                {{-- <h5 class="card-title text-center text-dark text-uppercase">{{$dish -> name}}</h5> --}}
                <p class="card-text">Ingredienti: {{$dish -> ingredients}}</p>
                <p class="card-text">Prezzo: {{$dish -> price}}&euro;</p>
                <p class="card-text">Visibile al cliente:
                  @if ($dish -> visible == 1)
                    Si
                  @else
                    No
                  @endif
                </p>
                {{-- <div class="card-footer text-center text-white bg-dark">
                  <a class="m-2 display-6 btn bg-success" href="{{route('dish-edit', $dish->id)}}"><i class="fas fa-pencil-alt"></i></a>
                  <a class="m-2 display-6 btn bg-danger" href="{{route('dish-delete', $dish->id)}}"><i class="fas fa-trash"></i></a>
                </div> --}}
              </div>
              <div class="card-footer text-center text-white bg-dark">
                <a class="m-2 display-6 btn bg-success rounded-circle" href="{{route('dish-edit', $dish->id)}}"><i class="fas fa-pencil-alt"></i></a>
                <a class="m-2 display-6 btn bg-danger rounded-circle" href="{{route('dish-delete', $dish->id)}}"><i class="fas fa-trash"></i></a>
              </div>
            </div>

        </div>
      @endforeach
    </div>

  </div>

@endsection
