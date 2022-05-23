<?php

namespace Database\Seeders;

use App\Models\Categorie;
use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::create([
            'name' => 'отклонен',
        ]);
        Status::create([
            'name' => 'на рассмотрении',
        ]);
        Status::create([
            'name' => 'выполняется',
        ]);
        Status::create([
            'name' => 'выполнен',
        ]);
    }
}
