<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:74:"E:\wamp\www\zhongjiang\public/../app/index\view\technology\technology.html";i:1499136618;s:57:"E:\wamp\www\zhongjiang\public/../app/index\view\base.html";i:1499134147;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
        <span>【<a href="<?php echo url('login/login'); ?>">登陆管理</a> 】 【<a href="#">申请入驻</a>】  【<a href="<?php echo url('index/index/index'); ?>">前往采购</a>】  【<a href="<?php echo url('index/Message/Message'); ?>">联系我们</a>】</span>
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
<div class="nav">
        <div class="nav_nei">
            <div class="natebia_ji"></div>
            <div class="natebia"><a href="#" class="natebia_a">特别推荐</a></div>
            <div class="navR">
                <ul>
                    <?php if(is_array($about) || $about instanceof \think\Collection || $about instanceof \think\Paginator): if( count($about)==0 ) : echo "" ;else: foreach($about as $key=>$vo): ?>
                    <li><a href="<?php echo url($vo['url'],['id'=>$vo['id']]); ?>" <?php if(input('param.id')==$vo['id']): ?>class="xuanz"<?php endif; ?>><?php echo $vo['name']; ?></a></li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>
    </div>

<div class="centBox">
	<div class="neiye clearfix">
    	<div class="neiyeL">
        	<div class="banL noel">
       	 		 <div class="lanmu">
				 <ul>
       		  <?php if(is_array($subnav) || $subnav instanceof \think\Collection || $subnav instanceof \think\Paginator): if( count($subnav)==0 ) : echo "" ;else: foreach($subnav as $key=>$vo): ?>
                    <li><a href="<?php echo url($vo['url'],['id'=>$vo['id']]); ?>" <?php if(input('param.id')==$vo['id']): ?>class="xuanz"<?php endif; ?>><?php echo $vo['name']; ?></a></li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
          		</div>
      		</div>
            <div class="dianhua">
            	<div class="dianhua_top">联系电话</div>
                <div class="dianhua_text">
               	  联  系  人：陈波 （总裁） <br />
                	电       话 ：86 0838 7102727<br />
                	移动电话 ：	138-8180-1576<br />
                	传       真 ：86 0838 7102771<br />
               	地       址 ：	中国 四川 德阳市四川省德阳市中江县双龙镇                </div>
            </div>
        </div>
        <div class="neiyeR">
        	<div class="neiBT">
            	<span class="mianT_span">技术支持 | TECHNOLOGY</span>
            </div>
            <?php if(is_array($field) || $field instanceof \think\Collection || $field instanceof \think\Paginator): if( count($field)==0 ) : echo "" ;else: foreach($field as $key=>$vo): ?>
            <div class="feedbck">
                    <p><?php echo $vo['title']; ?></p>
            	<div class="newsxx">
                    <p><?php echo $vo['content']; ?></p>
              </div>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
      <div class="feiye">
                    	<ul>
                        	<li><input type="submit" value="确定" class="feiye_ban" />
                            <li>到第<input name="" type="text" class="feiye_ingp" />页</li>
                            <li><a href="#">下一页</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#" class="xuanz">1</a></li>
                        	<li><a href="#" class="feiye_hs">上一页</a></li>
                            </li>
                        </ul>
                    </div>
            </div>
        </div>
    </div> 
</div>


    <div class="fooer">
    <div class="fooer_nei">
      服务中心  |  联系我们  |  平台介绍  |  网站地图  |  邮件反馈  |  友情链接<br />
    <p><a href="#"><img src="__STATIC__/index/images/jg.gif" /></a></p>   
    </div>
</div>
</body>
</html>