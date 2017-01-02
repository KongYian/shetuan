<?php
/**
 * Created by PhpStorm.
 * User: tao
 * Date: 2016/12/1
 * Time: 上午10:24
 */

namespace Admin\Controller;

class MemberController extends CommonController {
    public function departmember(){
        $departId = session('adminDepartId');
        $m = D('Userinfo');
        $res = $m->join("LEFT JOIN __USER_DEPART__ ON __USER_DEPART__.userId = __USERINFO__.userId")->field('st_user_depart.id,userName,usertelphone,st_user_depart.joinTime,uid')->where(['st_user_depart.departId'=>$departId])->select();
//        dump($res);exit;
        $this->assign('res',$res);
        $this->display();
    }

    /**
     * Description:会员的删除
     */
    public function memberdel(){
        if(Is_AJAX){
            $id = I('post.memberid');
            $map = ['id'=>$id];
            $m = D('UserDepart');
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

    public function memberdetails($uid = 0){
        $m = D('Userinfo');
        $map = ['uid'=>$uid];
        $res = $m->where($map)->find();
//        dump($res);exit;
        $this->assign('res',$res);
        $this->display();
    }
}