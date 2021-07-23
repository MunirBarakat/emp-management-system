<?php

use App\Models\Sex;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SexTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sexes')->delete();

        $sex = ['ذكر`', 'أنثى', 'غير ذلك'];

        foreach($sex as  $S){
            Sex::create(['Name' => $S]);
        }
    }
}
