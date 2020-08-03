<?php

use App\Service;
use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = ["Cardiologie", "Chirugie Générale", "Dermatologie", "Echographie", "Endocrinologie", "Gynécologie",
        "Obstétrique", "Hépato", "Gastro", "Entérologie", "Kinésithérapie", "Laboratoire d'analyses biomédicales",
        "Médécine Générale", "Néonatologie", "Oncologie", "ORL", "Pédiatrie", "Radiologie", "Rhumatologie",
        "Traumatologue/Orthopédie", "Urologie"];

        foreach($services as $service) {
            Service::create([
                'libelle' => $service
            ]);
        }
    }
}
