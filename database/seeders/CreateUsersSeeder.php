<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
  
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
               'name'=>'Teller',
               'email'=>'teller@bankmini.com',
               'type'=>1,
               'password'=> bcrypt('12345678'),
            ],
            [
               'name'=>'Customer Service',
               'email'=>'cs@bankmini.com',
               'type'=> 2,
               'password'=> bcrypt('12345678'),
            ],
            [
                'name'=>'Admin',
                'email'=>'admin@bankmini.com',
                'type'=> 3,
                'password'=> bcrypt('12345678'),
            ],
            [
               'name'=>'User',
               'email'=>'user@bankmini.com',
               'type'=>0,
               'password'=> bcrypt('12345678'),
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}