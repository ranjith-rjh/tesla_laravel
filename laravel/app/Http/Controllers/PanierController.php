<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Accessoire;
use App\Models\Style;
use App\Models\User;
use App\Models\Adresse;
use App\Models\CodePromo;
use Illuminate\Support\Facades\DB;
use App\Models\Panier;
use App\Models\Facture;

// use App\Http\Controllers\Adresse;

class PanierController extends Controller
{

    public function checkPromo(Request $request)
    {
        //recup all promo
        $promos=CodePromo::all();
        //check if one on the good article
        foreach($promos as $promo)
        {
            if ($promo->code == $request->input_promo)
            {
                $promo->accessoire_id=$promo->accessoires[0]->id;
                $promo->accessoire_libelle=$promo->accessoires[0]->libelle;
                $reduc = $promo;
                return PanierController::show2($reduc);
            }
        }
        return PanierController::show();
        
    }
    public function supprDuPanier($id)
    {
        if (!isset($_SESSION)){
            session_start();
        }
        $panier = $_SESSION['infosPanier'];
        foreach ($panier as $key => $p)
        {
            if ($p->id == $id)
            {
                unset($_SESSION['infosPanier'][$key]);
                unset($_SESSION['panier'][$id]);
            }
        }

        return redirect('/panier');
        // return view('')
    }
    public function createPanier(Request $request){
        if (!isset($_SESSION)){
            session_start();
        }
        $user = User::find(auth()->user()->id);
        $panier = $_SESSION['infosPanier'];
        $nbr=0;
        $total=0;
        foreach($panier as $p)
        {
            $nbr+=$p->quantite;
            $total+=$p->prix*$p->quantite;

            // $p->id;
        }

        //créer panier
        $monNewPanier = $user->panier()->create([
            'nombre_article' => $nbr,
            'montant' => $total,
        ]);
        
        //link panier avec ces articles
        foreach($panier as $p)
        {
            $monStyle=Style::findOrFail($p->id);
            $monStyle->paniers()->attach($monNewPanier->id,['quantite' =>$p->quantite]);
            $monStyle->update([
            ]);
            
            //baisser le stock
            DB::table('styles')
                ->where('id',$p->id)
                ->update(['stock' => $monStyle->stock-$p->quantite]);
        }

        //#########
        //create facture
        //#########
        //libelle
        $libelleFacture="Facture_Accessoire_".date('Y-m-d')."_";
        $libelleFacture.=$monNewPanier->id;
        $libelleFacture.="-".$nbr;
        $libelleFacture.="-".$total;
        $libelleFacture.="_".$user->id;
        //facture
        $facture = Facture::create([
            'libelle' => $libelleFacture,
            'cout' => $total
        ]);

        // $facture->update([
        //     'libelle' => $libelleFacture."_".$facture->id
        // ]);
        
        //associate user
        $facture->user()->associate($user->id);
        //associate adresse
        $facture->adresse()->associate($request->adresseId);
        //associate panier
        $facture->panier()->associate($monNewPanier->id);
        //associate etat commande
        $facture->etat_commande()->associate(1);
        //associate mode paiement
        $facture->mode_paiement()->associate(1); 

        $facture->save();
        unset($_SESSION['reduc']);
        session_destroy();
        return redirect('/merci');


    }
    public function createAddress(Request $request, $user){        
        
        $address = Adresse::create([
            'rue' => $request->rue,
            'ville' => $request->ville,
            'codePostal' => $request->codePostal,
            'pays' => $request->pays
        ]);     
        // $newAddress = $user->adresse()->associate($address);
        // $user->update([
        // ]);
        return $address;
    }
    public function createOrPassAddress(Request $request){
        //validate
        $request->validate([
            'rue' => ["required", "string"],
            'ville' => ["required", "string"],
            'codePostal' => ["required", "numeric"],
            'pays' => ["required", "string"]
        ]);

        //get panier
        if (!isset($_SESSION)){
            session_start();
        }
        $panier=$_SESSION['infosPanier']; //a suppr

        $user = User::find(auth()->user()->id);
        $adresses =  Adresse::all();
        foreach ($adresses as $adresse)
        {
            if ($adresse->rue === $request->rue &&
                $adresse->ville === $request->ville &&
                $adresse->codePostal === $request->codePostal &&
                $adresse->pays === $request->pays)
                {
                    //it's the same
                    //récupérer panier
                    // $panier=null;
                    // return view("test2");
                    if(isset($_SESSION['reduc']))
                    {
                        $reduc=$_SESSION['reduc'];
                    }
                    else
                    $reduc=null;
                    return view('events.paiement',compact('panier','adresse','reduc'));
                    
                }
            }
        //create new address
        $adresse = PanierController::createAddress($request,$user);//?
        //récupérer panier
        // $panier=null;
        return view('events.paiement',compact('panier','adresse'));
            
        //PaiementController::createFacture( $idVehicule,$adresse,$user);
        // return PaiementController::showPaiement($adresse,$idVehicule,null);//?
        // return redirect('/'.$idVehicule.'/checkout/facturation');
    }


