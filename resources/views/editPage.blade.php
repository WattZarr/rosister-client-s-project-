@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <h4>Edit Page</h4>
        <div class="col-md-8">
        <form action="{{route('editBag')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="{{$bag[0]->id}}" name="id">
                  <div class="form-group mt-3">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Name" value="{{$bag[0]->name}}"required>
                  </div>
                  <div class="form-group mt-3">
                    <label style="display:block;">Image</label>
                    <input type="file" class="form-control-file" name="image">
                  </div>
                  <div class="form-group mt-3">
                    <label style="display:block;">Image2(optional)</label>
                    <input type="file" class="form-control-file" name="image2">
                  </div>
                  <div class="form-group mt-3">
                    <label style="display:block;">Image3(optional)</label>
                    <input type="file" class="form-control-file" name="image3">
                  </div>
                  <div class="form-group mt-3">
                        <label>Price(Ks)</label>
                        <input type="number" class="form-control" name="price" value="{{$bag[0]->price}}" placeholder="Enter Price" required>
                  </div>
                  <div class="mt-3">
                  <label>Size</label>
                  <select class="form-control" name="size" value="{{$bag[0]->size}}">
                    <option value="small">Small</option>
                    <option value="medium">Medium</option>
                    <option value="large">Large</option>
                  </select>
                  </div>
                  <div class="mt-3">
                  <label>Material</label>
                  <select class="form-control" name="material" value="{{$bag[0]->material}}">
                    <option value="rattan">Rattan Bag(ကြိမ်)</option>
                    <option value="straw">Straw Bag(ဝါး)</option>
                  </select>
                  </div>
                  <div class="mt-3">
                  <label>Status</label>
                  <select class="form-control" name="status" value="{{$bag[0]->status}}">
                    <option value="instock">Instock</option>
                    <option value="out_of_stock">Out of Stock</option>
                  </select>
                  </div>

                  <div class="form-group mt-3">
                        <label>Items left(Type 0 if you choose out of stock)</label>
                        <input type="number" class="form-control" name="item" required value="{{$bag[0]->item}}">
                  </div>


                  <button type="submit" class="btn btn-primary mt-3">Done</button>
            </form>

            <a href="{{route('home')}}"><button class="btn btn-danger mt-3">Back</button></a>
        </div>
    </div>
</div>
@endsection
