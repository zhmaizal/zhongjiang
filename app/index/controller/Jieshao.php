<?php
namespace app\index\controller;
   use think\Controller;	
class Jieshao  extends Controller
{
    public function Jieshao()
    {
		$about = db('about')->select();
		$subnav= db('subnav')->select();
        $field=db('become')->select();
        $this->assign('field',$field);
		 return $this->fetch('',['about'=>$about,'subnav'=>$subnav,'field'=>$field]);
    }
}
