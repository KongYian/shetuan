<?php
/**
 * Created by PhpStorm.
 * User: tao
 * Date: 2016/12/1
 * Time: 上午10:24
 */

namespace Admin\Controller;
use Think\Controller;

class DepartadminController extends CommonController {
    public function index(){
        $this->display();
    }

    public function subactivityapply(){
        if(IS_AJAX){
            $data['activityApplyName'] = I('post.activityApplyName');
            $data['activityTime'] = I('post.activityTime');
            $data['activityApplyAddr'] = I('post.activityApplyAddr');
            $data['activityApplyContent'] = I('post.activityApplyContent');
            $data['activityApplyTime'] = I('post.activityApplyTime');
            $admininfoobj = D('AdminInfo');
            $map['adminId'] = session('adminId');
            $admininfo = $admininfoobj->where($map)->find();
            $data['departId'] = $admininfo['departid'];
            $data['departId'] = $admininfo['departid'];
            $activityobj = D('ActivityApply');
            if($activityobj->add($data)){
                $out['info'] = '申请成功，等待审核';
            }else{
                $out['info'] = '申请失败，请重试';
            }
            echo json_encode($out);
        }else{
            $this->display();
        }
    }


}