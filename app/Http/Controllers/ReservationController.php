<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Chambre;

class ReservationController extends Controller
{
    public function afficher_reservation($id)
    {
        $chambres = Chambre::all();
        $chambres = Chambre::find($id);
        return view('presentation.reservation', compact('chambres',));
    }

    public function ajouter_reservation(Request $request)
    {
        $request->validate([
            'id_chambre' => 'required',
            'num_chambre' => 'required',
            'num_etage' => 'required',
            'nom_client' => 'required',
            'prenom_client' => 'required',
            'email_client'  => 'required',
            'telephone_client' => 'required',
            'date_debut' => 'required',
            'date_fin'   => 'required',
            'heure_depart' => 'required',  
            'heure_arriver' => 'required',  
            'demande',
            'statut' => 'required',
        ]);

        $reservation = new Reservation();

        $reservation ->id_chambre = $request->id_chambre;
        $reservation ->num_chambre = $request->num_chambre;
        $reservation ->num_etage = $request->num_etage;
        $reservation -> nom_client = $request->nom_client;
        $reservation -> prenom_client = $request->prenom_client;
        $reservation -> email_client = $request->email_client;
        $reservation -> telephone_client = $request->telephone_client;
        $reservation -> date_debut = $request->date_debut;
        $reservation -> date_fin = $request->date_fin;
        $reservation -> heure_arriver = $request->heure_arriver;
        $reservation -> heure_depart = $request->heure_depart;
        $reservation -> demande = $request->demande;
        $reservation -> statut = $request->statut;

        $reservation->save();
        
        return redirect('/room')->with('status', 'demande de reservation envoyer avec succès !');
    }

    public function carracteristique_chambre($id)
    {
        $chambres = Chambre::find($id);
        return view('presentation.carracteristique', compact('chambres'));
    }

    public function afficher_demande_reservation()
    {
        $reservations = Reservation::all();
        return view('admin.demande', compact('reservations'));
    }

    public function valid_demande($id)
    {
      $reservations = Reservation::find($id);
      return view('admin.valide', compact('reservations'));
    }

    public function valider_reservation(Request $request)
    {
        $request->validate([
            'statut' => 'required',
        ]);

        $reservation = Reservation::find($request->id);
        $reservation -> statut = $request->statut;

        $reservation-> update();
        return redirect('/demande')->with('status', 'vous avez modifier avec succès le statut de la demande !');
    }
    public function show_demande($id)
    {
        $demande = Reservation::find($id);
        return view('admin.show_deamande', compact('demande'));
    }

    }

