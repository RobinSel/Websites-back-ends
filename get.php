<?php
$artikels = array(
            array('titel' => 'Asteroïde scheerde deze ochtend rakelings langs de aarde',
                  'datum' => '12/10/2017',
                  'inhoud' => 'Vanmorgen is een kleine asteroïde rakelings langs de aarde gescheerd. Er was geen reden tot                                  bezorgdheid, maar wel belangrijk nieuws voor de wetenschap. Ruimtevaartorganisatie NASA gebruikte de                          doortocht van 2012 TC4 om het waarschuwingssysteem voor naderende ruimteobjecten te testen. Dat                              gebeurde nooit eerder met een echte asteroïde.',
                  'afbeelding' => 'extra-bestanden/artikel1.jpg',
                  'afbeeldingBeschrijving' => 'Ruimtefoto van astroïd en aarde'),
            array('titel' => 'Honderden mensen vermist bij bosbranden wijngebied in Californië',
                  'datum' => '12/10/2017',
                  'inhoud' => 'Aanwakkerende wind bemoeilijkt het blussen van de vele bosbranden in Californië woensdagnacht. In het                        wijngebied in het noorden van de Amerikaanse staat zijn al 23 mensen om het leven gekomen bij de                              natuurbranden, 550 worden nog vermist.',
                  'afbeelding' => 'extra-bestanden/artikel2.jpg',
                  'afbeeldingBeschrijving' => 'Foto van drie brandweermannen in een brandend bos'),
            array('titel' => 'Ikea gaat zonnepanelen verkopen in ons land (en je hoeft ze niet zelf te installeren)',
                  'datum' => '12/10/2017',
                  'inhoud' => 'Meubelreus Ikea gaat vanaf vandaag zonnepanelen verkopen in ons land. Eerst online en vanaf eind                              januari ook in de acht Belgische warenhuizen van de Zweedse keten.',
                  'afbeelding' => 'extra-bestanden/artikel3.jpg',
                  'afbeeldingBeschrijving' => 'Foto van zonnenpanelen op daken met het logo van Ikea'));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
    <style>
    
        img {
            width: 400px;
            height: 250px;
        }
        
        article {
            width: 30%;
            margin-left: 1%;
            margin-right: 1%;
            float: left;
            border-right: 1px solid #000;
        }
        article:nth-child(3) {
            border: none;
        }
        
        input[type = "text"]{
            margin-top: 20px;
            margin-left: 15px;
        }
        
    </style>   
    

    
    
</head>
<body>
                            
                            <?php if(isset($_GET['id']) == null) {
                                foreach ($artikels as $key => $artikel) { ?>
                                <article class="multiple">
                                    <h1><?php echo $artikel['titel']?></h1>
                                    <p><?php echo $artikel['datum']?></p>
                                    <img src=<?php echo $artikel['afbeelding']?> alt=<?php echo $artikel['afbeeldingBeschrijving']?>>
                                    <p><?php echo substr($artikel['inhoud'], 0, 50). ' ...'?></p>
                                    <p class="read-more"><a href="get.php?id=<?php echo $key +1?>">Lees meer</a></p>
                                </article>
                                <?php } ?>
                                <form action="get.php" method="get">
                                <input type="text" name="zoekInput" id="" placeholder="Zoek in artikels">
                                <input type = "submit" name = "submit" value = "Zoek">
                                </form>
                                <?php }
                                elseif($_GET['id'] <= 3) {?>
                                <article class="multiple more">
                                    <h1><?php echo $artikels[$_GET['id']-1]['titel']?></h1>
                                    <p><?php echo $artikels[$_GET['id']-1]['datum']?></p>
                                    <img src=<?php echo $artikels[$_GET['id']-1]['afbeelding']?> alt= <?php echo $artikels[$_GET['id']-1]['afbeeldingBeschrijving']?>>
                                    <p><?php echo $artikels[$_GET['id']-1]['inhoud']?></p>
                                    <p class="go-to-menu"><a href="get.php">Terug</a></p>
                                </article>
                            <?php }
                                  else {echo "Artikel bestaat niet";}
                            
                            
                            if(isset($_GET['submit'])) {
                                $searchInput = $_GET['zoekInput'];
    
                                if(in_array($searchInput, $artikels)) {
                                    foreach ($artikels as $artikel) {
                                        if (in_array($searchInput, $artikels(array('inhoud')))) {
                                            echo "Found in a article";
                                        }
                                    }
                                }
                                else { echo "De zoekterm '" . $searchInput . "' wordt niet gevonden";}
                            }
                            ?>
                            
    
    
    
    
</body>
</html>