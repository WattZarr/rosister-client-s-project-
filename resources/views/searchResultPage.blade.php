@extends('layouts.homeDesign')

@section('desktop')
    <h5 class="mt-3"> Filter By:{{$filter}}</h5>
    @foreach($datas as $data)
        <div class="card" style="width:30%">
        <img class="card-img-top" src="{{asset('bag/'.$data->image)}}" alt="Card image cap" style="width:100%">
        <div class="card-body">
            {{$data->name}} <br>
            {{$data->price}}Ks <br>
            <p style="color:red">{{$data->status}}</p>
            <p class="card-text">{{$data->size}}</p>
            <a href="{{route('detailBag',$data->id)}}"><button class="btn abtn">more Detail</button></a>
        </div>
        </div>
    @endforeach
@endsection

@section('mobile')

 <h5>Filter By:{{$filter}}</h5>
    @foreach($datas as $data)
        <div class="card" style="width:45%">
        <img class="card-img-top" src="{{asset('bag/'.$data->image)}}" alt="Card image cap" style="width:100%">
        <div class="card-body">
            {{$data->name}} <br>
            {{$data->price}}Ks
            <p style="color:red">{{$data->status}}</p>
            <p class="card-text">{{$data->size}}</p>
            <a href="{{route('detailBag',$data->id)}}"><button class="btn abtn">more Detail</button></a>
        </div>
        </div>
    @endforeach

@endsection
