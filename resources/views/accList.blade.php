@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <h4>Accessory List</h4>

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

            <a href="{{route('addAccessoryPage')}}"><button class="btn btn-primary">Add Accessory</button></a>
            <a href="{{route('addNewTypePage')}}"><button class="btn btn-primary">Add New Accessory Type</button></a>
        </div>
    </div>

    <table class="table mt-5">
      <thead>
        <tr>
          <th scope="col">Image</th>
          <th scope="col">Name</th>
          <th scope="col">Price</th>
          <th scope="col">Type</th>
        </tr>
      </thead>
      <tbody>
      @foreach($accessories as $accessory)
            <tr>
              <td><img src="{{asset('accessory/'.$accessory->image)}}" width="80"></td>
              <td>{{$accessory->name}}</td>
              <td>{{$accessory->price}}</td>
              <td>{{$accessory->type}}</td>
              <td><a href="{{route('editAccPage',$accessory->id)}}"><button class="btn btn-secondary">Edit</button></a></td>
              <td><a href="{{route('deleteAcc',$accessory->id)}}"><button class="btn btn-danger">Delete</button></a></td>
            </tr>
          @endforeach
      </tbody>
    </table>
</div>
@endsection
