<?php
/**
 * Created by PhpStorm.
 * User: tao
 * Date: 2016/11/30
 * Time: 下午5:12
 */

namespace Home\Controller;
use Think\Controller;

class DepartapplyController extends CommonController{
    public function departapply(){
        $this->display();
    }

    /**
     * 验证社团申请的信息
     * 数据表:st_depart_apply
     */
    public function departapplycheck(){
        if(IS_AJAX){
            $departInfo = I('post.');
            $data['userId'] = session('userId');
            $data['departApplyName'] = $departInfo['departApplyName'];
            $data['departApplyIntroduction'] = $departInfo['departApplyIntroduction'];
            $data['departApplyReason'] = $departInfo['departApplyReason'];
            $data['departApplyTime'] = date('Y-m-d H:i:s',$departInfo['departApplyTime']);
            $data['departApplyStatus'] = 0;
            $applyobj = D('DepartApply');
            if($applyobj->add($data)){
                $out['info'] = '申请成功，等待审核';
            }else{
                $out['info'] = '申请失败，请重试';
            }
            $this->ajaxReturn($out,'JSON');
        }else{
            return true;
        }
    }
}