<?php


use Src\Support\Collection;
use Src\Support\User;

include('vendor/autoload.php');

$user = new User;
$userCollection =  new Collection();
$userCollection
    ->add($user)
    ->first()->delete();
















function createInstanceOf(string $className): object
{
    return new $className;
}

$user = createInstanceOf(User::class);












