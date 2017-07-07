<?php
namespace app\index\controller;
   use think\Controller;	
class Introduction  extends Controller
{
    public function Introduction()
    {
		$about = db('about')->select();
		$subnav= db('subnav')->select();
        $field=db('introduction')->select();
        $this->assign('field',$field);
		 return $this->fetch('',['about'=>$about,'subnav'=>$subnav,'field'=>$field]);
    }
}
