<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
    		['name' => 'admin', 'email' => 'abc@abc.com', 'password' => Hash::make('abc'), 'created_at' => Carbon::now()]
    		]);
    }
}
