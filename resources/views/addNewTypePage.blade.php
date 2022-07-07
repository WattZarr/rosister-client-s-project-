@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <h4>Add New Accessory Type</h4>
        <div class="col-md-8">
        <form action="{{route('addNewType')}}" method="post" enctype="multipart/form-data">
            @csrf
                  <div class="form-group mt-3">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter New Accessory Name" required>
                  </div>
                  <button type="submit" class="btn btn-primary mt-3">Done</button>
            </form>

            <a href="{{route('accList')}}"><button class="btn btn-danger mt-3">Back</button></a>
        </div>
    <h5 class="mt-5">Accessory Type List</h5>
    <ol class="list-group">
    @foreach($types as $type)
      <li class="list-group-item">{{$type->name}}
      <a href="{{route('editTypePage',$type->id)}}"><button class="btn btn-secondary">Edit</button></a>
      <a href="{{route('deleteType',$type->id)}}"><button class="btn btn-danger">Delete</button></a>
      </li>
    @endforeach
    </ol>
   </div>
</div>
@endsection
