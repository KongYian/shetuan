<?php
/**
 * Created by PhpStorm.
 * User: tao
 * Date: 2016/12/1
 * Time: 上午10:24
 */

namespace Admin\Controller;
use Think\Controller;

class SuperadminController extends CommonController {
    /**
     * 超级管理员的管理界面
     */
    public function index(){
        $this->display();
    }

    /**
     * 展示新社团的申请
     * st_depart_apply、st_depart_info
     */
    public function showdepartapply(){
        $m = D('DepartApply');
        $map = array('departApplyStatus'=>0);
        $res = $m->where($map)->select();
        $this->assign('res',$res);
        $this->display();
    }

    /**
     * 同意新社团申请，
     */
    public function agreeapply(){
        if(IS_AJAX){
            $departApplyId = I('post.departApplyId');
            $m = D('DepartApply');
            $map['departApplyId'] = $departApplyId;
            //1为同意社团成立
            $data['departApplyStatus'] = 1;
            if($m->where($map)->save($data)){
                //将社团数据保存社团信息表中
                //读取这条申请信息
                $info = $m->where($map)->find();
                $departinfo['departName'] = $info['departapplyname'];
                $departinfo['departIntroduction'] = $info['departapplyintroduction'];
                $departinfo['dapartCreateTime'] = date('Y-m-d H:i:s',time());
                $departinfo['departStatus'] = 1;//同意申请的时候，默认激活这个社团
                $departobj = D('DepartInfo');
                if($departobj->add($departinfo)){
                    $out['info'] = '处理成功，已经同意申请';
                    $out['status'] = 1;
                }else{
                    $out['info'] = '处理失败';
                    $out['status'] = 0;
                }
            }else{
                $out['info'] = '处理失败';
                $out['status'] = 0;
            }
            $this->ajaxReturn($out);
        }else{
            $this->error('非法操作');
        }
    }

    /**
     * 不同意新社团申请，status改为2
     */
    public function disagreeapply(){
        if(IS_AJAX){
            $departApplyId = I('post.departApplyId');
            $m = D('DepartApply');
            $map['departApplyId'] = $departApplyId;
            //2为软删除
            $data['departApplyStatus'] = 2;
            if($m->where($map)->save($data)){
                $out['info'] = '处理成功，已删除';
                $out['status'] = 1;
            }else{
                $out['info'] = '处理失败';
                $out['status'] = 0;
            }
            $this->ajaxReturn($out);
        }else{
            $this->error('非法操作');
        }
    }

    /**
     * 展示用户的所有申请
     * st_user_join_Apply、st_depart_Info、st_userinfo
     */
    public function showuserapply(){
        $applyobj = D('UserJoinApply');
        $res = $applyobj->where('applyStatus=0')->order('joinId desc')->select();
        $this->assign('res',$res);
        $this->display();
    }

    /**
     * 同意用户的入团申请
     * 表:st_user_join_apply、st_user_depart
     */
    public function agreeuserapply(){
        if(IS_AJAX){
            $joinId = I('post.joinId');
            $departid = I('post.departid');
            $m = D('UserJoinApply');
            $map['joinId'] = $joinId;
            //1为同意社团成立
            $data['applyStatus'] = 1;
            if($m->where($map)->save($data)){
                //更新申请信息成功的话，
                //读取这条申请信息

                $userdepartobj = D('UserDepart');
                $info['userId']= session('userId');
                $info['departId']=$departid;
                $info['joinTime']= date('Y-m-d H:i:s',time());
                if($userdepartobj->add($info)){
                    $out['info'] = '处理成功，已经同意申请';
                    $out['status'] = 1;
                }else{
                    $out['info'] = '处理失败';
                    $out['status'] = 0;
                }
            }else{
                $out['info'] = '处理失败';
                $out['status'] = 0;
            }
            $this->ajaxReturn($out);
        }else{
            $this->error('非法操作');
        }
    }


    /**
     * 拒绝用户的入团申请
     */
    public function disagreeuserapply(){
        if(IS_AJAX){
            $joinId = I('post.joinId');
            $m = D('UserJoinApply');
            $map['joinId'] = $joinId;
            //2为软删除
            $data['applyStatus'] = 2;
            if($m->where($map)->save($data)){
                $out['info'] = '处理成功，已删除';
                $out['status'] = 1;
            }else{
                $out['info'] = '处理失败';
                $out['status'] = 0;
            }
            $this->ajaxReturn($out);
        }else{
            $this->error('非法操作');
        }
    }

    /**
     * 展示所有活动申请
     */
    public function showactivity(){
        $this->display();
    }

    public function showinstitution(){
        $this->display();
    }

    public function showattendace(){
        $this->display();
    }

    public function showmessage(){
        $this->display();
    }

    public function showuser(){
        $this->display();
    }

}