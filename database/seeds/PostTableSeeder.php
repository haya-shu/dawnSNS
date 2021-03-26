<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
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
          'user_id' => '1',
          'posts' => 'Test Post 1',
          'created_at' => new DateTime(),
          'updated_at' => new DateTime(),
        ];
        DB::table('posts')->insert($param);

        $param =[
          'id' => '2',
          'user_id' => '1',
          'posts' => 'Test Post 2',
          'created_at' => new DateTime(),
          'updated_at' => new DateTime(),
        ];
        DB::table('posts')->insert($param);

        $param =[
          'id' => '3',
          'user_id' => '2',
          'posts' => 'Test Post 3',
          'created_at' => new DateTime(),
          'updated_at' => new DateTime(),
        ];
        DB::table('posts')->insert($param);

        $param =[
          'id' => '4',
          'user_id' => '3',
          'posts' => 'Test Post 4',
          'created_at' => new DateTime(),
          'updated_at' => new DateTime(),
        ];
        DB::table('posts')->insert($param);
    }
}