    public function validatePanier(Request $request)
    {
        if (!isset($_SESSION)){
            session_start();
        }
        
        //stocker dans session le prix et chaque pdt
        // a partir de la request
        //aaaaaaaa
        // var_dump($_SESSION['infosPanier']);
        $panier = $_SESSION['infosPanier'];
        foreach($panier as $key => $p)
        {
            $test="input_".$p->id;
            $_SESSION['infosPanier'][$key]->quantite = $request->$test;

            if(isset($_SESSION['reduc']) && $_SESSION['infosPanier'][$key]->id==$_SESSION['reduc']->accessoire_id )
            {
                $_SESSION['infosPanier'][$key]->prix = ($_SESSION['infosPanier'][$key]->prix+0)-$_SESSION['reduc']->montant;
                
                // echo $_SESSION['infosPanier'][$key]->prix;
                // var_dump($_SESSION['infosPanier'][$key]->prix);
                // echo("__________________________________________________________________");
            }
            // echo($_SESSION['infosPanier'][$key]->quantite);
            // echo("________");
        }

        $user = User::find(auth()->user()->id);
        if ($user->adresse !== null)
        {
            $adresseComplete = "";
            $adresseComplete.=$user->adresse->rue;
            $adresseComplete.=" ".$user->adresse->codePostal;
            $adresseComplete.=" ".$user->adresse->ville;
            return view('events.checkoutAdresse',compact('adresseComplete'));
        }


        return view('events.checkoutAdresse');
    }
    
    # ajt accessoire
    public function addAccessoire ($cat,$idAcc) {
        // session_destroy();
        if (!isset($_SESSION)){
            session_start();
        }
        if (!isset($_SESSION['panier'])){
            $_SESSION['panier'] = array();
        }

        //récupère les infos
        $monAccessoire="";
        $monStyle=$_COOKIE['style_selected'];
        
        //boucle sur tt les styles de mon accessoire
        $tout=Accessoire::findOrFail($idAcc)->styles;
        foreach ($tout as $t)
        {
            if ($t->pivot->style_id==$monStyle)
            {
                $monAccessoire=$t;
            }
        }
        
        //recup quantite dispo
        $quantite = $_COOKIE['stock'.$monStyle];
        //recup quantite demandee
        $quantiteVoulue = $_COOKIE['amount_selected'];
        
        
        // session_destroy();
        //vérif du stock
        if ($quantiteVoulue>$quantite)
        {
            
            //todo
            //erreur
            // $_SESSION['panier'][$monAccessoire->id] -= $quantiteVoulue;
            $test="Il n'y a pas assez d'accessoires en stock";
            return view('test2',compact('test'));
        }
        //ajout au panier
        $_SESSION['panier'][$monAccessoire->id]=$quantiteVoulue;  
        $test=$quantite;
        return redirect('panier');
    }

    # Affichage du panier
    public function show (){
        return PanierController::show2(null);
    }
    public function show2 ($reduc) {
        if (!isset($_SESSION)){
            session_start();
        }

        $listeArticles=array();
        if (isset($_SESSION['panier']))
        {
            foreach($_SESSION['panier'] as $article=>$quantite)
            {
                $new=Style::findOrFail($article);
                $new->quantite=$quantite;
                $new->prix=$new->accessoires[0]->prix;
                $new->vraiLibelle=$new->accessoires[0]->libelle;
                foreach ($new->photos as $photo)
                {
                    // $str = "Visit W3Schools";
                    // $pattern = "/w3schools/i";
                    // echo preg_match($pattern, $str);
                    $pattern = "/presentation-image/i";
                    if (preg_match_all($pattern, $photo->lien_photo)!=0)
                    {
                        // echo preg_match($pattern, $photo->lien_photo);
                        $link = substr($photo->lien_photo,3);
                        $new->photo=$link;
                    }
                }
                // echo($new->photo);
                array_push($listeArticles,$new);
            }
        }
        $_SESSION['infosPanier']=$listeArticles;
        // $listeArticles=$_SESSION['panier'];
        if(isset($reduc))
        {
            return view("panier",compact('listeArticles','reduc'));

        }
    	return view("panier",compact('listeArticles'));
    }

    // # Ajout d'un produit au panier
    // public function add (Request $request) {
    	
    // 	// Validation de la requête
    // 	$this->validate($request, [
    // 		"quantity" => "numeric|min:1"
    // 	]);
    // }
}