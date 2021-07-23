<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TypeBloodTableSeeder::class);
        $this->call(ReligionTableSeed::class);
        $this->call(SexTableSeed::class);
        $this->call(SocialStatesTableSeed::class);
        $this->call(GovernorateTableSeed::class);
        $this->call(RelativeRelationTableSeed::class);
    }
}
