<?php

/* Exercise 1 
function returnTrue() {
    return true;
}
*/

/* Exercise 2 
function getAndReturnString(string $text) {
    return $text;
} 
*/ 

/* Exercise 3 
function getAndReturnString(string $text1, string $text2) {
    return "{$text1}{$text2}";
}
*/

/* Exercise 4 
function compare(int $number1, int $number2) {
    if ($number1 > $number2) return "Le premier nombre est plus grand";
    else if ($number1 < $number2) return "Le premier nombre est plus petit";
    else return "Les deux nombres sont identiques";
}

echo compare(1, 10);
*/

/* Exercise 5 
function concatenate(int $number1, string $text) {
    return "{$number1}{$text}";
}

echo concatenate(10, "Hello");
*/

/* Exercise 6 
function welcomeMessage(string $nom, string $prenom, int $age) {
    return "Bonjour {$nom} {$prenom}, tu as {$age} ans.";
}
echo welcomeMessage("AL-OBEIDI", "Ahmed", 29);
*/

/* Exercise 7 
function checkGenderAndAge(int $age, string $gender) {
    if ($gender === "Homme") {
        if ($age >= 18) return "Vous êtes un homme et vous êtes majeur";
        else return "Vous êtes un homme et vous êtes mineur";
    }
    else if ($gender === "Femme") {
        if ($age >= 18) return "Vous êtes une femme et vous êtes majeur";
        else return "Vous êtes une femme et vous êtes mineur";
    }
}
echo checkGenderAndAge(17, "Femme");
*/

/* Exercise 8 
function calculateSum(int $number1 = 0, int $number2 = 0) {
    return $number1 + $number2;
}

echo calculateSum();
*/