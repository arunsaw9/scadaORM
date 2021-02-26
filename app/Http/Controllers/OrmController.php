<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subAsset;
use App\Models\ScadaProduction;
use App\Models\UserActivity;

use App\Exports\ProductionExport;
use App\Exports\DrillingExport;
use Maatwebsite\Excel\Facades\Excel;

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

    public function drilSubasset(request $request){
    	try{
    		$drilsubasset = subAsset::where('asset_id', $request->id)->get();
	        return \Response::json($drilsubasset, 200);
    	}catch(\Exception $e){
    		return response()->json(['message' => 'Data not found']);
    	}
    }


    public function Export_ReportsProd(){

        //return ScadaProduction::all();
        return Excel::download(new ProductionExport, 'production.xlsx');
    }

    public function Export_LocalDrillReport(){

        return Excel::download(new DrillingExport, 'drilling.xlsx');
    }

    public function UserCPF(Request $request){
        //return date($request->id2);
        //return $request->all();

       try {
            $date = date('Y-m-d', strtotime($request->id2));

            $user_cpf = UserActivity::where('drilling_id', $request->id1)
                                       ->whereDate('scadaDate', '=', date($date) )->get();
            return \Response::json($user_cpf, 200);

        } catch (\Exception $e) {
            return response()->json(['message'=>'Data not found!'], 404);
        }
       
    }

    public function test(){
        $strtotime = '2021-02-19 09:25:19';
        $date = date('Y-m-d', strtotime($strtotime));

         $user_cpf = UserActivity::where('drilling_id', 4)
                                   ->whereDate('scadaDate', '=', date($date) )->get();
         dd($user_cpf); 
    }

}
