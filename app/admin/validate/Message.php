<?php
namespace app\admin\validate;
use think\Validate;

class Message extends Validate
{
    protected $rule = [
        'contacts'=>'require',
		'number'=>'require',
		'content'=>'require',
        

    ];
    protected $message = [
       'contacts'=>'请输入联系人',
	    'number'=>'请输入联系电话',
	   'content'=>'请输入标题',
        
    ];
}