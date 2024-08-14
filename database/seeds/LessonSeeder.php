<?php

use Illuminate\Database\Seeder;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lessons')->insert([
            'name' => 'admi1n',
            'title'=> 'izoh',
        ]);
    }
}
