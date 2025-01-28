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

const STATUT_EN_ATTENTE="en attente";
const STATUT_EXPEDIEE="expediée";
const STATUT_LIVREE="livrée";
const STATUT_ANNULEE="annulée";

$statut_commande=STATUT_EN_ATTENTE;

if ($statut_commande == STATUT_EN_ATTENTE){
    echo 'STATUT_EN_ATTENTE';
}else if($statut_commande == STATUT_EN_ATTENTE){
    echo 'STATUT_EXPEDIEE';
}else if($statut_commande == STATUT_LIVREE){
    echo 'STATUT_EXPEDIEE';
}else if($statut_commande == STATUT_ANNULEE){
    echo 'STATUT_ANNULEE';
}else{
    echo "Statut de commande inconnu";
};