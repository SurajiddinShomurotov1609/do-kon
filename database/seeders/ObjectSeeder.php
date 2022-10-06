<?php

namespace Database\Seeders;

use App\Models\Objects;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ObjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Objects::create([
            'name'=>'Kontragent',
            'location'=>'nomalum',

        ]);
        Objects::create([
            'name'=>'Xaridor',
            'location'=>'nomalum',

        ]);
    }
}
