<!DOCTYPE html>
<html>
    <head>
        <title>Notre première instruction : echo</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h2>Affichage de texte avec PHP</h2>
        
        <p>
            Cette ligne a été écrite entièrement en HTML.<br />
            <?php echo "Celle-ci a été écrite entièrement en PHP."; //mon commentaire?>
        </p>
        <h1>Ma page web</h1>
        <p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); 
        /*mon 
        commentairr*/?>.</p>
        <?php
            $ageduvisiteur=20;
        
            echo "Le visiteur a $ageduvisiteur ans." ; 
            echo 'Le visiteur a ' . $ageduvisiteur . ' ans.'
        ?>
        <?php
            $prix=25;
            $quantité=2.5;
            $total=$prix*$quantité;
            echo 'le prix est de ' . $total . ' euro.'
        ?>
        <?php
            $age=14;
            if ($age < 12){
                echo 'salut kid!';
            }
            elseif($age==14){
                echo 'tu as 14 ans';
            }
            else {
                echo 'hello grande!'; 
            }
        ?>
        <?php
            $adulte=false;
            if ($adulte)
            {
                echo'tu es un adulte';
            }
            else {
                echo 'tu es un enfant';

            }
        ?>
        <?php
            $adulte=true;
            $nom='Bernard';
            if ($adulte AND $nom =="Bernard"){
                echo "$nom  est un $adulte ";
            }
            
        ?>
        <?php
        $age=18;
        switch ($age)
        {
            case 4:
            echo 'tu as 4 ans';
            break;
            case 16:
            echo 'tu as un peu plus de 16 ans.';
            break;
            case 18:
            echo' tu es majeur';
            break ;
        }
        ?>
        <?php 
        $phrase= 'je ne sais toujours pas utiliser les fontions en php';
        $longueur= strlen($phrase);
        echo 'la phrase ci dessous comporte ' .$longueur . ' mots </br>' .$phrase . '.'  ;    
        ?>
        </br>
        <?php
            $ma_variable=str_replace('a','u','alioune badara diop');
            echo $ma_variable;
        ?>
        </br>
        <?php
        $ma_chaine='moi je dis que le bon dieu est une femme';
        $ma_chaine=str_shuffle($ma_chaine);
        echo $ma_chaine;
        ?>
        <?php //strtoupper fait la mm chose en sens inverse
        $chaine='MA CHAINE DE COMMANDEMENT';
        $chaine=strtolower($chaine);
        echo $chaine;
        ?>
    </body>
</html>