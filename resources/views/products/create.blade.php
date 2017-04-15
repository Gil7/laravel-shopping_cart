@extends('layouts.master')

@section('content')

  <div class="row">
    <div class="col-md-4 col-xs-4 col-md-offset-4 col-xs-offset-4">
      <h1>Create a new product</h1>
      <form class="form" action="{{route('products.store')}}" method="post" enctype="multipart/form-data"> 
        {{csrf_field()}}
        <div class="form-group">
          <label for="title">Title:</label>
          <input type="text" name="title" required="" class="form-control">
        </div>
        <div class="form-group">
          <label for="description">Description:</label>
          <input type="text" name="description" required="" class="form-control">
        </div>
        <div class="form-group">
          <label for="title">Image:</label>
          <input type="file" name="imagePath">
        </div>
        <div class="form-group">
          <label for="title">Price:</label>
          <input type="number" name="price" required="" class="form-control">
        </div>
        <input type="submit" name="create" value="Create" class="btn btn-primary">
      </form>
    </div>
  </div>
@endsection
