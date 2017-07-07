<?php
namespace app\admin\validate;
use think\Validate;

class Tianjia extends Validate
{
    protected $rule = [
        'title'=>'require',
        

    ];
    protected $message = [
       'title'=>'请输入标题',
        
    ];
}