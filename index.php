<?php

require_once __DIR__ . '/Models/Products.php';

require_once __DIR__ . '/Database/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="./style/style.css">
</head>
<body class="bg-info">
    <h1 class="text-center my-5">Prodotti per animali</h1>
    <div class="container">
        <div class="row d-flex justify-content-between">
        <?php foreach($prodotti as $prodotto){ ?>
            <div class="col-4 p-3 mb-4">
            <div class="card p-3 w-100 h-100" style="width: 18rem;">
                <img src="image/<?php echo $prodotto->immagine ?>" class="card-img-top pt-5 my-3" alt="<?php echo $prodotto->nome ?>">
                <span class="text-white icona"><i class="bg-primary-subtle rounded-5 p-3 <?php echo $prodotto->categoria->icon;?>"></i></span>
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $prodotto->nome; ?></h4>
                        <span>prezzo: <?php echo $prodotto->prezzo; ?></span> <br />
                        <span>valutazione:<?php echo $prodotto->valutazione; ?></span><br />
                        
                            <?php if($prodotto->tipoProdotto == 'Giochi') {?>
                                <span>fatto di <?php echo $prodotto->materiale; ?></span><br />
                                <span>colore: <?php echo $prodotto->colore; ?></span>
                            <?php }elseif($prodotto->tipoProdotto == 'Cibo') {?>
                                <span>calorie: <?php echo $prodotto->calorie; ?></span><br />
                                <span>Peso: <?php echo $prodotto->peso; ?></span> Kg<br />
                                <span>Taglia del Cane:<?php echo $prodotto->tagliaCane; ?></span>
                            <?php }elseif($prodotto->tipoProdotto == 'Cucce') {?>
                                <span>Fatto di <?php echo $prodotto->materiale; ?></span><br />
                                <span>Dimensioni: <?php echo $prodotto->dimensioni; ?></span>
                            <?php } ?>
                    </div>
                </div>
                </div>
            <?php } ?>
        </div>

    </div>
    
</body>
</html>