<?php
/**
 * Created by PhpStorm.
 * User: tao
 * Date: 2016/11/30
 * Time: 下午9:31
 */
namespace Admin\Controller;
use Think\Controller;

class MessageController extends Controller{
    //社团消息管理

    /**
     * Description:用于展示所有的某个社团的所有消息
     */
    public function departmessage(){
        $departid = session('adminDepartId');
        if($departid){
            $map = ['departId'=>$departid];
            $m = D('messageInfo');
            $res = $m->where($map)->select();
            $this->assign('res',$res);
            $this->display();
        }else{
            $this->error('登录超时，请重新登录','index/login',3);
        }
    }

    /**
     * Description:创建新的消息
     */
    public function newmessage(){
        $this->display();
    }

    /**
     * Description:新消息提交时候的验证
     */
    public function checkmessage(){
        if(IS_AJAX){
            $messagetitle =  I('post.messagetitle');
            $messageContent =  I('post.messagecontent');
            $messageTime =  date('Y-m-d H:i:s');
            $data = [
                'departId' => session('adminDepartId'),
                'messageTitle' => $messagetitle,
                'messageTime' => $messageTime,
                'messageContent' =>$messageContent
            ];
            $m = D('messageInfo');
            $res = $m->add($data);
            if ($res) {
                $out = [
                    'info' => '创建成功',
                ];
            } else {
                $out = [
                    'info' => '创建成功',
                ];
            }
            $this->ajaxReturn($out);
        }else{
            $this->error('非法操作');
        }
    }

    /**
     * Description:修改消息
     * @param int $id
     */
    public function messagemodify($id=0){
        if(IS_AJAX){
            $messageid =  I('post.messageid');
            $messagetitle =  I('post.messagetitle');
            $messageContent =  I('post.messagecontent');
            $messageTime =  date('Y-m-d H:i:s');
            $data = [
                'messageTitle' => $messagetitle,
                'messageTime' => $messageTime,
                'messageContent' =>$messageContent
            ];
            $map  = ['messageId'=>$messageid];
            $m = D('messageInfo');
            $res = $m->where($map)->save($data);
            if ($res) {
                $out = [
                    'info' => '修改成功',
                    'status'=>1
                ];
            } else {
                $out = [
                    'info' => '修改成功',
                    'status'=>0
                ];
            }
            $this->ajaxReturn($out);
        }else{
            $m = D('messageInfo');
            $map = ['messageId'=>$id];
            $res = $m->where($map)->find();
            $this->assign('res',$res);
            $this->display();
        }
    }

    /**
     * Description:删除消息
     */
    public function messagedel(){
        if(Is_AJAX){
            $id = I('post.messageid');
            $map = ['messageId'=>$id];
            $m = D('messageInfo');
            $res = $m->where($map)->delete();
            if($res){
                $out = [
                    'status'=>1,
                    'info'=>'删除成功'
                ];
            }else{
                $out = [
                    'status'=>0,
                    'info'=>'删除失败'
                ];
            }
            $this->ajaxReturn($out);
        }
    }
}