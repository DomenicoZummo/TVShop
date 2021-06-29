@extends("layouts.app")

@section('content')
    <div class="container">
        <h1 class="my-2">{{$tv->name}}</h1>
        <div class="my-2">{{$tv->description}}</div>
        <div class="my-2">Inch :{{$tv->inch}}</div>
        <div class="my-2">Price :{{$tv->price}}</div>
        <a class="btn btn-success"href="{{route("admin.tvs.index")}}">Return</a>
    </div>
@endsection