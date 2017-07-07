<?php
namespace app\index\controller;
   use think\Controller;	
class Trading  extends Controller
{
    public function Trading()
    {
		$about = db('about')->select();
		//$subnav= db('subnav')select();
		 $field=db('trading')->select();
        $this->assign('field',$field);
		  return $this->fetch('',['about'=>$about,'field'=>$field]);
    }
}
