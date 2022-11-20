<?php
require_once 'point1.php';
class UsersDto
{
    /**
     * @var UserDto[]
     */
    public array $users;

    public function appendUser(UserDto $user) : void
    {
        $this->users[] = $user;
    }
}

class UserDto {

    public function __construct(
        public int $id,
        public array $description
    ) {   
    }
}

$codeTimer = new CodeTimer('Point 3');
$codeTimer->start();

$usersDto = new UsersDto;
foreach ($data->users as $user) {
    $userDto = new UserDto($user->id, $user->description);
    $usersDto->appendUser($userDto);
}

$codeTimer->stop();
echo $codeTimer->result() . "\n";
