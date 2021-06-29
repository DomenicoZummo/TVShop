@extends('layouts.app')

@section('content')
    <section class="container">
        <h1 class="mb-3">Tv</h1>
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
                        <td>show</td>
                        <td>edit</td>
                        <td>delete</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection