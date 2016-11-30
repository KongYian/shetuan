<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;

class IndexController extends Controller {

    //展现网站（所有的消息展示）
    //用户注册
    //管理员登录
    public function index(){
        $this->display();
    }

    /**
     * 用户注册（只含有基础信息）
     * 缺少完善的表单验证机制
     * 操作表:st_user_BaseInfo
     */
    public function register(){
        if(IS_AJAX){
            $userbaseinfo = I('post.');
            if($userbaseinfo){
                $data['userName'] = $userbaseinfo['userName'];
                $data['userPassword'] = $userbaseinfo['userPassword'];
                $data['userEmail'] = $userbaseinfo['userEmail'];
                $data['userCreateTime'] = date("Y-m-d:H:i:s",time());
                $user = D('UserBaseinfo');
                if($user->add($data)){
                    $out = array('info'=>'注册成功');
                }else{
                    $out = array('info'=>'注册失败');
                }
            }
            $this->ajaxReturn($out,'JSON');
        }else{
            $this->display();
        }

    }

}