<?php
use Src\Components\DataBaseParameters;

$parameters = DataBaseParameters::getInstance();

$parameters->set('host', 'mysql');
$parameters->set('dbname','callstoreton');
$parameters->set('user', 'root');
$parameters->set('password', 'root');
?>