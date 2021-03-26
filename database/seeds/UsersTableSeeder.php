<?php

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
        $param =[
          'id' => '1',
          'username' => 'sans',
          'mail' => 'sans@gmail.com',
          'password' => 'megarovania',
          'bio'=> 'Should be burning in hell.',
          'images' => '',
          'created_at' => new DateTime(),
          'updated_at' => new DateTime(),
        ];
        DB::table('users')->insert($param);

        $param =[
          'id' => '2',
          'username' => 'mettaton',
          'mail' => 'mettaton@gmail.com',
          'password' => 'Death by Glamour',
          'bio' => 'His metal body renders him invulnerable to attack.',
          'images' => '',
          'created_at' => new DateTime(),
          'updated_at' => new DateTime(),
        ];
        DB::table('users')->insert($param);

        $param =[
          'id' => '3',
          'username' => 'asgore',
          'mail' => 'asgore@gmail.com',
          'password' => 'ASGORE',
          'bio' => 'What kind of monster are you…?',
          'images' => '',
          'created_at' => new DateTime(),
          'updated_at' => new DateTime(),
        ];
        DB::table('users')->insert($param);
    }
}
