<?php
declare(strict_types=1);
namespace App\Logics;
use App\Model\UserinfoModel;

class UserLogic
{
    public function getInfoById(int $id)
    {
        //配置修正
        return new UserinfoModel($id,UserinfoModel::DefaultUserName,UserinfoModel::DefaultUserEmail);
    }
}