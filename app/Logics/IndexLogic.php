<?php
declare(strict_types=1);

namespace App\Logics;
use App\Interfaces\dto\User\ArgsGetUserinfo;
use App\Interfaces\dto\User\ReplyGetUserinfo;
use App\Model\UserinfoModel;

/**
 *
 */
class IndexLogic
{
    //获取用户信息
    /**
     * @param ArgsGetUserinfo $argsGetUserinfo 获取用户请求参数
     * @return ReplyGetUserinfo 响应参数 必须都是以模型的方式返回 属性是public 自动解析为 json格式信息
     */
    public static function getUserinfo(ArgsGetUserinfo  $argsGetUserinfo):ReplyGetUserinfo
    {
        $userMdoel = new UserinfoModel($argsGetUserinfo->userId,"","");
        $replyinfo = new ReplyGetUserinfo();
        $replyinfo->timeStamp = time();
        $replyinfo->token = IndexLogic::getToken();
        $replyinfo->userid = $userMdoel->getUserId();
        $replyinfo->username = empty($userMdoel->getUserName())??IndexLogic::getInitUserName();
        return $replyinfo;
    }
    private static function getToken():string
    {
        return env("user_token",random_bytes(3));
    }
    private static function getInitUserName():string
    {
        return env("user_init_default_name",random_bytes(3));
    }
}