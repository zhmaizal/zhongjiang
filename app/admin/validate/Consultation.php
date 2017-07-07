<?php
namespace app\admin\validate;
use think\Validate;

class Consultation extends Validate
{
    protected $rule = [
        'title'=>'require',
		'conment'=>'require',
        

    ];
    protected $message = [
       'title'=>'请输入标题',
	   'conment'=>'请输入内容',
        
    ];
}