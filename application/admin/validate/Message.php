<?php

namespace app\admin\validate;

use think\Validate;

class Message extends Validate
{
    /**
     * 验证规则
     */
    protected $rule = [
        'name'=>'require|max:25',
        'email'=>'require|email',
        'phone'=>'require|min:11',
        '__token__'=>'require|token'
    ];

    protected $message = [
        'name.requier'=>'姓名不能为空',
        'phone.require'=>'手机号不能为空',
        'email.requier'=>'邮箱不能为空',
        'email.email'=>'输入的邮箱格式不正确'
    ];
    
}
