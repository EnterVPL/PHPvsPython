<?php
require_once 'point1.php';
require_once 'point3.php';


$codeTimer = new CodeTimer('Point 4');
$codeTimer->start();

$otherUsersDto = new UsersDto;
try {
    foreach ($data->users as $user) {
        $otherUsersDto = new UserDto($user->id, $user->description);
        throw new \ErrorException('My bad!');
    }

    var_dump(count($usersDto->users));
    
} catch(\Throwable $e) {
    echo $e->getMessage() . "\n";
}

$codeTimer->stop();
echo $codeTimer->result() . "\n";