<?php
namespace app\index\controller;
   use think\Controller;	
class Base  extends Controller
{
    public function Base()
    {
		$about = db('about')->select();
		$subnav= db('subnav')->select();
        $field=db('base')->select();
        $this->assign('field',$field);
	return $this->fetch('',['about'=>$about,'subnav'=>$subnav,'field'=>$field]);
    }
}
