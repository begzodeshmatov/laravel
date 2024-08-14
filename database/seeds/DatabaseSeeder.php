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
        $this->call(UserSeeder::class);
        $this->call(BannerSeeder::class);
        $this->call(ElonSeeder::class);
        $this->call(KursSeeder::class);
        $this->call(LessonSeeder::class);
        $this->call(MaktabSeeder::class);
        $this->call(NavbarSeeder::class);
        $this->call(YangilikSeeder::class);
        $this->call(BoglanishSeeder::class);
      
    }
}
