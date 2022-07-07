@extends('layouts.homeDesign')

@section('desktop')
<div class="detail">
@if($pd == "bag")
    <img src="{{asset('bag/'.$data[0]->image)}}" style="width:100%">
    <ul class="list-group list-group-flush">
    <li class="list-group-item">Name:{{$data[0]->name}}</li>
    <li class="list-group-item">Price:{{$data[0]->price}}MMK</li>
    <li class="list-group-item">Material:{{$data[0]->material}}</li>
    <li class="list-group-item">Size:{{$data[0]->size}}</li>
    <li class="list-group-item">Status:{{$data[0]->status}}</li>
    <li class="list-group-item">{{$data[0]->item}} Item Left</li>
    </ul>
    <a href="https://www.facebook.com/rosisterfashion" style="display:block;"><button class="btn bbtn mt-3">Contact Admin To Buy</button></a>
    <button onclick="history.back()" class="btn btn-danger mt-3">Go Back</button>

    <div class="other mt-2">
        <h6>Other picture of This product</h6>
        @if($data[0]->image2 == null && $data[0]->image3 == null)
        Sorry!There is no other photo of this product.
        @elseif($data[0]->image2 != null && $data[0]->image3 == null)
        <img src="{{asset('bag/'.$data[0]->image2)}}" style="width:100%" class="mt-2 mb-2">
        @elseif($data[0]->image2 == null && $data[0]->image3 != null)
        <img src="{{asset('bag/'.$data[0]->image3)}}" style="width:100%" class="mt-2 mb-2">
        @else
        <img src="{{asset('bag/'.$data[0]->image2)}}" style="width:100%" class="mt-2 mb-2">
        <img src="{{asset('bag/'.$data[0]->image3)}}" style="width:100%" class="mt-2 mb-2">
        @endif
    </div>
    @elseif($pd == "hat")
    <img src="{{asset('accessory/'.$data[0]->image)}}" style="width:100%">
    <ul class="list-group list-group-flush">
    <li class="list-group-item">Name:{{$data[0]->name}}</li>
    <li class="list-group-item">Price:{{$data[0]->price}}MMK</li>
    <li class="list-group-item">Status:{{$data[0]->status}}</li>
    <li class="list-group-item">{{$data[0]->item}} Item Left</li>
    </ul>
    <a href="https://www.facebook.com/rosisterfashion" style="display:block;"><button class="btn bbtn mt-3">Contact Admin To Buy</button></a>
    <button onclick="history.back()" class="btn btn-danger mt-3">Go Back</button>

    @else
    <img src="{{asset('accessory/'.$data[0]->image)}}" style="width:100%">
    <ul class="list-group list-group-flush">
    <li class="list-group-item">Name:{{$data[0]->name}}</li>
    <li class="list-group-item">Price:{{$data[0]->price}}MMK</li>
    <li class="list-group-item">Accessory Type:{{$data[0]->type}}</li>
    </ul>
    <a href="https://www.facebook.com/rosisterfashion" style="display:block;"><button class="btn bbtn mt-3">Contact Admin To Buy</button></a>
    <button onclick="history.back()" class="btn btn-danger mt-3">Go Back</button>
    @endif
</div>
@endsection

@section('mobile')
    <div class="mdetail">
        @if($pd == "bag")
        <img src="{{asset('bag/'.$data[0]->image)}}" style="width:100%">
        <ul class="list-group list-group-flush">
        <li class="list-group-item">Name:{{$data[0]->name}}</li>
        <li class="list-group-item">Price:{{$data[0]->price}}MMK</li>
        <li class="list-group-item">Material:{{$data[0]->material}}</li>
        <li class="list-group-item">Size:{{$data[0]->size}}</li>
        <li class="list-group-item">Status:{{$data[0]->status}}</li>
        <li class="list-group-item">{{$data[0]->item}} Item Left</li>
        </ul>
        <a href="https://www.facebook.com/rosisterfashion" style="display:block;"><button class="btn bbtn mt-3">Contact Admin To Buy</button></a>
        <button onclick="history.back()" class="btn btn-danger mt-3">Go Back</button>

        <div class="other mt-2">
            <h6>Other picture of This product</h6>
            @if($data[0]->image2 == null && $data[0]->image3 == null)
            Sorry!There is no other photo of this product.
            @elseif($data[0]->image2 != null && $data[0]->image3 == null)
            <img src="{{asset('bag/'.$data[0]->image2)}}" style="width:100%" class="mt-2 mb-2">
            @elseif($data[0]->image2 == null && $data[0]->image3 != null)
            <img src="{{asset('bag/'.$data[0]->image3)}}" style="width:100%" class="mt-2 mb-2">
            @else
            <img src="{{asset('bag/'.$data[0]->image2)}}" style="width:100%" class="mt-2 mb-2">
            <img src="{{asset('bag/'.$data[0]->image3)}}" style="width:100%" class="mt-2 mb-2">
            @endif
        </div>
        @elseif($pd == "hat")
        <img src="{{asset('accessory/'.$data[0]->image)}}" style="width:100%">
        <ul class="list-group list-group-flush">
        <li class="list-group-item">Name:{{$data[0]->name}}</li>
        <li class="list-group-item">Price:{{$data[0]->price}}MMK</li>
        <li class="list-group-item">Status:{{$data[0]->status}}</li>
        <li class="list-group-item">{{$data[0]->item}} Item Left</li>
        </ul>
        <a href="https://www.facebook.com/rosisterfashion" style="display:block;"><button class="btn bbtn mt-3">Contact Admin To Buy</button></a>
        <button onclick="history.back()" class="btn btn-danger mt-3">Go Back</button>
        @else
        <img src="{{asset('accessory/'.$data[0]->image)}}" style="width:100%">
        <ul class="list-group list-group-flush">
        <li class="list-group-item">Name:{{$data[0]->name}}</li>
        <li class="list-group-item">Price:{{$data[0]->price}}MMK</li>
        <li class="list-group-item">Accessory Type:{{$data[0]->type}}</li>
        </ul>
        <a href="https://www.facebook.com/rosisterfashion" style="display:block;"><button class="btn bbtn mt-3">Contact Admin To Buy</button></a>
        <button onclick="history.back()" class="btn btn-danger mt-3">Go Back</button>
        @endif
    </div>
@endsection
