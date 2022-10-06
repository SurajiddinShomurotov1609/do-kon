<?php

namespace Database\Seeders;

use App\Models\ModalCrud;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModalCrud::create([
            'name'=>'Surajiddin',
            'lastname'=>'Shomurotov',
            'email'=>'aghshgashgd@email.com',
        ]);
    }
}
