<?php
namespace app\index\controller;
   use think\Controller;	
class Message  extends Controller
{
    protected $db;
    protected function _initialize(){
        parent::_initialize();
        $this->db =new \app\common\model\Message();
    }
    public function Message()
    {
		$about = db('about')->select();
		//$subnav= db('subnav')select();
        $field=db('message')->select();
        $this->assign('field',$field);
		 return $this->fetch('',['about'=>$about,'field'=>$field]);
    }

    public function message_add(){

        if(request()->isPost())
        {
            // halt($_POST);die;
            //if($res['vaid']){}



            $res= $this->db->add(input('post.'));
            if($res['vaid'])
            {
                $this->success($res['aa'],'message');exit;
            }else{
                $this->error($res['aa']);exit;
            }

        }
        return $this->fetch();
    }
}
