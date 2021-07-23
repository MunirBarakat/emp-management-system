<?php

use App\Models\Governorate;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GovernorateTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('governorates')->delete();

        $governorate = ['رفح','خانيونس','الوسطى','غزة','شمال غزة'];

        foreach($governorate as  $gover){
            Governorate::create(['Name' => $gover]);
        }
        
    }
}
