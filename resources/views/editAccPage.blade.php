@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <h4>Edit Page</h4>
        <div class="col-md-8">
        <form action="{{route('editAcc')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="{{$acc[0]->id}}" name="id">
                  <div class="form-group mt-3">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Name" value="{{$acc[0]->name}}"required>
                  </div>
                  <div class="form-group mt-3">
                    <label style="display:block;">Image</label>
                    <input type="file" class="form-control-file" name="image">
                  </div>
                  <div class="form-group mt-3">
                        <label>Price(Ks)</label>
                        <input type="number" class="form-control" name="price" value="{{$acc[0]->price}}" placeholder="Enter Price" required>
                  </div>
                  <div class="form-group mt-3">
                        <label>Type</label>
                        <select class="form-control"  name="type">
                        @foreach($types as $type)
                          <option value="{{$type->name}}">{{$type->name}}</option>
                        @endforeach
                        </select>
                  </div>

                  <button type="submit" class="btn btn-primary mt-3">Done</button>
            </form>

            <a href="{{route('accList')}}"><button class="btn btn-danger mt-3">Back</button></a>
        </div>
    </div>
</div>
@endsection
