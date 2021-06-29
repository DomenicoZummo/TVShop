@extends('layouts.app')

@section('content')
    <section class="container">
        <h1 class="mb-3">Tv</h1>
        <a class="btn btn-success mb-2" href="{{route("admin.tvs.create")}}">Create new tv</a>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th colspan="3">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tvs as $tv)
                    <tr>
                        <td>{{$tv->id}}</td>
                        <td>{{$tv->name}}</td>
                        <td><a class="btn btn-primary" href="{{route("admin.tvs.show", $tv->id)}}">Show</a></td>
                        <td>edit</td>
                        <td>delete</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection