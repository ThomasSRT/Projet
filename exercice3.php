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

$age="10";

if ($age <="13"){
    echo "Enfant";
}else if($age >="13" && $age <= "17"){
    echo "Adolescent";
}else if($age >="18" && $age <= "64"){
    echo "Adulte";
}else if($age >="65"){
    echo "Senior";
};