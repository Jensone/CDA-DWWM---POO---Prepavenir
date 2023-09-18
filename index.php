<?php

require_once 'Admin.php';
require_once 'Client.php';

use App\Admin;
use App\Client;


/**
 * Instanciation de la classe Utilisateur avec l'objet $martin
 */
$martin = new Client(
    "Martin",
    "martin@gmail.com",
    "martin",
    new DateTime()
);

$marta = new Admin("Marta", "marta@gmail.com", "marta", new DateTime());

var_dump($martin, $marta);

