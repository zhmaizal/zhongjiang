<?php
namespace app\index\controller;
   use think\Controller;	
class Industry extends Controller
{
    public function Industry()
    {
		$about = db('about')->select();
		//$subnav= db('subnav')select();
		$field=db('industry')->select();
        $this->assign('field',$field);
		return $this->fetch('',['about'=>$about,'field'=>$field]);
    }
}
