<?php

use Illuminate\Database\Seeder;

class ProjectNoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
         * Ficar atento ao utilizar o Truncate() quando estiver utilizando o 
         * PgSQL, pois ele não aceita fazer exclusão de dados, quando estão
         * interligados. Então, sempre que utilizar essa função e for rodar
         * uma Seed para gerar informações randomicas para o banco de dados
         * deve ser feito a exclusão de dados já existentes ou então de tabelas
         * manualmente, e nunca via 'truncate()'.
         * 
         */
           App\Models\ProjectNote::truncate();
           factory(App\Models\ProjectNote::class, 50)->create();
    }
}
