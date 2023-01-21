<?php 
    include '../public/php/header.php';
?>
    <?php $totalPanier=0?>
<div class="englobe">

    <div class="form_account" id="grosse_div_margined_panier">
    <div>
        @if (isset($_SESSION['panier']))
        @if ($_SESSION['panier']==[])
        <div id="div_panier_vide">
            <h1>Votre panier est vide...</h1>
            <div id="div_grande_aide_panier" >
                <div class="div_aide_panier">
                    <p>Rendez vous sur <a class="clickable" href="http://51.83.36.122:8245/boutique">la page boutique</a>  pour ajouter des articles au panier.</p>
                </div>
                <!-- <div class="div_aide_panier" >
                    <p class="txt_plus_petit"> Pour plus d'aide, <a class="clickable txt_plus_petit" href="http://51.83.36.122:8245/help">cliquez ici</a>.</p>
                    
                </div> -->
            </div>
        </div>
        <!-- <button onclick="location.href='http://51.83.36.122:8245/boutique'">Retour à la boutique</button> -->
        @else
        <div class="div_title_bandeau_aide">
            <h1 >Votre panier</h1>
            <div class="div_petit_bandeau_aide dpba_panier">?</div>
        </div>
        <form method="POST" action="/promo"> 
        @csrf 
        <div id="div_code_promo">
            <label>Code promo: </label>
            <input name="input_promo" id="input_promo" class="input_panier" ></input>
            <input type="submit" class="btn_panier" value="Valider" ></input>
        </div>
        </form>
        <div id="form_panier">
        <form method="POST" action="/panier" >
        @csrf    
        @foreach($listeArticles as $article)
        <?php $totalPanier+=$article->prix * $article->quantite ?>
        <div class="column_margined" id="div_margined_panier">
            <div class="div_flex_lign div_gapped">
                <!-- <label>Article : {{$article->vraiLibelle}}</label>
                <label>Variante : {{$article->libelle}}</label> -->
                <label>Article : {{$article->vraiLibelle}}</label>
                <img class="style_img_panier" src="{{$article->photo}}"></img>
                <div>
                    <label>quantité:</label>
                    <input name="input_{{$article->id}}" max={{$article->stock}} id={{$article->id}} class="input_panier" required type="number" value={{$article->quantite}} min="1"></input> 
                </div>
                <label id={{$article->id}} class="label_prix_panier">Prix : {{$article->prix * $article->quantite}} €</label>
                <div>
                    <input type="button" id={{$article->id}} class="btn_panier btn_panier_color2" value="Supprimer l'article du panier" onclick="location.href='/suppr/{{$article->id}}';"></input>
                </div>
                
            </div>
        </div>
        @endforeach
        
        @if (isset($reduc))
        <h3 id="h3_prix_panier">Prix total : {{$totalPanier}} €</h3>
        <h5 id="h3_reduction_panier">Réduction pour chaque article : {{$reduc->montant}} €</h5>
        <h5 id="h3_reduction_panier">Article concerné par la remise : {{$reduc->accessoire_libelle}}</h5>
        <h5 id="h3_reduction_totale_panier">Réduction totale : 0 €</h5>
        <h3 id="h3_prix_total_panier">Prix total final : {{$totalPanier}} €</h3>
        <?php $_SESSION['reduc']= $reduc ?>
        @else
        <h3 id="h3_prix_total_panier">Prix total : {{$totalPanier}} €</h3>
        @endif
        <button >Procéder au paiement</button>
        </div> 
        </form>
        

        @endif
        @else 
        <h3>Votre panier est vide...</h3>
        
        <button onclick="location.href='http://51.83.36.122:8245'">Retour à la boutique</button>
        @endif
    </div>    

    </div>	
    @if (!isset($_SESSION['panier']) || $_SESSION['panier']!=[])
    <div class="div_bandeau_aide">
        <div class="div_bandeau_aide_content displayedNone">
        <h2 class="title_aide">Besoin d'aide ?</h2>
            <div class="div_groupe_text_aide">
                <p class="petit_title_aide" >Comment ajouter des articles à mon panier ?</p>
                <div class="div_txt_aide displayedNone" >
                    <p class="txt_aide">- Rendez-vous sur notre <a href="/boutique" class="txt_cliquable">boutique</a>.</p>
                </div>
            </div>
            <div class="div_groupe_text_aide">
                <p class="petit_title_aide" >J'ai changé d'avis, comment modifier mon panier ?</p>
                <div class="div_txt_aide displayedNone" >
                    <p class="txt_aide">- Pour changer la quantité d'un article, cliquez dans la zone prévue à cet effet puis tapez le nouveau montant.</p>
                    <hr>
                    <p class="txt_aide">- Pour complètement supprimer un article, cliquez sur le bouton "supprimer" à droite de l'article concerné.</p>
                </div>
            </div>
            <div class="div_groupe_text_aide">
                <p class="petit_title_aide">Comment utiliser un code promo ?</p>
                <div class="div_txt_aide displayedNone">
                    <p class="txt_aide">- Rentrez le code promo dans la zone prévue à cet effet (en haut de la page), puis validez.</p>
                    <hr>
                    <p class="txt_aide">- Si le code est valide, nous appliquons une promotion de x euros pour chaque article concerné présent dans le panier.</p>
                    <hr>
                    <p class="txt_aide">- Exemple : j'ai 3 "bonnets" et un code promo de 15€ pour chaque bonnet. Ma réduction totale sera donc de 45€.</p>
                </div>
            </div>
            <div class="div_groupe_text_aide">
                <p class="petit_title_aide">Comment passer ma commande ?</p>
                <div class="div_txt_aide displayedNone">
                    <p class="txt_aide">- Cliquez sur "Procéder au paiement".</p>
                    <hr>
                    <p class="txt_aide">- Vous allez être redirigé vers la page de livraison puis vers celle du paiement.</p>
                    <hr>
                    <p class="txt_aide">- Si vous n'êtes pas connecté, vous allez d'abord être redirigé vers la page de connexion.</p>
                </div>
            </div>
            <!-- <img class="img_aide"src="../images/configuration/modele-s/s-plaid/vue-devant.png" alt="configImg"> -->
        </div>
    </div>
    <script src="../js/aide.js"></script>
    @endif
    </div>	
    </div>	

    <script  type="text/javascript">
    let panier = <?php echo json_encode($_SESSION['infosPanier']); ?>;
    // console.log(panier)

    let grosseDiv = document.getElementById("grosse_div_margined_panier");
    let moyenneDiv = document.getElementById("form_panier");
    let labPrix = document.querySelectorAll(".label_prix_panier");
    let labTotal = document.getElementById("h3_prix_total_panier")
    let total=0;
    let reducTotale=0

    //mes quantités
    let inputs = moyenneDiv.querySelectorAll("input");
    inputs.forEach(function(input){
        input.addEventListener("input",function(e){
            let newVal =e.target.value 
            reduc=0
            reduc = <?php 
            if (isset($reduc)){
                echo ($reduc->montant);
            }else{
                echo(0);
            }
            ?>
            
            idArticle=0;

            idArticle = <?php 
            if (isset($reduc)){
                echo ($reduc->accessoire_id);
            }else{
                echo(0);
            }
            ?>

            // console.log(idArticle)        
            // console.log(idArticle)        

            let total=0;
            labPrix.forEach(function(p){
                if (p.id==input.id){
                    panier.forEach(function(pan,index){
                        if(pan.id == p.id)
                        {
                            // panier[index].prix-=reduc
                            p.innerHTML="Prix : "+(newVal*pan.prix)+" €"
                            panier[index].quantite=newVal
                            
                            if(idArticle==p.id )
                            {
                                reducTotale=reduc*panier[index].quantite
                            }
                        }
                        total+=(panier[index].prix*panier[index].quantite)
                        
                    })
                    
                }
                
            })
            if (reduc!= null && reduc!=0)
            {
                document.getElementById("h3_prix_panier").innerHTML="Prix total : "+(total)+" €";
                document.getElementById("h3_reduction_totale_panier").innerHTML="Réduction totale : "+reducTotale+" €";
                labTotal.innerHTML="Prix total final : "+ (total-reducTotale)+ " €";
                // labTotal.innerHTML=reduc;
            }
            else
            {
                labTotal.innerHTML="Prix total : "+total+" €";
            }
                

        })
    })

    // //boutons suppr
    // let boutons = grosseDiv.querySelectorAll('button')
    // boutons.forEach(function(bouton){
    //     bouton.addEventListener("click",function(){
    //         console.log("click")
    //     })
    // })
    </script>
</div>    
<footer>
    <p style="margin-bottom:8px;">
        <a href="/mentions-legales">Mentions légales</a>
        |
        <a href="/donnees-personnelles">Politique des données personnelles</a>
        |
        <a id="gerer_cookie_footer" href="#">Gérer mes cookies</a>
        |
        <a href="/contact">Contact</a>
        |
        <a href="/faq">F.A.Q</a>
    </p>
    <p>Tesla Corporation ~2022</p>
</footer>
</body>
</html>