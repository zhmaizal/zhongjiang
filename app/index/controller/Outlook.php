<?php
namespace app\index\controller;
   use think\Controller;	
class Outlook  extends Controller
{
    public function Outlook()
    {
		$about = db('about')->select();
		$subnav= db('subnav')->select();
        $field=db('outlook')->select();
        $this->assign('field',$field);
		 return $this->fetch('',['about'=>$about,'subnav'=>$subnav,'field'=>$field]);
    }
}
