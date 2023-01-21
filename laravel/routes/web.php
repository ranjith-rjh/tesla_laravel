<?php

        use Illuminate\Support\Facades\Route;
use Gloudemans\Shoppingcart\Facades\Cart;
        use App\Http\Controllers\testController;
        use App\Http\Controllers\ModeleController;
        use App\Http\Controllers\AccountController;
        use App\Http\Controllers\Auth\VerifyMobileController;
        use App\Http\Controllers\OptionController;
        use App\Http\Controllers\MainPageController;
        use App\Http\Controllers\BoutiqueController;
use App\Http\Controllers\CreerVehiculeController;
use App\Http\Controllers\GoogleAuthControl;
        use App\Http\Controllers\ReservationController;
        use App\Http\Controllers\PaiementController;
        use App\Http\Controllers\AideController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\PDF_folder\PDF;
use App\Http\Controllers\SendEmailController;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
        use Barryvdh\DomPDF\PDF as DomPDFPDF;
        use Illuminate\Routing\Controllers\Middleware;

        /*
        |--------------------------------------------------------------------------
        | Web Routes
        |--------------------------------------------------------------------------
        |
        | Here is where you can register web routes for your application. These
        | routes are loaded by the RouteServiceProvider within a group which
        | contains the "web" middleware group. Now create something great!
        |
        */

        //#######################################
        //CLIENT
        //#######################################
        
        //client account page
        Route::get('/home', [AccountController::class, "showHome"])->middleware('auth');

        //anonimyzation client account
        Route::get('/profile/anonymization', [AccountController::class, "showAnonymization"])->middleware('auth');
        
        //delete client account
        Route::get('/profile/delete', [AccountController::class, "showDelete"])->middleware('auth');
        Route::post('/profile/delete', [AccountController::class, "doDeleteOrAno"])->middleware('auth');
        
        //anonymization client account
        Route::get('/profile/anonymization', [AccountController::class, "showAnonymization"])->middleware('auth');
        Route::post('/profile/anonymization', [AccountController::class, "doDeleteOrAno"])->middleware('auth');

        //edit client account main info
        Route::get('/profile/edit', [AccountController::class, "showEdit"])->middleware('auth');
        
        //edit password
        Route::get('/change-password', [AccountController::class, "changePassword"])->middleware('auth')->name('change-password');
        Route::post('/change-password', [AccountController::class, "updatePassword"])->middleware('auth')->name('change-password');


        //edit client account address
        Route::get('/profile/address', [AccountController::class, "showAddress"])->middleware('auth');
        //after a creation :client account page
        Route::post('/profile/address/create', [AccountController::class, "createAddressOrPass"])->middleware('auth');
        //after an edit :client account page
        Route::put('/profile/address/{id}', [AccountController::class, 'updateAdress'])->middleware('auth');

        //google OAuth
        Route::get('auth/google', [GoogleAuthControl::class,'redirect'])->name('google-auth');
        Route::get('/auth/google/call-back', [GoogleAuthControl::class, 'callbackGoogle']);
        
        //#######################################
        //PAIEMENT VEHICULE NEUF
        //#######################################
        // Route::view('/checkout','events/checkout');
        Route::get('/{idVehicule}/checkout/adresse', [PaiementController::class, "showAddressView"])->middleware('auth');
        Route::post('/{idVehicule}/checkout/adresse', [PaiementController::class, "createOrPassAddress"])->middleware('auth');
        Route::post('/facturation', [PaiementController::class, "showFacturation"])->middleware('auth');
        Route::get('/merci', function(){return view('events.thankyou');})->middleware('auth');
        
        
        //#######################################
        //MAIN PAGE
        //#######################################

        //main page
        Route::get('/',[MainPageController::class, "index2"] );
        

        //#######################################
        //CONFIG MODEL
        //#######################################
        
        //configuration model page
        Route::get('/modeles/{id}',[ModeleController::class, "show"] );

        //configuration des options par motorisations
        Route::get('/modeles/{model}/motorisation/{motorisation}',[OptionController::class, "couleur_controller"] );
        
        //configuration des options par motorisations
        Route::get('/modeles/{model}/motorisation/{motorisation}/couleur/{couleur}',[OptionController::class, "jante_controller"] );

        //configuration des options par motorisations
        Route::get('/modeles/{model}/motorisation/{motorisation}/couleur/{couleur}/jante/{jante}',[OptionController::class, "interieur_controller"] );

        //configuration des options par motorisations
        Route::get('/modeles/{model}/motorisation/{motorisation}/couleur/{couleur}/jante/{jante}/interieur/{interieur}',[OptionController::class, "traction_controller"] );
        

        //Route::get('/modeles/{libelle}',[testController::class, "categorie"] );
        
        
        //#######################################
        // RESUME
        //#######################################
        
        Route::get('/modeles/{model}/motorisation/{motorisation}/couleur/{couleur}/jante/{jante}/interieur/{interieur}/traction/{traction}/resume',[OptionController::class, "resumerConfiguration"] );
        Route::get('/modeles/{model}/motorisation/{motorisation}/couleur/{couleur}/jante/{jante}/interieur/{interieur}/resume',[OptionController::class, "resumerConfiguration2"] );

        Route::get('/modeles/{model}/motorisation/{motorisation}/couleur/{couleur}/jante/{jante}/interieur/{interieur}/traction/{traction}/resume/download',[OptionController::class, "genererPDF"]);
        Route::get('/modeles/{model}/motorisation/{motorisation}/couleur/{couleur}/jante/{jante}/interieur/{interieur}/resume/download',[OptionController::class, "genererPDF2"]);

        
        //#######################################
        //tests
        //#######################################
        Route::get('test',[testController::class, "test"] );

        //cette route permet de renvoyer cette url: 'testConfig/x/y' vers la fonction test de testcontroller
        //Route::get('testConfig/{idMotor}/{idColor}',[testController::class, "test"] );


        //#######################################
        //BOUTIQUE D'ACCESSOIRE
        //#######################################
        
        //page d'acceuil de la boutique
        Route::get('/boutique',[BoutiqueController::class, "acceuil"] );

        //page de recherche
        Route::post('/boutique', [BoutiqueController::class, "recherche"] );

        //page d'une catégorie de la boutique
        Route::get('/boutique/{categorie}',[BoutiqueController::class, "categorie"] );

        //page d'un accessoire de la boutique
        Route::get('/boutique/{categorie}/{id_accessoire}',[BoutiqueController::class, "accessoire"] );
        
        //#######################################
        //PANIER
        //#######################################
        
        //page d'ajout d'un accessoire au panier
        Route::post('/boutique/{categorie}/{id_accessoire}',[PanierController::class, "addAccessoire"] );
        //afficher panier
        Route::get('/panier',[PanierController::class, "show"] );
        //valider panier et passer à la validation d'adresse
        Route::post('/panier',[PanierController::class, "validatePanier"] )->middleware('auth');
        //suppr article du panier
        Route::get('/suppr/{id}',[PanierController::class, "supprDuPanier"] );
        //valider adresse et passer au paiement
        Route::post('/panier/adresse',[PanierController::class, "createOrPassAddress"] )->middleware('auth');
        //créer panier, retirer le stock de la bdd et redirect en get sur merci
        Route::post('/panier/facturation',[PanierController::class, "createPanier"] )->middleware('auth');
        //promo
        Route::post('/promo',[PanierController::class, "checkPromo"] );
        
        
        

        //Route::post('/panier/add/{product}',[PanierController::class, "add"] )->middleware('auth');

        //#######################################
        //PAIEMENT VEHICULE
        //#######################################
        //Route::get
        //Enregistrer/créer la config
        Route::post('/modeles/{model}/motorisation/{motorisation}/couleur/{couleur}/jante/{jante}/interieur/{interieur}/traction/{traction}/{isEnregistrer?}',[OptionController::class, "creerVehicule"])->middleware('auth');
        Route::post('/modeles/{model}/motorisation/{motorisation}/couleur/{couleur}/jante/{jante}/interieur/{interieur}/{isEnregistrer?}',[OptionController::class, "creerVehicule2"])->middleware('auth');
        //Route::post('/facturation',[OptionController::class, "showFacturation"]);
        

        



        //#######################################
        //RESERVATION VEHICULE
        //#######################################
        Route::get('/reservation', [ReservationController::class, "showReservation"]);
        Route::post('/reservation', [ReservationController::class, "reservation"])->middleware('auth');


        //#######################################
        // DROIT 
        //#######################################
        Route::get('/donnees-personnelles', function(){
                return view('donneesPersonnelles');
        });

        Route::get('/mentions-legales', function(){
                return view('mentionsLegales');
        });


        //#######################################
        // CREER VEHICULE (MODELE, MOTORISATION ETC)
        //#######################################
        Route::get('/creer-vehicule/modeles', [CreerVehiculeController::class, "vueNomModele"]);
        Route::post('/creer-vehicule/modeles', [CreerVehiculeController::class, "validationFormModele"]);

        Route::get('/creer-vehicule/motorisations', [CreerVehiculeController::class, "vueNomMotorisation"]);
        Route::post('/creer-vehicule/motorisations', [CreerVehiculeController::class, "validationFormMotorisation"]);
        
        //#######################################
        // GESTION PAGES ACCES ADMIN 
        //#######################################
        
        
        
        //#######################################
        // PAGE AIDE
        //#######################################
        Route::get('/help', [AideController::class, "show"]);
        
        //#######################################
        // PAGE CONTACT
        //#######################################
        Route::get('/confirmsend', [SendEmailController::class, "showConfirmSend"]);

        Route::get('/contact', [SendEmailController::class, "showContactUs"]);
        Route::post('/contact', [SendEmailController::class, "sendEmail"]);
        //#######################################
        // PAGE FAQ
        //#######################################
        Route::get('/faq', [FAQController::class, "showFAQ"]);
        
        //#######################################
        // PAGE ANONYMISATION
        //#######################################
        Route::post('/anonymiserInactif', [AccountController::class, "anonymiserAdmin"]);
