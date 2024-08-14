<?php

use Illuminate\Database\Seeder;

class YangilikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('yangiliks')->insert([
            'name' => 'admin452132',
            'title' => 'izohhhhhh',
            'news' => 'yangiliklar',
        ]);
    }
}
