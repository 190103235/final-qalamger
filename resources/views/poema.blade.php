@extends('layouts/app')

@section('content')
<div class="container">
<form action="{{route('store')}}" method="POST">
    {{csrf_field()}}
    <input type="hidden" name=user_id value=1>
  <div class="form-group">
    <label for="formGroupExampleInput">Example label</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input" name="title">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Another label</label>
    
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input" name="description">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Another label</label>
    
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input" name="text">
  </div>
    <select name="category_id" id="" class="form-select">
    @foreach($categories as $category)
        <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
    </select>

  <div>
  <button>create</button>
  </div>
</form>
</div>
@endsection