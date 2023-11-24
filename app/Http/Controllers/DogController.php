<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dog;
use App\Models\Breed;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class DogController extends Controller
{
    //
    public function index(Request $request){
        Log::info($request);
        $breeds = Breed::select('name','id')->get();
        if($request->breed == null){
            $dogs = Dog::paginate(2);
        }else{
            $dogs = Dog::where('breed_id', $request->breed)->paginate(1);
        }
        return response()->json([
            'dogs'=>$dogs,
            'breeds'=>$breeds,
        ], 200);
    }

    public function save(Request $request){
        $validator = $this->validateDog($request);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422); //
        }    

        $dog = new Dog;
        $dog->name = $request->name;
        $dog->breed = $request->breed;
        $dog->size = $request->size;
        $path = $request->file('photo')->store('images/dog-'.$dog->id, 'storage');
        //guardar en storage y guardar path
        $dog->photo = $path;
        $dog->save();

        return response()->json([
            'message' => 'Dog saved successfully',
            'dog'=>$dog,
        ], 200);
    }

    public function validateDog(Request $request){
        return Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'breed' => 'required|string|max:255|min:3|',
            'size' => 'required|string',
            'photo'=> 'required|image|mimes:jpeg,jpg,jpeg|max:2048',
        ]);
    }

    public function getDetails(){
        $colors = Dog::distinct()->pluck('hair_color');

        $sizes = Dog::distinct()->pluck('size');
        return response()->json([
            'colors'=>$colors,
            'sizes'=>$sizes,
        ], 200);
    }
}
