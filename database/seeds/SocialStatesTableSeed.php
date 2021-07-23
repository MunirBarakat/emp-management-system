<?php

use App\Models\SocialState;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocialStatesTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('social_states')->delete();

        $SocialState = ['أعزب','متزوج','مطلق','أرمل'];

        foreach($SocialState as  $SState){
            SocialState::create(['Name' => $SState]);
        }
    }
}
