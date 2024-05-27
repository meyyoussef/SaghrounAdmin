<?php

namespace App\Http\Controllers;
use App\Models\Child;
use App\Models\Teacher;
use App\Models\Chef;
use App\Models\Event;
use Carbon\Carbon;

use Illuminate\Http\Request;

class statisticsController extends Controller
{
    //Events
    public function countEvents()
    {
        $count = Event::count(); // Utilise la méthode count() fournie par Eloquent pour compter le nombre d'événements
        return response()->json(['count' => $count]);
    }
  //Revenu
  public function revenu()
  {
      // Récupérer la somme des frais des enfants qui ont payé
      $revenu_total = Child::where('paiement_effectue', true)->sum('frais');

      return response()->json(['revenu_total' => $revenu_total]);
  }
  public function NbEnfants()
  {
      // Compter le nombre d'enfants dans la base de données
      $nb_enfants = Child::count();
  
      // Retourner le nombre d'enfants
      return response()->json(['nb_enfants' => $nb_enfants]);
  }
  public function calculerSalairesEducatrices()
    {
        // Récupérer la somme totale des salaires des éducatrices
        $salaire_total = Teacher::sum('salary');

        // Retourner le salaire total des éducatrices
        return response()->json(['salaire_total' => $salaire_total]);
    }
    public function calculerSalaireGerant()
    {
        // Récupérer le salaire du gérant
        $salaire_gerant = Chef::first()->salary;

        // Retourner le salaire du gérant
        return response()->json(['salaire_gerant' => $salaire_gerant]);
    }
    public function calculerDepenses()
    {
        // Récupérer la somme des salaires des éducatrices
        $salaire_educatrices = Teacher::sum('salary');

        // Récupérer le salaire du gérant
        $salaire_gerant = Chef::first()->salary;

        // Calculer la somme totale des dépenses (salaires des éducatrices + salaire du gérant)
        $depenses_totales = $salaire_educatrices + $salaire_gerant;

        // Retourner la somme totale des dépenses
        return response()->json(['depenses_totales' => $depenses_totales]);
    }
    public function categoriserEnfants()
    {
        // Récupérer tous les enfants depuis la base de données
        $enfants = Child::all();
        
        // Tableau pour stocker les enfants catégorisés
        $enfantsCategorises = [
            'baby' => [],
            'toddler' => [],
            'preschooler' => [],
            'intermediate' => []
        ];
        
        // Calculer l'âge et catégoriser chaque enfant
        foreach ($enfants as $enfant) {
            $dateNaissance = Carbon::parse($enfant->date_de_naissance);
            $aujourdHui = Carbon::now();
            $age = $dateNaissance->diffInYears($aujourdHui);
            
            // Catégoriser l'enfant en fonction de son âge
            if ($age >= 0 && $age < 1) {
                $enfantsCategorises['baby'][] = $enfant;
            } elseif ($age >= 1 && $age < 2) {
                $enfantsCategorises['toddler'][] = $enfant;
            } elseif ($age >= 2 && $age < 3) {
                $enfantsCategorises['preschooler'][] = $enfant;
            } elseif ($age >= 3 && $age < 4) {
                $enfantsCategorises['intermediate'][] = $enfant;
            }
            
            // Ajouter l'âge à l'enfant pour référence future
            $enfant->age = $age;
        }
        return view('Admin.index')->with('enfantsCategorises', $enfantsCategorises);

    }
    
    


}
