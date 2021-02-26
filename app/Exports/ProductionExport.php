<?php

namespace App\Exports;

use App\Models\ScadaProduction;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Session;

class ProductionExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
    	$date = Session::get('ReportsProdDate');
    	$location = Session::get('ReportsProdAsset');

    	if($location == 'All'){
            $ProdData = ScadaProduction::whereDate('created_at', '=', date($date))->get();
        }
        else{
            $ProdData = ScadaProduction::where('asset', $location)
                            ->whereDate('created_at', '=', date($date))
                            ->get();
        }

        return $ProdData;
    }

   

    // public function headings(): array
    // {
        
    //     return [
    //         'ID',
    //         'Asset',
    //         'Sub-Location',
    //         'Subject',      
    //         'Description',   
    //         'Created',
    //         'Resolved'
    //     ];
    // }
}



