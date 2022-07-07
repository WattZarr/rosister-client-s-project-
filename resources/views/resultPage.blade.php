@extends('layouts.homeDesign')

@section('desktop')
    <h5> Filter By:{{$filter}}</h5>
    @foreach($datas as $data)
        <div class="card" style="width:30%">
        @if($filter == "bag")
        <img class="card-img-top" src="{{asset('bag/'.$data->image)}}" alt="Card image cap" style="width:100%">
        @elseif($filter == "accessory" || $filter == "hat")
        <img class="card-img-top" src="{{asset('accessory/'.$data->image)}}" alt="Card image cap" style="width:100%">
        @else
        <img class="card-img-top" src="{{asset('bag/'.$data->image)}}" alt="Card image cap" style="width:100%">
        @endif
        <div class="card-body">
            {{$data->name}} <br>
            {{$data->price}}Ks <br>
            <p style="color:red">{{$data->status}}</p>
            @if($filter == "Bag Size")
            <p class="card-text">{{$data->size}}</p>
            <a href="{{route('detailBag',$data->id)}}"><button class="btn abtn">more Detail</button></a>
            @elseif($filter == "hat")
            <a href="{{route('detailHat',$data->id)}}"><button class="btn abtn">more Detail</button></a>
            @else
            <a href="{{route('detailAcc',$data->id)}}"><button class="btn abtn">more Detail</button></a>
            @endif
        </div>
        </div>
    @endforeach
@endsection

@section('mobile')

 <h5>Filter By:{{$filter}}</h5>
    @foreach($datas as $data)
        <div class="card" style="width:45%">
        @if($filter == "bag")
        <img class="card-img-top" src="{{asset('bag/'.$data->image)}}" alt="Card image cap" style="width:100%">
        @elseif($filter == "accessory" || $filter == "hat")
        <img class="card-img-top" src="{{asset('accessory/'.$data->image)}}" alt="Card image cap" style="width:100%">
        @else
        <img class="card-img-top" src="{{asset('bag/'.$data->image)}}" alt="Card image cap" style="width:100%">
        @endif
        <div class="card-body">
            {{$data->name}} <br>
            {{$data->price}}Ks
            <p style="color:red">{{$data->status}}</p>
            @if($filter == "Bag Size")
            <p class="card-text">{{$data->size}}</p>
            <a href="{{route('detailBag',$data->id)}}"><button class="btn abtn">more Detail</button></a>
            @elseif($filter == "hat")
            <a href="{{route('detailHat',$data->id)}}"><button class="btn abtn">more Detail</button></a>
            @else
            <a href="{{route('detailAcc',$data->id)}}"><button class="btn abtn">more Detail</button></a>
            @endif
        </div>
        </div>
    @endforeach

@endsection
