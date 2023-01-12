<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(1)->create([
             'name'     =>  'Dàn nhạc Thanh Bình',
             'email'    =>  'phuongtha27@gmail.com',
             'password' =>   Hash::make('123456'),
         ]);
         \App\Models\Tune::create([
            'name'      =>   'Em',
         ]);
         \App\Models\Song::create([
             'name'     =>   'Cơn mưa băng giá',
             'user_id'  =>   '1',
             'tune_id'  =>   '1',
             'author'   =>   'Sơn Tùng MTP',
             'singer'   =>   'Sơn Tùng MTP',
             'short_lyrics' => 'Liệu rằng chia tay trong em có quên được câu ca',
             'short_name' => 'cmnq',
         ]);
    }
}
