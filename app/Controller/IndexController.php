<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace App\Controller;

use App\Interfaces\dto\User\ArgsGetUserinfo;
use App\Logics\IndexLogic;

class IndexController extends Controller
{
    //测试环境部署 预发布环境 正式环境 本地环境都可以进行处理
    public function index()
    {
        $user = $this->request->input('user', 'Hyperf');
        $method = $this->request->getMethod();
        return $this->response->success([
            'user' => $user,
            'method' => $method,
            'version'=>'1.0.0',//1.0 版本 可以进行打标签在测试服务器进行打包运行
            'message' => 'Hello Hyperf. test2',
        ]);
    }
    //可以执行 callback
    // call_suer_func
    // retunr call
    //retun func ->fdunc-0>dunc

    public function index2()
    {
        //这里是 Controller
        // Service->rpcinterface
        // DTO
        // Service
        // Model
        // Value
        // Application

        $argsUserinfo = new ArgsGetUserinfo();
        $argsUserinfo->userId = $this->request->input("user_id",1);
        $userInfo = IndexLogic::getUserinfo($argsUserinfo);


        //因为只有面向对象 这样才可以 在我们 model value service
        //内部的属于
        //外部必须定义参数 返回类型 结构  app web api
        // model
        // cachemodel



        $url = $this->request->fullUrl();
        $user = $this->request->input("user","userinfo");
        $method = $this->request->getMethod();
        return $this->response->success([
            'user'=>$user,
            'info'=>$url,
            'version'=>'1.0.0',
            'timestamp'=>time(),
            'sign'=>md5(strval(time())).sha1(random_bytes(12)),
            'userEntry'=>$userInfo
        ]);
    }
}
