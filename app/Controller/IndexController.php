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
    public function index2()
    {
        $url = $this->request->fullUrl();
        $user = $this->request->input("user","userinfo");
        $method = $this->request->getMethod();
        return $this->response->success([
            'user'=>$user,
            'info'=>$url,
            'version'=>'1.0.0',
            'timestamp'=>time(),
            'sign'=>md5(strval(time())).sha1(random_bytes(12))
        ]);

    }
}
