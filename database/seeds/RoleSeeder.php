<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // check if table roles is empty
        if(DB::table('roles')->get()->count() == 0){
            DB::table('roles')->insert([
                [
                    'id' => '1',
                    'name' => 'Administrator',
                    'created_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'id' => '2',
                    'name' => 'Editor',
                    'created_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'id' => '3',
                    'name' => 'Author',
                    'created_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'id' => '4',
                    'name' => 'Contributor',
                    'created_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'id' => '5',
                    'name' => 'Subscriber',
                    'created_at' => date('Y-m-d H:i:s'),
                ]
            ]);

        } else { echo "Error: roles Table is not empty, therefore NOT "; }
    }
}
