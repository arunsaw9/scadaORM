<?php

namespace App\Exports;

use App\Models\ScadaDrilling;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Session;

class DrillingExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
    	$Drill_date = Session::get('Drill_date');
		$Drill_location = Session::get('Drill_location');



		if($Drill_location == 'All'){
	        $ProdData = ScadaDrilling::whereDate('created_at', '=', date($Drill_date))->get();
	    }
	    else{
	        $ProdData = ScadaDrilling::where('asset', $Drill_location)
	                        ->whereDate('created_at', '=', date($Drill_date))
	                        ->get();
	    }

	    return $ProdData;

        //return ScadaDrilling::all();
    }
}



