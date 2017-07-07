<?php
namespace app\index\validate;
use think\Validate;

class Message extends Validate
{
    protected $rule = [
        'content'=>'require',
        

    ];
    protected $message = [
       'content'=>'请输入内容',
        
    ];
}