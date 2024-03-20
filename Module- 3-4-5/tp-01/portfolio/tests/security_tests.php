<?php
require '../functions/security.php';

// Test de la fonction sanitizeInput
$input = "<script>alert('coucou')</script>";
$sanitizedInput = \functions\sanitizeInput($input);
if ($sanitizedInput === "&lt;script&gt;alert(&#039;coucou&#039;)&lt;/script&gt;") {
    echo "Test sanitizeInput: Réussi\n";
} else {
    echo "Test sanitizeInput: Échoué\n";
}


// Test de la fonction generateCsrfToken
$generatedToken = \functions\generateCsrfToken();
if (!empty($generatedToken)) {
    echo "Test generateCsrfToken: Réussi\n";
} else {
    echo "Test generateCsrfToken: Échoué\n";
}

// Test de la fonction validateRegistrationForm
$nom = "Lair";
$prenom = "Julien";
$email = "jlair@et.esiea.fr";
$password = "azerty123AZE";
$errors = \functions\validateRegistrationForm($nom, $prenom, $email, $password);
if (empty($errors)) {
    echo "Test validateRegistrationForm: Réussi\n";
} else {
    echo "Test validateRegistrationForm: Échoué\n";
    echo "Erreurs dans le formulaire d'inscription : " . $errors . "\n";
}
?>
