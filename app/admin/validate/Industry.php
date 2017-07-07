<?php
namespace app\admin\validate;
use think\Validate;

class Industry extends Validate
{
    protected $rule = [
        'title'=>'require',
		'conment'=>'require',
        

    ];
    protected $message = [
       'title'=>'请输入标题',
	   'conment'=>'请输入标题',
        
    ];
}