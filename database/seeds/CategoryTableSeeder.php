<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // factory(App\Category::class, 2)->create();

        factory(App\Category::class, 20)->create()->each(function($u) {
            $u->posts()->save(factory(App\Post::class)->make());
          });
    }
}
