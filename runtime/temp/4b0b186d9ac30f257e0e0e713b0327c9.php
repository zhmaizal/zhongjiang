<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:63:"E:\wamp\www\zhongjiang\public/../app/admin\view\index\pass.html";i:1499065434;}*/ ?>



<link rel="stylesheet" href="__STATIC__/admin/css/pintuer.css">
<link rel="stylesheet" href="__STATIC__/admin/css/admin.css">
<div class="page-container">
    <div class="panel admin-panel">
        <div class="panel-head"><strong><span class="icon-key"></span> 修改会员密码</strong></div>
        <div class="body-content">
            <form method="post" class="form-x" action="">
                <div class="form-group">
                    <div class="label">
                        <label>管理员帐号：</label>
                    </div>
                    <div class="field">
                        <label style="line-height:33px;">
                            <?php echo session('admin.admin_username'); ?>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        <label>原始密码：</label>
                    </div>
                    <div class="field">
                        <input type="" class="input w50" id="mpass" name="admin_password" size="50" placeholder="请输入密码"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        <label>新密码：</label>
                    </div>
                    <div class="field">
                        <input type="password" class="input w50" name="new_password" size="50" placeholder="请输入新密码" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        <label>确认新密码：</label>
                    </div>
                    <div class="field">
                        <input type="password" class="input w50" name="confirm_password" size="50" placeholder="请再次输入新密码"/>
                    </div>
                </div>

                <div class="form-group">
                    <div class="label">
                        <label></label>
                    </div>
                    <div class="field">
                        <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
