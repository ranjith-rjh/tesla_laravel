<?php

namespace App\Http\Controllers;

use App\Models\ChoixOption;
use Illuminate\Http\Request;
use App\Models\Modele;
use App\Models\Motorisation;
use App\Models\CategorieOption;
use App\Models\Photo;
use App\Http\Controllers\PDF\PDF;

class PdfController extends Controller
{
    
    public function genererPDF()
    {
        $donnees = array(
            "Motorisation" =>  "Model S Plaid",
            "Couleur" =>  "Rouge",
            "Jantes" =>  "Uberturbine",
            "Roues Hiver" =>  "non",
            "Interieur" =>  "Noir et Blanc",
            "Autopilot" =>  "oui",
            "Recharge" => "oui"
        );

        // Instanciation of inherited class
        $pdf = new PDF();
        $pdf->AddPage();
        $pdf->SetFont('Times','',12);        

        foreach ($donnees as $champ=>$valeur)
        {
            $pdf->Cell(50,10, $champ,1,0);
            $pdf->Cell(140,10, $valeur,1,1);
        }

        
        $pdf->Output();
    }

}

?>