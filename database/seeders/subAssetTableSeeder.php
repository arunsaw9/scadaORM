<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\subAsset;

class subAssetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $location = [
        	['asset_id' => 1, 'services_id' => 1, 'location' => 'TPRADBGCS01'],
        	['asset_id' => 1, 'services_id' => 1, 'location' => 'TPRBRMGGS01'],
        	['asset_id' => 1, 'services_id' => 1, 'location' => 'TPRROKGCS01'],
        	['asset_id' => 1, 'services_id' => 1, 'location' => 'TPRKONGCS01'],
        	['asset_id' => 1, 'services_id' => 1, 'location' => 'T#1 New'],

        	['asset_id' => 2, 'services_id' => 1, 'location' => 'AMD Kalol GGS 01'],
        	['asset_id' => 2, 'services_id' => 1, 'location' => 'AMD Kalol GGS 02'],
        	['asset_id' => 2, 'services_id' => 1, 'location' => 'AMD Kalol GGS 03'],
        	['asset_id' => 2, 'services_id' => 1, 'location' => 'AMD Kalol GGS 04'],
        	['asset_id' => 2, 'services_id' => 1, 'location' => 'AMD Kalol GGS 05'],
        	['asset_id' => 2, 'services_id' => 1, 'location' => 'AMD Kalol GGS 06'],
        	['asset_id' => 2, 'services_id' => 1, 'location' => 'AMD Kalol GGS 07'],
        	['asset_id' => 2, 'services_id' => 1, 'location' => 'AMD Kalol GGS 08'],
        	['asset_id' => 2, 'services_id' => 1, 'location' => 'AMD Kalol GGS 09'],
        	['asset_id' => 2, 'services_id' => 1, 'location' => 'AMD Kalol GGS 11'],
        	['asset_id' => 2, 'services_id' => 1, 'location' => 'AMD Motera GGS 01'],
        	['asset_id' => 2, 'services_id' => 1, 'location' => 'AMD WDU GGS 01'],
        	['asset_id' => 2, 'services_id' => 1, 'location' => 'AMD Kalol CTF 01'],
        	['asset_id' => 2, 'services_id' => 1, 'location' => 'AMD Kalol GCS 01'],
        	['asset_id' => 2, 'services_id' => 1, 'location' => 'AMD Nawagam GGS 01'],
        	['asset_id' => 2, 'services_id' => 1, 'location' => 'AMD Nawagam GGS 02'],
        	['asset_id' => 2, 'services_id' => 1, 'location' => 'AMD Nawagam GGS 03'],
        	['asset_id' => 2, 'services_id' => 1, 'location' => 'AMD NawagamDES 01'],
        	['asset_id' => 2, 'services_id' => 1, 'location' => 'AMD RML GGS 01'],
        	['asset_id' => 2, 'services_id' => 1, 'location' => 'AMD NDJ GGS 01'],
        	['asset_id' => 2, 'services_id' => 1, 'location' => 'AMD WSN GGS 01'],
        	['asset_id' => 2, 'services_id' => 1, 'location' => 'AMD NGM CTF 01'],
        	['asset_id' => 2, 'services_id' => 1, 'location' => 'AMD SKD GGS 01'],
        	['asset_id' => 2, 'services_id' => 1, 'location' => 'AMD VRJ GGS 01'],
        	['asset_id' => 2, 'services_id' => 1, 'location' => 'AMD JHR GGS 01'],
        	['asset_id' => 2, 'services_id' => 1, 'location' => 'AMD JHR GGS 02'],
        	['asset_id' => 2, 'services_id' => 1, 'location' => 'AMD SND GGS 01'],
        	['asset_id' => 2, 'services_id' => 1, 'location' => 'AMD SND GGS 02'],
        	['asset_id' => 2, 'services_id' => 1, 'location' => 'AMD LIM GGS 01'],
        	['asset_id' => 2, 'services_id' => 1, 'location' => 'AMD LIM GGS 02'],
        	['asset_id' => 2, 'services_id' => 1, 'location' => 'AMD GMJ GGS 01'],
        	['asset_id' => 2, 'services_id' => 1, 'location' => 'AMD PLD GGS 01'],


        	['asset_id' => 3, 'services_id' => 1, 'location' => 'ANK GGS 01'],
        	['asset_id' => 3, 'services_id' => 1, 'location' => 'ANK GGS 02'],
        	['asset_id' => 3, 'services_id' => 1, 'location' => 'ANK GGS 03'],
        	['asset_id' => 3, 'services_id' => 1, 'location' => 'ANK GGS 04'],
        	['asset_id' => 3, 'services_id' => 1, 'location' => 'ANK GGS 05'],
        	['asset_id' => 3, 'services_id' => 1, 'location' => 'ANK GGS 06'],
        	['asset_id' => 3, 'services_id' => 1, 'location' => 'MOTWAN GGS 01'],
        	['asset_id' => 3, 'services_id' => 1, 'location' => 'ANK CTF 01'],
        	['asset_id' => 3, 'services_id' => 1, 'location' => 'KOSAMBA GGS01'],
        	['asset_id' => 3, 'services_id' => 1, 'location' => 'OLPAD GCS01'],
        	['asset_id' => 3, 'services_id' => 1, 'location' => 'KIM EPS01'],
        	['asset_id' => 3, 'services_id' => 1, 'location' => 'GDR GGS01'],
        	['asset_id' => 3, 'services_id' => 1, 'location' => 'GDR GGS02'],
        	['asset_id' => 3, 'services_id' => 1, 'location' => 'GDR GGS03'],
        	['asset_id' => 3, 'services_id' => 1, 'location' => 'GDR GGS04'],
        	['asset_id' => 3, 'services_id' => 1, 'location' => 'GDR GGS05'],
        	['asset_id' => 3, 'services_id' => 1, 'location' => 'GDR GGS06'],
        	['asset_id' => 3, 'services_id' => 1, 'location' => 'GDR GGS07'],
        	['asset_id' => 3, 'services_id' => 1, 'location' => 'GDR GGS08'],
        	['asset_id' => 3, 'services_id' => 1, 'location' => 'EPS - 253'],
        	['asset_id' => 3, 'services_id' => 1, 'location' => 'GDR CPF01'],
        	['asset_id' => 3, 'services_id' => 1, 'location' => 'GDR DAHEJ01'],
        	['asset_id' => 3, 'services_id' => 1, 'location' => 'GDR JOLWA01'],
        	['asset_id' => 3, 'services_id' => 1, 'location' => 'GNAQ GGS'],
        	['asset_id' => 3, 'services_id' => 1, 'location' => 'NADA GGS'],
        	['asset_id' => 3, 'services_id' => 1, 'location' => 'JAMBUSAR GGS'],
        	['asset_id' => 3, 'services_id' => 1, 'location' => 'DABKA GGS'],
        	['asset_id' => 3, 'services_id' => 1, 'location' => 'ANK KT'],


        	['asset_id' => 4, 'services_id' => 1, 'location' => 'RDS GGS01'],	
        	['asset_id' => 4, 'services_id' => 1, 'location' => 'RDS GGS02'],	
        	['asset_id' => 4, 'services_id' => 1, 'location' => 'RDS GGS03'],	
        	['asset_id' => 4, 'services_id' => 1, 'location' => 'RDS GGS04'],	
        	['asset_id' => 4, 'services_id' => 1, 'location' => 'DHL GGS 01'],	
        	['asset_id' => 4, 'services_id' => 1, 'location' => 'SAFRAI EPS'],	
        	['asset_id' => 4, 'services_id' => 1, 'location' => 'T# 1 Nazira for ARP - New'],	
        	['asset_id' => 4, 'services_id' => 1, 'location' => 't# 1 for Geleky - New'],

        	['asset_id' => 5, 'services_id' => 1, 'location' => 'BPA'],
        	['asset_id' => 5, 'services_id' => 1, 'location' => 'B193'],
        	['asset_id' => 5, 'services_id' => 1, 'location' => 'DDP'],

        	['asset_id' => 6, 'services_id' => 1, 'location' => 'CBY PDR GGS-01'],
        	['asset_id' => 6, 'services_id' => 1, 'location' => 'CBY KTN GGS-01'],
        	['asset_id' => 6, 'services_id' => 1, 'location' => 'CBY AKJ GGS-01'],

        	['asset_id' => 8, 'services_id' => 1, 'location' => 'Hazira'],

        	['asset_id' => 9, 'services_id' => 1, 'location' => 'JPRGMWGCS01'],

        	['asset_id' => 10, 'services_id' => 1, 'location' => 'Koraghat GGS-2'],
        	['asset_id' => 10, 'services_id' => 1, 'location' => 'Nambar GGS-1'],
        	['asset_id' => 10, 'services_id' => 1, 'location' => 'Tier -1 (New)'],

        	['asset_id' => 11, 'services_id' => 1, 'location' => 'Kakinada'],

        	['asset_id' => 12, 'services_id' => 1, 'location' => 'NARIMANAM GGS 01'],
        	['asset_id' => 12, 'services_id' => 1, 'location' => 'TIRUVARUR EPSO1'],
        	['asset_id' => 12, 'services_id' => 1, 'location' => 'KAMALAPURAM EPSO1'],
        	['asset_id' => 12, 'services_id' => 1, 'location' => 'NANILAM EPSO1'],
        	['asset_id' => 12, 'services_id' => 1, 'location' => 'ADIYAKKAMANGALAM GGSO1'],
        	['asset_id' => 12, 'services_id' => 1, 'location' => 'KOVILKALAPAL GCSO1'],
        	['asset_id' => 12, 'services_id' => 1, 'location' => 'KUTHALAM GCSO1'],
        	['asset_id' => 12, 'services_id' => 1, 'location' => 'BHUVANAGIRI EPSO1'],
        	['asset_id' => 12, 'services_id' => 1, 'location' => 'RAMNAD GCSO1'],

        	['asset_id' => 14, 'services_id' => 1, 'location' => 'MHN'],
        	['asset_id' => 14, 'services_id' => 1, 'location' => 'ICP'],
        	['asset_id' => 14, 'services_id' => 1, 'location' => 'NQO'],
        	['asset_id' => 14, 'services_id' => 1, 'location' => 'BHS'],
        	['asset_id' => 14, 'services_id' => 1, 'location' => 'SHP'],
        	['asset_id' => 14, 'services_id' => 1, 'location' => 'FPSO'],

        	['asset_id' => 15, 'services_id' => 1, 'location' => 'BALOL GGS-I'],
        	['asset_id' => 15, 'services_id' => 1, 'location' => 'BALOL GGS-II'],
        	['asset_id' => 15, 'services_id' => 1, 'location' => 'BALOL GGS-III'],
        	['asset_id' => 15, 'services_id' => 1, 'location' => 'BALOL GGS-IV'],
        	['asset_id' => 15, 'services_id' => 1, 'location' => 'BALOL AIP01'],
        	['asset_id' => 15, 'services_id' => 1, 'location' => 'Bechara GGS-I'],
        	['asset_id' => 15, 'services_id' => 1, 'location' => 'Bechara GGS-II'],
        	['asset_id' => 15, 'services_id' => 1, 'location' => 'JOTANA GGS'],
        	['asset_id' => 15, 'services_id' => 1, 'location' => 'LANGNEJ MTS'],
        	['asset_id' => 15, 'services_id' => 1, 'location' => 'LANWA GGS-I'],
        	['asset_id' => 15, 'services_id' => 1, 'location' => 'LANWA GGS-II'],
        	['asset_id' => 15, 'services_id' => 1, 'location' => 'LANWA GGS-III'],
        	['asset_id' => 15, 'services_id' => 1, 'location' => 'LINCH GGS'],
        	['asset_id' => 15, 'services_id' => 1, 'location' => 'MEHSANA CTF'],
        	['asset_id' => 15, 'services_id' => 1, 'location' => 'North SANTHAL CTF'],
        	['asset_id' => 15, 'services_id' => 1, 'location' => 'NANDASAN GGS'],
        	['asset_id' => 15, 'services_id' => 1, 'location' => 'North kadi CTF'],
        	['asset_id' => 15, 'services_id' => 1, 'location' => 'North kadi GGS-I'],
        	['asset_id' => 15, 'services_id' => 1, 'location' => 'North kadi GGS-II'],
        	['asset_id' => 15, 'services_id' => 1, 'location' => 'North kadi GGS-III'],
        	['asset_id' => 15, 'services_id' => 1, 'location' => 'North kadi GGS-IV'],
        	['asset_id' => 15, 'services_id' => 1, 'location' => 'South SANTHAL CTF'],
        	['asset_id' => 15, 'services_id' => 1, 'location' => 'SANTHAL PNL01'],
        	['asset_id' => 15, 'services_id' => 1, 'location' => 'Sobhasan CTF'],
        	['asset_id' => 15, 'services_id' => 1, 'location' => 'Sobhasan GGS-I'],
        	['asset_id' => 15, 'services_id' => 1, 'location' => 'Sobhasan GGS-II'],

        	['asset_id' => 16, 'services_id' => 1, 'location' => 'Neelam'],
        	['asset_id' => 16, 'services_id' => 1, 'location' => 'Heera'],

        	['asset_id' => 17, 'services_id' => 1, 'location' => 'PASARALAPUDI GGS 01'],
        	['asset_id' => 17, 'services_id' => 1, 'location' => 'ODALAREVU GCS 01'],
        	['asset_id' => 17, 'services_id' => 1, 'location' => 'KESANAPALLI-W-GGS 01'],
        	['asset_id' => 17, 'services_id' => 1, 'location' => 'TATIPAKA GCS 01'],
        	['asset_id' => 17, 'services_id' => 1, 'location' => 'PONAMANDA GCS 01'],
        	['asset_id' => 17, 'services_id' => 1, 'location' => 'ADAVIPALEM GCS08'],
        	['asset_id' => 17, 'services_id' => 1, 'location' => 'MORI GCS 01'],
        	['asset_id' => 17, 'services_id' => 1, 'location' => 'KAIKALARU EPS 01'],
        	['asset_id' => 17, 'services_id' => 1, 'location' => 'LINGALA GGS 02'],
        	['asset_id' => 17, 'services_id' => 1, 'location' => 'NANDIGAMA EPS 01'],
        	['asset_id' => 17, 'services_id' => 1, 'location' => 'NARSAPUR GCS 01'],
        	['asset_id' => 17, 'services_id' => 1, 'location' => 'MANDAPETA GCS 01'],
        	['asset_id' => 17, 'services_id' => 1, 'location' => 'ENDAMARU GCS 01'],
        	['asset_id' => 17, 'services_id' => 1, 'location' => 'GMAA GGS 01'],
        	['asset_id' => 17, 'services_id' => 1, 'location' => 'MANDAPETA EPS 01'],
        	['asset_id' => 17, 'services_id' => 1, 'location' => 'S YANAM OUT 01'],

        	['asset_id' => 18, 'services_id' => 1, 'location' => 'Silchar'],
        	['asset_id' => 19, 'services_id' => 1, 'location' => 'U&T'],

            ['asset_id' => 20, 'services_id' => 1, 'location' => 'Delhi-01'],
            ['asset_id' => 21, 'services_id' => 1, 'location' => 'Dehradun-01'],

        	//========== For Drilling =======================

        	['asset_id' => 1, 'services_id' => 2, 'location' => 'E-1400-10'],
        	['asset_id' => 1, 'services_id' => 2, 'location' => 'ARM-U-UE'],
        	['asset_id' => 1, 'services_id' => 2, 'location' => 'E-1400-14'],

        	['asset_id' => 2, 'services_id' => 2, 'location' => 'IPS-700-M1'],
        	['asset_id' => 2, 'services_id' => 2, 'location' => 'IPS-700-M2'],
        	['asset_id' => 2, 'services_id' => 2, 'location' => 'IPS-700-M3'],
        	['asset_id' => 2, 'services_id' => 2, 'location' => 'IPS-700-M8# IPS700M4'],
        	['asset_id' => 2, 'services_id' => 2, 'location' => 'E-1400-M1# F3050-2'],

        	['asset_id' => 3, 'services_id' => 2, 'location' => 'EV-2000-2# F6100-2'],
        	['asset_id' => 3, 'services_id' => 2, 'location' => 'E-1400-3'],
        	['asset_id' => 3, 'services_id' => 2, 'location' => 'E-1400-5'],
        	['asset_id' => 3, 'services_id' => 2, 'location' => 'E-1400-7'],
        	['asset_id' => 3, 'services_id' => 2, 'location' => 'E-760-5'],
        	['asset_id' => 3, 'services_id' => 2, 'location' => 'IPS-700-M10'],

        	['asset_id' => 4, 'services_id' => 2, 'location' => 'E-1400-6 # E2000-4'],
        	['asset_id' => 4, 'services_id' => 2, 'location' => 'E-1400-21'],
        	['asset_id' => 4, 'services_id' => 2, 'location' => 'E-2000-6'],
        	['asset_id' => 4, 'services_id' => 2, 'location' => 'E-2000-9'],
        	['asset_id' => 4, 'services_id' => 2, 'location' => 'E-1400-4#E2000-7'],
        	['asset_id' => 4, 'services_id' => 2, 'location' => 'E-1400-1'],
        	['asset_id' => 4, 'services_id' => 2, 'location' => 'E-3000-1'],
        	['asset_id' => 4, 'services_id' => 2, 'location' => 'E-1400-13#E2000-5'],
        	['asset_id' => 4, 'services_id' => 2, 'location' => 'EV-2000-3# F4900-1'],
        	['asset_id' => 4, 'services_id' => 2, 'location' => 'EV-2000-4# E1400-4'],
        	['asset_id' => 4, 'services_id' => 2, 'location' => 'EV-2000-5 # E1400-6'],
        	['asset_id' => 4, 'services_id' => 2, 'location' => 'F-6100-1'],
        	['asset_id' => 4, 'services_id' => 2, 'location' => 'E1400-13'],
        	['asset_id' => 4, 'services_id' => 2, 'location' => 'ARMCUE-1# E-1400-2'],

        	['asset_id' => 6, 'services_id' => 2, 'location' => 'IPS-700-M9'],

        	['asset_id' => 7, 'services_id' => 2, 'location' => 'E-2000-8'],

        	['asset_id' => 9, 'services_id' => 2, 'location' => 'E-760-13'],

        	['asset_id' => 10, 'services_id' => 2, 'location' => 'E-760-9 '],
        	['asset_id' => 10, 'services_id' => 2, 'location' => 'E-760-10'],
        	['asset_id' => 10, 'services_id' => 2, 'location' => 'E-1400-24'],

        	['asset_id' => 12, 'services_id' => 2, 'location' => 'E-1400-9'],
        	['asset_id' => 12, 'services_id' => 2, 'location' => 'E-1400-19'],
        	['asset_id' => 12, 'services_id' => 2, 'location' => 'E-760-3'],
        	['asset_id' => 12, 'services_id' => 2, 'location' => 'E-760-14'],
        	['asset_id' => 12, 'services_id' => 2, 'location' => 'E-760-15'],
        	['asset_id' => 12, 'services_id' => 2, 'location' => 'E-760-16'],
        	['asset_id' => 12, 'services_id' => 2, 'location' => 'EV-2000-6'],

        	['asset_id' => 13, 'services_id' => 2, 'location' => 'BI-2000-1'],

        	['asset_id' => 15, 'services_id' => 2, 'location' => 'E-760-18'],
        	['asset_id' => 15, 'services_id' => 2, 'location' => 'E-760-11'],
        	['asset_id' => 15, 'services_id' => 2, 'location' => 'IPS-700-M5'],
        	['asset_id' => 15, 'services_id' => 2, 'location' => 'IPS-700-M6'],
        	['asset_id' => 15, 'services_id' => 2, 'location' => 'IPS-700-M7'],
        	['asset_id' => 15, 'services_id' => 2, 'location' => 'BHEL-750-M2'],

        	['asset_id' => 17, 'services_id' => 2, 'location' => 'E-1400-16'],
        	['asset_id' => 17, 'services_id' => 2, 'location' => 'E-1400-17'],
        	['asset_id' => 17, 'services_id' => 2, 'location' => 'E-2000-3'],
        	['asset_id' => 17, 'services_id' => 2, 'location' => 'E-760-M'],
        	['asset_id' => 17, 'services_id' => 2, 'location' => 'E-2000-1'],
        	['asset_id' => 17, 'services_id' => 2, 'location' => 'EV-2000-1# E1400-20'],
        	['asset_id' => 17, 'services_id' => 2, 'location' => 'BI-2000-2'],

        	['asset_id' => 18, 'services_id' => 2, 'location' => 'E-1400-12'],
        	['asset_id' => 18, 'services_id' => 2, 'location' => 'E-1400-11'],

            ['asset_id' => 20, 'services_id' => 2, 'location' => 'Delhi-01'],
            ['asset_id' => 21, 'services_id' => 2, 'location' => 'Dehradun-01'],

        ];

        foreach ($location as $value) {
        	subAsset::insert($value);
        }
    }
}
