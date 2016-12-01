<?php
/**
 * Created by PhpStorm.
 * User: tao
 * Date: 2016/11/30
 * Time: 下午5:12
 */

namespace Home\Controller;
use Think\Controller;

class JoinapplyController extends CommonController{

    /**
     * 展示处理用户申请加入社团的表单
     * @param $departid
     * 涉及表：st_user_join_Apply
     */
    public function userjoinapply($departid){
        $userinfo = D('Userinfo');
        $map['userId'] = session('userId');
        $flag = $userinfo->where($map)->find();
        if(!$flag){
            $this->error('请先完善你的个人信息,再来申请');
        }else{
            //用来拿到社团的ID号码
            $did = $departid;
            $this->assign('departid',$did);
            $this->display();
        }
    }
    /**
     * 提交用户申请社团
     */
    public function applysubmit(){
        if(IS_AJAX){
                $applyinfo = I('post.');
                $data['userId'] = session('userId');
                $data['departId'] = $applyinfo['departId'];
                $data['applyReason'] = $applyinfo['applyReason'];
                $data['applyTime'] = $applyinfo['applyTime'];
                $applyobj = D('UserJoinApply');
                if($applyobj->add($data)){
                    $out['info'] = '申请成功，等待审核';
                }else{
                    $out['info'] = '提交失败，请重试';
                }
            $this->ajaxReturn($out);
        }else{
            $this->error('非法操作');
        }
    }


}