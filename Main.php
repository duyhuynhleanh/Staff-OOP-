<?php

// namespace Staff;

require __DIR__ . '/vendor/autoload.php';

use Staff\ProjectManager;
use Staff\Developer;


$dev_1 = new Developer('1', 'Angela','Yu', 'angela@gmail.com', 'Female', 30, 3.14);
var_dump($dev_1->getInfo());
$dev_1->setLanguage('Python, JavaScript');
$dev_1->setType('FullStack Developer');
$dev_1->develop();
$dev_1->report();


$manager_1 = new ProjectManager('2', 'Brad','Traversy', 'brad@gmail.com', 'Male', 33, 6.9);
var_dump($manager_1->getInfo());
$manager_1-> setTeamLead(TRUE);
$manager_1-> changeTeamSize('increase', 16);
$manager_1-> statusCheck();