<!-- Logical Operator -->

<?php

$age = 20;

// if ($age >= 18 && $age <= 25) {  /* && or and want both condition true otherwise he prefer false */
//     echo "Eligible";
// }
// if ($age >= 18 || $age <= 19) { /* || or OR want single condition true then he give whole answer true .*/
//     echo "Eligibly";
// }
if (!($age <= 18)) { /* ! operator is conisder as Not.*/
    echo "Eligible";
}


else{
    echo "UnEligible";
}
?>