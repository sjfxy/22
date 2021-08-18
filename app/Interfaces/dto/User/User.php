<?php
declare(strict_types=1);
namespace App\Interfaces\dto\User;
class ArgsGetUserinfo
{
    public $userId;
}
class ReplyGetUserinfo {
    public $userid;
    public $username;
    public $token;
    public $timeStamp;
}
