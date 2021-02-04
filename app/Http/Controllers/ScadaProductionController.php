<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ScadaProduction;
use App\Models\Asset;
use App\Models\subAsset;
use Auth;
class ScadaProductionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $s_production = ScadaProduction::all();
        $styles = array("OK" => 'green', "NOK" => 'pink', "NA" => 'yellow', "OFF"=>'white');
        //echo "<pre>";print_r($s_production->toArray());die;
        return view('orm.scadaproduction.index', compact('s_production', 'styles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $asset = Asset::all();
        return view('orm.scadaproduction.create', compact('asset'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'PrimaryStatus' => 'required',
            'SecondaryStatus' => 'required',
            'ReplicationStatus' => 'required',
            'BWAStatus' => 'required',
            'VSATStatus' => 'required',
            'LeasedLineStatus' => 'required',
            'SwitchStatus' => 'required',
            'OthersStatus' => 'required',
            // 'remarks1.*' => 'required',
            // 'remarks2.*' => 'required',
        ],
        [
            // 'remarks1.*.required' => 'Remarks 1 is required.', 
            // 'remarks2.*.required' => 'Remarks 2 is required.', 
        ]);



        //return $request->all();
        $store = new ScadaProduction;
        $store->asset            = $request->asset;
        $store->subAsset            = $request->subasset;
        $store->primary_ip          = $request->PrimaryIP;
        $store->primary_status      = $request->PrimaryStatus;
        $store->secondary_ip        = $request->SecondaryIP;
        $store->secondary_status    = $request->SecondaryStatus;
        $store->replication_status  = $request->ReplicationStatus;
        $store->remarks1            = $request->remarks1;

        $store->BWA_IP              = $request->BWA_IP;
        $store->BWA_status          = $request->BWAStatus;
        $store->VAST_IP             = $request->VSAT_IP;
        $store->VAST_status         = $request->VSATStatus;
        $store->LL_IP               = $request->LeasedLineIP;
        $store->LL_status           = $request->LeasedLineStatus;
        $store->switch_IP           = $request->SwitchIP;
        $store->switch_status       = $request->SwitchStatus; //Gateway
        $store->others_IP           = $request->OthersIP;
        $store->others_status       = $request->OthersStatus;
        $store->remarks2            = $request->remarks2;
        $store->updated_by          =  Auth::user()->CPF_NO;

        $store->save();
        return redirect()->back()->with('success', 'Data inserted successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asset = Asset::all()->toArray();

        //echo "<pre>";print_r($asset);die;
        $prod_update = ScadaProduction::find($id);

        function searchByValue($id, $asset) {
           foreach ($asset as $key => $val) {
               if ($val['id'] === $id) {
                 $resultSet['asset'] = $val['asset'];
                 return $resultSet;
               }
           }
           return null;
        }

        $id = $prod_update->asset;
        $searchValue = searchByValue($id, $asset);

        return view('orm.scadaproduction.update', compact('prod_update','searchValue', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //return $request->all();
        $request->validate([
            'PrimaryIP' => 'required',
            'PrimaryStatus' => 'required',
            'SecondaryIP' => 'required',
            'SecondaryStatus' => 'required',
            'ReplicationT1T2' => 'required',
            'ReplicationStatus' => 'required',
            'asset' => 'required',
            'subAsset' => 'required',
            'BWA_IP' => 'required',
            'BWAStatus' => 'required',
            'VSAT_IP' => 'required',
            'VSATStatus' => 'required',
            'LeasedLineIP' => 'required',
            'LeasedLineStatus' => 'required',
            'SwitchIP' => 'required',
            'SwitchStatus' => 'required',
            'OthersIP' => 'required',
            'OthersStatus' => 'required',
            //'remarks1.*' => 'required',
            //'remarks2.*' => 'required',
        ],
        [
            // 'remarks1.*.required' => 'Remarks 1 is required.', 
            // 'remarks2.*.required' => 'Remarks 2 is required.', 
            'subAsset.required' => 'Instaltion  is required.', 
        ]);



        
        $prod_updt = ScadaProduction::find($id);
        $prod_updt->asset               = $request->asset;
        $prod_updt->subAsset            = $request->subAsset;
        $prod_updt->primary_ip          = $request->PrimaryIP;
        $prod_updt->primary_status      = $request->PrimaryStatus;
        $prod_updt->secondary_ip        = $request->SecondaryIP;
        $prod_updt->secondary_status    = $request->SecondaryStatus;
        $prod_updt->replication_status  = $request->ReplicationStatus;
        $prod_updt->remarks1            = $request->remarks1;

        $prod_updt->BWA_IP              = $request->BWA_IP;
        $prod_updt->BWA_status          = $request->BWAStatus;
        $prod_updt->VAST_IP             = $request->VSAT_IP;
        $prod_updt->VAST_status         = $request->VSATStatus;
        $prod_updt->LL_IP               = $request->LeasedLineIP;
        $prod_updt->LL_status           = $request->LeasedLineStatus;
        $prod_updt->switch_IP           = $request->SwitchIP;
        $prod_updt->switch_status       = $request->SwitchStatus; //Gateway
        $prod_updt->others_IP           = $request->OthersIP;
        $prod_updt->others_status       = $request->OthersStatus;
        $prod_updt->remarks2            = $request->remarks2;
        $prod_updt->updated_by          =  Auth::user()->CPF_NO;

        $prod_updt->save();
        return redirect()->route('scadaproduction.index')->with('success', 'Data udatated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    
}
