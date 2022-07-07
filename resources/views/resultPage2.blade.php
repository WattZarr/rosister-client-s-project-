@extends('layouts.homeDesign')

@section('desktop')
    <h5> Filter By:{{$filter}}</h5>
    @foreach($datas as $data)
        <div class="card" style="width:30%">
        <img class="card-img-top" src="{{asset('accessory/'.$data->image)}}" alt="Card image cap" style="width:100%">
        <div class="card-body">
            <h5 class="card-title">{{$data->name}}</h5>
            <p class="card-text">{{$data->price}}Ks</p>
            <a href="{{route('detailAcc',$data->id)}}"><button class="btn abtn">more Detail</button></a>
        </div>
        </div>
    @endforeach
@endsection

@section('mobile')

 <h5>Filter By:{{$filter}}</h5>
    @foreach($datas as $data)
        <div class="card" style="width:45%">
        <img class="card-img-top" src="{{asset('accessory/'.$data->image)}}" alt="Card image cap" style="width:100%">
        <div class="card-body">
            <h5 class="card-title">{{$data->name}}</h5>
            <p class="card-text">{{$data->price}}Ks</p>
            <a href="{{route('detailAcc',$data->id)}}"><button class="btn abtn">more Detail</button></a>
        </div>
        </div>
    @endforeach

@endsection
