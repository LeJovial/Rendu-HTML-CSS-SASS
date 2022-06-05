<?php 
$articles = [
    [
        'id'=> 0,
        'name'=> 'Gibson Hummingbird',
        'picture'=> 'images/produits/hummingbird.jpg',
        'description'=>'Guitare dreadnought folk, cordes en acier. Table en Épicéa de Sitka. Dos en Acajou. Eclisse en Acajou. Manche en Acajou et touche en Sesham. Sillet en os. Méchanique Gotoh. Couleur Heritage Cherry Sunburst.
        Prix : 299 €.'
    ],
    [
        'id'=> 1,
        'name'=> 'Taylor T5Z Custom K',
        'picture' => 'images/produits/taylor-t5z-custom.jpg',
        'description' => 'Guitare hollow body. Table en Épicéa de Sitka. Dos en Koa lamée. Touche en Ebène. Sillet en os. Couleur Shaded Edgeburst.
        Prix : 3 050 €.'
    ],
    [
        'id'=> 2,
        'name'=> 'Franck Cheval Jumbo',
        'picture'=> 'images/produits/franck-cheval-Montage-Jumbo-th.jpg',
        'description'=>'Guitare jumbo folk, corde en acier. La plupart des modèles sont réalisés en Erable du Jura, en Acajou du Honduras ou en Palissandre brésilien avec des tables en Epicéa. Mécaniques Schaller Grand Tune ou Gotoh 510. 
        Prix : À partir de 5500 €.'
    ],
    [
        'id'=> 3,
        'name'=> 'Takamine GN93CE',
        'picture'=> 'images/produits/Takamine-GN93CE.jpg',
        'description'=>'Guitare jumbo folk électro-acoustique, cordes en acier. Table en épicéa massif. Dos et éclisses 3 pièces en Noyer/Erable/Noyer. Bloc central en érable flammé. Manche en Acajou. Touche en Laurier Indien. Chevalet en ovangkol. Préamplificateur Takamine TK-40D avec accordeur intégré. Couleur Natur Gloss.
        Prix : 580 €.'
    ],
    [
        'id'=> 4,
        'name'=> 'Kopo Guitare Vienna',
        'picture'=> 'images./produits/vienna-kopo-guitare.webp',
        'description'=>'Guitar archtop jumbo cordes nylon. Table d\'harmonie en Cèdre voutée. Caisse en Klas, eco-composite de lin. Manche en Tilleul et touche Ebène. Chevalet et cordier en Ebène. Mécaniques Schertler. 
        Prix : 6200 €.'
    ],
    [
        'id'=> 5,
        'name'=> 'Franck Cheval Lola',
        'picture'=> 'images/produits/franck-cheval-Lola-Montage-th.jpg',
        'description'=>'Guitare archtop, corde en acier. Table en Epicéa. Fond et éclisses en Erable ondé. Manche en Acajou du Honduras ou Erable ondé. Touche et chevalet en Ebène, Ebène de Macassar, Palissandre de Rio. Mécaniques Schaller Grand Tune. 
        Prix : À partir de 7500 €.'
    ]
];

function show($articles) {
    foreach ($articles as $article) { ?>
        <a href="article.php?id=<?= $article['id'] ?>">
            <div>
                <img class="photoProd" src="<?= $article['picture'] ?>"> 
                <h3 name="name"><?= $article['name'] ?></h3> 
                <p><?= $article['description'] ?></p>
            </div>
        </a>
<?php
    }
}

function displayOneArticle($id) {
    switch ($id) {
        case '0':?>
            <img class="test" src="images/produits/hummingbird.jpg">
            
            <p>
                <strong>Gibson Hummingbird</strong>
                Guitare dreadnought folk, cordes en acier. Table en Épicéa de Sitka. Dos en Acajou. Eclisse en Acajou. Manche en Acajou et touche en Sesham. Sillet en os. Méchanique Gotoh. Couleur Heritage Cherry Sunburst.
                Prix : 299 €.
            </p>
        <?php break;
        case '1':?>
            <img class="test" src="images/produits/taylor-t5z-custom.jpg">
            <p>
                <strong>Taylor T5Z Custom K</strong>
                Guitare hollow body. Table en Épicéa de Sitka. Dos en Koa lamée. Touche en Ebène. Sillet en os. Couleur Shaded Edgeburst.
                Prix : 3 050 €.
            </p>
        <?php break;
        case '2':?>
            <img src="images/produits/franck-cheval-Montage-Jumbo-th.jpg">
            <p>
                <strong>Franck Cheval Jumbo</strong>
                Guitare jumbo folk, corde en acier. La plupart des modèles sont réalisés en Erable du Jura, en Acajou du Honduras ou en Palissandre brésilien avec des tables en Epicéa. Mécaniques Schaller Grand Tune ou Gotoh 510. 
                Prix : À partir de 5500 €.
            </p>
        <?php break;
        case '3':?>
            <img class="test" src="images/produits/Takamine-GN93CE.jpg">
            <p>
                <strong>Takamine GN93CE</strong>
                Guitare jumbo folk électro-acoustique, cordes en acier. Table en épicéa massif. Dos et éclisses 3 pièces en Noyer/Erable/Noyer. Bloc central en érable flammé. Manche en Acajou. Touche en Laurier Indien. Chevalet en ovangkol. Préamplificateur Takamine TK-40D avec accordeur intégré. Couleur Natur Gloss.
                Prix : 580 €.
            </p>
        <?php break;
        case '4':?>
            <img src="images./produits/vienna-kopo-guitare.webp">
            <p>
                <strong>Kopo Guitare Vienna</strong>
                Guitar archtop jumbo cordes nylon. Table d\'harmonie en Cèdre voutée. Caisse en Klas, eco-composite de lin. Manche en Tilleul et touche Ebène. Chevalet et cordier en Ebène. Mécaniques Schertler. 
                Prix : 6200 €.
            </p>
        <?php break;
        case '5':?>
            <img src="images/produits/franck-cheval-Lola-Montage-th.jpg">
            <p>
                <strong>Franck Cheval Lola</strong> 
                Guitare archtop, corde en acier. Table en Epicéa. Fond et éclisses en Erable ondé. Manche en Acajou du Honduras ou Erable ondé. Touche et chevalet en Ebène, Ebène de Macassar, Palissandre de Rio. Mécaniques Schaller Grand Tune. 
                Prix : À partir de 7500 €.
            </p>
        <?php break;
    }
}