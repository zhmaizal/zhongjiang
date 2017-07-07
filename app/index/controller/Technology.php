<?php
namespace app\index\controller;
   use think\Controller;	
class Technology  extends Controller
{
    public function Technology()
    {
		$about = db('about')->select();
		$subnav= db('subnav')->select();
        $field=db('technology')->select();
        $this->assign('field',$field);
		  return $this->fetch('',['about'=>$about,'subnav'=>$subnav,'field'=>$field]);
    }
}
