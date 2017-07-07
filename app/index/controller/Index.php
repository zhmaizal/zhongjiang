<?php
namespace app\index\controller;
   use think\Controller;	
class Index  extends Controller
{
    public function index()
    {
		$about = db('about')->select();
		//$subnav= db('subnav')->select();
        $field=db('article')->select();
        $this->assign('field',$field);
		 return $this->fetch('',['about'=>$about,'field'=>$field]);
    }
}
