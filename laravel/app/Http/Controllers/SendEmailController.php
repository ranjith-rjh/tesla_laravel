<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendEmailController extends Controller
{
    public function showContactUs(){
        return view('contact');
    }

    public function showConfirmSend(){
        return view('confirmsend');
    }

    public function sendEmail(Request $request){
        // dd($request->nom);
        if (isset($request->message) || isset($request->nom) || isset($request->prenom) || isset($request->email)) {
            $sujet = "";
            $message = 'Message envoyé depuis la page Données personnel de iutannecy-deptinfo.fr:8245
            Email : ' . $request->email . '
            Au nom de : ' . htmlspecialchars($request->nom) . ' ' . htmlspecialchars($request->prenom) . '
            Message : 
' . htmlspecialchars($request->message);
            if (isset($request->sujet)){
                $sujet = ': ' . $request->sujet;
            }
            $retour = mail('teslafrancetestsae@gmail.com', $request->type_sujet . $sujet, $message, "From:contact@teslafrance.fr" . "\r\n" . "Reply-to:" . $request->email);

            return SendEmailController::showConfirmSend();
        }
        else {
            return back()->with("error", "Vous avez oubliez de remplir un ou plusieurs champs.");
        }
    }
}
