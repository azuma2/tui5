<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = [
            'user_id' => 1,
            'content' => 1,
        ];
        DB::table('like')->insert($item);
        $item = [
            'user_id' => 'American',
            'content' => ,
        ];
        DB::table('like')->insert($item);
    }
}
