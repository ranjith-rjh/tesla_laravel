

<link rel="stylesheet" href="/css/shop.css">
    <div class="menu_nav_accessoire">
        <div class="container_categorie_accessoire">
        @foreach ($posts_categories_accessoires as $une_categorie)
            @if (is_null($une_categorie->categorie_accessoire_id))
                <div class="select_type">

                    <div class="type_accessoire">
                        <a>{{$une_categorie->libelle}}</a>
                    </div>
                    <div class="type_accessoire_content">
                            @foreach($posts_categories_accessoires as $sub_categorie)
                                @if($sub_categorie->categorie_accessoire_id == $une_categorie->id)
                                <div class="sub_sub">
                                    <a href="//51.83.36.122:8245/boutique/{{str_replace(" ","-",$sub_categorie->libelle)}}/" class="sub_categorie">{{$sub_categorie->libelle}}</a>
                                    <div class="sub_sub_categorie">
                                        @foreach($posts_categories_accessoires as $subsub_categorie)
                                            @if($subsub_categorie->categorie_accessoire_id == $sub_categorie->id)
                                                <a href="//51.83.36.122:8245/boutique/{{str_replace(" ","-",$sub_categorie->libelle)}}/#{{str_replace(" ","-",$subsub_categorie->libelle)}}">{{$subsub_categorie->libelle}}</a>
                                        
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                @endif
                            @endforeach
                        
                    </div>
                </div>
                @endif   
            @endforeach
            <div class="recherche_accessoire">
                <form action="/boutique" method="post">
                @csrf
                    <div>
                        <input id="term" name="term" type="search" placeholder="Rechercher"></input>
                    </div>

                </form>
            </div>
            <div class="div_petit_bandeau_aide">?</div>
            
        </div>

    </div>



<script src="/js/shop.js"></script>


