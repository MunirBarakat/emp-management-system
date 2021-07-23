<?php

use Illuminate\Database\Seeder;
use App\Models\RelativeRelation;
use Illuminate\Support\Facades\DB;

class RelativeRelationTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('relative_relations')->delete();
        $relative_relation = [

            
                 'زوجة',
         
                 'ابن',
           
                 'ابنة',
                 'أب',
                 
                 'أم',
            

        ];

        foreach ($relative_relation as $relativ) {
            RelativeRelation::create(['Name' => $relativ]);
        }
    }
}
