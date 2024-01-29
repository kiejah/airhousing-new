<?php

namespace App\Http\Controllers;
use App\Models\Location;
use App\Models\Property;


use App\Models\PropertyUnit;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    //
    public function index(){
        //$properties = Property::where('featured_id','1')->get();
        //$locations = Location::all();
        $properties= Property::where('featured_id','1')->filter(request(['location','unit_type']))->get();
        $locations = Location::orderBy('name', 'ASC')->get();

        return view('frontend.landing',compact(['properties','locations']));
    }
    public function properties(){
        //dd('tuko hapa');
        $locations = Location::orderBy('name', 'ASC')->get();
        return view('frontend.properties',compact('locations'));
    }
    public function about_us(){
        return view('frontend.about_us.about_us_main');
    }
    public function showProperty($id)
    {
       
        $property = Property::find($id);
        $units = PropertyUnit::where('property_id', $id)->orderBy('id', 'desc')->get();
        return view('frontend.property.show', compact('property', 'units'));   
    }
    
}
