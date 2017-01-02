<?php
/**
 * Created by PhpStorm.
 * User: tao
 * Date: 2017/1/2
 * Time: 上午9:11
 * Description:
 */

namespace Admin\Controller;
use Think\Controller;


class AttendanceController extends Controller{
    /**
     * Description:显示社团所有的值班信息
     */
    public function departattendance(){
        $departid = session('adminDepartId');
        if($departid){
            $map = ['departId'=>$departid];
            $m = D('attendanceInfo');
            $res = $m->where($map)->select();
            $this->assign('res',$res);
            $this->display();
        }else{
            $this->error('登录超时，请重新登录','index/login',3);
        }
    }

    /**
     * Description:新建值班信息和值班信息的ajax提交的判断
     */
    public function newattendance(){
        if(IS_AJAX){
            $attendancepeople =  I('post.attendancepeople');
            $attendancetime =  I('post.attendancetime');
            $data = [
                'departId' => session('adminDepartId'),
                'attendancePeople' => $attendancepeople,
                'attendanceTime' => $attendancetime,
            ];
            $m = D('attendanceInfo');
            $res = $m->add($data);
            if ($res) {
                $out = [
                    'info' => '创建成功',
                ];
            } else {
                $out = [
                    'info' => '创建',
                ];
            }
            $this->ajaxReturn($out);
        }else{
            $this->display();
        }
    }

    /**
     * Description:值班信息的修改
     * @param int $id
     */
    public function attendancemodify($id = 0){
        if(IS_AJAX){
            $attendancepeople =  I('post.attendancepeople');
            $attendancetime =  I('post.attendancetime');
            $attendanceid =  I('post.attendanceid');
            $data = [
                'attendancePeople' => $attendancepeople,
                'attendanceTime' =>$attendancetime
            ];
            $map  = ['$attendanceId'=>$attendanceid];
            $m = D('attendanceInfo');
            $res = $m->where($map)->save($data);
            if ($res) {
                $out = [
                    'info' => '修改成功',
                    'status'=>1
                ];
            } else {
                $out = [
                    'info' => '修改成功',
                    'status'=>0
                ];
            }
            $this->ajaxReturn($out);
        }else{
            $m = D('attendanceInfo');
            $map = ['attendanceId'=>$id];
            $res = $m->where($map)->find();
            $this->assign('res',$res);
            $this->display();
        }
    }

    /**
     * Description:值班信息的删除
     */
    public function attendancedel(){
        if(Is_AJAX){
            $id = I('post.attendanceid');
            $map = ['attendanceId'=>$id];
            $m = D('attendanceInfo');
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
}