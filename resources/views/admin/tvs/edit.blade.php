@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{route('admin.tvs.update', $tv['id'])}}" method="post">
        @csrf
        @method('PATCH')
        <div class="form-group">
          <label for="name">Name
        </label>
        <input type="text" id="name" name="name" class="form-control" value="{{old('name', $tv->name)}}"> 
     </div>
     <div class="form-group">
         <label for="description">Description</label>
        <textarea id="description" name="description" class="form-control">{{old('description', $tv->description)}}</textarea>
     </div>
        
    <div class="form-group">
        <label for="inch">Inch</label>
            <input type="number" id="inch" name="inch" class="form-control" value="{{old('inch', $tv->inch)}}">
    </div>
        
    <div class="form-group">
        <label for="price">Price</label>
        <input type="number" id="price" name="price" class="form-control" value="{{old('price', $tv->price)}}">
    </div>
        

    <button type="submit" class="btn btn-primary">Create</button>

    </form>
</div>
    
@endsection