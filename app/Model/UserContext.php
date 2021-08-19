<?php
declare(strict_types=1);
namespace App\Model;
/**
 * 用户信息上下文信息
 */
class UserContext
{
    const JsonUserNameField = "uname";
    const JsonUserEmailField = "uemail";
    const JsonUserIDField = "id";
    const JsonTypeMethod = "json_default";
    const XmlUserEmailField = "user_name";
    const UserIdModeRules = "hash%crzl";
    //默认采用mysql increment_id 作为自增信息处理
}