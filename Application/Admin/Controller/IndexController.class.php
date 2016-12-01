<?php
/**
 * Created by PhpStorm.
 * User: tao
 * Date: 2016/11/30
 * Time: 下午9:31
 */
namespace Admin\Controller;
use Think\Controller;

class IndexController extends Controller{
    public function index(){
        if(!session('adminId')){
            $this->display('login');
        }else{
            $this->error('非法操作，请先登录');
        }
    }

    /**
     * 管理员登录
     * 有两个入口，分别是超级管理员和部门管理员
     */
    public function login(){
        if(IS_AJAX){
            $adminName = I('post.adminName');
            $adminPassword =I('post.adminPassword');
            if($adminName&&$adminPassword){
                $map['adminName']=$adminName;
                $user = D('AdminInfo');
                //查询出的数据的字段都变成了小写，caution
                $adminInfo = $user->where($map)->find();
                if($adminInfo){
                    if($adminInfo['adminpassword'] == $adminPassword){
                        session('adminName',$adminName);
                        session('adminId',$adminInfo['adminid']);
                        if($adminInfo['roleid'] == 3){
                            //roleid=3代表超级管理员
                            $out['status'] = 3;
                        }else{
                            //roleid=2代表普通部门管理员
                            $out['status'] = 2;
                        }
                        $out['info'] = '登录成功';
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
        }
        $this->display();
    }

    /**
     * 管理员登出操作，清除session
     */
    public function logout(){
        session('adminName',null);
        session('adminId',null);
        $this->redirect('Index/login');
    }

}