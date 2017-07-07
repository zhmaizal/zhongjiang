<?php
namespace app\index\validate;
use think\Validate;

class Consultation extends Validate
{
    protected $rule = [
        'content'=>'require',
        

    ];
    protected $message = [
       'content'=>'请输入内容',
        
    ];
}