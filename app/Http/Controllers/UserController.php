<?php

namespace App\Http\Controllers;

use App\Models\Bag;
use App\Models\Hat;
use App\Models\AcceType;
use App\Models\Accessory;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home(){
        $bags = Bag::get();
        $accs = Accessory::get();
        $acceType = AcceType::get();
        $hat = Hat::get();
        $small = "small";
        return view('homePage')->with(['bags'=>$bags,'accs'=>$accs,'acceTypes'=>$acceType,'small'=>$small,'hats'=>$hat]);
    }

    public function bagOnly(){
        $filter = "bag";
        $data = Bag::get();
        $acceType = AcceType::get();
        return view('resultPage')->with(['datas'=>$data,'acceTypes'=>$acceType,'filter' => $filter]);
    }

    public function acceOnly(){
        $filter = "accessory";
        $data = Accessory::get();
        $acceType = AcceType::get();
        return view('resultPage')->with(['datas'=>$data,'acceTypes'=>$acceType,'filter' => $filter]);
    }

    public function hatOnly(){
        $filter = "hat";
        $data = hat::get();
        $acceType = AcceType::get();
        return view('resultPage')->with(['datas'=>$data,'acceTypes'=>$acceType,'filter' => $filter]);
    }

    //bag Size
    public function bagSize(){
        $data = Bag::where('size','small')->get();
        $acceType = AcceType::get();
        $filter = "Bag Size";
        return view('resultPage')->with(['datas'=>$data,'acceTypes'=>$acceType,'filter' => $filter]);
    }

    public function bagSizeM(){
        $data = Bag::where('size','medium')->get();
        $acceType = AcceType::get();
        $filter = "Bag Size";
        return view('resultPage')->with(['datas'=>$data,'acceTypes'=>$acceType,'filter' => $filter]);
    }

    public function bagSizeL(){
        $data = Bag::where('size','large')->get();
        $acceType = AcceType::get();
        $filter = "Bag Size";
        return view('resultPage')->with(['datas'=>$data,'acceTypes'=>$acceType,'filter' => $filter]);
    }

    //acceType
    public function acceType($type){
        $data = Accessory::where('type',$type)->get();
        $acceType = AcceType::get();
        $filter = $type;
        return view('resultPage2')->with(['datas'=>$data,'acceTypes'=>$acceType,'filter' => $filter]);
    }

    //search Data
    public function searchData(REQUEST $request){
        $searchData = $request->search;
        $resultData = Bag::where('name','like','%'.$searchData.'%')
                            ->orWhere('price','like','%'.$searchData.'%')
                            ->orWhere('size',$searchData)
                            ->get();
        $acceType = AcceType::get();
        $filter = $searchData;

        return view('searchResultPage')->with(['datas'=>$resultData,'acceTypes'=>$acceType,'filter' => $filter]);
    }

    //detail
    public function detailBag($id){
        $pd = "bag";
        $data = Bag::where('id',$id)->get();
        $acceType = AcceType::get();
        return view('detail')->with(['data'=>$data,'pd'=>$pd,'acceTypes'=>$acceType]);
    }

    public function detailAcc($id){
        $pd = "acce";
        $data = Accessory::where('id',$id)->get();
        $acceType = AcceType::get();
        return view('detail')->with(['data'=>$data,'pd'=>$pd,'acceTypes'=>$acceType]);
    }

    public function detailHat($id){
        $pd = "hat";
        $data = Hat::where('id',$id)->get();
        $acceType = AcceType::get();
        return view('detail')->with(['data'=>$data,'pd'=>$pd,'acceTypes'=>$acceType]);
    }
}
