<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                $item = [
        'id' => '1',
        'name' => 'aa',
        'email' => 'aa@mail.',
        'password' => 'ぶｒｙｄさ',
        ];
        DB::table('like')->insert($item);
        $item = [
            'user_id' => 2,
            'content' => 'ぶｒｙｄさ',
        ];
        DB::table('like')->insert($item);
    
    }
}
