<?php

namespace App\Http\Controllers;

use App\Models\Bag;
use App\Models\Hat;
use App\Models\AcceType;
use App\Models\Accessory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $bags = Bag::get();
        return view('home')->with('bags',$bags);
    }

    public function AddBagPage(){
        return view('addBagPage');
    }

    public function addBag(REQUEST $request){
        $file = $request->file('image');
        $filename = uniqid()."_".$file->getClientOriginalName();
        $file->move(public_path().'/bag/',$filename);

        if($request->has('image2')){
        $file2 = $request->file('image2');
        $filename2 = uniqid()."_".$file2->getClientOriginalName();
        $file2->move(public_path().'/bag/',$filename2);
        }
        else{
            $filename2 = null;
        }

        if($request->has('image3')){
        $file3 = $request->file('image3');
        $filename3 = uniqid()."_".$file3->getClientOriginalName();
        $file3->move(public_path().'/bag/',$filename3);
        }
        else{
            $filename3 = null;
        }
        Bag::create([
            'name' => $request->name,
            'image' => $filename,
            'image2' => $filename2,
            'image3' => $filename3,
            'material' => $request->material,
            'size' => $request->size,
            'price' => $request->price,
            'status' => $request->status,
            'item' => $request->item,
        ]);

        return redirect('home')->with('message','bag is added to database Successfully!');
    }

    //delete bag
    public function deleteBag($id){
        Bag::find($id)->delete();
        return redirect('home')->with('delete','bag is deleted from database Successfully!');
    }

    //edit Page
    public function editPage($id){
        $bag = Bag::where('id',$id)->get();
        return view('editPage')->with('bag',$bag);
    }

    //edit
    public function editBag(REQUEST $request){
        $id = $request->id;

        if($request->has('image')){
            $file = $request->file('image');
            $filename = uniqid()."_".$file->getClientOriginalName();
            $file->move(public_path().'/bag/',$filename);
        }
        else{
            $imageData = Bag::where('id',$id)->get();
            $filename = $imageData[0]->image;
        }

        if($request->has('image2')){
            $file2 = $request->file('image2');
            $filename2 = uniqid()."_".$file2->getClientOriginalName();
            $file2->move(public_path().'/bag/',$filename2);
        }
        else{
            $imageData2 = Bag::where('id',$id)->get();
            $filename2 = $imageData2[0]->image2;
        }

        if($request->has('image3')){
            $file3 = $request->file('image3');
            $filename3 = uniqid()."_".$file3->getClientOriginalName();
            $file3->move(public_path().'/bag/',$filename3);
        }
        else{
            $imageData3 = Bag::where('id',$id)->get();
            $filename3 = $imageData3[0]->image3;
        }

        $data = [
            'name' => $request->name,
            'image' => $filename,
            'image2' => $filename2,
            'image3' => $filename3,
            'material' => $request->material,
            'size' => $request->size,
            'price' => $request->price,
            'status' => $request->status,
            'item' => $request->item,
        ];

        Bag::where('id',$id)->update($data);
        return redirect('home')->with('EditSuccess','bag-data are Edited Successfully!');
    }


    //accessories List
    public function accList(){
        $accessories = Accessory::get();
        return view('accList')->with('accessories',$accessories);
    }

    //add acessories
    public function addAccessoryPage(){
        $types = AcceType::get();
        return view('addAccPage')->with('types',$types);
    }

    public function addAccessory(REQUEST $request){
        $file = $request->file('image');
        $filename = uniqid()."_".$file->getClientOriginalName();
        $file->move(public_path().'/accessory/',$filename);

        Accessory::create([
            'name' => $request->name,
            'image' => $filename,
            'price' => $request->price,
            'type' => $request->type,
        ]);

        return redirect('accList')->with('message','Accessory is added to database Successfully!');
    }

    //delete Accessory
    public function deleteAcc($id){
        Accessory::find($id)->delete();
        return redirect('accList')->with('delete','Accessory is deleted from database Successfully!');
    }

    //edit Accessory
    public function editAccPage($id){
        $types = AcceType::get();
        $acc = Accessory::where('id',$id)->get();
        return view('editAccPage')->with(['acc'=>$acc,'types'=>$types]);
    }

    //edit
    public function editAcc(REQUEST $request){
        $id = $request->id;

        if($request->has('image')){
            $file = $request->file('image');
            $filename = uniqid()."_".$file->getClientOriginalName();
            $file->move(public_path().'/accessory/',$filename);
        }
        else{
            $imageData = Accessory::where('id',$id)->get();
            $filename = $imageData[0]->image;
        }

        $data = [
            'name' => $request->name,
            'image' => $filename,
            'price' => $request->price,
            'type' => $request->type,
        ];

        Accessory::where('id',$id)->update($data);
        return redirect('accList')->with('EditSuccess','Accessory-data are Edited Successfully!');
    }

    //add New Accessory Type
    public function addNewTypePage(){
        $types = AcceType::get();
        return view('addNewTypePage')->with('types',$types);
    }

    public function addNewType(REQUEST $request){
        AcceType::create([
            'name' => $request->name,
        ]);

        return redirect('accList')->with('message','New Type is added to database Successfully!');
    }

    //delete Type
    public function deleteType($id){
        AcceType::find($id)->delete();
        return redirect('accList')->with('delete','Accessory type is deleted from database Successfully!');
    }

    //edit Type
    public function editTypePage($id){
        $typeData = AcceType::where('id',$id)->get();
        return view('editTypePage')->with('typeData',$typeData);
    }

    public function editType(REQUEST $request){
        $id = $request->id;
        $data = [
            'name' => $request->name,
        ];

        AcceType::where('id',$id)->update($data);
        return redirect('accList')->with('EditSuccess','Accessory-type-data is Edited Successfully!');
    }


    //hat List
    public function hatList(){
        $hat = Hat::get();
        return view('hatList')->with('hats',$hat);
    }

    //add hat
    public function AddHatPage(){
        return view('addHatPage');
    }

    public function addHat(REQUEST $request){
        $file = $request->file('image');
        $filename = uniqid()."_".$file->getClientOriginalName();
        $file->move(public_path().'/accessory/',$filename);

        Hat::create([
            'name' => $request->name,
            'image' => $filename,
            'price' => $request->price,
            'status' => $request->status,
            'item' => $request->item,
        ]);

        return redirect('hatList')->with('message','Hat is added to database Successfully!');
    }

     //delete hat
     public function deleteHat($id){
        Hat::find($id)->delete();
        return redirect('hatList')->with('delete','hat is deleted from database Successfully!');
    }

    //edit hat
    public function editHatPage($id){
        $hat = Hat::where('id',$id)->get();
        return view('editHatPage')->with(['hat'=>$hat]);
    }

    public function editHat(REQUEST $request){
        $id = $request->id;

        if($request->has('image')){
            $file = $request->file('image');
            $filename = uniqid()."_".$file->getClientOriginalName();
            $file->move(public_path().'/accessory/',$filename);
        }
        else{
            $imageData = Hat::where('id',$id)->get();
            $filename = $imageData[0]->image;
        }

        $data = [
            'name' => $request->name,
            'image' => $filename,
            'price' => $request->price,
            'status' => $request->status,
            'item' => $request->item,
        ];

        Hat::where('id',$id)->update($data);
        return redirect('hatList')->with('EditSuccess','Hat-data are Edited Successfully!');
    }
}
