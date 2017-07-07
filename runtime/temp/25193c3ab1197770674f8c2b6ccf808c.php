<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:64:"E:\wamp\www\zhongjiang\public/../app/index\view\login\login.html";i:1499049518;s:66:"E:\wamp\www\zhongjiang\public/../app/index\view\public\header.html";i:1498801911;s:66:"E:\wamp\www\zhongjiang\public/../app/index\view\public\footer.html";i:1498546458;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="author" content="$Id$" />
    <meta http-equiv="copyright" content="Copyright (C) 2013 * All rights reserved." />
    <meta http-equiv="keywords" content="关键字" />
    <meta http-equiv="description" content="描述" />
    <link type="text/css" href="__STATIC__/index/css/style.css" rel="stylesheet" rev="stylesheet" media="screen" />
    <title>首页</title>
</head>

<body>
<div class="centBox">
    <div class="top">
        <span>【<a href="<?php echo url('login/login'); ?>">登陆管理</a> 】 【<a href="#">申请入驻</a>】  【<a href="">前往采购</a>】  【<a href="">联系我们</a>】</span>
        您好！欢迎来到中江县名优产品展销平台!     您遇到任何疑问请致电：0838 -6668888
    </div>
    <div class="top2">
        <div class="top2R">
            <div class="soru">
                <input name="" type="text" class="soru_input" />
            </div>
            <input name="" type="submit" class="soru_banu" />
        </div>
        <div class="logo">
            <a href="#" class="logo_a">中江名优特产</a>
        </div>
    </div>
</div>

<div class="denlu">
    <div class="denlu_nei">
        <div class="denluL">
            <img src="__STATIC__/index/text/23.gif" class="pt145" />
        </div>
        <div class="denluR">
            <div class="den_bt">
                登录我们
            </div>
            <div class="den_kang">
                <form action="" method="post">
                <table width="100%" height="155" border="0" cellspacing="0" cellpadding="0">
                    <tr >
                        <td width="50" ><span class="den_span style="line-height:10px">用户名</span></td>
                        <td><input type="text" name="username" class="denl_input" value="邮箱/会员账号" /></td>
                    </tr>
                    <tr>
                        <td width="50"  ><span class="den_span">密&nbsp;&nbsp;&nbsp;&nbsp;码</span></td>
                        <td><input name="password" type="password" class="denl_input" />
                        </td>
                    </tr>
                    <tr>
                        <td><span class="den_span" style="height:50px;width:100px;">验证码</span></td>
                        <td><input name="code"   type="text" class="ssdenl_input" />
                        </td>
                        <td><span class="ssden_span"><img class="imgcc" src="<?php echo captcha_src(); ?>" onclick="this.src=src+'?'+Math.random()"alt="captcha"style="height:65px;width:125px;margin-top:-17px;margin-left:-9px;"/> </span>
                        </td>
                    </tr>
                </table>

            </div>
            <div class="deng_ann">
                <input name="" type="submit"  class="deng_a"/>
                <a href="#">忘记密码？</a>
            </div>
            <div class="zhece">
                <span class="zhece_spa">还不是义乌购用户？</span><a href="<?php echo url('cegister/cegister'); ?>">免费注册</a>            </div></div></form>
            <div class="zhano">
                <span class="l">其他用户登录：</span><a href="#"><img src="__STATIC__/index/images/qq.gif" /></a>            </div>
        </div>
    </div>
</div>


<div class="fooer">
    <div class="fooer_nei"
        <p><a href="#"><img src="__STATIC__/index/images/jg.gif" /></a></p>
    </div>
</div>
</body>
</html>