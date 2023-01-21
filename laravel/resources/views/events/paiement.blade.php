<!-- <?php include '../public/php/header.php' ?> -->
<link rel="stylesheet" href="/css/aide.css">
<style>
body{
  font-family:arial;
}
.none{
  display: none;
}
.button_style_annuler{
  text-align: center;
  margin-top: 3rem;
  margin-left: 5rem;
  border-radius: 25px;
    height: 3rem;
    width: 10rem;
    font-size: 20px;
    background-color: rgb(255, 100, 100);
    border: 2px outset;
    border-color: rgb(55, 55, 55);
}
.button_style_annuler:hover{
  cursor: pointer;
}
.button_style_continuer:hover{
  cursor: pointer;
}
.button_style_continuer{
  text-align: center;
  margin-top: 3rem;
  margin-left: 20rem;
  border-radius: 25px;
    height: 3rem;
    width: 10rem;
    font-size: 20px;
    background-color: rgb(100, 255, 100);
    border: 2px outset;
    border-color: rgb(55, 55, 55);
}
</style>
<?php
if (isset($vehicule))
{
  $vehicule->modele->libelle;
  $infoPaiementVehicule=[];
  $infoPaiementVehicule['prixInfo']=$vehicule->prix;
  $infoPaiementVehicule['prixAPayer']=1000;
  $infoPaiementVehicule['nom']="Accompte pour : ".$vehicule->motorisation->libelle;
  $infoPaiementVehicule['quantite']=1;
  $info=array($infoPaiementVehicule);
}else if (isset($panier))
{
  $infoPaiementPanier=[];
  $info=array();
  //do foreach on panier
  foreach ($panier as $p)
  {
    $infoPaiementPanier['prixInfo']=$p->prix;
    $infoPaiementPanier['prixAPayer']=$p->prix;
    $infoPaiementPanier['nom']=$p->libelle;
    $infoPaiementPanier['quantite']=$p->quantite;
    array_push($info,$infoPaiementPanier);
  }
  //faire array contenant des listes associatives pour chaque article (comme au dessus, même si il y a qu'un article car c'est un vehicule)
}

?>

<div class="englobe">

<!-- créer cookies avec infos -->
<!-- todo -->
@if (isset($vehicule))
<form method="POST" action="/facturation" class="resized1">
@else
<form method="POST" action="/panier/facturation" class="resized1 ">
@endif
  @csrf
  <input name="adresseId" value="{{$adresse->id}}" readonly style="display:none;">
  @if (isset($vehicule))
  <!-- mode paiement -->
  <h1>Mode de paiement pour l'achat du véhicule</h1>
  <div>
    <input class="input_check_account" type="radio" name="mode_paiement" value="2" checked>
    <label class="label_check_account" for="1">LOA</label>
    <input class="input_check_account" type="radio" name="mode_paiement" value="3">
    <label class="label_check_account" for="1">LDD</label>
    @if(auth()->user()->type_compte->id === 1)
    <input class="input_check_account" type="radio" name="mode_paiement" value="3">
    <label class="label_check_account" for="1">crédit</label>
    @endif
  </div>
  <input name="vehiculeId" value="{{$vehicule->id}}" readonly style="display:none;">
  <input name="montantAccompte" value="{{$infoPaiementVehicule['prixAPayer']}}" readonly style="display:none;">
  @else
  <input class="input_check_account" type="radio" name="mode_paiement" value="1" readonly style="display:none;">
  @endif  



@if (isset($vehicule))
  <div class="div_title_bandeau_aide">
      <h1 class="resized3" id="h1_paiement">Paiement de l'accompte véhicule</h1>
      <div class="div_petit_bandeau_aide">?</div>
  </div>
@else
  <div class="div_title_bandeau_aide">
      <h1 class="resized3"  id="h1_paiement">Paiement de votre commande</h1>
      <div class="div_petit_bandeau_aide">?</div>
  </div>
@endif
<!-- Le conteneur des boutons PayPal -->
<div id="paypal-boutons"></div>




<!-- 1. Importation de la SDK JavaScript PayPal -->
<script src="https://www.paypal.com/sdk/js?client-id=AVGN1sdjzXqKD1p9DdPh-E9-XYfN8kszdHq4fQHOkYVquhE6D7rl650yBAmDREvt3qHiHpf7K6SeaIBK&currency=EUR"></script>
<script>



