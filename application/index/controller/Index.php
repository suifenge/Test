<?php
namespace app\index\controller;

use GatewayWorker\Lib\Gateway;
use think\Exception;
use think\View;

class Index
{

    public function index()
    {
        $view = new View();
        return $view->fetch('index',[],['__PUBLIC__'=>SITE_URL.'/public/static/index/js']);
    }

    public function test() {
        return '{"msg":"ok", "clientId":"'.$_POST['clientId'].'"}';
    }
}
