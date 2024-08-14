<?php

use Illuminate\Database\Seeder;

class BoglanishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('boglanishes')->insert([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'number' => '123456789',
            'title' => 'adminnnnn',
        ]);
    }
}
