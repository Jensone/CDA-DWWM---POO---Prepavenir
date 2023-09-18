<?php

require_once './Classes/Admin.php';
require_once './Classes/Client.php';

use App\Admin;
use App\Client;

$martin = new Client("Martin","martin@gmail.com","martin",new DateTime());
$marta = new Admin("Marta", "marta@gmail.com", "marta", new DateTime());

var_dump($martin, $marta);