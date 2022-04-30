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
            'content' => 'test',
        ];
        DB::table('')->insert($item);
        $item = [
            'user_id' => 2,
            'content' => 'ぶｒｙｄさ',
        ];
        DB::table('like')->insert($item);
    }
}
