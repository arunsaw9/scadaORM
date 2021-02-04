<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subAsset;

class OrmController extends Controller
{
    public function subasset(Request $request){

		try {
	        $subasset = subAsset::where('asset_id', $request->id)->get();
	        return \Response::json($subasset, 200);
	    } catch (\Exception $e) {
	        return response()->json(['message'=>'Data not found!'], 404);
	    }

    	
    }
}
