<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ElonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('elons')->insert([
            'name' => 'Admin',
            'surname' => 'Admin1',
            'news' => 'Adminlar',
        ]);
    }
}
