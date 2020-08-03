<?php

namespace App\Http\Controllers;

use App\Service;

class SiteController extends Controller
{
    public function actualite()
    {
        $title = 'CHE - Actualités';
        return view('site.actualite', compact('title'));
    }

    public function partenaire()
    {
        $title = 'CHE - Partenaires';
        return view('site.partenaire', compact('title'));
    }

    public function specialite()
    {
        $title = 'CHE - Spécialités';
        $services = Service::all();
        return view('site.specialite', compact('title', 'services'));
    }

    public function index()
    {
        $title = 'CLINIQUE HANNAH DE L\'EMMANUEL';
        $services = Service::all();
        return view('site.accueil', compact('title', 'services'));
    }
}
