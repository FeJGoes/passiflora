<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Passiflora\Models\Usuario;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::reguard();

        Usuario::create([
            'nome' => 'Joãozinho da Silva',
            'email' => 'joaozinho@email.com',
            'senha' => 'Abc102030',
        ]);
    }
}
