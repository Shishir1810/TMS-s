<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //admin data insert through seeder
        User::create(
            [
                'name'=>'Nur Alam Shishir',
                'email'=>'shishir@gmail.com',
                'password'=>bcrypt('12345'),
                'NID'=>'123456789',
                'Address'=>'Dhaka',
                'Gender'=>'male',
                'DOB'=>'10-10-1997',
                'mobile'=>'01875212323',
                'role'=>'admin',
                'bio' => 'Admin of Tour management system',
                'image'=>'admin.jpg',


            ]
        );
    }
}
