<?php

echo 'tableDeMultiplication' . PHP_EOL;

function tableDeMultiplication($max) {
    // Vérifier si le paramètre $max est un nombre positif supérieur à zéro
    if (!is_numeric($max) || $max <= 0) {
        echo "Le paramètre doit être un nombre positif supérieur à zéro.";
        return;
    }

    // Afficher les résultats des tables de multiplication
    for ($i = 1; $i <= $max; $i++) {
        for ($j = 1; $j <= 10; $j++) {
            echo ($i * $j) . " ";
        }
        echo "\n";
    }
}


echo tableDeMultiplication(10);

echo "\n";

function isPalindrome($str) {
    // Supprimer les espaces et mettre la chaîne en minuscules pour comparer les caractères de manière insensible à la casse
    $str = strtolower(str_replace(' ', '', $str));

    // Récupérer la longueur de la chaîne
    $length = strlen($str);

    // Parcourir la moitié de la chaîne et comparer les caractères opposés
    for ($i = 0; $i < $length / 2; $i++) {
        if ($str[$i] !== $str[$length - $i - 1]) {
            // Si les caractères opposés ne sont pas égaux, la chaîne n'est pas un palindrome
            return 'false';
        }
    }

    return 'true';
}

echo 'isPalindrome' . PHP_EOL;

echo 'BILEL' . ' => ' . isPalindrome('BILEL') . PHP_EOL;
echo 'BOB' . ' => ' . isPalindrome('BOB') . PHP_EOL;
echo 'TOM' . ' => ' . isPalindrome('CAT') . PHP_EOL;
