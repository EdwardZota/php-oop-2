<?php

$cane = new Categorie('Cane','fa-solid fa-dog');
$gatto = new Categorie('Gatto','fa-solid fa-cat');

$prodotti=[
    new Giochi('cordacani.jpg','corda gioco per cani','2,99','4/5',$cane,'cotone','grigio'),
    new Giochi('giocogatto.jpg','Cannetta gioco in metallo 3in1','7,99','5/5',$gatto,'plastica','rosa/marrone'),

    
    new Cibo('cibocani.jpg','Concept for Life Veterinary Diet Renal Crocchette per cani','10,99','5/5',$cane,500,2,'cucciolo'),
    new Cibo('cibogatto.jpg','Smilla Adult Manzo Crocchette per gatti','15,99','5/5',$gatto,240,1,'adulti'),

    
    new Cucce('cucciacane.jpg','Cuccia per cani Spike Classic','79,99','4/5',$cane,'legno','50x50x50'),
    new Cucce('cucciagatto.jpg','Cuccia graffiatoio Trixie Lilly','47,99','4/5',$gatto,'plastica','30x30x30')
];