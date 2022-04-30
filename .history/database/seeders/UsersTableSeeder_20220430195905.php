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
        'email' => 'aaaaaaaa@mail.com',
        'password' => 'zzzzzz',
        ];
        DB::table('like')->insert($item);
        $item = [
        'id' => '2',
        'name' => 'aa',
        'email' => 'aaaaaaaa@mail.com',
        'password' => 'zzzzzz',
        ];
        DB::table('like')->insert($item);
    
    }
}
