<?php

use App\data;
use Illuminate\Database\Seeder;

class dataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 10; $i++) {
            $data = new data;
            $data->Nim = "1710510031 - $i";
            $data->Nama = "Sutrisno $i";
            $data->Jk = "Laki $i";
            $data->Hobi = "Nonton";
            $data->save();
        }
    }
}
