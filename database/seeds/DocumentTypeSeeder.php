<?php

use App\DocumentType;
use Illuminate\Database\Seeder;

class DocumentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(DocumentType::class)->create(['code' => 'CC', 'name' => 'Cédula de ciudadanía']);
        factory(DocumentType::class)->create(['code' => 'CE', 'name' => 'Cédula de extranjería']);
        factory(DocumentType::class)->create(['code' => 'NIT', 'name' => 'Número de Identificación Tributaria']);
        factory(DocumentType::class)->create(['code' => 'RUT', 'name' => 'Registro único tributario']);
    }
}
