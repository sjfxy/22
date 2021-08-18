<?php
declare(strict_types=1);
namespace App\Model;
/**
 * 用户实体
 */
class UserinfoModel
{
    private $userId;
    private $userName;
    private $userEamil;
    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param mixed $userId
     */
    public function setUserId($userId): void
    {
        $this->userId = $userId;
    }

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param mixed $userName
     */
    public function setUserName($userName): void
    {
        $this->userName = $userName;
    }

    /**
     * @return mixed
     */
    public function getUserEamil()
    {
        return $this->userEamil;
    }

    /**
     * @param mixed $userEamil
     */
    public function setUserEamil($userEamil): void
    {
        $this->userEamil = $userEamil;
    }


    /**
     * @param $userId
     * @param $userName
     * @param $userEamil
     */
    public function __construct($userId, $userName, $userEamil)
    {
        $this->userId = $userId;
        $this->userName = $userName;
        $this->userEamil = $userEamil;
    }

    public function __toString():string
    {
        return  sprintf("[#UserinfoMdoel: userId: %d, username: %s,userEmial: %s]",
            $this->getUserId(),
            $this->getUserName(),
            $this->getUserEamil()
        );
    }

    public function info():UserinfoModel{
        return  $this;
    }



}