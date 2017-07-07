<?php
namespace app\admin\validate;
use think\Validate;

class Classification extends Validate
{
    protected $rule = [
        'conment'=>'require',
		'time'=>'require',
        

    ];
    protected $message = [
       'title'=>'请输入内容',
	   'content'=>'请输入时间',
        
    ];
}