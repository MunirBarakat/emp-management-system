<?php

use App\Models\Religion;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReligionTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('religions')->delete();
        $religions = [

            
                 'مسلم',
         
                 'مسيحي',
           
                 'غيرذلك',
            

        ];

        foreach ($religions as $R) {
            Religion::create(['Name' => $R]);
        }
    }
}
