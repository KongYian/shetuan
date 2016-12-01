<?php
/**
 * Created by PhpStorm.
 * User: tao
 * Date: 2016/12/1
 * Time: 下午5:03
 */

namespace Home\Controller;
use Think\Controller;

class UserinfoController extends CommonController{
    public function myinfo(){
        //如果用户信息不存在的话，就新增
        //如果用户信息存在的话，就更新信息
        if(IS_AJAX){
            $userinfoobj = D('Userinfo');
            $applyinfo = I('post.');
            $data['userId'] = session('userId');
            $data['userGender'] = $applyinfo['userGender'];
            $data['userAge'] = $applyinfo['userAge'];
            $data['userTelphone'] = $applyinfo['userTelphone'];
            $data['userQq'] = $applyinfo['userQq'];
            $data['modifyTime'] = $applyinfo['modifyTime'];
            $map['userId'] = $data['userId'];
            $flag= $userinfoobj->where($map)->find();
            $userobj = D('UserBaseinfo');
            $baseinfo = $userobj->where($map)->find();
            $data['userName'] = $baseinfo['username'];
            $data['userPassword'] = $baseinfo['userpassword'];
            $data['userEmail'] = $baseinfo['useremail'];
            $data['userName'] = $baseinfo['username'];
            if(!$flag){
                if($userinfoobj->add($data)){
                    $out['info'] = '提交成功';
                    $out['status'] = 1;
                }else{
                    $out['info'] = '提交失败，请重试';
                    $out['status'] = 0;
                }
            }else{
                if($userinfoobj->where($map)->save($data)){
                    $out['info'] = '更新信息成功';
                    $out['status'] = 1;
                }else{
                    $out['info'] = '提交失败，请重试';
                    $out['status'] = 0;
                }
            }
            $this->ajaxReturn($out);
        }else{
            $this->display();
        }
    }
}