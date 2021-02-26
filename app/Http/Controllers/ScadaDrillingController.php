<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ScadaDrilling;
use App\Models\Asset;
use App\Models\UserActivity;
use Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Session;

class ScadaDrillingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index()
    { 
// $comment = ScadaDrilling::find(4)->activities;
// echo "<pre>";print_r($comment->toArray());die;

        $asset = Asset::all();
        $drilling = ScadaDrilling::all();
        $styles = array("OK" => 'green', "NOK" => 'pink', "NA" => 'yellow', "OFF"=>'white');
        return view('orm.scadadrilling.index', compact('drilling','styles','asset'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $asset = Asset::all();
        return view('orm.scadadrilling.create', compact('asset'));
        //echo "<pre>";print_r($s_production->toArray());die;
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
            'dril_asset_id'      => 'required',
            'drilsubasset'    => 'required',
            'DSA_IP'  => 'required',
            'DSA_Status'          => 'required',
            'DSB_ip'         => 'required',
            'DSB_Status'   => 'required',
            'WITSML_ip'       => 'required',
            'WITSML_LineStatus'       => 'required',
            'MDTOTCO_ip'       => 'required',
            'MDTOTCO_Status'       => 'required',
            'BWA_ip'       => 'required',
            'BWA_Status'       => 'required',
            'VSAT_ip'       => 'required',
            'VSAT_Status'       => 'required',
            'GATEWAY_ip'       => 'required',
            'GATEWAY_Status'       => 'required',
            'REPL_Status'       => 'required',
            // 'remarks1'       => 'required',
            // 'remarks2'       => 'required',
            // 'remarks3'       => 'required',
        ]);

        $store = new ScadaDrilling;
        $store->asset                   = $request->dril_asset_id;
        $store->subAsset                = $request->drilsubasset;
        $store->DSA_IP                  = $request->DSA_IP;
        $store->DSA_STATUS              = $request->DSA_Status;
        $store->DSB_IP                  = $request->DSB_ip;
        $store->DSB_STATUS              = $request->DSB_Status;
        $store->WITSML_IP               = $request->WITSML_ip;
        $store->WITSML_STATUS           = $request->WITSML_LineStatus;
        $store->MDTOTCO_IP              = $request->MDTOTCO_ip;
        $store->MDTOTCO_STATUS          = $request->MDTOTCO_Status;
        $store->REMARKS3                = $request->remarks3;
        $store->REPLICATION_STATUS      = $request->REPL_Status;
        $store->REMARKS1                = $request->remarks1;
        $store->BWA_IP                  = $request->BWA_ip;
        $store->BWA_STATUS              = $request->BWA_Status;
        $store->VSAT_IP                 = $request->VSAT_ip;
        $store->VSAT_STATUS             = $request->VSAT_Status;
        $store->GATEWAY_IP              = $request->GATEWAY_ip;
        $store->GATEWAY_STATUS          = $request->GATEWAY_Status;
        $store->REMARKS2                = $request->remarks2;

        $store->save();
        return redirect()->route('scadadrilling.index')->with('success', 'Data inserted successfully.');
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
        $edits = ScadaDrilling::find($id);
        return view('orm.scadadrilling.edit', compact('edits'));
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
            'PrimaryStatus'      => 'required',
            'SecondaryStatus'    => 'required',
            'ReplicationStatus'  => 'required',
            'BWAStatus'          => 'required',
            'GatewayStatus'         => 'required',
            'VsatStatus'   => 'required',

            // 'remarks1'       => 'required',
            // 'remarks2'       => 'required',
            // 'remarks3'       => 'required',
        ]);

        $update = ScadaDrilling::find($id);  
      
        $update->DSA_STATUS              = $request->PrimaryStatus;
        $update->DSB_STATUS              = $request->SecondaryStatus;
        $update->REPLICATION_STATUS      = $request->ReplicationStatus;
        
        $update->BWA_STATUS              = $request->BWAStatus;
        $update->GATEWAY_STATUS          = $request->GatewayStatus;
        $update->VSAT_STATUS             = $request->VsatStatus;

        $update->REMARKS1                = $request->remarks1;
        $update->REMARKS2                = $request->remarks2;
        $update->REMARKS3                = $request->remarks3;
        
        if ($update->save()) {
            $User_Act = new UserActivity;
            $User_Act->drilling_id = $id;
            $User_Act->cpf_no = Auth::user()->CPF_NO;
            $User_Act->scadaDate = $request->created_at;
            $User_Act->save();
            $message = 'Data Updated successfully.';
        }else{
            $message = 'Data not Updated.';
        }

        
        return redirect()->route('scadadrilling.index')->with('success', $message);
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

    public function DrillReports(){
        $asset = Asset::all(); 
        return view('orm.scadadrilling.DrillReports', compact('asset'));
    }

     //===================================Copy Drill Data ==================================
    public function drilreports(Request $request){
        
        $asset = Asset::all();
         $search = array('date'=>$request->dril_date, 'location'=>$request->search_location);
        $searchresults = '';
        if(!empty($request->dril_date)){
            $searchresults = ScadaDrilling::whereDate('created_at', '=', date($request->dril_date))->get();
        }
        else{
            $searchresults = ScadaDrilling::where('asset', $request->search_location)
                            ->whereDate('created_at', '=', date($request->dril_date))
                            ->get();
        }
        return view('orm.scadadrilling.searchresults', compact('searchresults','asset','search'));
    }





    //===================================Copy Drill Data ==================================
    public function drilDataCopy(Request $request){

        $request->validate([
            'copy_data' => 'required', 
        ],
        [
            'copy_data.required' => 'Copy Date is required.', 
        ]);

        if(isset(Auth::user()->CPF_NO)){
            $copyData = ScadaDrilling::where('asset', Auth::user()->ASSET)
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
                        $data['REMARKS1'] = null;
                        $data['REMARKS2'] = null;
                        $data['REMARKS3'] = null;

                        $data['created_at'] = carbon::now();
                        $data['updated_at'] = carbon::now();
                        unset($data['id']);
                        ScadaDrilling::create($data);
                    }

                   $message = count($assets).' Rows created successfully.';
                }else{
                    $message =  ' Found <span style="color:red">'.implode(',',$duplicates).'</span> duplicate input.';
                }
            }else{
                 $message =  ' Date not matched.';
            }
            
        }

        return redirect()->route('scadadrilling.index')->with('success', $message);

    }
    

    public function DrillReportshow(Request $request){

        Session::put('Drill_date', $request->date);
        Session::put('Drill_location', $request->location);

        $styles = array("OK" => 'green', "NOK" => 'pink', "NA" => 'yellow', "OFF"=>'white');

        $date_loc = array('date'=>$request->date, 'location'=>$request->location);
        $drillReports = '';
        
        if($request->location == 'All'){
            $drillReports = ScadaDrilling::whereDate('created_at', '=', date($request->date))->get();
        }
        else{
            $drillReports = ScadaDrilling::where('asset', $request->location)
                            ->whereDate('created_at', '=', date($request->date))
                            ->get();
        }

        $WITS = array();
        $RigSn = array();
        $DSA = array();
        $DSB = array();
        $REPL = array();
        $BWA = array();
        $VSAT = array();
        $GWay = array();
        $NA_count = count($drillReports);

        foreach ($drillReports as $value) {
            $WITS[] = $value->WITSML_STATUS;
            $RigSn[] = $value->MDTOTCO_STATUS;
            $DSA[] = $value->DSA_STATUS;
            $DSB[] = $value->DSB_STATUS;
            $REPL[] = $value->REPLICATION_STATUS;
            $BWA[] = $value->BWA_STATUS;
            $VSAT[] = $value->VSAT_STATUS;
            $GWay[] = $value->GATEWAY_STATUS;
        }
        $WITS       = array_count_values($WITS);         
        $RigSn      = array_count_values($RigSn);         
        $DSA        = array_count_values($DSA);         
        $DSB        = array_count_values($DSB);         
        $REPL       = array_count_values($REPL); 
        $BWA       = array_count_values($BWA); 
        $VSAT       = array_count_values($VSAT); 
        $GWay       = array_count_values($GWay); 

        //----------------------For OKs--------------------------------
        $WIT_S      = isset($WITS['OK']) ? $WITS['OK'] : 0;
        $Rig_S      = isset($RigSn['OK']) ? $RigSn['OK'] : 0;
        $DSA_S      = isset($DSA['OK']) ? $DSA['OK'] : 0;
        $DSB_S      = isset($DSB['OK']) ? $DSB['OK'] : 0;
        $REPL_S     = isset($REPL['OK']) ? $REPL['OK'] : 0;
        $BWA_S      = isset($BWA['OK']) ? $BWA['OK'] : 0;
        $VSAT_S     = isset($VSAT['OK']) ? $VSAT['OK'] : 0 ;
        $GWay_S     = isset($GWay['OK']) ? $GWay['OK'] : 0;

        //-----------------------For Total------------------------
        $WITS_NA      = isset($WITS['NA']) ? $WITS['NA'] : 0;
        $WITS_count = $NA_count - $WITS_NA;
        $RigSn_NA      = isset($RigSn['NA']) ? $RigSn['NA'] : 0;
        $RIGS_count = $NA_count - $RigSn_NA;
        $DSA_NA      = isset($DSA['NA']) ? $DSA['NA'] : 0;
        $dsa_count = $NA_count - $DSA_NA;
        $DSB_NA      = isset($DSB['NA']) ? $DSB['NA'] : 0;
        $DSB_count = $NA_count - $DSB_NA;
        $REPL_NA      = isset($REPL['NA']) ? $REPL['NA'] : 0;
        $REPL_count = $NA_count - $REPL_NA;
        $BWA_NA      = isset($BWA['NA']) ? $BWA['NA'] : 0;
        $BWA_count = $NA_count - $BWA_NA;
        $VSAT_NA      = isset($VSAT['NA']) ? $VSAT['NA'] : 0;
        $VSAT_count = $NA_count - $VSAT_NA;
        $GWay_NA      = isset($GWay['NA']) ? $GWay['NA'] : 0;
        $GWay_count = $NA_count - $GWay_NA;

        $total = array($WITS_count, $RIGS_count, $dsa_count, $DSB_count, $REPL_count, $BWA_count, $VSAT_count, $GWay_count);
        $ok = array($WIT_S, $Rig_S, $DSA_S, $DSB_S, $BWA_S, $REPL_S, $VSAT_S, $GWay_S);

        //$ids = implode(',', $id);

        return view('orm.scadadrilling.DrillReportshow', compact('drillReports','styles','date_loc', 'total', 'ok'));
    }
}
