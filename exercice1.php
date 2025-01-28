<?php
echo "
<style>
    body {
        background-color: #eff5fa;
    }

    .title{
        color: white;
        background-color: #1d3a6d;
        padding: 10px 0;
        text-align: center;
    }

    .subtitle{
        color: white;
        background-color: #4aa0c4;
        padding: 5px 0;
        text-align: center;
    }

    .todo{
        color: crimson;
        background-color: #F2DEDE;
        padding: 10px 0;
        text-align: center;
        font-size: 20px;
    }

    .solution{
        color: green;
        background-color: #E6FFE6;
        padding: 10px 0;
        text-align: center;
    }
</style>
";

$total_achats=120;

if ($total_achats < 50){
    echo "Ajoutez encore quelques articles pour bénéficier d'une livraison gratuite";
}else if($total_achats > 50 && $total_achats < 100){
    echo "Félicitations ! La livraison est offerte";
}else if($total_achats > 100){
    echo .($total_achats * 0,10)."Merci pour votre commande ! Vous bénéficiez d'un bon d'achat de 10 € pour votre prochaine commande";
};