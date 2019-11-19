<?php

require_once 'controllers/landing.php';
require_once 'models/landing.php';

use controllers\landing AS ControllesLanding;
use models\landing AS ModelsLanding;
use models\data;

$landing = new ControllesLanding;
$landing->get_landing();

echo "<br>";

$landing = new ModelsLanding;
$landing->get_landing();

echo "<br>";

$data = new Data;
$data->get_data();

?>