<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {

    //展现网站（所有的消息展示）
    //用户注册
    //用户登录
    public function index(){

        $departobj = D('DepartInfo');
        $map['departStatus'] = 1;
        $res = $departobj->where($map)->select();
        $this->assign('res',$res);
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
                $data['userPassword'] = md5($userbaseinfo['userPassword']);
                $data['userEmail'] = $userbaseinfo['userEmail'];
                $data['userCreateTime'] = date("Y-m-d:H:i:s",time());
                $user = D('UserBaseinfo');
                $userid = $user->add($data);
                if($userid){
                    session('userName',$userbaseinfo['userName']);
                    session('userId',$userid);
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

    /**
     * 用户登录
     * 操作表:st_user_BaseInfo
     */
    public function login(){
        if(IS_AJAX){
            $userName = I('post.userName');
            $userPassword = md5(I('post.userPassword'));
            if($userName&&$userPassword){
                $map['userName']=$userName;
                $user = D('UserBaseinfo');
                //查询出的数据的字段都变成了小写，caution
                $userInfo = $user->where($map)->find();
                if($userInfo){
                    if($userInfo['userpassword'] == $userPassword){
                        session('userName',$userName);
                        session('userId',$userInfo['userid']);                    $out['info'] = '密码错误';
                        $out['info'] = '登录成功';
                        $out['status'] = 1;
                    }else{
                        $out['info'] = '密码错误，请重新登录';
                        $out['status'] = 0;
                    }
                }else{
                    $out['info'] = '账号不存在,请重新登录';
                    $out['status'] = 0;
                }
            }
            $this->ajaxReturn($out);
        }else{
            $this->display('login');
        }
    }

    /**
     * 用户登出、清除session
     */
    public function logout(){
        session('userName',null);
        session('userId',null);
        $this->redirect('Index/index');
    }

    /**
     * 修改密码
     */
    public function modifyPassword(){
        $this->error("敬请期待");
    }

}