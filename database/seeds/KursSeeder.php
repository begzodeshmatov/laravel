<?php

use Illuminate\Database\Seeder;

class KursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kurs')->insert([
            'name' => 'adminn',
            'title' => 'izohhh',
        ]);
    }
}
