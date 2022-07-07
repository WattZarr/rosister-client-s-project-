@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <h4>Edit Accessory Type</h4>
        <div class="col-md-8">
        <form action="{{route('editType')}}" method="post" enctype="multipart/form-data">
            @csrf

            <input type="hidden" name="id" value="{{$typeData[0]->id}}">
                  <div class="form-group mt-3">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter New Accessory Name" required value="{{$typeData[0]->name}}">
                  </div>
                  <button type="submit" class="btn btn-primary mt-3">Done</button>
            </form>

            <a href="{{route('accList')}}"><button class="btn btn-danger mt-3">Back</button></a>
        </div>
   </div>
</div>
@endsection
