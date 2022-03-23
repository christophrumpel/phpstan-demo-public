<?php


use Src\Support\Collection;
use Src\Support\User;

include('vendor/autoload.php');

$user = new User;
$userCollection =  new Collection();
$userCollection
    ->add($user)
    ->first()->delete();
