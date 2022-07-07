@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <h4>Bag List</h4>

        <div class="col-md-4">
        <div class="list-group">
              <a href="{{route('home')}}" class="list-group-item list-group-item-action">Bags List</a>
              <a href="{{route('accList')}}" class="list-group-item list-group-item-action">Accessories List</a>
              <a href="{{route('hatList')}}" class="list-group-item list-group-item-action">Hats List</a>
            </div>
        </div>
        <div class="col-md-8">
        @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
            @endif

            @if (session('delete'))
                    <div class="alert alert-danger">
                        {{ session('delete') }}
                    </div>
            @endif

            @if (session('EditSuccess'))
                    <div class="alert alert-success">
                        {{ session('EditSuccess') }}
                    </div>
            @endif

            <a href="{{route('AddBagPage')}}"><button class="btn btn-primary">Add Bag</button></a>
        </div>
    </div>

    <table class="table mt-5">
      <thead>
        <tr>
          <th scope="col">Image</th>
          <th scope="col">Name</th>
          <th scope="col">Material</th>
          <th scope="col">Size</th>
          <th scope="col">Price</th>
          <th scope="col">Status</th>
          <th scope="col">Item</th>
        </tr>
      </thead>
      <tbody>
      @foreach($bags as $bag)
            <tr>
              <td><img src="{{asset('bag/'.$bag->image)}}" width="80"></td>
              <td>{{$bag->name}}</td>
              <td>{{$bag->material}}</td>
              <td>{{$bag->size}}</td>
              <td>{{$bag->price}}</td>
              <td>{{$bag->status}}</td>
              <td>{{$bag->item}} Left</td>
              <td><a href="{{route('editPage',$bag->id)}}"><button class="btn btn-secondary">Edit</button></a></td>
              <td><a href="{{route('deleteBag',$bag->id)}}"><button class="btn btn-danger">Delete</button></a></td>
            </tr>
          @endforeach
      </tbody>
    </table>
</div>
@endsection
