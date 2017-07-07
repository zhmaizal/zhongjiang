<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/14
 * Time: 12:00
 */
namespace app\admin\validate;

use think\Validate;

class Admin extends Validate{

    protected  $rule=[
        'username'=>'require',
        'password'=>'require',
        'code'=>'require|captcha'
    ];
    protected  $message=[
        'username.require'=>'�������û���',
        'password.require'=>'����������',
        'code.require'=>'��������֤��',
        'code.captcha'=>'��֤�벻��ȷ'
    ];


}