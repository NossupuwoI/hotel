<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Chambre;
use App\Models\Reservation;
use App\Models\Service;

class DashboardController extends Controller
{
    public function afficher_dashboard()
    {
        
        $chambres = Chambre::count();        
        $libre = Chambre::where('statut', 'libre')->count();
        $occuper = Chambre::where('statut', 'occuper')->count();
        $reservation = Reservation::count(); 
        $approuver = Reservation::where('statut', 'Approuver')->count();
        $rejeter = Reservation::where('statut', 'Rejeter')->count();
        $service = Service::count(); 
        return view('/dashboard', compact('chambres', 'libre','occuper', 'approuver','reservation','rejeter','service'));
    }
}
