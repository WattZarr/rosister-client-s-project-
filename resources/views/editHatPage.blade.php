@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <h4>Edit Hat Page</h4>
        <div class="col-md-8">
        <form action="{{route('editHat')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$hat[0]->id}}">
                  <div class="form-group mt-3">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Name" required value="{{$hat[0]->name}}">
                  </div>
                  <div class="form-group mt-3">
                    <label style="display:block;">Image</label>
                    <input type="file" class="form-control-file" name="image" required>
                  </div>

                  <div class="form-group mt-3">
                        <label>Price(Ks)</label>
                        <input type="number" class="form-control" name="price" placeholder="Enter Price" required value="{{$hat[0]->price}}">
                  </div>

                  <div class="mt-3">
                  <label>Status</label>
                  <select class="form-control" name="status" value="{{$hat[0]->status}}">
                    <option value="instock">Instock</option>
                    <option value="out_of_stock">Out of Stock</option>
                  </select>
                  </div>

                  <div class="form-group mt-3">
                        <label>Items left(Type 0 if you choose out of stock)</label>
                        <input type="number" class="form-control" name="item" required value="{{$hat[0]->item}}">
                  </div>

                  <button type="submit" class="btn btn-primary mt-3">Edit</button>
            </form>

            <a href="{{route('hatList')}}"><button class="btn btn-danger mt-3">Back</button></a>
        </div>
    </div>
</div>
@endsection
