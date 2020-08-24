<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class rellena_notas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //rellena notas con 10 nombres
        for($i=0;$i <= 10;$i++){
            DB::table('notas')->insert(
                [
                  'nombre' => 'Nombre '.$i
                ]
            );
        }

    }
}
