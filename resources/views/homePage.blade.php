@extends('layouts.homeDesign')

@section('desktop')
    @foreach($bags as $bag)
        <div class="card" style="width:30%">
        <img class="card-img-top" src="{{asset('bag/'.$bag->image)}}" alt="Card image cap" style="width:100%">
        <div class="card-body">
            {{$bag->name}} <br>
            {{$bag->price}}Ks <br>
            {{$bag->size}}
            <p style="color:red">{{$bag->status}}</p>
            <a href="{{route('detailBag',$bag->id)}}"><button class="btn abtn">more Detail</button></a>
        </div>
        </div>
    @endforeach

    @foreach($hats as $hat)
        <div class="card" style="width:30%">
        <img class="card-img-top" src="{{asset('accessory/'.$hat->image)}}" alt="Card image cap" style="width:100%">
        <div class="card-body">
            {{$hat->name}} <br>
            {{$hat->price}}Ks
            <p style="color:red">{{$hat->status}}</p>
            <a href="{{route('detailHat',$hat->id)}}"><button class="btn abtn">more Detail</button></a>
        </div>
        </div>
    @endforeach

    @foreach($accs as $acc)
    <div class="card" style="width:30%">
    <img class="card-img-top" src="{{asset('accessory/'.$acc->image)}}" alt="Card image cap" style="width:100%">
    <div class="card-body">
        <p class="card-title">{{$acc->name}}</p>
        <p class="card-text">{{$acc->price}}Ks</p>
        <a href="{{route('detailAcc',$acc->id)}}"><button class="btn abtn">more Detail</button></a>
    </div>
    </div>
@endforeach
@endsection

@section('mobile')
    @foreach($bags as $bag)
        <div class="card" style="width:49%">
        <img class="card-img-top" src="{{asset('bag/'.$bag->image)}}" alt="Card image cap" style="width:100%">
        <div class="card-body">
            {{$bag->name}} <br>
            {{$bag->price}}Ks
            <p style="color:red">{{$bag->status}}</p>
            <a href="{{route('detailBag',$bag->id)}}"><button class="btn abtn">more Detail</button></a>
        </div>
        </div>
    @endforeach

    @foreach($hats as $hat)
        <div class="card" style="width:49%">
        <img class="card-img-top" src="{{asset('accessory/'.$hat->image)}}" alt="Card image cap" style="width:100%">
        <div class="card-body">
            {{$hat->name}} <br>
            {{$hat->price}}Ks
            <p style="color:red">{{$hat->status}}</p>
            <a href="{{route('detailHat',$hat->id)}}"><button class="btn abtn">more Detail</button></a>
        </div>
        </div>
    @endforeach

    @foreach($accs as $acc)
    <div class="card" style="width:49%">
    <img class="card-img-top" src="{{asset('accessory/'.$acc->image)}}" alt="Card image cap" style="width:100%">
    <div class="card-body">
        <p class="card-title">{{$acc->name}}</p>
        <p class="card-text">{{$acc->price}}Ks</p>
        <a href="{{route('detailAcc',$acc->id)}}"><button class="btn abtn">more Detail</button></a>
    </div>
    </div>
@endforeach
@endsection
