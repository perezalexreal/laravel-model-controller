<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <div class="row row-cols-md-3 row-cols-lg-4 row-cols-1 g-3">
        @foreach($data as $prodotto)
        {{-- @dump($prodotto) --}}
      
        <div class="col">
          <div class="card w-100 h-100 card-pasta" style="width:18rem;">
            <div class="card-img-container">
              <h1> {{ $prodotto["original_title"] }}</h1>
            </div>
            <div class="card-body">
              <h5 class="card-title">{{ $prodotto->title }}</h5>
              <h6>{{ $prodotto->id }}</h6>
      
              {{-- <a href="{{ url('prodotti/' . $loop->index) }}" class="btn btn-link">Dettagli</a> --}}
              {{-- <a href="{{ route('products.details', ["id"=> $loop->index]) }}" class="btn btn-link">Dettagli</a> --}}
        {{--      <a href="{{ route('products.details', $prodotto->id) }}" class="btn btn-link">Dettagli</a> --}}
            </div>
          </div>
        </div>
        @endforeach
      </div>
</body>
</html>