<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0;$i<10;$i++){

            \App\Models\Posts::factory(1)->create([
                'user_id' => \App\Models\User::all()->random()
                
                ]);
            }
    }
}
