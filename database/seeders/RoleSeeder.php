<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Roles;
use Nette\Schema\Schema;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Roles::truncate();

        $data = [
            ['name' => 'Admin']
        ];

        foreach($data as $value){
            Roles::insert([
                'name' => $value['name'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
