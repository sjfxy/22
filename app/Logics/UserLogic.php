<?php
declare(strict_types=1);
namespace App\Logics;
use App\Model\UserinfoModel;

class UserLogic
{
    public function getInfoById(int $id)
    {
        return new UserinfoModel($id);
    }
}