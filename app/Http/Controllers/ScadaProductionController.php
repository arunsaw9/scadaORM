<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ScadaProduction;
use App\Models\Asset;
use App\Models\subAsset;
use Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ScadaProductionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
         $this->middleware('auth');
         $this->middleware('permission:role-list|role-create|role-edit|role-delete', ['only' => ['index','show']]);
         $this->middleware('permission:role-create', ['only' => ['create','store']]);
         $this->middleware('permission:role-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:role-delete', ['only' => ['destroy']]);
    }


    public function index()
    {
        $s_production = ScadaProduction::all();
        $styles = array("OK" => 'green', "NOK" => 'pink', "NA" => 'yellow', "OFF"=>'white');
        return view('orm.scadaproduction.index', compact('s_production', 'styles'));
    }

  

    public function Copydata(Request $request){
        $request->validate([
            'copy_data' => 'required', 
        ],
        [
            'copy_data.required' => 'Copy Date is required.', 
        ]);

        if(isset(Auth::user()->CPF_NO)){
            $copyData = ScadaProduction::where('asset', Auth::user()->ASSET)
                            ->whereDate('created_at', '=', date($request->copy_data))
                            ->get();

            
            if ($copyData->count() != 0) {
                $assets = array();

                foreach ($copyData as $value) {
                    $assets[] = $value->subAsset;
                }

                //------------------------Find duplicate entry-----------------------------------
                $results = array();
                $duplicates = array();
                foreach ($assets as $item) {
                    if (in_array($item, $results)) {
                        $duplicates[] = $item;
                    }
                    $results[] = $item;
                }

                //----------------------------Insert data------------------------------
                if(count($duplicates) == 0){
                    foreach($copyData->toArray() as $data) {
                        $data['updated_by'] = Auth::user()->CPF_NO;
                        $data['remarks1'] = null;
                        $data['remarks2'] = null;

                        $data['created_at'] = carbon::now();
                        $data['updated_at'] = carbon::now();
                        unset($data['id']);
                        ScadaProduction::create($data);
                    }

                   $message = count($assets).' Rows created successfully.';
                }else{
                    $message =  ' Found <span style="color:red">'.implode(',',$duplicates).'</span> duplicate input.';
                }
            }else{
                 $message =  ' Date not matched.';
            }
            
        }       

        return redirect()->route('scadaproduction.index')->with('success', $message);

    }




    public function PreviousData(Request $request){

        $request->validate([
            'Previous_Date' => 'required', 
        ],
        [
            'Previous_Date.required' => 'Previous Date is required.', 
        ]);


        $styles = array("OK" => 'green', "NOK" => 'pink', "NA" => 'yellow', "OFF"=>'white');
        $date_loc = array('date'=>$request->Previous_Date);

        $viewData = '';
        if(isset(Auth::user()->ASSET)){
            $viewData = ScadaProduction::where('asset', Auth::user()->ASSET)
                            ->whereDate('created_at', '=', date($request->Previous_Date))
                            ->get();
        }
        else{
             $viewData = 'Input not matched.';
        }

        return view('orm.scadaproduction.view_data', compact('viewData','date_loc','styles'));

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
        return redirect()->route('scadaproduction.index')->with('success', 'Data inserted successfully.');
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


    public function LocalReportProd(){ 
        $asset = Asset::all();
        return view('orm.scadaproduction.localreports', compact('asset'));
    }

    public function LocalReportProdData(request $request){ 
        //return $request->all();

        $styles = array("OK" => 'green', "NOK" => 'pink', "NA" => 'yellow', "OFF"=>'white');

        $date_loc = array('date'=>$request->date, 'location'=>$request->location);

        $ProdData = '';

        if($request->location == 'All'){
            $ProdData = ScadaProduction::whereDate('created_at', '=', date($request->date))->get();
           // echo 'all';return $ProdData;
        }
        else{
            $ProdData = ScadaProduction::where('asset', $request->location)
                            ->whereDate('created_at', '=', date($request->date))
                            ->get();
                           //echo 'single'; return $ProdData;
        }
        
        return view('orm.scadaproduction.LocalReportProdData', compact('ProdData','date_loc','styles'));
    }









    public function ProductionReports(){
        $asset = Asset::all();
        return view('orm.scadaproduction.ReportsProd', compact('asset'));
    }



    public function ReportsProd(request $request){

        //return $request->all();
        $styles = array("OK" => 'green', "NOK" => 'pink', "NA" => 'yellow', "OFF"=>'white');

        $date_loc = array('date'=>$request->date, 'location'=>$request->location);
        $ReportsProd = '';
        
        if($request->location == 'All'){
            $ProdData = ScadaProduction::whereDate('created_at', '=', date($request->date))->get();
        }
        else{
            $ProdData = ScadaProduction::where('asset', $request->location)
                            ->whereDate('created_at', '=', date($request->date))
                            ->get();
        }


        $PSA = array();
        $PSB = array();
        $REPC = array();

        $B_M = array();
        $C_SC = array();
        $LL = array();
        $GWy = array();
        $Ku = array();

        $NA_count = count($ProdData);
        
        foreach ($ProdData as $value) {
            $PSA[] = $value->primary_status;
            $PSB[] = $value->secondary_status;
            $REPC[] = $value->replication_status;

            $B_M[] = $value->BWA_status;
            $C_SC[] = $value->VAST_status;

            $LL[] = $value->LL_status;
            $GWy[] = $value->switch_status;
            $Ku[] = $value->others_status;
        }
        $PSA       = array_count_values($PSA);         
        $PSB      = array_count_values($PSB);         
        $REPC        = array_count_values($REPC);   

        $B_M        = array_count_values($B_M);         
        $C_SC       = array_count_values($C_SC); 
        $LL       = array_count_values($LL); 
        $GWy       = array_count_values($GWy); 
        $Ku       = array_count_values($Ku); 

        //----------------------For OKs--------------------------------
        $PSA_S      = isset($PSA['OK']) ? $PSA['OK'] : 0;
        $PSB_S      = isset($PSB['OK']) ? $PSB['OK'] : 0;
        $REPC_S      = isset($REPC['OK']) ? $REPC['OK'] : 0;

        $B_M_S      = isset($B_M['OK']) ? $B_M['OK'] : 0;

        $C_SC_S     = isset($C_SC['OK']) ? $C_SC['OK'] : 0;

        $LL_S      = isset($LL['OK']) ? $LL['OK'] : 0;

        $GWy_S     = isset($GWy['OK']) ? $GWy['OK'] : 0 ;
        $Ku_S     = isset($Ku['OK']) ? $Ku['OK'] : 0;

        //-----------------------For Total------------------------
        $PSA_NA      = isset($PSA['NA']) ? $PSA['NA'] : 0;
        $PSA_count = $NA_count - $PSA_NA;

        $PSB_NA      = isset($PSB['NA']) ? $PSB['NA'] : 0;
        $PSB_count = $NA_count - $PSB_NA;

        $REPC_NA      = isset($REPC['NA']) ? $REPC['NA'] : 0;
        $REPC_count = $NA_count - $REPC_NA;

        $B_M_NA      = isset($B_M['NA']) ? $B_M['NA'] : 0;
        $B_M_count = $NA_count - $B_M_NA;

        $C_SC_NA      = isset($C_SC['NA']) ? $C_SC['NA'] : 0;
        $C_SC_count = $NA_count - $C_SC_NA;

        $LL_NA      = isset($LL['NA']) ? $LL['NA'] : 0;
        $LL_count = $NA_count - $LL_NA;

        $GWy_NA      = isset($GWy['NA']) ? $GWy['NA'] : 0;
        $GWy_count = $NA_count - $GWy_NA;

        $Ku_NA      = isset($Ku['NA']) ? $Ku['NA'] : 0;
        $Ku_count = $NA_count - $Ku_NA;

        $total = array($PSA_count, $PSB_count, $REPC_count, $B_M_count, $C_SC_count, $LL_count, $GWy_count, $Ku_count);
        $ok = array($PSA_S, $PSB_S, $REPC_S, $B_M_S, $LL_S, $C_SC_S, $GWy_S, $Ku_S);

        
        return view('orm.scadaproduction.ReportsProduction', compact('ProdData','date_loc','styles','total','ok'));
    }
    
    
}