function getInfosPaiement(){
  let infosArray = <?php echo json_encode($info)?>;
  return infosArray

}

  paypal.Buttons({
    // Capturer la transaction après l'approbation de l'utilisateur
	onApprove : function (data, actions) {
		return actions.order.capture().then(function(details) {

			// Afficher les details de la transaction dans la console
			console.log(details);

			// On affiche un message de succès
			//alert(details.payer.name.given_name + ' ' + details.payer.name.surname + ', votre transaction est effectuée. Vous allez recevoir une notification très bientôt lorsque nous validons votre paiement.');
      
      let parent = document.getElementById("btnNext")
      let h = document.createElement("h2")
      let annuler = document.getElementById("div_btn_annuler_paiement")
      annuler.classList.add("none")
      h.textContent="Merci pour votre achat!"
      parent.appendChild(h);
      parent.innerHTML="<button class='button_style_continuer' type='submit'> Continuer </button>"

		});
	},

    // Annuler la transaction
	onCancel : function (data) {
		alert("Transaction annulée !");
	},

// Configurer la transaction
createOrder : function (data, actions) {

  // Les produits à payer avec leurs details
  let infos = getInfosPaiement()
  console.log(infos);
  var produits = []
  //arr2.push({food:"?"})
  infos.forEach(function(info){
    produits.push({
      name : info['nom'],//+infos[0],
      description : "Prix : "+info['prixInfo'],
      quantity : info['quantite'],
      unit_amount : { value : info['prixAPayer'], currency_code : "EUR" }
    })
  })

  // Le total des produits
  var total_amount = produits.reduce(function (total, product) {
    return total + product.unit_amount.value * product.quantity;
  }, 0);

  // La transaction
  return actions.order.create({
    purchase_units : [{
      items : produits,
      amount : {
        value : total_amount,
        currency_code : "EUR",
        breakdown : {
          item_total : { value : total_amount, currency_code : "EUR" }
        }
      }
    }]
  });
}

}).render("#paypal-boutons");


</script>
<div id = "div_btn_annuler_paiement" class="div_btn_ann_or_next_paiement">
  <input class="button_style_annuler" type="button" onclick=window.location.href='/'; value='Annuler' />
</div>
<div id="btnNext" class="div_btn_ann_or_next_paiement"> </div>
</form>
<div class="div_bandeau_aide">
        <div class="div_bandeau_aide_content displayedNone">
            <h2 class="title_aide">Besoin d'aide ?</h2>
            @if (isset($vehicule))
            <div class="div_groupe_text_aide">
                <p class="petit_title_aide">Comment fonctionne le paiement ?</p>
                <div class="div_txt_aide displayedNone">
                    <p class="txt_aide">- Vous devez sélectionner le mode de paiement qui vous convient quant à l'achat du véhicule.</p>
                    <hr>
                    <p class="txt_aide">- Le paiement demandé juste en dessous concerne uniquement l'accompte. Ce n'est en aucun cas le premier paiement d'un achat à crédit, par exemple. </p>
                    <hr>
                    <p class="txt_aide">- Le paiement du véhicule ne se fera pas par l'intermédiaire du site Tesla.</p>
                </div>
            </div>
            @endif
            <div class="div_groupe_text_aide">
                <p class="petit_title_aide" >Comment seront traitées mes informations bancaires ?</p>
                <div class="div_txt_aide displayedNone" >
                    <p class="txt_aide">- Nous n'enregistrons pas vos informations bancaires ou relatives à votre compte Paypal.</p>
                    <hr>
                    <p class="txt_aide">- Le paiement est sécurisé par l'intermédiaire du service Paypal.</p>
                    <hr>
                    <p class="txt_aide">- Pour une question plus précise ou pour signaler un problème, n'hésitez pas à <a class="txt_cliquable" href="/contact">nous contacter</a> ou à <a class="txt_cliquable" href="https://www.paypal.com/fr/smarthelp/contact-us">contacter le support de Paypal</a>.</p>
                </div>
            </div>
            
            <!-- <img class="img_aide"src="../images/configuration/modele-s/s-plaid/vue-devant.png" alt="configImg"> -->
        </div>
    </div>
    <script src="../js/aide.js"></script>
    <script src="../../js/aide.js"></script>
</body>
</html>