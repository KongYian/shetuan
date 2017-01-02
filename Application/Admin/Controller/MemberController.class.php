<?php
/**
 * Created by PhpStorm.
 * User: tao
 * Date: 2016/12/1
 * Time: 上午10:24
 */

namespace Admin\Controller;
use Think\Controller;

class MemberController extends CommonController {
    public function departmember(){
        $departId = session('adminDepartId');
        $m = D('Userinfo');
        $res = $m->join("LEFT JOIN __USER_DEPART__ ON __USER_DEPART__.userId = __USERINFO__.userId")->field('st_user_depart.userId,userName,userGender,usertelphone')->where(['st_user_depart.departId'=>$departId])->select();
        $this->assign('res',$res);
        $this->display();
    }
}