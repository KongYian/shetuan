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
            $this->display();
        }
    }

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
                        session('adminId',$adminInfo['adminid']);                    $out['info'] = '密码错误';
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
        }
        $this->error('非法操作');
    }

    public function logout(){
        session('adminName',null);
        session('adminId',null);
        $this->redirect('Index/index');
    }

}