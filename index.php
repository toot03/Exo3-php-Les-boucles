<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exo PHP</title>
</head>
<body>
<?php
//Exercice 1
echo"Exercice 1<br>";
$boucle=0;
while($boucle <= 10){
    echo "$boucle ";
    $boucle++;
}
//Exercice 2
echo"<br>Exercice 2<br>";
$dos=3;
for($uno=0 ; $uno <=20 ; $uno++){
    echo $uno*$dos;
    echo" ";
}
//Exercice 3
echo"<br>Exercice 3<br>";
$dos=3;
for($uno=100 ; $uno >=10 ; $uno--){
    echo $uno*$dos;
    echo" ";
}
//Exercice 4
echo"<br>Exercice 4<br>";
for($uno=1;$uno<=10;$uno+=0.5*$uno){
    echo "$uno ";
}
//Exercice 5
echo"<br>Exercice 5<br>";
for($uno=1;$uno<=15;$uno++){
    if($uno==1){
        echo "On y arrive presque ";
    }
    else {
        echo "$uno ";
    }
}
//Exercice 6
echo"<br>Exercice 6<br>";
for($uno=20;$uno>=0;$uno--){
    if($uno==1){
        echo "C'est presque bon ";
    }
    else {
        echo "$uno ";
    }
}
//Exercice 7
echo"<br>Exercice 7<br>";
for($uno=1;$uno<=100;$uno++){
    if($uno==15){
        echo "On tient le bon bout ";
    }
    else {
        echo "$uno ";
    }
}
//Exercice 8
echo"<br>Exercice 8<br>";
for($uno=200;$uno>=0;$uno--){
    if($uno==12){
        echo "Enfin !!!! ";
    }
    else {
        echo "$uno ";
    }
}
?>
</body>
</html>