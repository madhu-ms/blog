<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // check if table roles is empty
        if(DB::table('users')->get()->count() == 0){
            DB::table('users')->insert(
                [
                    'id' => '1',
                    'name'=>'Admin',
                    'email'=>'admin@blog.com',
                    'password'=>Hash::make('password'),
                    'created_at' => date('Y-m-d H:i:s'),
                    'role_id' => '1',
                ]);

        } else { echo "Error: users Table is not empty, therefore NOT "; }
    }
}
