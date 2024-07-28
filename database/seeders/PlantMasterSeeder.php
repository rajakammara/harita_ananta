<?php

namespace Database\Seeders;

use App\Models\PlantsMaster;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlantMasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plants_masters')->delete();
        $plants = [
            ['id' => 1, 'plant_name' => 'Badam', 'description' => 'Badam', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 2, 'plant_name' => 'Custard Apple', 'description' => 'Custard Apple', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 3, 'plant_name' => 'Coconut', 'description' => 'Coconut', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 4, 'plant_name' => 'Drumstick', 'description' => 'Drumstick', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 5, 'plant_name' => 'Karivepaku', 'description' => 'Karivepaku', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 6, 'plant_name' => 'Mango', 'description' => 'Mango', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 7, 'plant_name' => 'Moringa', 'description' => 'Moringa', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 8, 'plant_name' => 'Jamun', 'description' => 'Jamun', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 9, 'plant_name' => 'Guava', 'description' => 'Guava', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 10, 'plant_name' => 'Kanuga', 'description' => 'Kanuga', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 11, 'plant_name' => 'Neem', 'description' => 'Neem', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 12, 'plant_name' => 'Ashoka', 'description' => 'Ashoka', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 13, 'plant_name' => 'Take', 'description' => 'Take', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 14, 'plant_name' => 'Red Sandlewood', 'description' => 'Red Sandlewood', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 15, 'plant_name' => 'Subabul', 'description' => 'Subabul', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 16, 'plant_name' => 'Sunkesula', 'description' => 'Sunkesula', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
        ];
        foreach ($plants as $plant) {
            PlantsMaster::create($plant);
        }
    }
}
