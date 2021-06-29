@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{route('admin.tvs.store')}}" method="post">
        @csrf
        @method('POST')
        <div class="form-group">
          <label for="name">Name
        </label>
        <input type="text" id="name" name="name" class="form-control"> 
     </div>
     <div class="form-group">
         <label for="description">Description</label>
        <textarea id="description" name="description" class="form-control"></textarea>
     </div>
        
    <div class="form-group">
        <label for="inch">Inch</label>
            <input type="number" id="inch" name="inch" class="form-control">
    </div>
        
    <div class="form-group">
        <label for="price">Price</label>
        <input type="number" id="price" name="price" class="form-control">
    </div>

    <div>
        @foreach ($fields as $field)
            <input type="checkbox" id="field-{{ $field->id }}" name="fields[]" value="{{ $field->id }}">
            <label for="">{{ $field->name }}</label>
        @endforeach
    </div>
        

    <button type="submit" class="btn btn-primary">Create</button>

    </form>
</div>
    
@endsection