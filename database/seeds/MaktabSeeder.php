<?php

use Illuminate\Database\Seeder;

class MaktabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('maktabs')->insert([
            'name' => 'admin2112',
            'title' => 'izohlar',
        ]);
    }
}
