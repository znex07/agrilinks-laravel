<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MachineriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Tractors / Power Units
        DB::table('machineries')->insert([
            'ref_code' => 'GP10-01',
            'machine_name' => 'Four Wheel Tractor',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'GP10-02',
            'machine_name' => 'Walking-type Agricultural Tractor: Float-assist type',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'GP10-03',
            'machine_name' => 'Walking-type Agricultural Tractor: Pull-type',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'GP10-04',
            'machine_name' => 'Walking-type Agricultural Tractor: Rotary-tilling type',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        //Tillage Implements/Attachments
        DB::table('machineries')->insert([
            'ref_code' => 'GP15-01',
            'machine_name' => 'Boom Sprayer',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'GP15-02',
            'machine_name' => 'Cage Roller',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'GP15-03',
            'machine_name' => 'Chisel Plow',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'GP15-04',
            'machine_name' => 'Disc Cultivator',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'GP15-05',
            'machine_name' => 'Disc Hallow',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'GP15-06',
            'machine_name' => 'Disc Flow',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'GP15-07',
            'machine_name' => 'Disc Ridger',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'GP15-08',
            'machine_name' => 'Furrower',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'GP15-09',
            'machine_name' => 'Inter-row Tine Cultivator',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'GP15-10',
            'machine_name' => 'Leveler',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'GP15-11',
            'machine_name' => 'Mouldboard Plow',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'GP15-12',
            'machine_name' => 'On-Off Barring Disc',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'GP15-13',
            'machine_name' => 'Paddy/Vari-Trac Wheels',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'GP15-14',
            'machine_name' => 'Paddy Puddler',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'GP15-15',
            'machine_name' => 'Poly Disc',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'GP15-16',
            'machine_name' => 'Rotary Tiller (Rotavator)',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'GP15-17',
            'machine_name' => 'Spike-tooth Harrow',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'GP15-18',
            'machine_name' => 'Spring-tooth Harrow',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'GP15-19',
            'machine_name' => 'Sub-soiler',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'GP15-20',
            'machine_name' => 'Trailer',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'GP15-21',
            'machine_name' => 'Trailing Harrow',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        //Transport Machiner/Facilities
        DB::table('machineries')->insert([
            'ref_code' => 'GP84-01',
            'machine_name' => 'Agricultural Tramline System',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        //Crop Care
        DB::table('machineries')->insert([
            'ref_code' => 'GP14-01',
            'machine_name' => 'Agricultural Tramline System',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'GP14-02',
            'machine_name' => 'Granule Applicator',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'GP14-03',
            'machine_name' => 'Mechanical Weeder',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'GP14-04',
            'machine_name' => 'Mist Blower',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'GP14-05',
            'machine_name' => 'Power Duster',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'GP14-06',
            'machine_name' => 'Power Sprayer',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        //Irrigation Facility/Equipment
        DB::table('machineries')->insert([
            'ref_code' => 'GP11-01',
            'machine_name' => 'Electric/Submersible Pump',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'GP11-02',
            'machine_name' => 'Irrigation Pump',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'GP11-03',
            'machine_name' => 'Pump & Engine Set (STW)',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'GP11-04',
            'machine_name' => 'Pump Irrigation System Open Source (PISOS)',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        //Landforming/Farm Maintenance Implements
        DB::table('machineries')->insert([
            'ref_code' => 'GP13-01',
            'machine_name' => 'Laser Guided Land Leveler',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'GP13-02',
            'machine_name' => 'Levee Former/Banking',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'GP13-03',
            'machine_name' => 'Rake',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'GP13-04',
            'machine_name' => 'Rotary Ditcher',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'GP13-05',
            'machine_name' => 'Soil Packer/Roller',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'GP13-06',
            'machine_name' => 'Soil Pulverizer',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'GP13-07',
            'machine_name' => 'Stone/Rock Collector',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'GP13-08',
            'machine_name' => 'Sub-soiler with Mole Drain',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'GP13-09',
            'machine_name' => 'Trencher',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        //Planters/Seeders

        DB::table('machineries')->insert([
            'ref_code' => 'RC12-01',
            'machine_name' => 'Corn Seeder',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('machineries')->insert([
            'ref_code' => 'RC12-02',
            'machine_name' => 'Rice Transplanter - Riding Type',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]);


        DB::table('machineries')->insert([
            'ref_code' => 'RC12-03',
            'machine_name' => 'Rice Transplanter - Walk Behind',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]);


        DB::table('machineries')->insert([
            'ref_code' => 'RC12-04',
            'machine_name' => 'Riding-type Palay Seeder',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]);


        DB::table('machineries')->insert([
            'ref_code' => 'RC12-05',
            'machine_name' => 'Precision Seeder',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]);

        // Reapers/Harvesters
        DB::table('machineries')->insert([
            'ref_code' => 'RC82-01',
            'machine_name' =>	'Corn Combine Harvester',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'RC82-02',
            'machine_name' =>	'Corn Picker',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'RC82-03',
            'machine_name' =>	'Multi-crop Combine Harvester',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'RC82-04',
            'machine_name' =>	'Rice Combine Harvester',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'RC82-05',
            'machine_name' =>	'Rice Reaper',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        // Threshers/Shellers
        DB::table('machineries')->insert([
            'ref_code' => 'RC80-01',
            'machine_name' =>'Corn Sheller',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'RC80-02',
            'machine_name' =>'Hold-on Thresher',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'RC80-03',
            'machine_name' =>'Multi-purpose Thresher',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'RC80-04',
            'machine_name' =>'Rice Thresher',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        // Grain/Seed Cleaners
        DB::table('machineries')->insert([
            'ref_code' => 'RC 90-01',
            'machine_name' => 'Paddy Seed Cleaner',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        // Dryers
        DB::table('machineries')->insert([
            'ref_code' => 'RC81-01',
            'machine_name' =>'Corn Cob Dryer',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'RC81-02',
            'machine_name' =>'Flash Dryer',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'RC81-03',
            'machine_name' =>'LSU-type Dryer',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'RC81-04',
            'machine_name' =>'Mechanical Dryer (Flatbed)',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'RC81-05',
            'machine_name' =>'Mechanical Dryer (Mobile)',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'RC81-06',
            'machine_name' =>'Mechanical Dryer (Recirculating)',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        // Milling Facilities
        DB::table('machineries')->insert([
            'ref_code' => 'RC85-01',
            'machine_name' => 'Brown Rice Huller',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'RC85-02',
            'machine_name' => 'Corn Mill',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'RC85-03',
            'machine_name' => 'Hammer Mill',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'RC85-04',
            'machine_name' => 'Micro Mill',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'RC85-05',
            'machine_name' => 'Rice Mill (Multi stage)',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'RC85-06',
            'machine_name' => 'Rice Mill (Single pass)',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'RC85-07',
            'machine_name' => 'Steel Huller',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        // Rice Mill Accessories
        DB::table('machineries')->insert([
            'ref_code' => 'RC93-01',
            'machine_name' => 'Destoner',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'RC93-02',
            'machine_name' => 'Length Grader',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'RC93-03',
            'machine_name' => 'Mist Polisher',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'RC93-04',
            'machine_name' => 'Rice Color Sorter',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'RC93-05',
            'machine_name' => 'Rice Grader',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'RC93-06',
            'machine_name' => 'Rice Paddy Separator',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'RC93-07',
            'machine_name' => 'Rice Polisher',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'RC93-08',
            'machine_name' => 'Rice Storage Bin',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'RC93-09',
            'machine_name' => 'Rice Whitener',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'RC93-10',
            'machine_name' => 'Rotary Shifter',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'RC93-11',
            'machine_name' => 'Vibrating Cleaner',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        // Tillage Implements/Attachments
        DB::table('machineries')->insert([
            'ref_code' => 'RC15-01',
            'machine_name' => 'Precision Planter',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'RC15-02',
            'machine_name' => 'Tractor-drawn Seeder',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        // Threshers/Shellers
        DB::table('machineries')->insert([
            'ref_code' => 'HV80-01',
            'machine_name' => 'Cashere Nut Sheller',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'HV80-02',
            'machine_name' => 'Mungbean Sheller',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'HV80-03',
            'machine_name' => 'Peanut Sheller',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'HV80-04',
            'machine_name' => 'Sorghum Thresher',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        // Dryers
        DB::table('machineries')->insert([
            'ref_code' => 'HV81-01',
            'machine_name' => 'Cabinet-type Dryer',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'HV81-02',
            'machine_name' => 'Multi-commodity Solar Tunnel Dryer',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'HV81-03',
            'machine_name' => 'Multi-crop Dryer',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        // Milling Facilities
        DB::table('machineries')->insert([
            'ref_code' => 'HV85-01',
            'machine_name' => 'Adlay Mill',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'HV85-02',
            'machine_name' => 'Cacao Holler',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'HV85-03',
            'machine_name' => 'Coffee Holler',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'HV85-04',
            'machine_name' => 'Coffee Grinder',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'HV85-05',
            'machine_name' => 'Cupra Mill',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'HV85-06',
            'machine_name' => 'Floor Mill',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'HV85-07',
            'machine_name' => 'Sugarcane Crusher',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        // Other Processing Equipment
        DB::table('machineries')->insert([
            'ref_code' => 'HV86-01',
            'machine_name' => 'Abaca Stripper',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'HV86-02',
            'machine_name' => 'Automated Packaging Machine',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'HV86-03',
            'machine_name' => 'Biomass Shredder',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'HV86-04',
            'machine_name' => 'Carror Washer',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'HV86-05',
            'machine_name' => 'Cassava Granulator',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'HV86-06',
            'machine_name' => 'Chipping Machine',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'HV86-07',
            'machine_name' => 'Coconut Husk Decorticator',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'HV86-08',
            'machine_name' => 'Coconut Oil Expeller',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'HV86-09',
            'machine_name' => 'Coffee Pulper',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'HV86-10',
            'machine_name' => 'Fiber Decorticator',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'HV86-11',
            'machine_name' => 'Multi-commodity Grinding Machine',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'HV86-12',
            'machine_name' => 'Multi-crop Grater',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'HV86-13',
            'machine_name' => 'Multi-crop Washer-Peeler',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'HV86-14',
            'machine_name' => 'Multi-purpose Pulverizer',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'HV86-15',
            'machine_name' => 'Pili Depulper',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'HV86-16',
            'machine_name' => 'Roasting Machine',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'HV86-17',
            'machine_name' => 'Wood Chipper',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        // Tillage Implements/Attachments
        DB::table('machineries')->insert([
            'ref_code' => 'HV15-01',
            'machine_name' => 'Cassava/Rootcrop Digger',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'HV15-02',
            'machine_name' => 'Onion Seeder',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'HV15-03',
            'machine_name' => 'Sugarcane Planter',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        // FISHERIES MACHINERY AND EQUIPMENT

        DB::table('machineries')->insert([
            'ref_code' => 'FS87-01',
            'machine_name' => 'Aerator',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'FS87-02',
            'machine_name' => 'Chiller',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'FS87-03',
            'machine_name' => 'Cold Storage',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'FS87-04',
            'machine_name' => 'Quick Freezer',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // "LIVESTOCK FARM AND PROCESSING
        // OPERATIONS MACHINERY AND EQUIPMENT"


        DB::table('machineries')->insert([
            'ref_code' => 'LV88-01',
            'machine_name' => 'Baler-Automatic',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'LV88-02',
            'machine_name' => 'Baler-Manual Feed',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'LV88-03',
            'machine_name' => 'Biomass Furnace',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'LV88-04',
            'machine_name' => 'Briquetting Machine',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'LV88-05',
            'machine_name' => 'Cane Crusher',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'LV88-06',
            'machine_name' => 'Captive Bolt',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'LV88-07',
            'machine_name' => 'Cold Storage',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'LV88-08',
            'machine_name' => 'Dehairing Machine',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'LV88-09',
            'machine_name' => 'Dehider',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'LV88-10',
            'machine_name' => 'Feed MIll',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'LV88-11',
            'machine_name' => 'Food Mixer',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'LV88-12',
            'machine_name' => 'Forage Harvester',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'LV88-13',
            'machine_name' => 'Forage/Silage Chopper',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'LV88-14',
            'machine_name' => 'Hog Electric Stunner',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'LV88-15',
            'machine_name' => 'Hog Restrainer',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'LV88-16',
            'machine_name' => 'Hog Scalder',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'LV88-17',
            'machine_name' => 'Manure Rotary Spreader',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'LV88-18',
            'machine_name' => 'Milling Machine',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'LV88-19',
            'machine_name' => 'Pasteurizer',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'LV88-20',
            'machine_name' => 'Poultry Chilling Tank',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'LV88-21',
            'machine_name' => 'Poultry Defeathering Machine',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'LV88-22',
            'machine_name' => 'Poultry Scalder',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'LV88-23',
            'machine_name' => 'Poultry Stunner',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('machineries')->insert([
            'ref_code' => 'LV88-24',
            'machine_name' => 'Splitting Saw',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
