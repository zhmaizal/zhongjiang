<?php
namespace app\index\controller;
   use think\Controller;	
class Inrtoduce  extends Controller
{
    public function Inrtoduce()
    {
		$about = db('about')->select();
		$subnav= db('subnav')->select();
        $field=db('inrtoduce')->select();
        $this->assign('field',$field);
		return $this->fetch('',['about'=>$about,'subnav'=>$subnav,'field'=>$field]);
    }
}
