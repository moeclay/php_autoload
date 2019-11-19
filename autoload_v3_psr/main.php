<?php
/*
penggunaan namespace : virtual directory yg merepresentasikan directory asli.

contoh :
\MainName\SubName\ClassName



contoh structur :
-- Vehicle
   - Car
     - Honda
       - Jazz.php
       - HRV.php
     - Toyota
       - Yaris.php

maka namespace :
Vehicle\Car\Honda\Jazz
Vehicle\Car\Honda\HRV
Vehicle\Car\Toyota\Yaris

syarat lainnya : adanya top-level namespace / vendor
mewakili pembuatan package.


penggunaan 'use' untuk alis
contoh :
use SMTP\Mailer as SMTPMailer

autoload di composer untuk memaping namespace ke directory tujuan.

composer dump-autoload
*/
require_once __DIR__.'/vendor/autoload.php';

use AppLoader\Math\Calc;

$calc = new Calc();
$calc->add(4,5);
$calc->substract(10,3);