<?php

require 'Speedometer.php';

echo '10 Kms font ' . Speedometer::convertKmToMiles(10) . 'Miles <br>';
echo '10 Miles font ' . Speedometer::convertMilesToKms(260) . 'Kms';